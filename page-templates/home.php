<?php

/**
 * Template Name: Home
 */


get_header();

?>

<main>
   <?php if (have_rows('hero')) : ?>
      <?php while (have_rows('hero')) : the_row();
         $background = get_sub_field('background');
         $bg_src     = $background['sizes']['large'] ?? '';
         $logo       = get_sub_field('logo');
         $logo_src   = $logo['sizes']['large'] ?? '';
      ?>
         <section class="hero scrolling-container" style="background-image: url(<?php echo $bg_src ?>);">
            <div class="image-animation-hero m-auto text-center absolute -left-[100vw] top-1/2 -translate-y-1/2 z-0" style="background-image: url(<?php echo $logo_src ?>);">
            </div>
         </section>
      <?php endwhile; ?>
   <?php endif; ?>

   <?php if (have_rows('last_drop')) : ?>
      <?php while (have_rows('last_drop')) : the_row();
         $title    = get_sub_field('title');
         $products = get_sub_field('products');
         $link     = get_sub_field('link');

      ?>
         <section class="last-drop lg:py-[10rem] py-[5rem]">
            <div class="container">
               <h3 class="text-purple-900 lg:text-[3.5rem] text-5xl font-medium mb-12"><?php echo $title ?></h3>

               <?php
               $args = array(
                  'post_type'      => 'product',
                  'post__in'       => $products,
                  'posts_per_page' => -1,
                  'orderby'        => 'date',
                  'order'          => 'DESC',
               );

               $query = new WP_Query($args);

               if ($query->have_posts()) :
               ?>
                  <div id="swiper-ultimmo-drop" class="swiper woocommerce max-h-[40rem] overflow-hidden">
                     <ul class="swiper-wrapper products">
                        <?php
                        while ($query->have_posts()) : $query->the_post();
                           echo '<div class="swiper-slide">';
                           wc_get_template_part('content', 'product');
                           echo '</div>';
                        endwhile;

                        ?>
                     </ul>
                     <div class="swiper-pagination"></div>
                  </div>
               <?php
                  wp_reset_postdata();
               endif;
               ?>

            </div>
            <?php if ($link) : ?>
               <div class="flex justify-center items-center mt-12">
                  <a class="text-2xl leading-none font-medium border-4 border-purple-900 py-[2.1rem] px-8 rounded-[60%] min-w-[19.375rem] flex justify-center items-center w-fit" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
               </div>
            <?php endif; ?>
         </section>
      <?php endwhile; ?>
   <?php endif; ?>

   <?php if (have_rows('collection')) : ?>
      <?php while (have_rows('collection')) : the_row();
         $video    = get_sub_field('video');
         $logo       = get_sub_field('logo');
         $logo_src   = $logo['sizes']['large'] ?? '';
         $link     = get_sub_field('link');

      ?>
         <section class="collection lg:py-[10rem] py-[5rem] bg-yellow-100 scrolling-container scrolling-container ">
            <div class="container relative">
               <video id="homeVideo" class="m-auto w-full max-w-[19.6875rem] h-auto relative z-10">

                  <source src="<?php echo $video['url'] ?>" type="video/mp4">

                  Your browser does not support the video tag.

               </video>
               <div class="image-animation m-auto text-center absolute -left-[100vw] top-1/2 -translate-y-1/2 z-0" style="background-image: url(<?php echo $logo_src ?>);">
               </div>
            </div>
            <?php if ($link) : ?>
               <div class="flex justify-center items-center mt-12">
                  <a class="text-2xl leading-none font-medium border-4 border-purple-900 py-[2.1rem] px-8 rounded-[60%] min-w-[19.375rem] flex justify-center items-center w-fit" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
               </div>
            <?php endif; ?>
         </section>
      <?php endwhile; ?>
   <?php endif; ?>
</main>

<?php

get_footer();
