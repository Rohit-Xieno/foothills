<?php
/*
 Module Name: Inner Hero
*/
$inner_hero_txt_img = get_sub_field('inner_hero_text_image');
$inner_hero_txt = get_sub_field('inner_hero_text');
$inner_hero_cta = get_sub_field('inner_hero_link');
?>
<!--  -->

<!--  -->
<div class="main-inner relative overflow-hidden">
<section class="pt-[152px] pb-[139px]">
  <div class="container">
    <div class="row">
      <?php if(!empty($inner_hero_txt_img)): ?>
      <div class="inner-hero-text-img">
        <img src="<?= esc_url($inner_hero_txt_img['url']); ?>" alt="<?= esc_attr($inner_hero_txt_img['alt']); ?>">
      </div>
      <?php endif; ?>
      <?php if(!empty($inner_hero_txt)): ?>
        <p class="inner-hero-text mt-10 mb-[36px] max-w-[500px]"><?= $inner_hero_txt; ?></p>
      <?php endif; ?>
      <?php if(!empty($inner_hero_cta)): ?>
        <div class="inner-hero-cta">
        <?php
        if( $inner_hero_cta ):
            $link_url = $inner_hero_cta['url'];
            $link_title = $inner_hero_cta['title'];
            $link_target = $inner_hero_cta['target'] ? $inner_hero_cta['target'] : '_self';
            ?>
        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php
$inner_hero_heading = get_sub_field('inner_hero_heading');
$inner_hero_content = get_sub_field('inner_hero_content');
?>
<section class="pb-[110px] bg-aqua-light pt-[100px] pb-[100px] relative after:absolute after:w-full md:after:h-[140px] after:h-[76px] after:rounded-full after:bg-[url(../assets/images/cta-bg.png)] md:after:bottom-[-84px] after:bottom-[-46px] after:bg-repeat md:after:bg-[140px,140px] after:bg-[76px,76px]">
  <div class="container">
    <div class="row max-w-[600px]">
      <?php if(!empty($inner_hero_heading)): ?>
        <h2 class="heading-h2 font-semibold text-aqua-dark mb-[30px]"><?= $inner_hero_heading; ?></h2>
      <?php endif; ?>
      <?php if(!empty($inner_hero_content)): ?>
      <div class="inner-hero-content"><?= $inner_hero_content; ?></div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php $inner_hero_banner = get_sub_field('inner_hero_banner'); if(!empty($inner_hero_banner)): ?>
<div class="xl:max-w-[973px] absolute top-[-45px] -right-72 before:absolute before:bg-[url(../assets/images/dot-img.svg)] before:top-3 before:left-[80px] before:z-10 before:w-[107px] before:h-[99px] before:bg-contain before:top-[110px]">
  <img class="maskk" src="<?= esc_url($inner_hero_banner['url']) ?>" alt="<?= esc_attr($inner_hero_banner['alt']) ?>">
</div>
<?php endif; ?>
</div>