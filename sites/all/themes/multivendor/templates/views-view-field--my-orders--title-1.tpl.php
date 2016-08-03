<?php
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<?php 


  $album = db_select('field_data_field_reftovar', 'f');
  $album ->join('node', 'n', 'n.nid = f.field_reftovar_nid');
  $album 
    ->fields('n', array('title', 'nid'))
    ->condition('f.entity_id', $row->node_nid);
  $result = $album ->execute() ->fetchAll();
    
    
    
  foreach($result as $node){
    print l($node->title, 'node/'.$node->nid);
  }  
  
?>