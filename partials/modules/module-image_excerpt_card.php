<?php
/*
Module Name: Image Excerpt Card
*/
?>
<div class="card-main md:pt-[120px] pt-20 <?php if(is_page( 254 )) {echo 'md:pt-0';} ?>">
<?php
 $card_main_heading = get_sub_field('card_main_heading');
  $card_type = get_sub_field('childcare_style_type');
  ?>


<section class="mb-[40px]">
  <div class="container">
    <?php if(!empty($card_main_heading)): ?>
      <h3 class="heading-h3 font-semibold"><?= $card_main_heading; ?></h3>
    <?php endif; ?>
  </div>
</section>

  <?php if($card_type == 'style1'): ?>
<!-- style 1 -->
<section class="style1">
<div class="container">
  <div class="row">
    <?php if(have_rows('card_repeater')): ?>
      <div class="grid md:grid-cols-3 grid-cols-1 md:gap-[40px] gap-[94px]">
      <?php while(have_rows('card_repeater')) : the_row();
      $card_img_style1 = get_sub_field('card_image');
      $card_heading_style1 = get_sub_field('card_heading');
      $card_content_style1 = get_sub_field('card_content');
      $card_link = get_sub_field('card_link');
      ?>
      <div class="col">
          <figure class="image text-center">
              <a class="inline-block" href="<?php echo $card_link; ?>" >
                <?php if(!empty($card_img_style1)): ?>
                  <img class="mx-auto h-full object-cover" src="<?= esc_url($card_img_style1['url']); ?>" alt="<?= esc_attr($card_img_style1['alt']); ?>">
                <?php else: ?>
                  <img src="https://placehold.co/360x360" alt="">
                <?php endif; ?>
              </a>
          </figure>
        <?php if(!empty($card_heading_style1)): ?>
          <h3 class="mt-10 mb-[12px] text-[25px] font-semibold text-blue-dark">
            <a href="<?php echo $card_link; ?>" ><?= $card_heading_style1; ?></a>
          </h3>
        <?php endif; ?>
        <?php if(!empty($card_content_style1)): ?>
          <p><?= $card_content_style1; ?></p>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
</section>
<?php
elseif ($card_type == 'style2'):
?>

<!-- style 2 -->
<section class="style2">
<div class="container">
  <div class="row">
    <?php if(have_rows('card_repeater')): ?>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 md:gap-[40px] gap-[94px]">
      <?php while(have_rows('card_repeater')) : the_row();
      $card_img_style1 = get_sub_field('card_image');
      $card_heading_style1 = get_sub_field('card_heading');
      $card_content_style1 = get_sub_field('card_content');
      $card_link = get_sub_field('card_link');
      ?>
      <div class="col flex flex-col h-full rounded-[50px]">
          <figure class="image basis-[250px] grow-0 shrink-0 h-[250px] rounded-tl-[50px] rounded-tr-[50px] overflow-hidden">
          <a href="<?php echo $card_link; ?>" >
            <?php if(!empty($card_img_style1)): ?>
              <img class="mx-auto w-full h-full object-cover" src="<?= esc_url($card_img_style1['url']); ?>" alt="<?= esc_attr($card_img_style1['alt']); ?>">
            <?php else: ?>
              <img src="https://placehold.co/360x360" alt="">
            <?php endif; ?>
          </a>
          </figure>
        <div class="content-box h-full px-8 py-9 rounded-bl-[50px] rounded-br-[50px] border border-t-0 border-[#00000029] border-solid">
          <?php if(!empty($card_heading_style1)): ?>
            <h3 class="mb-[20px] text-[25px] font-semibold text-blue-dark">
              <a href="<?php echo $card_link; ?>" ><?= $card_heading_style1; ?></a>
            </h3>
          <?php endif; ?>
          <?php if(!empty($card_content_style1)): ?>
            <p><?= $card_content_style1; ?></p>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
</section>

<?php
else:
?>

<!-- style 3 -->
<section class="style3">
<div class="container">
  <div class="row">
    <?php if(have_rows('card_repeater')): ?>
      <div class="grid md:grid-cols-3 grid-cols-1 md:gap-[40px] gap-[94px]">
      <?php while(have_rows('card_repeater')) : the_row();
      $card_img_style1 = get_sub_field('card_image');
      $card_heading_style1 = get_sub_field('card_heading');
      $card_content_style1 = get_sub_field('card_content');
      $card_link = get_sub_field('card_link');
      ?>
      <div class="col rounded-[50px]">
      <div class="content-box px-8 py-9 rounded-tl-[50px] rounded-tr-[50px] border border-b-0 border-[#00000029] border-solid">
          <?php if(!empty($card_heading_style1)): ?>
            <h3 class="mb-[20px] text-[25px] font-semibold text-blue-dark">
            <a href="<?php echo $card_link; ?>" ><?= $card_heading_style1; ?></a>
            </h3>
          <?php endif; ?>
        </div>
          <figure class="image h-[250px] rounded-bl-[50px] rounded-br-[50px] overflow-hidden">
            <a href="<?php echo $card_link; ?>" >
              <?php if(!empty($card_img_style1)): ?>
                <img class="mx-auto w-full h-full object-cover" src="<?= esc_url($card_img_style1['url']); ?>" alt="<?= esc_attr($card_img_style1['alt']); ?>">
              <?php else: ?>
                <img src="https://placehold.co/360x360" alt="">
              <?php endif; ?>
            </a>
          </figure>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</div>
</section>

<?php endif; ?>
</div>