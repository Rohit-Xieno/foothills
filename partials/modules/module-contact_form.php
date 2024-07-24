<?php
/*
Module Name: Contact Form
*/
$contact_form_heading = get_sub_field('contact_form_heading');
$contact_form_shortcode = get_sub_field('contact_form_shortcode');
?>
<section class="contact-form pt-[100px]">
<div class="container">
  <h2 class="heading-h3 font-semibold mb-[60px]"><?= $contact_form_heading; ?></h2>
  <?= do_shortcode( $contact_form_shortcode ); ?>
</div>
</section>