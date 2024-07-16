<?php
/**
 * Module Name: Home page
 */
  $hero_bg = get_sub_field('home_hero_bg');
  $hero_text = get_sub_field('home_hero_text');
  $hero_heading = get_sub_field('home_hero_heading');
  // $hero_bg_clr = get_field('tone', 'option');



  //  Global Functionality section
$tone = get_field('tone', 'option');
if ($tone) {
	switch ($tone) {
		case 'orange-light':
			$bg = 'after:bg-orange-light';
			$bg_img = "bg-desktop-fall.svg";
			break;
		case 'aqua-light':
			$bg = 'after:bg-aqua-light';
			$bg_img = "bg-desktop-homepage.svg";
			break;
		case 'blue-light':
			$bg = 'after:bg-blue-light';
			$bg_img = "bg-desktop-winter.svg";
			break;
		case 'green-light':
			$bg = 'after:bg-green-light';
			$bg_img = "bg-desktop-spring.svg";
			break;
		case 'pink-light':
			$bg = 'after:bg-pink-light';
			$bg_img = "bg-desktop-back-to-school.svg";
			break;
		default:
			break;
	}
}

?>

<section class="relative overflow-hidden md:pt-[152px] pt-[76px] pb-[70px] bg-auto bg-no-repeat bg-center after:content-[''] after:absolute after:bg-[#D8F0F5] <?= $bg; ?> after:left-0 after:top-0 after:w-full after:h-full after:-z-10 after:rounded-b-[50%] after:transform after:scale-x-[2] after:xl:scale-x-[1.2]" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/<?= $bg_img; ?>);" >
  <div class="container">
    <div class="row md:max-w-full max-w-[288px] mx-auto">
      <div class="text-center">
      <?php
        $hero_text_img = get_sub_field('home_hero_text_image');
        if( !empty( $hero_text_img ) ): ?>
            <img src="<?php echo esc_url($hero_text_img['url']); ?>" alt="<?php echo esc_attr($hero_text_img['alt']); ?>" class="md:max-w-full mx-auto max-w-[210px]" />
        <?php endif; ?>
        <?php if( !empty( $hero_heading ) ): ?><h1 class="sr-only"><?php echo $hero_heading; ?></h1><?php endif; ?>
        <?php if(!empty($hero_text)): ?>
        <p class="hero-p md:!mb-10 !mb-[24px]"><?php echo $hero_text; ?></p>
        <?php endif; ?>
      <?php
      $hero_link = get_sub_field('home_hero_link');
      if( $hero_link ):
          $link_url = $hero_link['url'];
          $link_title = $hero_link['title'];
          $link_target = $hero_link['target'] ? $hero_link['target'] : '_self';
          ?>
          <a class="btn md:max-w-[306px] max-w-[260px] w-full" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
    </div>
  </div>
</section>