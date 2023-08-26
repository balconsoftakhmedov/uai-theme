<div class="footer_wrapper">
  <div class="top-border footer_wrapper">
  <div class="footer_sub-wrapper">
  <footer class="section footer js_section" id="footer">
  <ul class="footer_list">
  <li class="footer_item">
  <div class="footer_box">
  <div class="footer_box--left">



  <?php $footer = get_field('footer');?>
<?php if ($footer['map']):?>

  <div class="footer_box--left--border">
  <div class="acf-map" data-zoom="19" style="margin: 0;">
  <div class="marker" data-lat="<?php echo esc_attr($footer['map']['lat']);?>" data-lng="<?php echo esc_attr($footer['map']['lng']);?>"> 
</div> 
</div> 
</div>

  <?php endif;?>



</div> 
<div class="footer_box--right">
  <?php if ($footer['map_text_1']):?>
  <p class="footer_box--right_title"><?php echo $footer['map_text_1'];?></p> 
  <?php endif;?>
<ul class="footer_box--right_list">
  <?php if ($footer['map_text_2']):?>
  <li class="footer_box--right_item">
  <p><?php echo $footer['map_text_2'];?></p> 
  </li> 
  <?php endif;?>

<?php if ($footer['map_text_3']):?>
  <li class="footer_box--right_item" >
    <a href="tel:<?php echo $footer['map_text_3'];?>"><?php echo $footer['map_text_3'];?></a>

  </li> 
  <?php endif;?>
<?php if ($footer['map_text_4']):?>
  <li class="footer_box--right_item" >
  <a href="tel:<?php echo $footer['map_text_4'];?>"><?php echo $footer['map_text_4'];?></a>
  </li> 
  <?php endif;?>
</ul> </div> </div> </li>

<li class="footer_item footer_item--last" >
  <?php
if ($footer['logo']):?>
  <img src="<?php echo $footer['logo'];?>" alt="" class="footer_logo js_logo_link"/>
  <?php endif;?>


<div class="footer_item__right">
  <ul class="footer_item__right_list" >
  <?php if ($footer['privacy_policy_link']):?>
  <li class="footer_item__right_item" >
  <a href="<?php echo $footer['privacy_policy_link'];?>"
class="footer_item__link"
target="_blank"> Privacy Policy </a></li> 
<?php endif;?>
<?php if ($footer['contact_us_link']):?>
  <li class="footer_item__right_item" >
  <button class="footer_item__link" onclick="Calendly.showPopupWidget('<?php echo $footer['contact_us_link'];?>');return false;" >Contact us </button> 
  </li> 
  <?php endif;?>
<li class="footer_item__right_item" style="display: flex;
    align-content: center;">
  <?php
if ($footer['facebook_link']):?>
  <a href="<?php echo $footer['facebook_link'];?>"
class="footer_item__link-soc"
target="_blank" >
  <img
src="<?php bloginfo('template_directory');?>/img/facebook.png"
alt=""/>
  </a> 
  <?php endif;?>
  <?php
if ($footer['twitter_link']):?>
  <a href="<?php echo $footer['twitter_link'];?>"
class="footer_item__link-soc"
target="_blank" >
<svg style="width: 3.1rem;height: 2.9rem"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	  viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;"
	 xml:space="preserve">
<g>
	<path fill="#ffffff" d="M414.41,24.123C398.333,8.042,378.963,0,356.315,0H82.228C59.58,0,40.21,8.042,24.126,24.123
		C8.045,40.207,0.003,59.576,0.003,82.225v274.084c0,22.647,8.042,42.018,24.123,58.102c16.084,16.084,35.454,24.126,58.102,24.126
		h274.084c22.648,0,42.018-8.042,58.095-24.126c16.084-16.084,24.126-35.454,24.126-58.102V82.225
		C438.532,59.576,430.49,40.204,414.41,24.123z M335.471,168.735c0.191,1.713,0.288,4.278,0.288,7.71
		c0,15.989-2.334,32.025-6.995,48.104c-4.661,16.087-11.8,31.504-21.416,46.254c-9.606,14.749-21.074,27.791-34.396,39.115
		c-13.325,11.32-29.311,20.365-47.968,27.117c-18.648,6.762-38.637,10.143-59.953,10.143c-33.116,0-63.76-8.952-91.931-26.836
		c4.568,0.568,9.329,0.855,14.275,0.855c27.6,0,52.439-8.565,74.519-25.7c-12.941-0.185-24.506-4.179-34.688-11.991
		c-10.185-7.803-17.273-17.699-21.271-29.691c4.947,0.76,8.658,1.137,11.132,1.137c4.187,0,9.042-0.76,14.56-2.279
		c-13.894-2.669-25.598-9.562-35.115-20.697c-9.519-11.136-14.277-23.84-14.277-38.114v-0.571
		c10.085,4.755,19.602,7.229,28.549,7.422c-17.321-11.613-25.981-28.265-25.981-49.963c0-10.66,2.758-20.747,8.278-30.264
		c15.035,18.464,33.311,33.213,54.816,44.252c21.507,11.038,44.54,17.227,69.092,18.558c-0.95-3.616-1.427-8.186-1.427-13.704
		c0-16.562,5.853-30.692,17.56-42.399c11.703-11.706,25.837-17.561,42.394-17.561c17.515,0,32.079,6.283,43.688,18.846
		c13.134-2.474,25.892-7.33,38.26-14.56c-4.757,14.652-13.613,25.788-26.55,33.402c12.368-1.716,23.88-4.95,34.537-9.708
		C357.458,149.793,347.462,160.166,335.471,168.735z"/>
