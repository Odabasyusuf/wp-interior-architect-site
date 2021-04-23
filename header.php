<!DOCTYPE html>

<html lang="zxx">

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

<!-- Preloader End -->

<!-- header Start -->

<header class="header header-style-1">

    <!-- header-top -->

    <div class="header-top">

        <div class="container-fluid">

            <div class="row align-items-center">

                <div class="col-xl-8 col-md-8">

                	<div class="header-top-info">
                        <?php if(isset($greenhash_redux_demo['header_phone_number'])){?>
                		<a>
                            <i class="far fa-phone"></i> <?php echo esc_attr($greenhash_redux_demo['header_phone_number']); ?>
                        </a>
                         <?php } ?>
                         <?php if(isset($greenhash_redux_demo['header_email_address'])){?>
                        <a>
                            <i class="far fa-envelope"></i> <?php echo esc_attr($greenhash_redux_demo['header_email_address']); ?>
                        </a>
                        <?php } ?>
                        <?php if(isset($greenhash_redux_demo['header_address'])){?>
                        <a>
                            <i class="far fa-map-marker-alt"></i> <?php echo esc_attr($greenhash_redux_demo['header_address']); ?>
                        </a>
                        <?php } ?>
                	</div>

                </div>

                <div class="col-xl-4 col-md-4 d-flex justify-content-end align-items-center">

                    <div class="header-top-right style-new">
                        <ul>
                            <?php if(isset($greenhash_redux_demo['header_link_user'])){?>
                            <li>
                            	<a href="<?php echo esc_url($greenhash_redux_demo['header_link_user']);?>">
                            		<i class="far fa-user"></i>
                            	</a>
                            </li>
                            <?php } ?>

                            <?php if(isset($greenhash_redux_demo['header_link_google'])){?>
                            <li>
                            	<a href="<?php echo esc_url($greenhash_redux_demo['header_link_google']);?>">
                            		<i class="fab fa-google-plus-g"></i>
                            	</a>
                            </li>
                            <?php } ?>

                            <?php if(isset($greenhash_redux_demo['header_link_twitter'])){?>
                            <li>
                            	<a href="<?php echo esc_url($greenhash_redux_demo['header_link_twitter']);?>">
                            		<i class="fab fa-twitter"></i>
                            	</a>
                            </li>
                            <?php } ?>

                            <?php if(isset($greenhash_redux_demo['header_link_facebook'])){?>
                            <li>
                            	<a href="<?php echo esc_url($greenhash_redux_demo['header_link_facebook']);?>">
                            		<i class="fab fa-facebook-f"></i>
                            	</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- header-bottom -->

    <div class="header-bottom">

        <div class="container-fluid">

            <div class="row align-items-center">

                <div class="col-xl-3 col-lg-3 col-md-3 col-8">

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

                <div class="col-xl-6 d-none d-xl-block text-center">

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

                    <div class="cart-btn">
                        <a href="#"><i class="fas fa-cart-arrow-down"></i> <span>0</span></a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-9 col-md-9 col-6 text-right d-none d-md-block">
					<div class="header-bottom-search">
						<a href="#"><i class="fas fa-search"></i></a>
					</div>
                    <?php if(isset($greenhash_redux_demo['header_button'])){?>
                   	<div class="header-bottom-btn">
                   		<a href="<?php echo esc_attr($greenhash_redux_demo['header_button_link']); ?>"><?php echo esc_attr($greenhash_redux_demo['header_button']); ?> <i class="far fa-long-arrow-right"></i></a>
                   	</div>
                    <?php } ?>
                </div>

                <div class="col-xl-12">
                    <div class="mobile-menu"></div>
                </div>

            </div>

        </div>

    </div>

</header>

<!-- header end -->


<div class="search-area">
		<div class="search-area-bg"></div>
		<a href="#" class="search-close">
			<i class="far fa-times"></i>
		</a>
		<div class="search-form">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8">
						<form method="get" action="#">
							<div class="search-field-holder">
								<input type="search" name="s" class="main-search-input" value="" placeholder="Search Your Keyword...">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>


<main>