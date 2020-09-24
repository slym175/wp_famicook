<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @package FamiCook
 */

 //Declare Vars
$comment_send = __( 'Gửi', TEXTDOMAIN );
$comment_reply = __( 'Trả lời', TEXTDOMAIN );
$comment_reply_to = __( 'Trả lời bình luận của', TEXTDOMAIN ).'%s';
 
$comment_author = __( 'Họ - Tên', TEXTDOMAIN );
$comment_email = __( 'E-mail', TEXTDOMAIN );
$comment_body = __( 'Nội dung', TEXTDOMAIN );

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Comment Reply Script.
if ( comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}
?>
<section id="comments" class="comments-area">
    <?php
        //Array
        $comments_args = array(
            'fields' => array(
                'author' => '<div class="col-md-6 cmt-input name-cmt comment-form-author"><input id="author" name="author" aria-required="true" placeholder="' . $comment_author .'"></input></div>',
                'email' => '<div class="col-md-6 cmt-input mail-cmt comment-form-email"><input id="email" name="email" placeholder="' . $comment_email .'"></input></div>',
            ),
            'label_submit' => __( $comment_send ),
            'title_reply' => __( $comment_reply ),
            'title_reply_before' => '<div class="comment-detail"><div class="number-cmt">',
            'title_reply_after' =>  '</div></div>',
            'title_reply_to' => __( $comment_reply_to ),
            'comment_field' => '<div class="col-md-12 cmt-input-full nd-cmt comment-form-comment"><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></div>',
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            'id_submit' => __( 'comment-submit' ),
            'class_form' => 'cmt-form',
            'class_submit' => 'btn btn-seemore btn btn-gui',
            'submit_button' => '<div class=" btn-famicook">
                <button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s <img src="'.THEME_URL_URI.'/assets/images/gui.png" alt="Image"></button>
            </div>'
        );
        comment_form( $comments_args );
    ?>
    <?php if ( have_comments() ) : ?>
        <?php
            $comments_number = get_comments_number();
        ?>
        <div class="comment-detail">
            <div class="number-cmt">
                <p><strong><?=__('Bình luận: ', TEXTDOMAIN)?></strong><?= $comments_number." ".__('bình luận', TEXTDOMAIN) ?></p>
                <div class="select-comt">
                    <?php famicook_custom_navigation_comment(
                        array(
                            'prev_text' => __('Cũ hơn', TEXTDOMAIN),
                            'next_text' => __('Mới hơn', TEXTDOMAIN),
                        )
                    ) ?>
                </div>
            </div>
        </div>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'callback' => 'better_comments'
                ) );
            ?>
        </ol><!-- .comment-list -->

        <?php 
            // paginate_comments_links( array(
            //     'prev_text'  => 'back',
            //     'next_text' => 'forward'
            // ) );
        ?>
    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hello-elementor' ); ?></p>
    <?php endif; ?>

</section><!-- .comments-area -->
