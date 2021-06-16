<?php
/*Template Name: Contacts*/

get_header();

?>

<section class="intro contact-s__intro">
  <div class="container-fluid">


    <div id="scene" class="contact-parallax">
      <div data-depth="0.2">
        <img src="<?php echo SD_THEME_IMAGE_URI; ?>/parallax/parallax-errorpage1.png" alt="perl">
      </div>
    </div>

    <div class="intro__text">
      <div class="intro__subtitle"><?php the_field('pre-title-cont-fb'); ?></div>
      <div class="intro__title"><?php the_field('title-cont-fb'); ?></div>
    </div>

    <div class="row contact-s__first-block">
      <div class=" col-xl-3">
        <div class="section-name"><?php the_field('title_above_map-cont-fb'); ?></div>
      </div>
      <div class="col-xl-6">
        <div class="about-us__text">
          <?php the_field('text_above_map-cont-fb'); ?>
        </div>
      </div>
    </div>

    <div class="contact-s__map-wrapper ">
      <div class="contactsection__boxes">
        <div class="contactsection__box">
          <p class="title tel"><?php the_field('phone_number_title-opt', 'option'); ?></p>
          <a href="tel:<?php the_field('phone_number-opt', 'option'); ?>"><?php the_field('phone_number-opt', 'option'); ?></a>
        </div>
        <div class="contactsection__box">
          <p class="title mail"><?php the_field('email_title-opt', 'option'); ?></p>
          <a href="mail:<?php the_field('email-opt', 'option'); ?>"><?php the_field('email-opt', 'option'); ?></a>
        </div>
        <div class="contactsection__box">
          <p class="title offaddr"><?php the_field('adress_title-opt', 'option'); ?></p>
          <p><?php the_field('adress-opt', 'option'); ?></p>
        </div>
      </div>
      <div id="map">
        <?php $coordinates= get_field('map_coordinates'); ?>
        <script>
          // ////////////  map init /////////
          // https://maps.googleapis.com/maps/api/js?key=AIzaSyAuqtG8XhmKQPGoYpFi9dqZmhZTDWGCxE0&amp;callback=initMap
          function initMap() {
            setTimeout(function() {
              var element = document.getElementById('map');

              var stylemap = [{
                  "featureType": "administrative",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#6195A0"
                  }]
                },
                {
                  "featureType": "landscape",
                  "elementType": "all",
                  "stylers": [{
                    "color": "#F2F2F2"
                  }]
                },
                {
                  "featureType": "landscape",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#FFFFFF"
                  }]
                },
                {
                  "featureType": "poi",
                  "elementType": "all",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry.fill",
                  "stylers": [{
                      "color": "#E6F3D6"
                    },
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "road",
                  "elementType": "all",
                  "stylers": [{
                      "saturation": -100
                    },
                    {
                      "lightness": 45
                    },
                    {
                      "visibility": "simplified"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "all",
                  "stylers": [{
                    "visibility": "simplified"
                  }]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry.fill",
                  "stylers": [{
                      "color": "#FDBEDB"
                    },
                    {
                      "visibility": "simplified"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels.text",
                  "stylers": [{
                    "color": "#4E4E4E"
                  }]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#F4F4F4"
                  }]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.text.fill",
                  "stylers": [{
                    "color": "#787878"
                  }]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.icon",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "transit",
                  "elementType": "all",
                  "stylers": [{
                    "visibility": "off"
                  }]
                },
                {
                  "featureType": "water",
                  "elementType": "all",
                  "stylers": [{
                      "color": "#EAF6F8"
                    },
                    {
                      "visibility": "on"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry.fill",
                  "stylers": [{
                    "color": "#EAF6F8"
                  }]
                }
              ]

              var options = {
                zoom: 13,
                styles: stylemap,
                disableDefaultUI: true,
                center: {
                  lat:<?php echo $coordinates['lat'];?>,
                  lng:<?php echo $coordinates['lng'];?>
                }

              };
              var myMap = new google.maps.Map(element, options);

              var markers = [{
                coordinates: {
                  lat:<?php echo $coordinates['lat'];?>,
                  lng:<?php echo $coordinates['lng'];?>
                },
                image: "<?php echo SD_THEME_IMAGE_URI; ?>/icon/marker.svg",
              }];

              function addMarker(properties) {
                var marker = new google.maps.Marker({
                  position: properties.coordinates,
                  map: myMap,
                  icon: properties.image,
                  animation: google.maps.Animation.BOUNCE,
                });


              }
              for (var i = 0; i < markers.length; i++) {
                addMarker(markers[i]);
              }

            }, 500)




          }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php the_field('map-api'); ?>&amp;callback=initMap">
        </script>

      </div>
    </div>

    <div class="row contact-s__first-block contact-s__under-map">
      <div class=" col-xl-3">
        <div class="section-name"><?php the_field('title-abov-cf-cont-fb'); ?></div>
      </div>
      <div class="col-xl-6">
        <div class="about-us__text">
          <?php the_field('text-above-cf-cont-fb'); ?>
        </div>
      </div>
    </div>


    <div class="row contact-s__form">

      <div class=" col-xl-3">
      </div>
      <div class="col-xl-6">
        <div class="contact-s__from_wrapper">
          <?php echo do_shortcode('[contact-form-7 id="142" title="Contact form 1"]');  ?>

          <!-- <div class="contact-s__from-fr">
            <input type="text" placeholder="Your name">
            <input type="email" placeholder="Your EMAIL">
            <input type="number" placeholder="Phone number (optional)">
          </div>
          <textarea placeholder="Your Message"></textarea>
          <div class="checkfield">
            <input type="checkbox" id="checknews" checked>
            <label for="checknews">Keep me up to date on news and exclusive offers</label>
          </div>
          <input class="contact-s__from-submit" type="submit" value="order"> -->


        </div>
      </div>
      <div class=" col-xl-3">
      </div>
    </div>
  </div>


</section>


<?php get_footer(); ?>