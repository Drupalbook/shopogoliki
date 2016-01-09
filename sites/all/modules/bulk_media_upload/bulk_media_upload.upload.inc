<?php
/**
 * @file
 * Upload form and node generation functions
 *
 */

/**
 * Form for bulk media upload
 */
function bulk_media_upload_upload_form($form, &$form_state) {
  global $language;

  $nodetype = variable_get('bulk_media_upload_nodetype');
  $mediafield = variable_get('bulk_media_upload_mediafield');

  if (empty($nodetype) || empty($mediafield)) {
    drupal_set_message(t('You have not configured the Bulk Media Upload module. Go to the ' . l(t('configuration page'), 'admin/config/media/bulk_media_upload') . ' and fix this!'), 'error');
    return $form;
  }

  $nodetype_info = node_type_load($nodetype);
  $mediafield_info = field_info_instance('node', $mediafield, $nodetype);

  $form['import_information'] = array(
    '#markup' => '<p>' . t('Nodetype used for generating the nodes:') . ' <strong>' . $nodetype_info->name . ' (' . $nodetype_info->type . ')</strong></p>'
    . '<p>' . t('Mediafield used for uploading your media:') . ' <strong>' . $mediafield_info['label'] . ' (' . $mediafield_info['field_name'] . ')</strong></p>',
  );

  $form['title'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#default_value' => '[file:name]',
    '#size' => 60,
    '#maxlength' => 255,
    '#required' => TRUE,
  );

  $form['token_help'] = array(
    '#title' => t('Replacement patterns'),
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['token_help']['help'] = array(
    '#theme' => 'token_tree',
    '#token_types' => array('node', 'file'),
    '#global_types' => TRUE,
    '#click_insert' => TRUE,
  );

  $form['upload'] = array(
    '#type' => 'plupload',
    '#title' => t('Bulk Media Upload'),
    '#description' => t(''),
    '#required' => TRUE,
  );

  if (isset($mediafield_info['settings']['file_extensions'])) {
    $form['upload']['#upload_validators']['file_validate_extensions'][] = $mediafield_info['settings']['file_extensions'];
  }

  $form['default_values'] = array(
    '#type' => 'fieldset',
    '#title' => t('Default Values'),
    '#tree' => TRUE,
  );

  // Use the node creation form to extract all assigned fields.
  $allowed_fields = array_diff_key(field_info_instances('node', $nodetype), array($mediafield => NULL));

  $node = (object) array(
    'uid' => 1,
    'name' => '',
    'type' => $nodetype,
    'language' => LANGUAGE_NONE,
  );
  $nodeform = array();

  // And add these fields to the default value fieldset without the media field.
  field_attach_form('node', $node, $nodeform, $form_state);
  $form['default_values'] = array_merge($form['default_values'], array_intersect_key($nodeform, $allowed_fields));

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Generate Nodes'),
  );

  return $form;
}

/**
 * Implements hook_validate().
 */
function bulk_media_upload_upload_form_validate($form, &$form_state) {
}

/**
 * Implements hook_submit().
 */
function bulk_media_upload_upload_form_submit($form, &$form_state) {
  
  // Create new taxonomy terms
  $fields = field_info_instances('node', variable_get('bulk_media_upload_nodetype'));
  foreach ($fields as $field) {
    $fieldinfo = field_info_field($field['field_name']);
    if($fieldinfo['module'] == 'taxonomy'){
      foreach ($form_state['values']['default_values'][$field['field_name']][LANGUAGE_NONE] as $key => $term) {
        if($term['tid'] == 'autocreate'){
          // Create term.
          $term = (object) $term;
          unset($term->tid);
          taxonomy_term_save($term);
          $form_state['values']['default_values'][$field['field_name']][LANGUAGE_NONE][$key] = (array) $term;
        }
      }
      
    }
  }

  // Prepare the batch process.
  $batch = array(
    'title' => t('Generating Nodes'),
    'error_message' => t('Node generation has encountered an error.'),
    'finished' => '_bulk_media_upload_batch_finished',
    'file' => drupal_get_path('module', 'bulk_media_upload') . '/bulk_media_upload.upload.inc',
  );

  foreach ($form_state['values']['upload'] as $tmpfile) {
    $batch['operations'][] = array('_bulk_media_upload_generate_node', array($tmpfile, $form, $form_state));
  }

  batch_set($batch);
}

/**
 * Internal function for node generation.
 */
function _bulk_media_upload_generate_node($tmpfile, $form, $form_state, &$context) {
  global $user;

  $mediafield_name = variable_get('bulk_media_upload_mediafield');
  $nodetype = variable_get('bulk_media_upload_nodetype');
  $mediafield_info = field_info_instance('node', $mediafield_name, $nodetype);

  // Save media file.
  $scheme = variable_get('file_default_scheme', 'public') . '://';
  $source = $tmpfile['tmppath'];

  $directory = '';
  if(isset($mediafield_info['settings']['file_directory'])){
    $directory .= token_replace($mediafield_info['settings']['file_directory']) . '/';

    // If the directory isn't writable, or doesn't exist and can't be created,
    // the upload will fail.
    $prepare_directory = file_stream_wrapper_uri_normalize($scheme . $directory);
    if (!file_prepare_directory($prepare_directory, FILE_CREATE_DIRECTORY)) {
      drupal_set_message(t('The file directory @dir does not exist or is not writable. Please contact an administrator.', array('@dir' => $prepare_directory)), 'error');
      return;
    }
  }

  $destination = file_stream_wrapper_uri_normalize($scheme . $directory . $tmpfile['name']);
  $destination = file_unmanaged_move($source, $destination, FILE_EXISTS_RENAME);

  // Create the file object.
  $uri = file_stream_wrapper_uri_normalize($destination);
  $wrapper = file_stream_wrapper_get_instance_by_uri($uri);
  $file = new StdClass;
  $file->uid = $user->uid;
  $file->filename = basename($uri);
  $file->uri = $uri;
  $file->filemime = file_get_mimetype($uri);
  $file->filesize = @filesize($uri);
  $file->timestamp = REQUEST_TIME;
  $file->status = FILE_STATUS_PERMANENT;
  $file->is_new = TRUE;
  $file->status = FILE_STATUS_PERMANENT;
  file_save($file);

  // Save the node.
  $node = new stdClass();
  $node->type = variable_get('bulk_media_upload_nodetype');
  node_object_prepare($node);

  $node->title    = $file->filename;
  $node->language = LANGUAGE_NONE;

  node_save($node);

  // Create the media field.
  $fieldinfo = field_info_field($mediafield_name);
  $filefields = array('image', 'file');

  $settings = array();
  $settings['fid'] = $file->fid;

  // Additional values for filefield (and imagefield).
  if(in_array($fieldinfo['module'], $filefields)){
    $settings['display'] = 1;
    $settings['description'] = '';
  };

  $node->$mediafield_name = array(LANGUAGE_NONE => array(0 => $settings));

  // Default values.
  field_attach_submit('node', $node, $form['default_values'], $form_state);

  node_save($node);

  // Replace tokens in title - this have to be done after node_save.
  $node->title = token_replace($form_state['values']['title'], array('node' => $node, 'file' => $file));

  node_save($node);

  $context['message'] = t('Importing: @filename', array('@filename' => $file->filename));
  $context['results']['nids'][] = $node->nid;
}

/**
 * Finished function for batch
 */
function _bulk_media_upload_batch_finished($success, $results, $operations) {
  drupal_set_message(t('Node generation completed'));
  $_SESSION['bulk_media_upload_batch_result'] = $results;
  drupal_goto('admin/content/media/bulk_upload/summary');
}
