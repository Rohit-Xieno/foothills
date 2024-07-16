<?php
/*
Module Name: Step Text Media
*/
$step = get_sub_field('step');
$step_heading = get_sub_field('step_heading');
$step_image = get_sub_field('step_image');
$step_sub_heading = get_sub_field('step_sub_heading');
$step_content = get_sub_field('step_content');
$step_link = get_sub_field('step_link');
?>

<section class="step_text_media pt-24 relative after:absolute after:right-0 after:top-[50%] after:translate-y-[-50%] after:bg-[url(../assets/images/text_with_media-bg.svg)] after:bg-no-repeat after:bg-right-bottom md:after:w-full md:after:h-[302px] after:bg-contain <?php if(!empty($step_image)) { echo "after:hidden"; } ?>">

  <div class="container border-b-2 border-[#C4C3BE] border-dashed pb-[100px] <?php if ( empty($step_image) ) { echo "!border-b-0"; } ?>">
    <?php if(!empty($step)): ?>
      <div class="text-[30px] font-semibold text-orange-dark uppercase <?php if ( empty($step_image) ) { echo "text-green-dark"; } ?>"><?= $step; ?></div>
    <?php endif; ?>
    <?php if(!empty($step_heading)): ?>
      <h2 class="heading-h2"><?= $step_heading; ?></h2>
    <?php endif; ?>
    <div class="row flex lg:gap-[100px] md:flex-nowrap flex-wrap gap-10 mt-10">
      <?php if(!empty($step_image)): ?>
        <div class="image md:max-w-[400px] max-w-full basis-[400px] grow-0 shrink-0">
          <img class="rounded-tr-full rounded-br-full" src="<?= esc_url($step_image['url']) ?>" alt="<?= esc_attr($step_image['alt']) ?>" />
        </div>
        <?php endif; ?>
      <div class="content-part">
        <?php if(!empty($step_sub_heading)): ?>
          <h3 class="font-semibold text-[30px]"><?= $step_sub_heading; ?></h3>
        <?php endif; ?>
        <?php if(!empty($step_content)): ?>
          <p class="mt-[26px] mb-[36px] md:max-w-[580px] max-w-full <?php if( empty($step_image) ) { echo "!mt-0 !mb-0 max-w-[760px]"; } ?>"><?= $step_content; ?></p>
        <?php endif; ?>
        <?php
        if( $step_link ):
            $link_url = $step_link['url'];
            $link_title = $step_link['title'];
            $link_target = $step_link['target'] ? $step_link['target'] : '_self';
            ?>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>