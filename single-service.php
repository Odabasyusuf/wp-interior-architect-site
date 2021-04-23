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
                    <h2>Service Details</h2>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="page-menu text-lg-right">
                    <nav>
                        <ul>
                            <li class="page-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li class="page-item active"><a> <span><i class="far fa-chevron-right"></i></span> Services Details </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-title-section end -->

<!-- service-section start -->
<section class="service-section theme-bg-2 pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-8">
                <?php get_sidebar('service');?>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->

<!-- pricing-section start -->
<section class="pricing-section pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 mx-auto">
                <div class="section-title-2 text-center mb-75">
                    <h1>our offer</h1>
                    <h2>Latest Pricing Plan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing mb-30">
                    <h1>Regular Plan</h1>
                    <h2>$45.99</h2>
                    <ul>
                        <li>
                            <p> <i class="far fa-check-circle"></i> 1/2 ounce Flowers</p>
                            <p> <i class="far fa-check-circle"></i> 1 Oil cartage</p>
                            <p> <i class="far fa-check-circle"></i> 1 vaporizer</p>
                            <p> <i class="far fa-check-circle"></i> 1 Cannabis Napkin Pack</p>
                            <p> <i class="far fa-check-circle"></i> 1 Pack of seeds</p>
                            <p> <i class="far fa-check-circle"></i> 1 Organic Hemp pack</p>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>?page_id=71" class="btn btn-border theme-btn2">Choose Plan <i class="far fa-long-arrow-right"></i> </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing active-pricing mb-30">
                    <div class="pricing-spacial">
                        <i class="fas fa-star"></i>
                    </div>
                    <h1>Premium Plan</h1>
                    <h2>$95.99</h2>
                    <ul>
                        <li>
                            <p> <i class="far fa-check-circle"></i> 1/2 ounce Flowers</p>
                            <p> <i class="far fa-check-circle"></i> 1 Oil cartage</p>
                            <p> <i class="far fa-check-circle"></i> 1 vaporizer</p>
                            <p> <i class="far fa-check-circle"></i> 1 Cannabis Napkin Pack</p>
                            <p> <i class="far fa-check-circle"></i> 1 Pack of seeds</p>
                            <p> <i class="far fa-check-circle"></i> 1 Organic Hemp pack</p>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>?page_id=71" class="btn btn-border theme-btn2">Choose Plan <i class="far fa-long-arrow-right"></i> </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-pricing mb-30">
                    <h1>Gold Plan</h1>
                    <h2>$105.99</h2>
                    <ul>
                        <li>
                            <p> <i class="far fa-check-circle"></i> 1/2 ounce Flowers</p>
                            <p> <i class="far fa-check-circle"></i> 1 Oil cartage</p>
                            <p> <i class="far fa-check-circle"></i> 1 vaporizer</p>
                            <p> <i class="far fa-check-circle"></i> 1 Cannabis Napkin Pack</p>
                            <p> <i class="far fa-check-circle"></i> 1 Pack of seeds</p>
                            <p> <i class="far fa-check-circle"></i> 1 Organic Hemp pack</p>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>?page_id=71" class="btn btn-border theme-btn2">Choose Plan <i class="far fa-long-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pricing-section end -->

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
                    <a href="<?php echo esc_url(home_url('/')); ?>?page_id=71" class="btn theme-btn2 btn-border">Visit Our Shop <i class="far fa-long-arrow-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php
get_footer();
?>