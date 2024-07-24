<?php
/*
Module Name: Map Card
*/

?>

<section class="map_card">
  <div class="container">
    <?php if(have_rows('map_card_repeater')): ?>
    <div class="row grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10">
      <?php while(have_rows('map_card_repeater')): the_row();
      $school_name = get_sub_field('school_name');
      $school_address = get_sub_field('school_address');
      $school_phone = get_sub_field('school_phone');
      $school_email = get_sub_field('school_email');
      $school_contact = get_sub_field('school_contact');
      $school_map = get_sub_field('school_map');
      ?>
      <!-- <div class="col"> -->
        <div class="card border border-solid border-[#EDECE7] rounded-[50px]">
          <div class="school-details pt-[60px] px-[30px] pb-[70px]">
            <h4 class="school-name text-[18px] mb-8 text-green-dark font-semibold"><?= $school_name; ?></h4>
            <p class="school-address mb-[30px]"><?= $school_address; ?></p>
            <div class="school-phone font-medium mb-[30px]"><?= $school_phone; ?></div>
            <?php
            if( $school_email ):
                $link_url = $school_email['url'];
                $link_title = $school_email['title'];
                $link_target = $school_email['target'] ? $school_email['target'] : '_self';
                ?>
                <a class="text-aqua-dark underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

            <div class="school-contact"><?= $school_contact; ?></div>
          </div>
          <div class="school-map rounded-bl-[50px] rounded-br-[50px]"><?= $school_map; ?></div>
        </div>
      <!-- </div> -->
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>