<?php
/**
 * The Template for displaying all single posts
 */
$greenhash_redux_demo = get_option('redux_demo');
get_header(); ?>

<?php 
while (have_posts()): the_post();
  $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true);
  $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true);
  $single_instagram = get_post_meta(get_the_ID(),'_cmb_single_instagram', true);
  $single_google = get_post_meta(get_the_ID(),'_cmb_single_google', true);

  $single_audio = get_post_meta(get_the_ID(),'_cmb_single_audio', true);
  $single_video = get_post_meta(get_the_ID(),'_cmb_single_video', true);
  ?>

<?php if(isset($greenhash_redux_demo['blog_image']['url']) && $greenhash_redux_demo['blog_image']['url'] != ''){?>
  <section class="page-title-section pt-185 pb-185 img-bg bg-overlay position-relative" data-background="<?php echo esc_url($greenhash_redux_demo['blog_image']['url']);?>">
<?php }else{ ?> 
  <section class="page-title-section pt-185 pb-185 img-bg bg-overlay position-relative" data-background="<?php echo get_template_directory_uri();?>/assets/img/bg/cta-bg.jpg">
<?php } ?>     
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-7 col-lg-7">
          <div class="page-title-content">
            <h2><?php if(isset($greenhash_redux_demo['blog_details_title']) && $greenhash_redux_demo['blog_details_title'] != ''){?>
                    <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['blog_details_title']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Blog Details', 'greenhash' );
                    }
                    ?></h2>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5">
          <div class="page-menu text-lg-right">
            <nav>
              <ul>
                <li class="page-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'greenhash' );?></a></li>
                <li class="page-item active"><a> <span><i class="far fa-chevron-right"></i></span><?php if(isset($greenhash_redux_demo['blog_details_title']) && $greenhash_redux_demo['blog_details_title'] != ''){?>
                    <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['blog_details_title']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Blog Details', 'greenhash' );
                    }
                    ?></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- page-title-section end -->

  <!-- blog-section start -->
  <section class="blog-section theme-bg-2 pt-130 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-8">
          <div class="blog-details-wrapper theme-bg-2 mb-50">
            <div class="blog-details-box mb-30">
              <?php if ( has_post_format('video') ) { ?>
                <div class="blog-box-img video-wrapper">
                  <a href="<?php echo esc_url($single_video);?>">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                  </a>
                  <div class="video-overlay">
                    <a class="video-popup" href="<?php echo esc_url($single_video);?>">
                      <i class="fas fa-play"></i>
                    </a>
                  </div>
                </div>

              <?php } elseif ( has_post_format('audio') ) { ?>
                <div class="blog-box-img embed-responsive embed-responsive-16by9">
                  <iframe src="<?php echo esc_url($single_audio);?>"></iframe>
                </div>
              <?php } elseif ( has_post_thumbnail() ) { ?>
                <div class="blog-box-img">
                  <a href="<?php the_permalink();?>">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                  </a>
                </div>
              <?php } ?>
              <div class="blog-details-content-wrapper">
                <div class="blog-details-meta">
                  <span class="author"> <i class="far fa-user theme-color"></i> <?php the_author_posts_link(); ?></span>
                  <span class="blog-date"> <i class="far fa-calendar-alt theme-color"></i><?php the_time(get_option( 'date_format' ));?></span>
                  <span class="comments"> <i class="far fa-comment theme-color"></i> <?php comments_number( esc_html__('0 Comments', 'greenhash'), esc_html__('1 Comment', 'greenhash'), esc_html__('% Comments', 'greenhash')); ?> </span>
                </div>
                <h4><?php the_title();?></h4>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
              </div>
            </div>
            <?php comments_template();?>
          </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-8">
            <div class="sidebar-wrapper">
              <?php get_sidebar();?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php endwhile; ?>

<?php
get_footer();
?>