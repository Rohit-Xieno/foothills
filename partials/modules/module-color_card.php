<?php
/*
Module Name: Color Card
*/

?>
<section class="color_card my-20">
<div class="container">
  <?php if(have_rows('color_card_repeater')): ?>
    <div class="row grid md:grid-cols-2 grid-cols-1 md:gap-10 gap-[30px]">
      <?php while(have_rows('color_card_repeater')): the_row();
      $heading = get_sub_field('heading');
      $link_text = get_sub_field('link_text');
      $bg_color = get_sub_field('bg_color');
      $text_color = get_sub_field('text_color');
      ?>
      <div class="card md:p-10 px-5 py-10 rounded-30" style="background-color:<?= $bg_color; ?>">
        <h3 class="heading-h3 font-semibold mb-[10px]" style="color:<?= $text_color; ?>"><?= $heading; ?></h3>
        <div class="link-text"><?= $link_text; ?></div>
      </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>
</section>