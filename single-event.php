<?php

/**

 * The Template for displaying all single posts

 */

$greenhash_redux_demo = get_option('redux_demo');

get_header(); ?>



<?php 

while (have_posts()): the_post();

?>



<section class="page-title-section pt-185 pb-185 img-bg bg-overlay position-relative" data-background="<?php echo get_template_directory_uri();?>/assets/img/bg/cta-bg.jpg">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-xl-7 col-lg-7">

                <div class="page-title-content">

                    <h2>Event Details</h2>

                </div>

            </div>

            <div class="col-xl-5 col-lg-5">

                <div class="page-menu text-lg-right">

                    <nav>

                        <ul>

                            <li class="page-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>

                            <li class="page-item active"><a> <span><i class="far fa-chevron-right"></i></span> Event Details </a></li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- page-title-section end -->



<!-- service-section start -->

<section class="event-section theme-bg-2 pt-130 pb-100">

    <div class="container">

        <div class="row">

            <div class="col-xl-8 col-lg-8">

                <?php the_content(); ?>

                <?php wp_link_pages(); ?>

            </div>



            <div class="col-xl-4 col-lg-4 col-md-8">

                <div class="sidebar-wrapper">

                    <?php get_sidebar('event');?>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- service-section end -->



<!-- cta-section start -->

<section class="cta-section pt-130 pb-100 img-bg position-relative bg-overlay" data-background="<?php echo get_template_directory_uri();?>/assets/img/bg/cta-bg.jpg">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-xl-8 col-lg-8">

                <div class="cta-section-content mb-30">

                    <div class="section-title-2">

                        <h1>get a quote</h1>

                        <h2 class="text-white">Looking For Organic Marijuana

                        & Trusted & Health Care ?</h2>

                        <p>Don't Hesitate To Contact With Us</p>

                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-lg-4">

                <div class="cta-btn text-lg-right mb-35">

                    <a href="<?php echo esc_url(home_url('/')); ?>?page_id=71" class="btn theme-btn2 btn-border">Contact Us <i class="far fa-long-arrow-right"></i> </a>

                </div>

            </div>

        </div>

    </div>

</section>



<?php endwhile; ?>



<?php

get_footer();

?>