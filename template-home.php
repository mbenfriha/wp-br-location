<?php /* Template Name: Modèle page Accueil */ ?>

<?php get_header(); ?>

<main role="main" class="wrapper">
  <!-- section -->

  <section class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 gap-y-12 h-screen bg-home" id="home"
    style="padding-top: 25vh;background: url('<?php wp_is_mobile() ? the_field('home-section_home-background-mobile') : the_field('home-section_home-background'); ?>') no-repeat center center; background-size: cover;">
    <div></div>

    <?php if(!wp_is_mobile()) { ?>
    <div class="flex justify-center px-4 lg:p-20 content-end flex-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/img/souris_scroll.png" alt="">
    </div>
    <?php }?>

    <div class="flex justify-start lg:justify-end px-4 lg:p-20 content-end flex-wrap">
      <?php if( have_rows('home-section_home-social') ): ?>

      <ul class="list-none">

        <?php while( have_rows('home-section_home-social') ): the_row(); ?>

        <li class="mb-2 text-md">
          <a href="<?php the_sub_field('url'); ?>" class="text-white capitalize"
            target="_blank"><?php the_sub_field('name'); ?></a>
        </li>

        <?php endwhile; ?>

      </ul>

      <?php endif; ?>
    </div>
  </section>

  <section class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 gap-y-12 h-screen" id="cars-category-section"  style="background-size: cover; background: -16em 0em / cover no-repeat;">
    <div class="flex px-6 py-14 justify-start lg:justify-center px-4 lg:p-20 lg:content-center flex-wrap flex-col"
   >
      <h2 class="text-white text-2xl lg:text-3xl mb-5">Nos véhicules</h2>
      <?php if( have_rows('our-cars_category') ): ?>

      <ul class="list-none ml-0" id="cars-category">
        <?php while( have_rows('our-cars_category') ): the_row(); ?>
        <li
          class="text-white text-4xl lg:text-7xl capitalize mb-10 slider-cars cursor-pointer hover:text-gray-300 font-bold"
          data-background="<?php the_sub_field('img'); ?>">
          <?php the_sub_field('name'); ?>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>
    </div>
  </section>
  <section class="grid grid-cols-1 gap-x-4 gap-y-12 h-screen" id="gallery-carousel-section">
    <div class="flex px-4 lg:p-20 justify-center content-start flex-wrap flex-col"
      style="background-size: cover; background: no-repeat center fixed;">
      <h2 class="text-white text-2xl lg:text-3xl mb-5">Galerie</h2>

      <div class="w-full">
        <?php do_shortcode(the_field('carousel')) ?>
      </div>

      <p class="text-white text-center text-xl lg:text-3xl mb-5 mt-14">Swipez pour découvrir les images </p>

    </div>
  </section>
  <section class="grid grid-cols-1 gap-x-4 gap-y-12">
    <div class="flex px-4 py-16 lg:p-20 justify-center content-start flex-wrap flex-col"
      style="background-size: cover; background: no-repeat center fixed;">
      <h2 class="text-black text-2xl lg:text-3xl mb-5">Nos services</h2>

      <div
        class="flex justify-around px-4 lg:p-20 content-center flex-wrap flex-row col-span-2 z-50 text-justify w-full">
        <?php the_field('our_services'); ?>
      </div>


    </div>

  </section>
  <section class="grid grid-cols-1 lg:grid-cols-3 gap-x-4 gap-y-12 min-h-screen py-16 bg-black text-white relative"
    id="about-section"
    style="background: url('<?php the_field('our-story_background'); ?>') no-repeat center center; background-size: cover;">

    <div class="flex justify-start py-4 px-4 lg:pl-20 lg:py-20 content-start flex-wrap flex-col z-50	">
      <h2 class="text-2xl lg:text-3xl mb-5 text-white">A propos</h2>

      <ul class="list-none ml-0" id="about-list">
        <li
          class="text-2xl lg:text-5xl text-white capitalize mb-10 slider-about cursor-pointer hover:text-gray-300 font-bold underline"
          data-element="story-element" data-background="<?php the_field('our-story_background'); ?>">
          Notre histoire
        </li>
        <li
          class="text-2xl lg:text-5xl text-white capitalize mb-10 slider-about cursor-pointer hover:text-gray-300 font-bold"
          data-element="values-element" data-background="<?php the_field('our-values_background'); ?>">
          Nos valeurs
        </li>
        <li
          class="text-2xl lg:text-5xl text-white capitalize mb-10 slider-about cursor-pointer hover:text-gray-300 font-bold"
          data-element="teams-element">
          Notre équipe
        </li>
      </ul>
    </div>
    <div class="flex justify-around px-4 lg:p-20 content-center flex-wrap flex-row col-span-2 z-50	">
      <div class="story-element text-white text-xl about-element">
        <?php the_field('our-story_text'); ?>
      </div>
      <div class="values-element text-white text-xl hidden about-element ">
        <?php the_field('our-values_text'); ?>
      </div>

      <?php if( have_rows('our-team') ): ?>

      <?php while( have_rows('our-team') ): the_row(); ?>
      <div class="teams-element text-black hidden about-element">
        <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('name'); ?> <?php the_sub_field('role'); ?>">
        <p class="font-bold mb-1 mt-1"><?php the_sub_field('name'); ?></p>
        <p class="font-medium capitalize"><?php the_sub_field('role'); ?></p>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="overlay"></div>
  </section>

  <section class="grid grid-cols-1 lg:grid-cols-2  gap-x-4 gap-y-12 min-h-screen py-8" id="contact-form">
    <div class="flex px-4 lg:p-20 justify-center content-start flex-wrap flex-col"
      style="background-size: cover; background: no-repeat center fixed;">
      <div>
        <h2 class="text-black text-2xl lg:text-3xl mb-5 font-bold">contact</h2>

        <h3 class="text-2xl lg:text-5xl font-bold">
          Une question, un devis ? <br>
          Écrivez nous !
        </h3>
        <div class="mt-6">
          <?php do_shortcode(the_field('contact_shortcode')) ?>
        </div>

      </div>
    </div>

    <div class="flex px-4 lg:p-20 justify-center content-center flex-wrap flex-col">
      <div class="border-2 border-black p-10">
        <p class="font-bold">BR Location</p>
        <?php the_field('contact_infos') ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>