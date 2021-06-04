<?php /*Template Name: Front*/

get_header(); ?>

<section class="intro">
  <div id="scene_intro" class="intro-parallax">
    <div data-depth="0.2">
      <img src="<?php echo SD_THEME_IMAGE_URI; ?>/int-perl1.png" alt="perl">
    </div>
    <div data-depth="-0.1">
      <img src="<?php echo SD_THEME_IMAGE_URI; ?>/int-perl2.png" alt="perl">
    </div>
    <div data-depth="-0.2">
      <img src="<?php echo SD_THEME_IMAGE_URI; ?>/int-perl3.png" alt="perl">
    </div>
  </div>
  <div class="container-fluid">
    <div class="row intro-row">
      <div class="col-xl-5 col-lg-5">
        <div class="intro__content">
          <div class="intro__text">
            <div class="intro__subtitle"><?php the_field('first_pre-title-hp-fb'); ?></div>
            <div class="intro__title"><?php the_field('first_title-hp-fb'); ?></div>
            <div class="intro__subtitle"><?php the_field('two_pre-title-hp-fb'); ?></div>
            <div class="intro__title"><?php the_field('two_title-hp-fb'); ?></div>
          </div>
          <div class="intro__btn">
            <a href="<?php the_field('button_link-hp-fb'); ?>" class="btn_border"><?php the_field('button_text-hp-fb'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7">
        <div class="intro__img">
          <div class="intro-img">
            <img src="<?php the_field('main_image-hp-fb'); ?>" alt="">
          </div>
          <a href="#mainProduct" class="intro__scroll ">
            <img src="<?php echo SD_THEME_IMAGE_URI; ?>/intro-wave.svg" alt="">
            <span>Scroll</span>
          </a>
          <div class="intro__payment d-none d-lg-flex">
            <div class="payment-item">
              <a href="#">
                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/paypal.png" alt="">
              </a>
            </div>
            <div class="payment-item">
              <a href="#">
                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/visa.png" alt="">
              </a>
            </div>
            <div class="payment-item">
              <a href="#">
                <img src="<?php echo SD_THEME_IMAGE_URI; ?>/MasterCard.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row d-block d-lg-none">
      <div class="col-12 ">
        <div class="intro__payment">
          <div class="payment-item">
            <a href="#">
              <img src="<?php echo SD_THEME_IMAGE_URI; ?>/paypal.png" alt="">
            </a>
          </div>
          <div class="payment-item">
            <a href="#">
              <img src="<?php echo SD_THEME_IMAGE_URI; ?>/visa.png" alt="">
            </a>
          </div>
          <div class="payment-item">
            <a href="#">
              <img src="<?php echo SD_THEME_IMAGE_URI; ?>/MasterCard.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="main-product" id="mainProduct">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-5 col-lg-5">
        <div class="main-product__left">
          <div class="section-name"><?php the_field('pre_title-hp-tb'); ?></div>
          <div class="main-product__title"><?php the_field('product_name-hp-tb'); ?></div>
          <div class="main-product__desc">
            <p><?php the_field('product_description-hp-tb'); ?></p>
          </div>
          <div class="main-product__btn">
            <a href="<?php the_field('button_link-hp-tb'); ?>" class="btn_border"><?php the_field('button_text-hp-tb'); ?></a>
          </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7">
        <div class="main-product__right">
          <div class="main-product__items">
            <div class="main-product-item-img">
              <div class="main-product-item-img__img">
                <div class="img-circle">
                  <svg class="circle-pink" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="131" cy="131" r="130.25" stroke="#FDBEDB" stroke-width="1.5" />
                    <circle cx="164.5" cy="4.5" r="4.5" fill="#FDBEDB" />
                    <circle cx="17.5" cy="195.5" r="2.5" fill="#FDBEDB" />
                  </svg>
                  <svg class="circle-grey" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="131" cy="131" r="130.25" stroke="#CCCCCC" stroke-width="1.5" />
                    <circle cx="17.5" cy="195.5" r="2.5" fill="#CCCCCC" />
                  </svg>

                  <img src="<?php the_field('img_hp-tb_1'); ?>" alt="">
                </div>
              </div>
              <div class="main-product-item-img__title"><?php the_field('image_title-hp-tb_1'); ?></div>
              <div class="main-product-item-img__desc">
                <?php the_field('image_description-hp-tb_1'); ?>
              </div>
            </div>

            <div class="main-product-item-img">
              <div class="main-product-item-img__img">
                <div class="img-circle">
                  <svg class="circle-pink" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="131" cy="131" r="130.25" stroke="#FDBEDB" stroke-width="1.5" />
                    <circle cx="164.5" cy="4.5" r="4.5" fill="#FDBEDB" />
                    <circle cx="17.5" cy="195.5" r="2.5" fill="#FDBEDB" />
                  </svg>
                  <svg class="circle-grey" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="131" cy="131" r="130.25" stroke="#CCCCCC" stroke-width="1.5" />
                    <circle cx="17.5" cy="195.5" r="2.5" fill="#CCCCCC" />
                  </svg>


                  <img src="<?php the_field('img_hp-tb_2'); ?>" alt="">
                </div>
              </div>
              <div class="main-product-item-img__title"><?php the_field('image_title-hp-tb_2'); ?></div>
              <div class="main-product-item-img__desc">
                <?php the_field('image_description-hp-tb_2'); ?>
              </div>
            </div>

            <div class="main-product-item-img">
              <div class="main-product-item-img__img">
                <div class="img-circle">
                  <svg class="circle-pink" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="131" cy="131" r="130.25" stroke="#FDBEDB" stroke-width="1.5" />
                    <circle cx="164.5" cy="4.5" r="4.5" fill="#FDBEDB" />
                    <circle cx="17.5" cy="195.5" r="2.5" fill="#FDBEDB" />
                  </svg>
                  <svg class="circle-grey" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="131" cy="131" r="130.25" stroke="#CCCCCC" stroke-width="1.5" />
                    <circle cx="17.5" cy="195.5" r="2.5" fill="#CCCCCC" />
                  </svg>

                  <img src="<?php the_field('img_hp-tb_3'); ?>" alt="">
                </div>
              </div>
              <div class="main-product-item-img__title"><?php the_field('image_title-hp-tb_3'); ?></div>
              <div class="main-product-item-img__desc">
                <?php the_field('image_description-hp-tb_3'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="gallery">
  <div class="container-fluid">
    <div class="gallery__items ">
      <div class="gallery__col gallery__col_left">
        <div class="gallery-item gallery-item_letf">
          <a href="<?php the_field('left_image-hp-gall'); ?>" data-fancybox="images-preview">
            <img src="<?php the_field('left_image-hp-gall'); ?>" alt="">
          </a>

        </div>
      </div>

      <div class="gallery__col gallery__col_mid">
        <div class="gallery-item gallery-item_mid-t">
          <a href="<?php the_field('center_top_image-hp-gall'); ?>" data-fancybox="images-preview">
            <img src="<?php the_field('center_top_image-hp-gall'); ?>" alt="">
          </a>
        </div>
        <div class="gallery-item gallery-item_mid-b">
          <a href="<?php the_field('center_bottom_image-hp-gall'); ?>" data-fancybox="images-preview">
            <img src="<?php the_field('center_bottom_image-hp-gall'); ?>" alt="">
          </a>
        </div>
      </div>
      <div class="gallery__col gallery__col_right">
        <div class="gallery-item gallery-item_right">
          <a href="<?php the_field('right_image-hp-gal'); ?>" data-fancybox="images-preview">
            <img src="<?php the_field('right_image-hp-gal'); ?>" alt="">
          </a>
        </div>
      </div>

    </div>
    <div style="display: none;">


      <?php
      if (have_rows('hidden_images-hp-gall')) :
        while (have_rows('hidden_images-hp-gall')) : the_row();
      ?>

          <a href="<?php the_sub_field('image'); ?>" data-fancybox="images-preview" data-thumb="<?php the_sub_field('image'); ?>"></a>

      <?php
        endwhile;
      else :
      endif;
      ?>
    </div>
  </div>
</section>


<section class="about-us">
  <div class="container-fluid">
    <div class="about-us__wrapper">
      <div class="row">
        <div class="offset-xl-1 col-xl-2">
          <div class="section-name"><?php the_field('pre_title-hp-about'); ?></div>
        </div>
        <div class="col-xl-6">
          <div class="about-us__text">
            <?php the_field('top_text-hp-about'); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-xl-1 col-xl-8">
          <div class="about-us__title">
            <!-- Here may be an idea that was the basis for creating your product or <span>Your main statement.</span> -->
            <?php the_field('bottom_bold_text-hp-about'); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-xl-1 col-xl-8">
          <div class="about-us__btn">
            <a href="<?php the_field('button_link-hp-about'); ?>" class="btn_border"><?php the_field('button_text-hp-about'); ?></a>
          </div>
        </div>
      </div>
      <div id="scene" class="about-us-parallax">
        <div data-depth="0.2">
          <img class="d-block d-sm-none" src="<?php echo SD_THEME_IMAGE_URI; ?>/det-perl1.png" alt="perl">
          <img class="d-none d-sm-inline" src="<?php echo SD_THEME_IMAGE_URI; ?>/ab-perl1.png" alt="perl">
        </div>
        <div data-depth="-0.3">
          <img class="d-block d-sm-none" src="<?php echo SD_THEME_IMAGE_URI; ?>/det-perl1.png" alt="perl">
          <img class="d-none d-sm-inline" src="<?php echo SD_THEME_IMAGE_URI; ?>/ab-perl2.png" alt="perl">
        </div>

      </div>
    </div>
  </div>
</section>


<section class="details">
  <div class="container-fluid ">
    <div class="details__wrapper">
      <div class="section-name"><?php the_field('pre_title-hp-detail'); ?></div>
      <div class="details__title">
        <?php the_field('title-hp-details'); ?>
      </div>
      <div class="details__subtitle">
        <?php the_field('text-hp-details'); ?>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="details-item">
            <div class="details-item__num">01</div>
            <div class="details-item__title"><?php the_field('first_item_title-hp-details'); ?></div>
            <div class="details-item__text">
              <?php the_field('first_item_text-hp-details'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="details-item">
            <div class="details-item__num">02</div>
            <div class="details-item__title"><?php the_field('two_item_title-hp-details'); ?></div>
            <div class="details-item__text">
              <?php the_field('two_item_text-hp-details'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="details-item">
            <div class="details-item__num">03</div>
            <div class="details-item__title"><?php the_field('three_item_title-hp-details'); ?></div>
            <div class="details-item__text">
              <?php the_field('three_item_text-hp-details'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div id="scene_details" class="details-parallax">
        <div data-depth="0.3">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/det-perl1.png" alt="perl">
        </div>
        <div data-depth="-0.1">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/det-perl2.png" alt="perl">
        </div>
        <div data-depth="-0.2">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/det-perl3.png" alt="perl">
        </div>
      </div>
    </div>
  </div>

</section>


<section class='marquee-wrapper'>
  <div class='marquee' style='overflow:hidden'>
    <!-- <span class="pink">Happiness</span>
    <span>CREATIVity</span> -->
    <?php
    if (have_rows('marquee_block-hp')) :
      while (have_rows('marquee_block-hp')) : the_row();

        the_sub_field('text');

      endwhile;
    else :
    endif;
    ?>

  </div>
</section>


<section class="reviews">
  <div class="container-fluid">
    <div class="reviews__wrapper">
      <div id="scene_reviews" class="reviews-parallax">
        <div data-depth="0.2">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/rev-perl1.png" alt="perl">
        </div>
        <div data-depth="-0.3">
          <img src="<?php echo SD_THEME_IMAGE_URI; ?>/rev-perl2.png" alt="perl">
        </div>

      </div>
      <div class="row">
        <div class="offset-xl-1 col-lg-5">
          <div class="reviews__left">
            <div class="section-name"><?php the_field('pre_title-hp-review'); ?></div>
            <div class="reviews__title"><?php the_field('title-hp-review'); ?></div>
            <div class="reviews__subtitle"><?php the_field('text-hp-review'); ?> </div>
            <div class="reviews__btn">
              <a href="<?php the_field('button_link-hp-review'); ?>" class="btn_border"><?php the_field('button_text-hp-review'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="reviews__right">
            <div class="reviews__slider-arrows">
              <div class="reviews__slider-prev">Prev</div>
              <div class="reviews__slider-next">Next</div>
            </div>
            <div class="reviews__slider">
              <div class="reviews-item">
                <div class="reviews-item__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                <div class="reviews-item__star">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                </div>
                <div class="reviews-item__name">july</div>
                <div class="reviews-item__date">bought 2 months ago</div>
              </div>
              <div class="reviews-item">
                <div class="reviews-item__text">Facilisis magna etiam tempor orci eu lobortis elementum nibh!</div>
                <div class="reviews-item__star">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                </div>
                <div class="reviews-item__name">Mark t.</div>
                <div class="reviews-item__date">bought 1 months ago</div>
              </div>
              <div class="reviews-item">
                <div class="reviews-item__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                <div class="reviews-item__star">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                </div>
                <div class="reviews-item__name">july</div>
                <div class="reviews-item__date">bought 2 months ago</div>
              </div>
              <div class="reviews-item">
                <div class="reviews-item__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                <div class="reviews-item__star">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                  <img src="<?php echo SD_THEME_IMAGE_URI; ?>/star.svg" alt="">
                </div>
                <div class="reviews-item__name">july</div>
                <div class="reviews-item__date">bought 2 months ago</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>


<?php get_template_part('template-parts/sections/contact-block'); ?>

<?php get_footer(); ?>