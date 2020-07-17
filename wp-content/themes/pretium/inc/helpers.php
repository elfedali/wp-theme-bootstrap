<?php

/**
 * Helper function
 * @package pretium
 *
 */

/* 	Get theme option function */
if (!function_exists('pretium_get_option')) :
   function pretium_get_option($option)
   {
      return Kirki::get_option('pretium_settings', $option);
   }
endif;

//
if (!function_exists('pretium_get_meta_data')) :
   function pretium_get_meta_data($force_meta = false)
   {
      $output = '';
      $output .= '<div class="meta-item"><i class="fas fa-calendar-alt"></i><span class="-updated">' . get_the_date() . '</span></div>';


      $author_id = get_post_field('post_author', get_the_ID());
      $output .= '<div class="meta-item"><i class="fas fa-user"></i><span class="vcard author"><span class="fn">' . __('by', 'pretium') . ' <a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID', $author_id))) . '">' . get_the_author_meta('display_name', $author_id) . '</a></span></span></div>';

      $meta = pretium_read_time(get_post_field('post_content', get_the_ID()));
      if (!empty($meta)) :
         $meta = '<div class="meta-item"><i class="fas fa-clock"></i>' . $meta . ' ' . __('min read', 'pretium').'</div>';
      endif;
      $output.= $meta;


      if ( comments_open() || get_comments_number() ) :
         ob_start();
         comments_popup_link( __('Add Comment', 'pretium'), __('1 Comment', 'pretium'), __('% Comments', 'pretium') );
         $meta = '<div class="meta-item"><i class="fas fa-comment-dots"></i>'.ob_get_contents().'</div>';
         ob_end_clean();
       else :
         $meta = '';
       endif;
       $output.= $meta;

      return $output;
   }
endif;

/* 	Calculate reading time by content length */
if (!function_exists('pretium_read_time')) :
   function pretium_read_time($text)
   {
      $words = str_word_count(strip_tags($text));
      if (!empty($words)) :
         $time_in_minutes = ceil($words / 200);
         return $time_in_minutes;
      endif;
      return false;
   }
endif;
