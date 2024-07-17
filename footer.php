<?php
$footer_logo = get_field('footer_logo', 'option');
$contact_heading = get_field('contact_heading', 'option');
$school_phone = get_field('school_phone', 'option');
$school_phone_number = get_field('school_phone_number', 'option');
$emergency_contact = get_field('emergency_contact', 'option');
$emergency_contact_number = get_field('emergency_contact_number', 'option');
$schools_hours_heading = get_field('schools_hours_heading', 'option');
$calgary_heading = get_field('calgary_heading', 'option');
$calgary_preschool_hours = get_field('calgary_preschool_hours', 'option');
$calgary_kindergarten_hours = get_field('calgary_kindergarten_hours', 'option');
$cochrane_heading = get_field('cochrane_heading', 'option');
$cochrane_preschool_hours = get_field('cochrane_preschool_hours', 'option');
$cochrane_kindergarten_hours = get_field('cochrane_kindergarten_hours', 'option');
$quick_links_heading = get_field('quick_links_heading', 'option');
?>
<div class="main-footer <?php if(is_page('home')) {echo 'bg-yellow-light';} ?>">
<footer class="footer bg-blue-dark text-white lg:pt-[82px] pt-[65px] pb-[60px] xl:rounded-tr-[200px] xl:rounded-tl-[200px] rounded-tr-[100px] rounded-tl-[100px]">
<div class="container">
  <div class="row flex md:flex-nowrap flex-wrap">
    <div class="footer-logo md:w-[54px] w-full md:text-left text-center lg:mr-[46px] mr-[30px] mr-0 md:mb-0 mb-[65px]">
      <?php if(!empty($footer_logo)): ?>
      <img class="w-[54px] lg:mx-none mx-auto" src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>">
      <?php endif; ?>
    </div>
    <div class="inner-row w-full flex md:flex-row flex-col xl:gap-[140px] lg:gap-[80px] gap-[40px]">
    <div class="col contact md:max-w-[160px] max-w-[360px] w-full">
      <?php if(!empty($contact_heading)): ?>
        <h2 class="text-sm tracking-[1.05px] uppercase font-medium"><?php echo $contact_heading; ?></h2>
      <?php endif; ?>
      <div class="main-phone-wrap flex md:flex-col flex-row md:gap-0 gap-10">
      <div class="phone-wrap">
      <?php if(!empty($school_phone)): ?>
        <h3 class="text-xs font-medium mb-[20px] mt-[30px]"><?php echo $school_phone; ?></h3>
      <?php endif; ?>
      <?php if(!empty($school_phone_number)): ?>
        <div class="text-xs leading-[20px] font-normal">
          <?php echo $school_phone_number; ?>
        </div>
      <?php endif; ?>
      </div>
      <div class="phone-wrap">
      <?php if(!empty($emergency_contact)): ?>
        <h3 class="text-xs font-medium mb-[20px] mt-[30px]"><?php echo $emergency_contact; ?></h3>
      <?php endif; ?>
      <?php if(!empty($emergency_contact_number)): ?>
        <div class="text-xs leading-[20px] font-normal">
          <?php echo $emergency_contact_number; ?>
        </div>
      <?php endif; ?>
      </div>
      </div>
    </div>
    <div class="col hours lg:max-w-[360px] max-w-[300px] w-full">
    <?php if(!empty($schools_hours_heading)): ?>
      <h2 class="text-sm tracking-[1.05px] uppercase font-medium"><?php echo $schools_hours_heading; ?></h2>
    <?php endif; ?>
    <div class="grid grid-cols-2 xl:gap-[40px] gap-[20px]">
      <div class="calgary">
        <?php if(!empty($calgary_heading)): ?>
          <h3 class="text-xs font-medium mb-[20px] mt-[30px]"><?php echo $calgary_heading; ?></h3>
        <?php endif; ?>
          <?php if(!empty($calgary_preschool_hours)): ?>
            <div class="text-xs leading-[20px] mb-[20px]">
              <?php echo $calgary_preschool_hours; ?>
            </div>
          <?php endif; ?>
          <?php if(!empty($calgary_kindergarten_hours)): ?>
            <div class="text-xs leading-[20px]">
              <?php echo $calgary_kindergarten_hours; ?>
            </div>
          <?php endif; ?>
      </div>
      <div class="Cochrane">
        <?php if(!empty($cochrane_heading)): ?>
          <h3 class="text-xs font-medium mb-[20px] mt-[30px]"><?php echo $cochrane_heading; ?></h3>
        <?php endif; ?>
          <?php if(!empty($cochrane_preschool_hours)): ?>
            <div class="text-xs leading-[20px] mb-[20px]">
              <?php echo $cochrane_preschool_hours; ?>
            </div>
          <?php endif; ?>
          <?php if(!empty($cochrane_kindergarten_hours)): ?>
            <div class="text-xs leading-[20px]">
            <?php echo $cochrane_kindergarten_hours; ?>
            </div>
          <?php endif; ?>
      </div>
      </div>
    </div>
    <div class="col links">
    <?php if(!empty($quick_links_heading)): ?>
      <h2 class="text-sm tracking-[1.05px] uppercase font-medium"><?php echo $quick_links_heading; ?></h2>
    <?php endif; ?>
    <?php
      wp_nav_menu(array(
        'menu_class' => 'footer-links',
        'theme_location' => 'footer-menu',
      ))
    ?>
      <div class="social-media flex gap-[32px]">
      <?php
        $social_links = get_field('social_links', 'option');
        if( $social_links ) :
            foreach ($social_links as $key => $item) :
              $sl_icon = $item['social_img'];
              $sl_link = $item['social_url'];
            ?>
            <a href="<?php $sl_link; ?>" target="_blank"><img src="<?php echo esc_url($sl_icon['url']) ?>" alt="<?php echo esc_attr($sl_icon['alt']) ?>"></a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  </div>
  <div class="row pt-[82px] lg:pl-[100px] md:pl-[78px] pl-0">
    <div class="copyright">
    <?php if( have_rows('copyright_links_repeater', 'option') ): ?>
    <ul class="flex">
    <?php while( have_rows('copyright_links_repeater', 'option') ): the_row();
        $copyright_link = get_sub_field('copyright_links', 'option');
        ?>
        <li>
        <?php
          if( $copyright_link ):
              $link_url = $copyright_link['url'];
              $link_title = $copyright_link['title'];
              $link_target = $copyright_link['target'] ? $copyright_link['target'] : '_self';
              ?>
              <a class="text-[10px] font-normal" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    </div>
  </div>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  (function($)
 {
    "use strict";
    $(document).ready(function() {
			$('.js-example-basic-single').select2({
				placeholder: 'Select One'
			});

    });
})(this.jQuery);
</script>
</body>
</html>