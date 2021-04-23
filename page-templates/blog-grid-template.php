<?php

/*

 * Template Name: Blog Grid

 * Description: A Page Template with a Page Builder design.

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

            <div class="col-xl-7 col-lg-7">

                <div class="page-title-content">

                  <h2><?php if(isset($greenhash_redux_demo['blog_title']) && $greenhash_redux_demo['blog_title'] != ''){?>

                    <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['blog_title']));?>

                  <?php }else{?>

                    <?php echo esc_html__( 'Blog Grid', 'greenhash' );

                  }?></h2>

                </div>

            </div>

            <div class="col-xl-5 col-lg-5">

                <div class="page-menu text-lg-right">

                    <nav>

                        <ul>

                            <li class="page-item"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'greenhash' );?></a></li>

                            <li class="page-item active"><a> <span><i class="far fa-chevron-right"></i></span> <?php if(isset($greenhash_redux_demo['blog_title']) && $greenhash_redux_demo['blog_title'] != ''){?>

                              <?php echo htmlspecialchars_decode(esc_attr($greenhash_redux_demo['blog_title']));?>

                            <?php }else{?>

                              <?php echo esc_html__( 'Blog Grid', 'greenhash' );

                            }?> </a></li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- page-title-section end -->



<!-- blog-section start -->

<section class="blog-section theme-bg-2 pt-130 pb-130 blog-grid">

	<div class="container">

		<div class="row">

			<?php 

			$args = array(   

              'post_type' => 'post', 
			  'posts_per_page' => 6,
            );  

            $wp_query = new WP_Query($args);

            while ($wp_query -> have_posts()) : $wp_query -> the_post();   

				$single_audio = get_post_meta(get_the_ID(),'_cmb_single_audio', true);

				$single_video = get_post_meta(get_the_ID(),'_cmb_single_video', true);

				$content_name = get_post_meta(get_the_ID(),'_cmb_content_name', true);

				?> 

			<div class="col-xl-4 col-lg-4 col-md-6">

				<div class="blog-box mb-30">

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
							<span><i class="far fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'greenhash'), esc_html__('1 Comment', 'greenhash'), esc_html__('% Comments', 'greenhash')); ?></span>
						</div>

						<div class="blog-title">

							<h4><a href="<?php the_permalink();?>"><?php the_title();?></a> </h4>

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

				</div>

			<?php endwhile; ?>  

		

		<div class="row">

			<div class="col-xl-12">

				<nav aria-label="Page navigation example">

					<?php greenhash_pagination();?>

				</nav>

			</div>

		</div>
	</div>
	</div>

</section>



<?php get_footer(); ?>