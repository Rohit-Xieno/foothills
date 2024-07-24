<?php
/**
 * Module Name: Shapes With Text
 */
$information_heading = get_sub_field('information_heading');
?>
  <?php if(!empty($information_heading)): ?>
    <div class="container md:pt-32 pt-20">
      <h3 class="md:text-[25px] text-[20px] font-semibold text-[#0F2A34]"><?php echo $information_heading; ?></h3>
    </div>
  <?php endif; ?>
  <?php
// Check rows exists.
if( have_rows('information_repeater') ): ?>
<section class="">
  <?php $information_heading = get_sub_field('information_heading'); ?>
  <?php if(!empty($information_heading)): ?>
    <div class="container md:pt-32 pt-20">
      <h3 class="md:text-[25px] text-[20px] font-semibold text-[#0F2A34]"><?php echo $information_heading; ?></h3>
    </div>
    <?php endif; ?>
    <div class="inner-row mt-[30px] pb-[110px] bg-aqua-light pt-[60px] pb-[120px]">
    <div class="container">
      <div class="grid md:grid-cols-3 grid-cols-1 gap-[60px]">
        <?php while( have_rows('information_repeater') ) : the_row(); ?>
            <?php $information_image = get_sub_field('information_image');
              if( !empty( $information_image ) ): ?>
                  <div class="info-img"><img class="m-auto" src="<?php echo esc_url($information_image['url']); ?>" alt="<?php echo esc_attr($information_image['alt']); ?>" /></div>
              <?php endif; ?>
        <?php endwhile; ?>
      </div>
  </div>
  </div>
</section>
<?php endif; ?>