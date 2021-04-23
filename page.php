<?php
/**
 * The Template for displaying all single posts
 */
 $greenhash_redux_demo = get_option('redux_demo');
get_header(); ?>

<?php 
    while (have_posts()): the_post();
    $author_desc = get_post_meta(get_the_ID(),'_cmb_author_desc', true);
    $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true);
    $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true);
    $single_linkedin = get_post_meta(get_the_ID(),'_cmb_single_linkedin', true);
    $single_image = get_post_meta(get_the_ID(),'_cmb_single_image', true);
?>


<?php if(isset($greenhash_redux_demo['blog_image']['url']) && $greenhash_redux_demo['blog_image']['url'] != ''){?>
        <div class="breadcrumb-area breadcrumb-bg pt-260 pb-265" style="background-image:url(<?php echo esc_url($greenhash_redux_demo['blog_image']['url']);?>)">
    <?php }else{?>     
        <div class="breadcrumb-area breadcrumb-bg pt-260 pb-265" style="background-image:url(<?php echo (get_template_directory_uri().'/assets/img/bg/page-title-bg.jpg');?>)">   
    <?php } ?>        
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-text text-center">
                            <h1><?php the_title();?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- Page Breadcrumbs End -->

  <!-- Main Body Content Start -->
  <section class="blog-area pt-120 pb-80">
            <div class="container">
                <div class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="col-lg-8">
                        <article class="postbox post format-image mb-40">
                                <?php if ( has_post_thumbnail() ) { ?>
                                <div class="postbox__thumb">
                                    <a href="#">
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>">
                                    </a>
                                </div>
                            <?php } ?>
                            <div class="postbox__text bg-none">
                                <div class="post-meta mb-15">
                                    <span><i class="far fa-calendar-check"></i> <?php the_time(get_option( 'date_format'));?> </span>
                                    <span><i class="far fa-user"></i> <?php the_author_posts_link(); ?></span>
                                </div>
                                <?php if ( is_sticky() ) echo '<span class="featured-post">' . esc_html__( 'Sticky', 'greenhash' ) . '</span>';?>
                                <div class="post-text mb-20 page-content">
                                    <?php the_content(); ?>
                                    <?php wp_link_pages( array(
                                    'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'greenhash' ),
                                    'after'       => '</div>',
                                    'link_before' => '<span class="page-number">',
                                    'link_after'  => '</span>',) ); 
                                    ?>
                                </div>
                            </div>
                            <?php comments_template();?>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </section> 

<?php endwhile; ?>
<?php
get_footer();
?>
    