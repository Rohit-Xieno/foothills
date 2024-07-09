<?php
/*
  template name: Frontpage
*/
?>

<?php get_header(); ?>

<?php if (have_rows('page_modules')) : ?>
	<?php get_template_part('partials/flexible', 'modules'); ?>
<?php endif; ?>


<?php get_footer(); ?>
