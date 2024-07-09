<?php
/*
Module Name: Program Location
*/

$program_registration_heading = get_sub_field('program_registration_heading');
$program_registration_link = get_sub_field('program_registration_cta');
$registration_information_heading = get_sub_field('registration_information_heading');
?>
<section class="program-location">
<div class="container">
  <h2>Program Locations</h2>
  <div class="row">
    <div class="container--tabs border border-solid border-[#DEDEDC] rounded-[50px]">
    <div class="row">
      <ul class="nav nav-tabs grid grid-cols-2">
        <li class="active"><a href="#tab-1">CALGARY VILLAGE SQUARE</a></li>
        <li class=""><a href="#tab-2">COCHRANE</a></li>
      </ul>
      <div class="tab-content pt-[60px] p-10">
        <div id="tab-1" class="tab-pane active">
          <span class="glyphicon glyphicon-leaf glyphicon--home--feature two columns text-center"></span>
          <span class="col-md-10">
            <h3 class="text-xl mb-[30px]"><?= $program_registration_heading; ?></h3>
            <?php
              if( $program_registration_link ):
                  $link_url = $program_registration_link['url'];
                  $link_title = $program_registration_link['title'];
                  $link_target = $program_registration_link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
          </span>
          <h3 class="green-h3"><?= $registration_information_heading; ?></h3>
          <?php if( have_rows('program_registration_info_repeater') ): ?>
            <div class="inner-row grid grid-cols-2 gap-[25px]">
              <?php while( have_rows('program_registration_info_repeater') ): the_row();
                  $registration_heading = get_sub_field('registration_heading');
                  $registration_content = get_sub_field('registration_content');
                  ?>
                  <div class="registration-info text-base max-w-[355px]">
                    <h4 class="font-medium"><?= $registration_heading; ?></h4>
                    <?= $registration_content; ?>
                  </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <div class="inner-row">
            <?php
              $class_time_heading = get_sub_field('class_time_heading');
              $class_time_content = get_sub_field('class_time_content');
            ?>
            <h3 class="green-h3"><?= $class_time_heading; ?></h3>
            <div>September 2023<br> Morning Class:<br> Mon – Thu 8:30 – 11:40 am</div>
          </div>
          <div class="inner-row">
            <h3 class="green-h3">Parent Resources</h3>
            <div class="download-btns">
              <a href="#" class="btn">DOWNLOAD PARENT HAND BOOK</a>
              <a href="#" class="btn">DOWNLOAD KINDERGARTEN CALENDAR</a>
            </div>
          </div>
          <div class="inner-row">
            <h3>Class Time</h3>
            <div class="links">
              <a href="#">Routine Vaccination Schedule, Alberta Health</a>
              <a href="#">Alberta Education Kindergarten Curriculum</a>
            </div>
          </div>
          <div class="inner-section bg-aqua-light rounded-[30px] py-[53px] px-10 flex">
            <div class="img-box max-w-[404px]">
              <img src="" alt="">
            </div>
            <div class="content max-w-[444px]">
              <h3>MEET THE TEACHER</h3>
              <h2>Hayley Sloan</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo</p>
            </div>
          </div>
        </div>
        <div id="tab-2" class="tab-pane">
          <span class="glyphicon glyphicon-fire glyphicon--home--feature two columns text-center"></span>
          <span class="col-md-10">
            <h3>Feature 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </span>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</section>