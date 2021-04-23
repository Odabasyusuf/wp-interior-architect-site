<!DOCTYPE html><html <?php language_attributes(); ?>><?php $greenhash_redux_demo = get_option('redux_demo'); ?><head>    <!-- Meta Tags -->    <meta charset="<?php bloginfo( 'charset' ); ?>">    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>        <?php if(isset($greenhash_redux_demo['favicon']['url'])){?>            <link rel="shortcut icon" href="<?php echo esc_url($greenhash_redux_demo['favicon']['url']); ?>">        <?php } ?>    <?php } ?>    <?php wp_head(); ?> </head><body <?php body_class(); ?>>    <!-- start preloader -->    <div id="preloader">        <div class="preloader">            <span></span>            <span></span>        </div>    </div>    <!-- preloader end  -->    <!-- header start -->    <header class="header header-transparent">        <!-- header-top -->        <div class="header-top">            <div class="container">                <div class="row align-items-center">                    <div class="col-xl-6 col-md-6">                        <div class="header-top-left">                            <ul>                                <?php if(isset($greenhash_redux_demo['header_option_1'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_option_1']);?>"><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_option_1']));?></a></li>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_option_2'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_option_2']);?>"><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_option_2']));?></a></li>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_option_3'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_option_3']);?>"><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_option_3']));?></a></li>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_option_4'])){?>                                    <li><a class="underline" href="<?php echo esc_url($greenhash_redux_demo['header_link_option_4']);?>"><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_option_4']));?></a></li>                                <?php } ?>                            </ul>                        </div>                    </div>                    <div class="col-xl-6 col-md-6">                        <div class="header-top-right header-top-right-2">                            <ul>                                <?php if(isset($greenhash_redux_demo['header_time'])){?>                                <li class="open-hour"> <i class="fal fa-clock mr-2"></i> <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_time']));?></li>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_link_facebook'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_facebook']);?>"><i class="fab fa-facebook-f"></i></a></li>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_link_twitter'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_twitter']);?>"><i class="fab fa-twitter"></i></a></li>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_link_google'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_google']);?>"><i class="fab fa-google-plus-g"></i></a></li>                                <?php } ?>                            </ul>                        </div>                    </div>                </div>            </div>        </div>        <div class="header-logo-area">            <div class="container">                <div class="row align-items-center">                    <div class="col-xl-4 col-lg-4 d-none d-xl-block">                        <div class="header-phone d-flex">                            <div class="phone-icon">                                <i class="far fa-phone"></i>                            </div>                            <div class="phone-number text-white">                                <?php if(isset($greenhash_redux_demo['header_phone_title_2'])){?>                                <span><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_phone_title_2']));?></span>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['header_phone_number_2'])){?>                                <h5><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_phone_number_2']));?></h5>                                <?php } ?>                            </div>                        </div>                    </div>                    <div class="col-xl-4 col-lg-4">                        <?php if(isset($greenhash_redux_demo['header_logo_2']['url']) && $greenhash_redux_demo['header_logo_2']['url'] != ''){?>                            <div class="logo text-lg-center">                                <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo esc_url($greenhash_redux_demo['header_logo_2']['url']);?>" alt="logo"> </a>                            </div>                        <?php }else{?>                            <div class="logo text-lg-center">                                <a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-2.png" alt="logo"> </a>                            </div>                        <?php } ?>                    </div>                    <div class="col-xl-4 col-lg-4 d-none d-xl-block">                        <div class="header-location d-flex justify-content-end">                            <div class="location-icon">                                <i class="far fa-map-marker-alt"></i>                            </div>                            <div class="location-address text-white">                                <?php if(isset($greenhash_redux_demo['location_title'])){?>                                    <span><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['location_title']));?></span>                                <?php } ?>                                <?php if(isset($greenhash_redux_demo['location_subtitle'])){?>                                    <h5><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['location_subtitle']));?></h5>                                <?php } ?>                            </div>                        </div>                    </div>	                <div class="col-xl-12 d-xl-none">		                <div class="mobile-menu mobile-style-2"></div>	                </div>                </div>            </div>        </div>        <!-- header-bottom -->        <div class="header-bottom d-xl-block d-none">            <div class="container">                <div class="header-bottom-2">                    <div class="row align-items-center">                        <div class="col-xl-8 col-lg-9">                            <div class="main-menu">                                <nav id="mobile-menu">                                    <?php                                     wp_nav_menu(                                         array(                                             'theme_location' => 'primary',                                            'container' => '',                                            'menu_class' => '',                                             'menu_id' => '',                                            'menu'            => '',                                            'container_class' => '',                                            'container_id'    => '',                                            'echo'            => true,                                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',                                            'walker'            => new greenhash_wp_bootstrap_navwalker(),                                            'before'          => '',                                            'after'           => '',                                            'link_before'     => '',                                            'link_after'      => '',                                            'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',                                            'depth'           => 0,                                                )                                    ); ?>                                </nav>                            </div>                        </div>                        <div class="col-xl-4 col-lg-3 text-right">	                        <div class="cart-btn-2">		                        <a href="#"><i class="fas fa-cart-arrow-down"></i> <span>0</span></a>	                        </div>                            <div class="header-bottom-right d-inline-block">                                <ul>                                    <?php if(isset($greenhash_redux_demo['header_link_user'])){?>                                    <li><a href="<?php echo esc_url($greenhash_redux_demo['header_link_user']);?>"><i class="far fa-user"></i></a></li>                                    <?php } ?>                                    <li><a class="info-bar" href="javascript:void(0);"><i class="far fa-bars"></i></a></li>                                </ul>                            </div>                        </div>                    </div>                </div>            </div>        </div>        <div class="extra-info">            <div class="close-icon">                <button>                    <i class="far fa-window-close"></i>                </button>            </div>            <?php if(isset($greenhash_redux_demo['header_logo_3']['url']) && $greenhash_redux_demo['header_logo_3']['url'] != ''){?>                <div class="logo-side mb-30">                    <a href="<?php echo esc_url(home_url('/')); ?>">                        <img src="<?php echo esc_url($greenhash_redux_demo['header_logo_3']['url']);?>" alt="" />                    </a>                </div>            <?php }else{?>                <div class="logo-side mb-30">                    <a href="<?php echo esc_url(home_url('/')); ?>">                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo-white.png" alt="" />                    </a>                </div>            <?php } ?>            <div class="side-info mb-30">                <div class="contact-list mb-30">                    <?php if(isset($greenhash_redux_demo['address_title'])){?>                    <h4><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['address_title']));?></h4>                    <?php } ?>                    <?php if(isset($greenhash_redux_demo['address_subtitle'])){?>                    <p><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['address_subtitle']));?></p>                    <?php } ?>                </div>                <div class="contact-list mb-30">                    <?php if(isset($greenhash_redux_demo['phone_title'])){?>                    <h4><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['phone_title']));?></h4>                    <?php } ?>                    <?php if(isset($greenhash_redux_demo['phone_subtitle_1'])){?>                    <p><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['phone_subtitle_1']));?></p>                    <?php } ?>                    <?php if(isset($greenhash_redux_demo['phone_subtitle_2'])){?>                    <p><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['phone_subtitle_2']));?></p>                    <?php } ?>                </div>                <div class="contact-list mb-30">                    <?php if(isset($greenhash_redux_demo['email_title'])){?>                    <h4><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['email_title']));?></h4>                    <?php } ?>                    <?php if(isset($greenhash_redux_demo['email_subtitle_1'])){?>                    <p><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['email_subtitle_1']));?></p>                    <?php } ?>                    <?php if(isset($greenhash_redux_demo['email_subtitle_2'])){?>                    <p><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['email_subtitle_2']));?></p>                    <?php } ?>                </div>            </div>            <div class="instagram">                <?php if(isset($greenhash_redux_demo['header_image_1']['url']) && $greenhash_redux_demo['header_image_1']['url'] != ''){?>                    <a href="#"><img src="<?php echo esc_url($greenhash_redux_demo['header_image_1']['url']);?>" alt=""></a>                <?php }else{?>                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/portfolio-2.jpg" alt=""></a>                <?php } ?>                <?php if(isset($greenhash_redux_demo['header_image_2']['url']) && $greenhash_redux_demo['header_image_2']['url'] != ''){?>                    <a href="#"><img src="<?php echo esc_url($greenhash_redux_demo['header_image_2']['url']);?>" alt=""></a>                <?php }else{?>                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/portfolio-3.jpg" alt=""></a>                <?php } ?>                <?php if(isset($greenhash_redux_demo['header_image_3']['url']) && $greenhash_redux_demo['header_image_3']['url'] != ''){?>                    <a href="#"><img src="<?php echo esc_url($greenhash_redux_demo['header_image_3']['url']);?>" alt=""></a>                <?php }else{?>                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/portfolio-4.jpg" alt=""></a>                <?php } ?>                <?php if(isset($greenhash_redux_demo['header_image_4']['url']) && $greenhash_redux_demo['header_image_4']['url'] != ''){?>                    <a href="#"><img src="<?php echo esc_url($greenhash_redux_demo['header_image_4']['url']);?>" alt=""></a>                <?php }else{?>                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/portfolio-5.jpg" alt=""></a>                <?php } ?>                 <?php if(isset($greenhash_redux_demo['header_image_5']['url']) && $greenhash_redux_demo['header_image_5']['url'] != ''){?>                    <a href="#"><img src="<?php echo esc_url($greenhash_redux_demo['header_image_5']['url']);?>" alt=""></a>                <?php }else{?>                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/portfolio-6.jpg" alt=""></a>                <?php } ?>                 <?php if(isset($greenhash_redux_demo['header_image_6']['url']) && $greenhash_redux_demo['header_image_6']['url'] != ''){?>                    <a href="#"><img src="<?php echo esc_url($greenhash_redux_demo['header_image_6']['url']);?>" alt=""></a>                <?php }else{?>                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/portfolio-7.jpg" alt=""></a>                <?php } ?>             </div>            <div class="social-icon-right mt-20">                <?php if(isset($greenhash_redux_demo['header_link_facebook'])){?>                <a href="<?php echo esc_url($greenhash_redux_demo['header_link_facebook']);?>">                    <i class="fab fa-facebook-f"></i>                </a>                <?php } ?>                 <?php if(isset($greenhash_redux_demo['header_link_twitter'])){?>                <a href="<?php echo esc_url($greenhash_redux_demo['header_link_twitter']);?>">                    <i class="fab fa-twitter"></i>                </a>                <?php } ?>                 <?php if(isset($greenhash_redux_demo['header_link_google'])){?>                <a href="<?php echo esc_url($greenhash_redux_demo['header_link_google']);?>">                    <i class="fab fa-google-plus-g"></i>                </a>                <?php } ?>                 <?php if(isset($greenhash_redux_demo['header_link_instagram'])){?>                <a href="<?php echo esc_url($greenhash_redux_demo['header_link_instagram']);?>">                    <i class="fab fa-instagram"></i>                </a>                <?php } ?>             </div>        </div>    </header>    <!-- header end -->    <main>