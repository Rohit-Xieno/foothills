<!--

Page Module list

 -->
 <?php while (have_rows('page_modules')) : the_row(); ?>

  <?php if (get_row_layout() == 'home_page') : ?>
  <?php get_template_part('partials/modules/module', 'home_page'); ?>

  <?php elseif (get_row_layout() == 'information') :  ?>
  <?php get_template_part('partials/modules/module', 'information'); ?>

  <?php elseif (get_row_layout() == 'discover_cta') :  ?>
  <?php get_template_part('partials/modules/module', 'discover_cta'); ?>

  <?php elseif (get_row_layout() == 'inner_hero') :  ?>
  <?php get_template_part('partials/modules/module', 'inner_hero'); ?>

  <?php elseif (get_row_layout() == 'program_location') :  ?>
  <?php get_template_part('partials/modules/module', 'program_location'); ?>

  <?php endif; ?>
<?php endwhile; ?>