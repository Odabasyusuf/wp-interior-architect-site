<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

  <?php if ( have_comments() ) : ?>

      <div class="blog-wrapper-box mb-30">
        <h4><?php comments_number( esc_html__('0 Comments', 'greenhash'), esc_html__('1 Comment', 'greenhash'), esc_html__('% Comments', 'greenhash')); ?></h4>
        <?php wp_list_comments('callback=greenhash_theme_comment'); ?>
      </div>
                                   
        <?php
                    // Are there comments to navigate through?
                    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                ?>
            <div class="text-center">
              <ul class="pagination">
                <li>
                  <?php //Create pagination links for the comments on the current post, with single arrow heads for previous/next
                  paginate_comments_links( array(
                    'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'greenhash' ),ENT_QUOTES), 
                    'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'greenhash' ),ENT_QUOTES)
                  ));  ?>
                </li> 
              </ul>
            </div>
<?php endif; // Check for comment navigation ?>
<?php endif; ?>
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'comment999',        
                'class_form' => 'contact-form comment-form',                         
                'title_reply'=> esc_html__( 'Leave a comment', 'greenhash' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col-md-6">
                                    <div class="position-relative mb-25">
                                      <input type="text" id="contact-name" placeholder="'.esc_attr__('Name', 'greenhash').'" name="author">
                                      <span class="icon"><i class="far fa-user"></i></span>
                                    </div>
                                  </div>',
                    'email' => '<div class="col-md-6">
                                  <div class="position-relative mb-25">
                                    <input type="email" id="contact-email" placeholder="'.esc_attr__('Email', 'greenhash').'" name="email">
                                    <span class="icon"><i class="far fa-envelope-open"></i></span>
                                  </div>
                                </div>',  
                    'phone' => '<div class="col-md-12">
                                  <div class="position-relative mb-25">
                                    <input type="text" id="contact-phone" placeholder="'.esc_attr__('Phone Number', 'greenhash').'" name="phone">
                                    <span class="icon"><i class="far fa-phone"></i></span>
                                  </div>
                                </div>',                       
                ) ),   
                'comment_field' => '<div class="col-md-12 textarea-icon">
                                      <div class="position-relative mb-25">
                                        <textarea name="comment"'.$aria_req.' class="form-control" id="comments" placeholder="'.esc_attr__('Write a Comment...', 'greenhash').'"></textarea>
                                        <span class="icon"><i class="far fa-pen-alt"></i></span>
                                      </div>
                                    </div>',                    
                 'label_submit' => 'Post a Comment',
                 'class_submit' => 'btn theme-btn btn-border',
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>
<?php if ( comments_open() ) : ?>
  <div class="comment-form-wrapper">
    <?php comment_form($comment_args); ?>
  </div>
<?php endif; ?> 