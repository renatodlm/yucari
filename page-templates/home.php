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
         <section class="hero" style="background-image: url(<?php echo $bg_src ?>);">
            <img class="m-auto text-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" src="<?php echo $logo_src ?>" alt="">
         </section>
      <?php endwhile; ?>
   <?php endif; ?>

   <?php if (have_rows('last_drop')) : ?>
      <?php while (have_rows('last_drop')) : the_row();
         $title    = get_sub_field('title');
         $products = get_sub_field('products');
         $link     = get_sub_field('link');

         $products = implode(',', $products);
      ?>
         <section class="last-drop py-[10rem]">
            <div class="container">
               <h3 class="text-purple-900 text-[3.5rem] font-medium mb-12"><?php echo $title ?></h3>
               <?php echo do_shortcode('[products ids="' . $products . '" columns="3" orderby="date" order="DESC"]') ?>
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
         <section class="collection py-[10rem] bg-yellow-100">
            <div class="container relative">
               <video class="m-auto w-full max-w-[19.6875rem] h-auto relative z-10" src="<?php echo $video['url'] ?>"></video>
               <img class="m-auto text-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-0" src="<?php echo $logo_src ?>" alt="">
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
