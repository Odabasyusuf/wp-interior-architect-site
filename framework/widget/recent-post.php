<?php

/**

 * Recent_Posts widget class

 *

 * @since 2.8.0

 */

class greenhash_widget_newss extends WP_Widget {



    function __construct() {

        $widget_ops = array('classname' => 'widget_news', 'description' => esc_html__( "The most recent posts on your site", 'greenhash') );

        parent::__construct('recent-posts', esc_html__('greenhash Recent Posts', 'greenhash'), $widget_ops);

        $this->alt_option_name = 'widget_news';



    }



    function widget($args, $instance) {

        $cache = wp_cache_get('greenhash_widget_newss', 'widget');



        if ( !is_array($cache) )

            $cache = array();



        if ( ! isset( $args['widget_id'] ) )

            $args['widget_id'] = $this->id;



        if ( isset( $cache[ $args['widget_id'] ] ) ) {

            echo $cache[ $args['widget_id'] ];

            return;

        }



        ob_start();

        extract($args);



        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts', 'greenhash' );

        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;

        if ( ! $number )

            $number = 10;

        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;



        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

        if ($r->have_posts()) :

?>

        <div id="recent-posts-2" class="sidebar-box mb-40">        
            <?php if ( $title ) echo htmlspecialchars_decode(esc_attr($before_title)) . esc_attr($title) . htmlspecialchars_decode(esc_attr($after_title)); ?>
        <ul class="recent-posts">
             <?php while ( $r->have_posts() ) : $r->the_post(); 

            $recent_image = get_post_meta(get_the_ID(),'_cmb_recent_image', true);

            $recent_title = get_post_meta(get_the_ID(),'_cmb_recent_title', true);

            ?>
            <li>
                <div class="widget-posts-image">
                    <a href="<?php the_permalink() ?>"><img src="<?php echo esc_url($recent_image);?>" alt=""></a>
                </div>
                <div class="widget-posts-body">
                    <h6 class="widget-posts-title"><a href="<?php the_permalink() ?>"><?php echo htmlspecialchars_decode(esc_attr($recent_title));?></a></h6>
                    <div class="widget-posts-meta"><?php the_time(get_option( 'date_format'));?></div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>





<?php

        // Reset the global $the_post as this query will have stomped on it

        wp_reset_postdata();



        endif;



        $cache[$args['widget_id']] = ob_get_flush();

        wp_cache_set('greenhash_widget_newss', $cache, 'widget');

    }



    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);

        $instance['number'] = (int) $new_instance['number'];

        $instance['show_date'] = (bool) $new_instance['show_date'];



        $alloptions = wp_cache_get( 'alloptions', 'options' );

        if ( isset($alloptions['widget_news']) )

            delete_option('widget_news');



        return $instance;

    }





    function form( $instance ) {

        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;

        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;

?>

        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'greenhash' ); ?></label>

        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>



        <p><label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php esc_html_e( 'Number of posts to show:', 'greenhash' ); ?></label>

        <input id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" /></p>



        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_date' )); ?>" />

        <label for="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>"><?php esc_html_e( 'Display post date?', 'greenhash' ); ?></label></p>

<?php

    }

}



















class greenhash_widget_search extends WP_Widget {



    function __construct() {

        $widget_ops = array('classname' => 'widget_search', 'description' => esc_html__( "Search on your site", 'greenhash') );

        parent::__construct('search', esc_html__('greenhash Search', 'greenhash'), $widget_ops);

        $this->alt_option_name = 'widget_search';



    }



    function widget($args, $instance) {

        $cache = wp_cache_get('greenhash_widget_search', 'widget');



        if ( !is_array($cache) )

            $cache = array();



        if ( ! isset( $args['widget_id'] ) )

            $args['widget_id'] = $this->id;



        if ( isset( $cache[ $args['widget_id'] ] ) ) {

            echo $cache[ $args['widget_id'] ];

            return;

        }



        ob_start();

        extract($args);



        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Search', 'greenhash' );

        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );



        ?>

        <?php echo htmlspecialchars_decode(esc_attr($before_widget)); ?>

            <div class="sidebar-box search-box mb-40">
                <div class="widget-title-box mb-30">
                    <span class="animate-border"></span>
                    <h3 class="widget-title"><?php echo esc_html__( 'Search Objects', 'greenhash' );?></h3>
                </div>
                <form action="<?php echo esc_url(home_url('/')) ?>" class="search-form">
                    <input type="search" placeholder="<?php echo esc_html__( 'Search Keywords', 'greenhash' );?>" name="s">
                    <button type="submit"> <i class="far fa-search"></i> </button>
                </form>
            </div>



        <?php echo htmlspecialchars_decode(esc_attr($after_widget)); ?>

<?php

        // Reset the global $the_post as this query will have stomped on it

   



        $cache[$args['widget_id']] = ob_get_flush();

        wp_cache_set('greenhash_widget_search', $cache, 'widget');

    }



    function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags($new_instance['title']);



        $alloptions = wp_cache_get( 'alloptions', 'options' );

        if ( isset($alloptions['widget_search']) )

            delete_option('widget_search');



        return $instance;

    }



    



    function form( $instance ) {

        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';

?>

        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'greenhash' ); ?></label>

        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>



      

<?php

    }

}







function greenhash_register_custom_widgets() {

    register_widget( 'greenhash_widget_search' );

    register_widget( 'greenhash_widget_newss' );

}

add_action( 'widgets_init', 'greenhash_register_custom_widgets' );    





