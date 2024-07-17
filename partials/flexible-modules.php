<!--

Page Module list

 -->
 <?php while (have_rows('page_modules')) : the_row(); ?>

  <?php if (get_row_layout() == 'hero') : ?>
  <?php get_template_part('partials/modules/module', 'hero'); ?>

  <?php elseif (get_row_layout() == 'image_excerpt_card') :  ?>
  <?php get_template_part('partials/modules/module', 'image_excerpt_card'); ?>

  <?php elseif (get_row_layout() == 'text_media') :  ?>
  <?php get_template_part('partials/modules/module', 'text_media'); ?>

  <?php elseif (get_row_layout() == 'shapes_with_text') :  ?>
  <?php get_template_part('partials/modules/module', 'shapes_with_text'); ?>

  <?php elseif (get_row_layout() == 'text_image_cta') :  ?>
  <?php get_template_part('partials/modules/module', 'text_image_cta'); ?>

  <?php elseif (get_row_layout() == 'inner_hero') :  ?>
  <?php get_template_part('partials/modules/module', 'inner_hero'); ?>

  <?php elseif (get_row_layout() == 'program_location') :  ?>
  <?php get_template_part('partials/modules/module', 'program_location'); ?>

  <?php elseif (get_row_layout() == 'resume') :  ?>
  <?php get_template_part('partials/modules/module', 'resume'); ?>

  <?php elseif (get_row_layout() == 'step_text_media') :  ?>
  <?php get_template_part('partials/modules/module', 'step_text_media'); ?>

  <?php elseif (get_row_layout() == 'signup') :  ?>
  <?php get_template_part('partials/modules/module', 'signup'); ?>

  <?php elseif (get_row_layout() == 'top_inner_hero') :  ?>
  <?php get_template_part('partials/modules/module', 'top_inner_hero'); ?>

  <?php endif; ?>
<?php endwhile; ?>