</g>
</svg>
  </a> 
  <?php endif;?>
<?php
if ($footer['linkedin_link']):?>
  <a href="<?php echo $footer['linkedin_link'];?>"
class="footer_item__link-soc"
target="_blank" >
  <img
src="<?php bloginfo('template_directory');?>/img/linkIn.png"
alt="" />
  </a> 
  <?php endif;?>
</li> <li class="footer_item__right_item" >
  <p> (C) 2021 All rights reserved </p> 
  </li> </ul> </div> </li> </ul> </footer> </div> </div> </div> 
  <?php wp_footer();?>
<script src="https://assets.calendly.com/assets/external/widget.js"
type="text/javascript"
async></script> 
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdgHgUQaMJNRNhcE8BN3FT505NHw4yMsU"></script>  -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd6V6HBuu-gqNr6HUzmp2DvUMrHo_J51M"></script> 
<script type="text/javascript">
  (function ($) {

    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @return  object The map instance.
     */
    function initMap($el) {

      // Find marker elements within map.
      var $markers = $el.find('.marker');

      // Create gerenic map.
      var mapArgs = {
        zoom: $el.data('zoom') || 16,
        mapTypeId: google.maps.MapTypeId.SATELLITE
      };
      var map = new google.maps.Map($el[0], mapArgs);

      // Add markers.
      map.markers = [];
      $markers.each(function () {
        initMarker($(this), map);
      });

      // Center map based on markers.
      centerMap(map);

      // Return map instance.
      return map;
    }

    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   jQuery $el The jQuery element.
     * @param   object The map instance.
     * @return  object The marker instance.
     */
    function initMarker($marker, map) {

      // Get position from marker.
      var lat = $marker.data('lat');
      var lng = $marker.data('lng');
      var latLng = {
        lat: parseFloat(lat),
        lng: parseFloat(lng)
      };

      // Create marker instance.
      var marker = new google.maps.Marker({
        position: latLng,
        map: map
      });

      // Append to reference for later use.
      map.markers.push(marker);

      // If marker contains HTML, add it to an infoWindow.
      if ($marker.html()) {

        // Create info window.
        var infowindow = new google.maps.InfoWindow({
          content: $marker.html()
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
      }
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date    22/10/19
     * @since   5.8.6
     *
     * @param   object The map instance.
     * @return  void
     */
    function centerMap(map) {

      // Create map boundaries from all map markers.
      var bounds = new google.maps.LatLngBounds();
      map.markers.forEach(function (marker) {
        bounds.extend({
          lat: marker.position.lat(),
          lng: marker.position.lng()
        });
      });

      // Case: Single marker.
      if (map.markers.length == 1) {
        map.setCenter(bounds.getCenter());

        // Case: Multiple markers.
      } else {
        map.fitBounds(bounds);
      }
    }

    // Render maps on page load.
    $(document).ready(function () {
      $('.acf-map').each(function () {
        var map = initMap($(this));
      });
    });

  })(jQuery); 
  </script>

<script src="https://use.fontawesome.com/b5bf1bd49e.js"></script>
     <script type="text/javascript">
                adroll_adv_id = "MJWPHB2LT5HE3LUOREKUHR";
                adroll_pix_id = "5R75IWXLORBNLIUVRS6U4J";
                /* OPTIONAL: provide email to improve user identification */
                /* adroll_email = "username@example.com"; */
                (function () {
                    var _onload = function(){
                       if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
                        if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
                        var scr = document.createElement("script");
                        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                        scr.setAttribute('async', 'true');
                        scr.type = "text/javascript";
                        scr.src = host + "/j/roundtrip.js";
                        ((document.getElementsByTagName('head') || [null])[0] ||
                            document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                    };
                    if (window.addEventListener) {window.addEventListener('load', _onload, false);}
                    else {window.attachEvent('onload', _onload)}
                }());
            </script>
</script>
</body> 
</html>