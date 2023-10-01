<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yucari
 */
?>
<footer class="footer">
   <div class="container">
      <div class="flex gap-[9.375rem] justify-center items-center">
         <div class="w-[10rem]">
            <?php the_custom_logo() ?>
         </div>
         <div class="flex-1">
            <?php
            wp_nav_menu([
               'theme_location'  => 'institutional',
               'container_class' => '',
               'container'       => 'nav',
               'menu_class'      => 'menu-primary'
            ]);
            ?>
         </div>
         <div class="w-[10rem]">
            <ul class="flex gap-4">
               <li>
                  <a href="mailto:yucarisp@gmail.com">
                     yucarisp@gmail.com
                  </a>
               </li>
               <li>
                  <a href="">
                     IG
                  </a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</footer>
<?php
wp_footer(); ?>

</body>

</html>
