<?php
/*
Module Name: Top Inner Hero
*/
$text_image = get_sub_field('text_image');
$text_image_heading = get_sub_field('text_image_heading');
$hero_image = get_sub_field('hero_image');
?>

<div class="main-part relative">
<section>
  <div class="container">
    <div class="row">
      <?php if(!empty($text_image)): ?>
      <div class="text-img">
        <img src="<?= esc_url($text_image['url']) ?>" alt="<?= esc_attr($text_image['alt']) ?>">
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php if(!empty($hero_image)): ?>
  <div class="absolute">
    <img src="<?= esc_url($hero_image['url']) ?>" alt="<?= esc_attr($hero_image['alt']) ?>">
  </div>
<?php endif; ?>
</div>