<?php
$facebook_url = get_option('facebook_url') ? get_option('facebook_url') : '#';
$twitter_url = get_option('twitter_url') ? get_option('twitter_url') : '#';
$linkedin_url = get_option('linkedin_url') ?  get_option('linkedin_url') : '#';

?>

<nav class="nav justify-content-end">
   <li class="nav-item">
      <a class="nav-link" href="<?php echo $facebook_url ?>" target="_blank">
         <?php echo __('Facebook', 'hellopx'); ?>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?php echo $twitter_url ?>" target="_blank">
         <?php echo __('Twitter', 'hellopx'); ?>
      </a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="<?php echo $linkedin_url ?>" target="_blank">
         <?php echo __('Linkedin', 'hellopx'); ?>
      </a>
   </li>
</nav>