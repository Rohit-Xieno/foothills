<?php get_header(); ?>

<?php while (have_rows('page_modules')) : the_row(); ?>
  <?php get_template_part('partials/modules/module-top_inner_hero'); ?>
<?php endwhile; ?>
<section class="team-members pb-[100px]">
  <div class="container">
  <?php
      $blog = array(
        'posts_per_page' => -1,
        'post_type' => 'team-member'
      );
      $blog_query = new WP_Query($blog);
      ?>
      <?php if ($blog_query->have_posts()) : ?>
      <div class="row grid grid-cols-3 gap-[90px]">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="col">
            <div class="img-box relative before:absolute before:w-[40px] before:h-[40px] before:bg-yellow-dark before:rounded-[6px] before:rotate-45 before:left-[-20px] before:top-[50%] before:translate-y-[-50%]">
              <?php $blog_img = the_post_thumbnail( 'full', array( 'class' => 'rounded-full' ) ); ?>
            </div>
            <div class="content pt-[30px] text-center">
              <h4 class="name text-xl font-semibold leading-[30px] mb-[8px]"> <?php the_title(); ?> </h4>
              <div class="designation"><?php echo get_field('designation'); ?></div>
            </div>
          </div>
          </a>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
  </div>
</section>

<?php get_footer(); ?>