<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
$greenhash_redux_demo = get_option('redux_demo');
get_header('404'); ?> 

<section class="page-404 img-bg pt-100 pb-100" data-background="<?php echo get_template_directory_uri();?>/assets/img/404/404-bg.jpg">
    <div class="container">
        <div class="wrapper-404 img-bg" data-background="<?php echo get_template_directory_uri();?>/assets/img/404/404-bg-2.png">
            <div class="shape shape-8">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/404/img1.png" alt="">
            </div>
            <div class="row">
                <div class="col-xl-4 offset-xl-5 col-lg-5 offset-lg-4 offset-md-4">
                    <div class="content-404 pt-160 pb-215">
                        <span><?php if(isset($greenhash_redux_demo['404_title']) && $greenhash_redux_demo['404_title'] != ''){?>
                <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['404_title']));?>
                <?php }else{?>
                <?php echo esc_html__( 'OPP!', 'greenhash' );
                }?></span>
                        <h1><?php if(isset($greenhash_redux_demo['404_subtitle']) && $greenhash_redux_demo['404_subtitle'] != ''){?>
                <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['404_subtitle']));?>
                <?php }else{?>
                <?php echo esc_html__( 'This Page Are Can’t Found', 'greenhash' );
                }?></h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn theme-btn btn-border"> <?php if(isset($greenhash_redux_demo['404_text']) && $greenhash_redux_demo['404_text'] != ''){?>
                <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['404_text']));?>
                <?php }else{?>
                <?php echo esc_html__( 'Go to Home', 'greenhash' );
                }?> <i class="far fa-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer('404'); ?>

