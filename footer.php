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
      <div class="flex gap-[5rem] lg:gap-[9.375rem] flex-wrap justify-center items-center">
         <div class="w-[10rem]">
            <?php the_custom_logo() ?>
         </div>
         <div class="lg:flex-1">
            <?php
            wp_nav_menu([
               'theme_location'  => 'institutional',
               'container_class' => '',
               'container'       => 'nav',
               'menu_class'      => 'menu-primary'
            ]);
            ?>
         </div>
         <div class="w-fit">
            <ul class="flex gap-4 text-white">
               <li>
                  <a class="underline font-normal" href="mailto:yucarisp@gmail.com">
                     yucarisp@gmail.com
                  </a>
               </li>
               <li>
                  <a class="font-normal" href="#">
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
