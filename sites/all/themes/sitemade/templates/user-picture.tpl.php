<?php

/**
 * @file
 * Default theme implementation to present a picture configured for the
 * user's account.
 *
 * Available variables:
 * - $user_picture: Image set by the user or the site's default. Will be linked
 *   depending on the viewer's permission to view the user's profile page.
 * - $account: Array of account information. Potentially unsafe. Be sure to
 *   check_plain() before use.
 *
 * @see template_preprocess_user_picture()
 */
?>
<?php if ($user_picture): ?>

  

  <div class="user-picture">
    <?php print $user_picture; ?>
	
<?php
    // @todo Check user picture exists. Add link to add user avatar.
if ($account->uid != 0){

  $user2 = user_load($account->uid); 
   // Online status .
   $lastactive = ($user2->access) ? format_interval(time() - $user2->access) : t("Never");
   if ((REQUEST_TIME - $user2->access) < variable_get('user_block_seconds_online', 1200)){
	 $onlineimage =  '<div class="user-online"><img src="' . base_path(). path_to_theme() . '/images/online.png" /></div>';
	 print $onlineimage ;
   }
   
}


?>
   
  </div>
<?php endif; ?>
