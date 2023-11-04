<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yucari
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <?php wp_body_open(); ?>

   <header class="header">
      <div class="container">
         <div class="flex gap-10 lg:gap-[4.75rem] 3xl:gap-[9.375rem] justify-center items-center">
            <div class="w-[10rem]">
               <?php the_custom_logo() ?>
            </div>
            <div class="flex-1">
               <?php
               wp_nav_menu([
                  'theme_location'  => 'menu-1',
                  'container_class' => '',
                  'container'       => 'nav',
                  'menu_class'      => 'menu-primary'
               ]);
               ?>
            </div>
            <div class="w-[10rem]">
               <ul class="flex gap-4">
                  <li>
                     <a href="">
                        <?php render_svg('search'); ?>
                     </a>
                  </li>
                  <li>
                     <?php $my_account_url = get_permalink(get_option('woocommerce_myaccount_page_id')); ?>
                     <a href="<?= $my_account_url ?>">
                        <?php render_svg('user'); ?>
                     </a>
                  </li>
                  <li>
                     <a href="<?= wc_get_cart_url() ?>">
                        <?php render_svg('shopping-cart'); ?>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </header>
