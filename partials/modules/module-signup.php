<?php

/**
 * Module Name: Signup
 */

$signup_heading = get_sub_field('signup_heading');
$signup_heading_inner = get_sub_field('signup_heading_inner');
$signup_date = get_sub_field('signup_date');
$signup_duration = get_sub_field('signup_duration');
$signup_delivery = get_sub_field('signup_delivery');
$signup_time = get_sub_field('signup_time');
$signup_session_time = get_sub_field('signup_session_time');
$signup_desc = get_sub_field('signup_description');
$signup_link = get_sub_field('signup_link');
$signup_orientation = get_sub_field('signup_orientation');

?>

<?php if ($signup_orientation == 0) {
  # code...
 ?>
<section class="module-signup md:py-[104px] py-[50px]">
  <div class="container">
    <div class="row">
    <?php if(!empty($signup_heading)): ?>
      <h3 class="text-h4 sm:text-h3 mb-[40px] font-semibold"><?php echo $signup_heading; ?></h3>
    <?php endif; ?>
    <div class="rounded-[50px] border border-[#DEDEDC] py-[40px] pr-5 md:py-[60px] md:pr-[100px]">
      <!-- <div class="grid md:grid-cols-2 md:gap-10 lg:flex lg:gap-[100px]"> -->
      <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-[100px] md:gap-10">
        <div class="max-w-[499px]">
          <?php
            $signup_img = get_sub_field('signup_image');
            if( !empty( $signup_img ) ): ?>
                <img src="<?php echo esc_url($signup_img['url']); ?>" alt="<?php echo esc_attr($signup_img['alt']); ?>" class="rounded-br-full rounded-tr-full" />
          <?php endif; ?>
        </div>
        <div class="max-w-[459px] w-full pl-5 pt-5 md:pl-0 md:pt-0">
          <div class="">
            <?php if(!empty($signup_heading_inner)): ?>
              <h2 class="heading-h2 font-semibold pb-[10px]"><?= $signup_heading_inner; ?></h2>
            <?php endif; ?>
            <?php if($signup_date) { ?>
            <div class="signup-date"><span class="font-medium">Start Date: </span><?php echo $signup_date; ?></div>
            <?php } ?>
             <?php if($signup_duration) { ?>
            <div class="signup-date"><span class="font-medium">Duration: </span><?php echo $signup_duration; ?></div>
              <?php } ?>
             <?php if($signup_delivery) { ?>
            <div class="signup-date"><span class="font-medium">Delivery: </span><?php echo $signup_delivery; ?></div>
              <?php } ?>
            <h3 class="text-lg font-semibold text-green-dark mt-5 mb-4"><?php echo $signup_time; ?></h3>
            <h4 class="text-sm font-normal mb-[16px]"><?php echo $signup_session_time; ?></h4>
            <div class="toolbox-program-form">
            <select class="js-example-basic-single !w-full" name="state">
            <?php
              // Check rows exists.
              if( have_rows('signup_time_select') ):
                $i = 1;
                  while( have_rows('signup_time_select') ) : the_row();
                      $signup_timing = get_sub_field('signup_timing');

                      ?>
                      <option value="time<?php echo $i; ?>"><?php echo $signup_timing; ?></option>
                      <?php
               $i++;   endwhile;
              else :
              endif; ?>
            </select>
            </div>
            <p class="mt-[38px]"><?php echo $signup_desc; ?></p>
            <?php
              $link = get_sub_field('signup_link');
              if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="btn mt-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php

} else{

?>
<section class="module-signup pb-[80px]">
  <div class="container">
    <div class="row">
    <?php if(!empty($signup_heading)): ?>
      <h3 class="text-h4 sm:text-h3 mb-[40px] font-semibold"><?php echo $signup_heading; ?></h3>
    <?php endif; ?>
    <div class="rounded-[50px] border border-[#DEDEDC] py-[40px] pr-0 md:py-[64px] md:pl-[40px]">
      <!-- <div class="grid md:grid-cols-2 md:gap-10 lg:flex lg:gap-[100px] justify-between"> -->
      <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-[100px] md:gap-10 justify-between">
      <div class="max-w-[459px] w-full pl-5 pt-0 pr-5 md:pl-0 md:pt-0">
          <div class="">
            <?php if(!empty($signup_heading_inner)): ?>
              <h2 class="heading-h2 font-semibold pb-[10px]"><?= $signup_heading_inner; ?></h2>
            <?php endif; ?>
            <?php if ($signup_date) { ?>
              <div class="signup-date"><span class="font-medium">Start Date: </span><?php echo $signup_date; ?></div>
            <?php } ?>
            <?php if ($signup_duration) { ?>
              <div class="signup-date"><span class="font-medium">Duration: </span><?php echo $signup_duration; ?></div>
            <?php } ?>
            <?php if ($signup_delivery) { ?>
              <div class="signup-date"><span class="font-medium">Delivery: </span><?php echo $signup_delivery; ?></div>
            <?php } ?>
            <h3 class="text-lg font-semibold text-green-dark mt-5 mb-4"><?php echo $signup_time; ?></h3>
            <h4 class="text-sm font-normal mb-[16px]"><?php echo $signup_session_time; ?></h4>
            <div class="toolbox-program-form">
            <select class="js-example-basic-single !w-full" name="state">
            <?php
              // Check rows exists.
              if( have_rows('signup_time_select') ):
                $j = 1;
                  while( have_rows('signup_time_select') ) : the_row();
                      $signup_timing = get_sub_field('signup_timing');

                      ?>
                      <option value="timing<?php echo $j; ?>"><?php echo $signup_timing; ?></option>
                      <?php
               $j++;   endwhile;
              else :
              endif; ?>
            </select>
            </div>
            <p class="mt-[38px]"><?php echo $signup_desc; ?></p>
            <?php
              $signup_link = get_sub_field('signup_link');
              if( $signup_link ):
                  $link_url_signup = $signup_link['url'];
                  $link_title_signup = $signup_link['title'];
                  $link_target_signup = $signup_link['target'] ? $signup_link['target'] : '_self';
                  ?>
                  <a class="btn mt-10" href="<?php echo esc_url( $link_url_signup ); ?>" target="<?php echo esc_attr( $link_target_signup ); ?>"><?php echo esc_html( $link_title_signup ); ?></a>
              <?php endif; ?>
          </div>
        </div>
        <div class="max-w-[499px] pl-5 pt-10 md:pl-0 md:pt-0">
        <?php
            $signup_img = get_sub_field('signup_image');
            if( !empty( $signup_img ) ): ?>
                <img src="<?php echo esc_url($signup_img['url']); ?>" alt="<?php echo esc_attr($signup_img['alt']); ?>" class="rounded-bl-full rounded-tl-full rounded-br-none rounded-tr-none" />
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
  </div>
</section>
<?php } ?>