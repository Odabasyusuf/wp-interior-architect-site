<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php $greenhash_redux_demo = get_option('redux_demo'); ?>
<head>
    <!-- Meta Tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>
        <?php if(isset($greenhash_redux_demo['favicon']['url'])){?>
            <link rel="shortcut icon" href="<?php echo esc_url($greenhash_redux_demo['favicon']['url']); ?>">
        <?php } ?>
    <?php } ?>
    <?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>
    <!-- start preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

        <!-- header start -->
        <header class="header header-style-3 pr-55 pl-55">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3">
                        <?php if(isset($greenhash_redux_demo['header_logo']['url']) && $greenhash_redux_demo['header_logo']['url'] != ''){?>
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($greenhash_redux_demo['header_logo']['url']);?>" alt=""></a>
                        </div>
                    <?php }else{?>
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" alt=""></a>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="col-xl-8 col-lg-9 text-center">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <?php 
                                wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'primary',
                                        'container' => '',
                                        'menu_class' => '', 
                                        'menu_id' => '',
                                        'menu'            => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'echo'            => true,
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new greenhash_wp_bootstrap_navwalker(),
                                        'before'          => '',
                                        'after'           => '',
                                        'link_before'     => '',
                                        'link_after'      => '',
                                        'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
                                        'depth'           => 0,        
                                    )
                                ); ?>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-xl-2">
                        <div class="header-contact d-none d-xl-flex">
                            <?php if(isset($greenhash_redux_demo['contact_image']['url']) && $greenhash_redux_demo['contact_image']['url'] != ''){?>
                                <img src="<?php echo esc_url($greenhash_redux_demo['contact_image']['url']);?>" alt="">
                            <?php }else{?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/chat-icon.png" alt="">
                            <?php } ?>
                            <?php if(isset($greenhash_redux_demo['header_phone_title'])){?>
                                <a href="<?php echo esc_url($greenhash_redux_demo['header_phone_link']);?>"> <span><?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_phone_title']));?></span> <br> <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['header_phone_number']));?> </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- header end -->

        <main>