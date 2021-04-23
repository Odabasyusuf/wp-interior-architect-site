<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $greenhash_redux_demo; 
$b=$greenhash_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>
.top_menu .left_side p a{
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.top_menu .right_side .list li:hover a {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.main_menu .navbar.navbar-expand-lg .navbar-nav li.submenu .dropdown-menu li:hover a {
  background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}

.main_btn {
  border: 1px solid <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
   background-image: linear-gradient(30deg, <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?> 50%, transparent 50%);
}
.main_btn:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>!important;
}
.main_menu .navbar.navbar-expand-lg .navbar-nav li.submenu .dropdown-menu .submenu .dropdown-menu li:hover a {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.left_title p:before {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.room_slider .owl-prev:hover, .room_slider .owl-next:hover {
  background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
      border-color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.room_item .room_text h4:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.feature_item i {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.our_hotel_inner .our_htl_text h5 a {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.counter_item .media .media-body p {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.testimonials_area {
  background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.main_title h2:before {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.offer_item .offer_img h4 {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.offer_item .offer_text a {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.h_blog_item h4:hover {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.center_title h2:before, .center_title h2:after, .f_title h3:before, .breadcrumb_text h2:before, .r_title h3:before, .main_title2:before {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.gallery_item .gallery_text h4:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.input-group-append .submit_btn:hover, .touch_inner .drop_message .contact_us_form .form-group .submit_btn:hover, .drop_query .submit_btn:hover, #review_form_wrapper .comment-form .form-submit .submit:hover, .contact_us_form .form-group .submit_btn:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>!important;
}
.footer_widgets_area .input-group-append .submit_btn {
      border: 1px solid <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>!important;
      background-image: linear-gradient(30deg, <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?> 50%, transparent 50%)!important;
}
.about_widget .list li a:hover {
      border-color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
    color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.link_widget .list li a:hover {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.testi_item p:before {
  background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
  border-top: 1px solid #fff;
  top: 1px;
}
.breadcrumb_text .link a.active {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.main_blog_item .blog_text .blog_date .date_text a {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.main_blog_item .blog_text .blog_date .cat_text .list li a:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.main_blog_item .blog_text h4:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.recent_widget .recent_w_inner .media .media-body h4:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.single-widget h3:after {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.widget_categories .cat-item a:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.wp-tag-cloud li:hover a {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
          border-color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.blog_item_two .blog_text .date a {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.blog_item_two:hover .blog_text h4 {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.footer_copyright .copyright_inner a {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.single_element_text p a {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.form-submit input.submit_btn:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
  border-color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.submit_btn {
  background-image: linear-gradient(30deg, <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?> 50%, transparent 50%);
      border: 1px solid <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.facilities_item .media .d-flex i:before {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.about_hotel_inner .ab_hotel_img:before, .conditions_area .con_title h2:before, #hb_room_reviews #comments h2:after, #hb_room_pricing_plans h4.hb_room_pricing_plan_data:after, .home_banner_area .home_two_text_inner .home_banner_box .book_room_box .book_table_item h3:before {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.contact_form_area .contact_us_form .form-group .submit_btn {
      border: 1px solid <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>!important;
      background-image: linear-gradient(30deg, <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?> 50%, transparent 50%)!important;
}
.room_list_item .room_text h6 {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.facilities_room .faci_item_inner .faci_r_item .faci_r_item_box {
      border-bottom: 4px solid <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.touch_inner .drop_message .contact_us_form .form-group .submit_btn, .drop_query .submit_btn, #review_form_wrapper .comment-form .form-submit .submit, .contact_us_form .form-group .submit_btn {
  border: 1px solid <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>!important;
      background-image: linear-gradient(30deg, <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?> 50%, transparent 50%)!important;
}
.facilities_room .faci_item_inner .faci_r_item .faci_r_item_box i {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.black_gallery .g_fillter .list li:hover a, .black_gallery .g_fillter .list li.active a {
      color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.g_one_inner .gallery_one_item a i {
      background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.single_title.dark h2:before, .black_gallery .g_fillter .list li a:before, .bg_color:before, .feature_room .room_item .room_text p:before, .our_menu_area .menu_title h2:before, .spa_inner .spa_text h3:before {
  background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.testimonials_area.testi_two .testi_item .media .media-body h4 span {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
 .our_menu_area .menu_tabs li a {
 background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.our_menu_area .our_menu_inner .tab-content .tab-pane .menu_item h4 {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.events_item .events_text .date a {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.events_item .events_text h4:hover {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.event_date_inner .media .d-flex i {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.g_fillter .list li:hover a, .g_fillter .list li.active a {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.g_fillter .list li a:before {
  background: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.submit_btn:hover {
      border-color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}
.error_area .error_text h3 {
  color: <?php echo esc_attr($greenhash_redux_demo['main-color-1']); ?>;
}