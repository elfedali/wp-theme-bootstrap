<?php

/**
 * Site hero
 * @package hellopx
 */
$container_html_class = get_theme_mod('hellopx_container_type');
?>

<?php if (is_active_sidebar('statichero')) : ?>
   <div class="statichero-area jumbotron" >
      <div class="<?php echo esc_attr($container_html_class); ?>">
         <div class="row">
            <div class="col-12">
              <?php dynamic_sidebar('statichero'); ?>
            </div>
         </div>
      </div><!--/container-->
   </div>
   
<?php endif; ?>