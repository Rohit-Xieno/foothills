<?php
/*
Module Name: Top Inner Hero
*/
$text_image = get_sub_field('text_image');
$text_image_heading = get_sub_field('text_image_heading');
$hero_image = get_sub_field('hero_image');
$inner_hero_subheading = get_sub_field('inner_hero_subheading');
?>

<div class="main-part relative overflow-hidden">
<section class="lg:pt-[132px] lg:pb-[172px] pb-[270px] pt-[70px]">
  <div class="container">
    <div class="row">
      <?php if(!empty($text_image)): ?>
      <p class="text-img">
        <img src="<?= esc_url($text_image['url']) ?>" alt="<?= esc_attr($text_image['alt']) ?>">
        <h1 class="sr-only"><?= $text_image_heading; ?></h1>
        <p class="text-base mt-[22px] max-w-[570px]"><?= $inner_hero_subheading; ?></p>
      </p>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php if(!empty($hero_image)): ?>
  <!-- <div class="top_inner_hero_img absolute lg:-right-24 -right-16 lg:top-[70px] sm:top-0 top-[170px] lg:max-w-[364px] md:max-w-[300px] max-w-[250px] "> -->
  <div class="top_inner_hero_img absolute -z-10 lg:-right-24 -right-16 lg:top-[50%] top-[65%] -translate-y-1/2 lg:max-w-[467px] md:max-w-[350px] max-w-[250px] ">
    <img src="<?= esc_url($hero_image['url']) ?>" alt="<?= esc_attr($hero_image['alt']) ?>">
  </div>
<?php endif; ?>
</div>