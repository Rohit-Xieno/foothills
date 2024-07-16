<?php
/*
Module Name: Resume
*/
$resume_heading = get_sub_field('heading');
$resume_content = get_sub_field('content');
$resume_subheading = get_sub_field('subheading');
$resume_link = get_sub_field('btn');
?>
<section class="mt-[60px] mb-[80px] <?php if(is_page(254)) {echo 'mt-20';} ?>">
<div class="container">
  <div class="row pt-[46px] md:px-[40px] px-5 md:pb-[94px] pb-[78px] border border-dashed border-[#C4C3BE] rounded-[30px]">
    <?php if(!empty($resume_heading)): ?>
    <h2 class="heading-h2 mb-[35px] font-semibold"><?= $resume_heading; ?></h2>
    <?php endif; ?>
    <?php if(!empty($resume_content)): ?>
    <p class="max-w-[924px]"><?= $resume_content; ?></p>
    <?php endif; ?>
    <?php if(!empty($resume_subheading)): ?>
    <h3 class="green-h3 md:!mt-[60px] !mt-11"><?= $resume_subheading; ?></h3>
    <?php endif; ?>

    <a href="#" class="btn">APPLY FOR GRANT</a>
  </div>
</div>
</section>