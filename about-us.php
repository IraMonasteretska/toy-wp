<?php
/*Template Name: About us*/

get_header();

?>

<section class="intro about-s__intro contact-s-main">
  <div class="container-fluid container-about-s">
    <div class="about-s__first-title row">
      <div class=" col-xl-2">
      </div>
      <div class="col-xl-8">
        <div class="intro__subtitle"><?php the_field('pre_title-about-fb'); ?></div>
        <div class="intro__title"><?php the_field('title-about-fb'); ?></div>
      </div>
      <div class=" col-xl-2">
      </div>
    </div>


    <div class="about-s__center-text row">
      <div class=" col-xl-3">
      </div>
      <div class="col-xl-6">
        <p class="about-s__center-bold"><?php the_field('bold_text-about-fb'); ?> </p>
        <p class="about-s__center-normal"><?php the_field('text-about-fb'); ?></p>
      </div>
      <div class=" col-xl-3">
      </div>
    </div>



    <div class="about-s__pink">
      <div class="row about-s__pink-fb">
        <div class=" col-xl-3">
          <div class="section-name"><?php the_field('title-about-tb'); ?></div>
        </div>
        <div class="col-xl-7">
          <div class="about-us__text">
            <?php the_field('text-about-tb'); ?>
          </div>
        </div>
      </div>
      <div class="about-s__values">
        <h3 class="about-s__values-main-title">
          <?php the_field('values_main_title-about-tb'); ?>
        </h3>
        <div class="about-s__values-df">
          <div class="about-s__values-item">
            <p class="about-s__values-numb">
              01
            </p>
            <h4 class="about-s__values--title">
              <?php the_field('value_title-about-tb_1'); ?>
            </h4>
            <p class="about-s__values-text">
              <?php the_field('value_text-about-tb_1'); ?>
            </p>
          </div>
          <div class="about-s__values-item">
            <p class="about-s__values-numb">
              02
            </p>
            <h4 class="about-s__values--title">
              <?php the_field('value_title-about-tb_2'); ?>
            </h4>
            <p class="about-s__values-text">
              <?php the_field('value_text-about-tb_2'); ?>
            </p>
          </div>
          <div class="about-s__values-item">
            <p class="about-s__values-numb">
              03
            </p>
            <h4 class="about-s__values--title">
              <?php the_field('value_title-about-tb_3'); ?>
            </h4>
            <p class="about-s__values-text">
              <?php the_field('value_text-about-tb_3'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="scene" class="about-parallax">
      <div data-depth="0.2">
        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage1.png" alt="perl">
      </div>
      <div data-depth="0.1">
        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage2.png" alt="perl">
      </div>
      <div data-depth="-0.1">
        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage3.png" alt="perl">
      </div>
      <div data-depth="0.2">
        <div class="img-wrap">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/about-paralax/center-ball.png" alt="perl">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/about-paralax/ellipse-1-parall.png" alt="perl">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/about-paralax/ellipse-2-parall.png" alt="perl">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/about-paralax/ellipse-3-parall.png" alt="perl">
        </div>

      </div>

    </div>
  </div>
</section>

<?php get_template_part('template-parts/sections/contact-block'); ?>



<?php
get_footer();

?>