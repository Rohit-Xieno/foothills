<?php
/**
 * Module Name: Text Image CTA
 */
$discover_heading = get_sub_field('discover_heading');
$discover_text_img = get_sub_field('discover_text_image');
$discover_text = get_sub_field('discover_text');
$discover_link = get_sub_field('discover_link');
?>
<?php if(!empty($discover_heading || $discover_text_img || $discover_text || $discover_link)): ?>
<section class="bg-yellow-light pt-[100px] pb-[80px] relative before:absolute before:w-full md:before:h-[140px] before:h-[76px] before:bg-[url(../assets/images/cta-bg.png)] md:before:top-[-55px] before:top-[-32px] before:bg-repeat md:before:bg-[140px,140px] before:bg-[76px,76px]">
<div class="container">
  <div class="row flex md:flex-nowrap flex-wrap md:gap-[117px] gap-[50px]">
    <?php if(!empty($discover_text_img)): ?>
    <div class="text-img">
      <img src="<?php echo esc_url($discover_text_img['url']) ?>" alt="<?php esc_attr($discover_text_img['alt']) ?>">
    </div>
    <?php endif; ?>
    <div class="cta-content max-w-[507px]">
      <?php if(!empty($discover_heading)): ?>
        <h2 class="heading-h2 text-orange-dark font-semibold md:mb-10 mb-[30px]"><?php echo $discover_heading; ?></h2>
      <?php endif; ?>
      <?php if(!empty($discover_text)): ?>
        <p class="md:mb-[30px] mb-6"><?php echo $discover_text; ?></p>
      <?php endif; ?>
      <?php
      if( $discover_link ):
          $link_url = $discover_link['url'];
          $link_title = $discover_link['title'];
          $link_target = $discover_link['target'] ? $discover_link['target'] : '_self';
          ?>
          <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>
</section>
<?php endif; ?>