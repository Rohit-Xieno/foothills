<?php
/**
 * Module Name: Information
 */
$information_heading = get_sub_field('information_heading');
?>
<div class="container pt-32">
<?php if(!empty($information_heading)): ?>
    <h3 class="md:text-[25px] text-[20px] font-semibold text-[#0F2A34]"><?php echo $information_heading; ?></h3>
    <?php endif; ?>
    </div>
<section class="mt-[30px] pb-[110px] bg-aqua-light pt-[60px] pb-[120px] relative after:absolute after:w-full md:after:h-[140px] after:h-[76px] after:rounded-full after:bg-[url(../assets/images/cta-bg.png)] md:after:bottom-[-84px] after:bottom-[-46px] after:bg-repeat md:after:bg-[140px,140px] after:bg-[76px,76px]">
  <div class="container">
    <?php
// Check rows exists.
if( have_rows('information_repeater') ): ?>
  <div class="grid md:grid-cols-3 grid-cols-1 gap-[60px]">
    <?php
    while( have_rows('information_repeater') ) : the_row();
        ?>
        <?php
        $information_image = get_sub_field('information_image');
        if( !empty( $information_image ) ): ?>
            <div class="info-img"><img src="<?php echo esc_url($information_image['url']); ?>" alt="<?php echo esc_attr($information_image['alt']); ?>" /></div>
        <?php endif; ?>
    <?php
    endwhile;
else : ?>
</div>
<?php endif; ?>

  </div>
</section>