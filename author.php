<?php
/*
 * The Template for displaying all posts
 * 
 */
 $greenhash_redux_demo = get_option('redux_demo');
get_header(); ?>

<?php if(isset($greenhash_redux_demo['blog_image']['url']) && $greenhash_redux_demo['blog_image']['url'] != ''){?>
  <section class="page-title-section pt-185 pb-185 img-bg bg-overlay position-relative" data-background="<?php echo esc_url($greenhash_redux_demo['blog_image']['url']);?>">
<?php }else{ ?> 
  <section class="page-title-section pt-185 pb-185 img-bg bg-overlay position-relative" data-background="<?php echo get_template_directory_uri();?>/assets/img/bg/cta-bg.jpg">
<?php } ?>  
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="page-title-content">
                  <h2><?php
                      /*
                       * Queue the first post, that way we know what author
                       * we're dealing with (if that is the case).
                       *
                       * We reset this later so we can run the loop properly
                       * with a call to rewind_posts().
                       */
                      the_post();

                      printf( esc_html__( 'All posts by %s', 'greenhash' ), get_the_author() );
                      ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-title-section end -->

<!-- blog-section start -->
<section class="blog-section theme-bg-2 pt-130 pb-100 blog-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="blog-details-wrapper theme-bg-2">
                    <div class="row">
                        <?php 
                            while (have_posts()): the_post();
                            $single_audio = get_post_meta(get_the_ID(),'_cmb_single_audio', true);
                            $single_video = get_post_meta(get_the_ID(),'_cmb_single_video', true);
                            $content_name = get_post_meta(get_the_ID(),'_cmb_content_name', true);
                        ?> 
                            <div class="blog-box mb-40">
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
                                <div class="blog-box-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-check"></i> <?php the_time(get_option( 'date_format'));?></span>
                                        <span><i class="far fa-user"></i> <?php the_author_posts_link(); ?></span>
                                        <span><i class="far fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'greenhash'), esc_html__('1 Comment', 'greenhash'), esc_html__('% Comments', 'greenhash')); ?></span>
                                    </div>
                                    <div class="blog-title">
                                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a> </h4>
                                    </div>
                                    <div class="blog-short-desc">
                                      <p><?php if(isset($greenhash_redux_demo['blog_excerpt'])){?>
                                        <?php echo esc_attr(greenhash_excerpt2($greenhash_redux_demo['blog_excerpt'])); ?>
                                      <?php }else{?>
                                        <?php echo esc_attr(greenhash_excerpt2(30)); 
                                      }
                                      ?></p>
                                    </div>
                                    <div class="read-more mt-30">
                                        <a href="<?php the_permalink();?>" class="btn btn-2"><?php if(isset($greenhash_redux_demo['read_more'])){?>
                                        <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['read_more']));?>
                                        <?php }else{?>
                                        <?php echo esc_html__( 'Read more', 'greenhash' );
                                        }
                                        ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>   
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <nav aria-label="Page navigation example">
                                <?php greenhash_pagination();?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="sidebar-wrapper">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    get_footer();
?>