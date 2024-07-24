<?php
/*
Module Name: Text Media
*/

$text_media_img = get_sub_field('text_media_img');
$text_media_heading = get_sub_field('text_media_heading');
$text_media_content = get_sub_field('text_media_content');
$text_media_link = get_sub_field('text_media_link');
$text_media_orientation = get_sub_field('text_media_orientation');
?>

<section class="text_with_media 2xl:pt-[200px] pt-[320px] relative before:absolute before:bg-[url('../assets/images/text_with_media-bg.svg')] before:bg-contain before:bg-no-repeat before:bg-right before:w-full lg:before:h-[302px] before:h-[160px] before:right-0 2xl:before:top-0 before:top-[80px] <?php if($text_media_orientation == 0) { echo 'before:hidden 2xl:pt-[60px] pt-[65px]'; } ?>">
<div class="container-fluid">
  <div class="row flex md:flex-row flex-col lg:gap-[70px] gap-[50px] items-center <?php if($text_media_orientation == 0) { echo 'md:flex-row-reverse'; } ?>">
    <figure class="max-w-[700px] ">
        <?php if(!empty($text_media_img)): ?>
        <img class="<?= $text_media_orientation == 0 ? 'rounded-tl-full rounded-bl-full' : 'rounded-tr-full rounded-br-full'; ?>" src="<?= esc_url($text_media_img['url']); ?>" alt="<?= esc_attr($text_media_img['alt']); ?>">
        <?php else: ?>
          <img src="https://placehold.co/700x453" alt="">
          <?php endif; ?>
      </figure>
    <div class="content-col max-w-[518px] pr-5 md:pl-0 pl-5 <?php if($text_media_orientation == 0) { echo 'md:pr-0 pr-5 md:pl-5'; } ?>">
    <?php if(!empty($text_media_heading)): ?>
      <h2 class="heading-h2 font-semibold mb-5"><?= $text_media_heading; ?></h2>
    <?php endif; ?>
    <?php if(!empty($text_media_content)): ?>
      <p class=" mb-[30px] max-w-[444px]"><?= $text_media_content; ?></p>
    <?php endif; ?>
    <?php
      $text_media_link = get_sub_field('text_media_link');
      if( $text_media_link ):
          $link_url = $text_media_link['url'];
          $link_title = $text_media_link['title'];
          $link_target = $text_media_link['target'] ? $text_media_link['target'] : '_self';
          ?>
          <a class="text-orange-dark text-[15px] font-bold tracking-[1.13px] uppercase inline-flex gap-[25px] items-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
            <img src="<?= get_template_directory_uri().'/assets/images/right-arrow.svg' ?>" alt="">
          </a>
      <?php endif; ?>
  </div>
  </div>
</div>
</section>