<?php

/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 9:55 AM
 */


define('PAGE_SHOPPINGCART_ID', 13);
define('PAGE_SHOPADDRESS_ID', 198);

define('THEME_URL', get_template_directory());
define('THEME_URL_URI', get_template_directory_uri());
define('TEXTDOMAIN', 'famicook');
define('PATH_URL_WIDGET', THEME_URL . '/widget/');

require_once THEME_URL . '/inc/cla_nanoweb.php';
require_once THEME_URL . '/inc/helper/cla_helper.php';
require_once THEME_URL . '/inc/helper/cla_category.php';
// require_once THEME_URL . '/inc/helper/woocommerce.php';
// require_once THEME_URL . '/inc/helper/cla_woocommerce.php';
require_once THEME_URL . '/inc/helper/ajax.php';
require_once THEME_URL . '/inc/layouts/comments.php';
require_once THEME_URL . '/inc/layouts/famicook_shortcode.php';
require_once THEME_URL . '/inc/woocommerce.php';

//Widget
require_once THEME_URL . '/inc/widget/introduction_widget.php';

require_once THEME_URL . '/inc/famicook.php';
if (!function_exists('famicook_setup')) {
    function famicook_setup()
    {
        /* Thiết lập textdomain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('famicook', $language_folder);

        /* Tạo menu */
        register_nav_menus(
            array(
                'primary-menu' => __('Primary Menu', TEXTDOMAIN),
                'header-menu' => __('Header Menu', TEXTDOMAIN),
                'footer-menu-company' => __('Footer Menu Company', TEXTDOMAIN),
                'footer-menu-services' => __('Footer Menu Services', TEXTDOMAIN),
                'footer-menu-links' => __('Footer Menu Links', TEXTDOMAIN),
                'home-mobile-menu' => __('Home Mobile Menu', TEXTDOMAIN),
                'social-menu' => __('Social menu', TEXTDOMAIN),
                'suport_information' => __('Menu Suport Information', TEXTDOMAIN),
            )
        );

        /* Thêm custom background */
        $default_background = array(
            'default-color' => '#fff'
        );
        add_theme_support('custom-background', $default_background);

        /* Thêm title tag */
        add_theme_support('title-tag');

        /* Thêm post thumbnail */
        add_theme_support('post-thumbnails');
        add_image_size('thumbnails_image_medium', 653, 383, true);
        set_post_thumbnail_size(196, 196, true);
        
        /* Thêm automatic feed link */
        add_theme_support('automatic-feed-links');

        /* Thêm post format */
        add_theme_support('post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));

        /* Tạo sidebar */
        $side_bar = array(
            'name' => __('Main Sidebar', TEXTDOMAIN),
            'id' => 'main-sidebar',
            'description' => __('Description Sidebar', TEXTDOMAIN),
            'class' => 'main-sidebar',
        );
        register_sidebar($side_bar);

        /* Tạo sidebar */
        // $side_bar_page = array(
        //     'name' => __('Page Sidebar', TEXTDOMAIN),
        //     'id' => 'page-sidebar',
        //     'description' => __('Description Sidebar', TEXTDOMAIN),
        //     'class' => 'page-sidebar',
        // );
        // register_sidebar($side_bar_page);

        /* Tạo sidebar */
        // $side_filter_product = array(
        //     'name' => __('List Product Sidebar', TEXTDOMAIN),
        //     'id' => 'list-product-sidebar',
        //     'description' => __('Description Sidebar', TEXTDOMAIN),
        //     'class' => 'page-sidebar',
        // );
        // register_sidebar($side_filter_product);

        /* Tạo sidebar */
        // $side_filter_product_cat = array(
        //     'name' => __('List Product Category Sidebar', TEXTDOMAIN),
        //     'id' => 'list-product-cat-sidebar',
        //     'description' => __('Description Sidebar', TEXTDOMAIN),
        //     'class' => 'product-category-sidebar',
        // );
        // register_sidebar($side_filter_product_cat);

        /* Tạo sidebar */
        // $side_filter_product = array(
        //     'name' => __('List News Sidebar', TEXTDOMAIN),
        //     'id' => 'list-news-sidebar',
        //     'description' => __('Description Sidebar', TEXTDOMAIN),
        //     'class' => 'news-sidebar',
        // );
        // register_sidebar($side_filter_product);
    }

    add_action('after_setup_theme', 'famicook_setup');

    function famicook_customize_register($wp_customize)
    {
        $wp_customize->add_setting('logo'); // Thêm cài đặt cho trình tải lên logo

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
            'label' => __('Upload Logo (replaces text)', TEXTDOMAIN),
            'section' => 'title_tagline',
            'settings' => 'logo',
        )));

        $wp_customize->add_setting('logo_footer'); // Thêm cài đặt cho trình tải lên logo

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_footer', array(
            'label' => __('Upload Logo Footer(replaces text)', TEXTDOMAIN),
            'section' => 'title_tagline',
            'settings' => 'logo_footer',
        )));
    }

    add_action('customize_register', 'famicook_customize_register');

    function famicook_customize_register_mobile($wp_customize_mobile)
    {
        $wp_customize_mobile->add_setting('logo_mobile'); // Thêm cài đặt cho trình tải lên logo

        $wp_customize_mobile->add_control(new WP_Customize_Image_Control($wp_customize_mobile, 'logo_mobile', array(
            'label' => __('Upload Logo Mobile(replaces text)', TEXTDOMAIN),
            'section' => 'title_tagline',
            'settings' => 'logo_mobile',
        )));
    }

    add_action('customize_register', 'famicook_customize_register_mobile');

}

add_action('use_block_editor_for_post', '__return_false');
//code phân trang cho woocommerce
add_action('woocommerce_after_shop_loop', 'famicook_woocommerce_pagination', 10);
function famicook_woocommerce_pagination()
{
    woocommerce_pagination();
}

//Thêm file js,css
function loadstyle()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('tfix', get_template_directory_uri() . '/assets/css/t.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style-tr.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css');

    //    if (wp_is_mobile()) {
    //        wp_register_script('jQuery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.js');
    //        wp_enqueue_script('jQuery');
    //    }

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js');
    wp_enqueue_script('slick');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');

    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js');
    wp_enqueue_script('wow');

    wp_register_script('custrom-tr', get_template_directory_uri() . '/assets/js/custrom-tr.js');
    wp_enqueue_script('custrom-tr');
}

add_action('wp_enqueue_scripts', 'loadstyle');

function searchForm($form)
{
    return get_template_part('template_parts/search/form', '');
}

add_shortcode('wpbsearch', 'searchForm');

$labels_cat = array(
    'name' => __('Branch', TEXTDOMAIN),
    'singular_name' => __('Branch', TEXTDOMAIN),
    'search_items' => __('Search Branch', TEXTDOMAIN),
    'popular_items' => __('Popular Branch', TEXTDOMAIN),
    'all_items' => __('All Branch', TEXTDOMAIN),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __('Edit Branch', TEXTDOMAIN),
    'update_item' => __('Update Branch', TEXTDOMAIN),
    'add_new_item' => __('Add New Branch', TEXTDOMAIN),
    'new_item_name' => __('New Branch Name', TEXTDOMAIN),
    'separate_items_with_commas' => __('Separate Branch with commas', TEXTDOMAIN),
    'add_or_remove_items' => __('Add or remove Branch', TEXTDOMAIN),
    'choose_from_most_used' => __('Choose from the most used Branch', TEXTDOMAIN),
    'not_found' => __('No Pickup Branch.', TEXTDOMAIN),
    'menu_name' => __('Branch', TEXTDOMAIN),
);

$args_cat = array(
    'hierarchical' => true,
    'labels' => $labels_cat,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
);
register_taxonomy('product_branch', 'product', $args_cat);

if (!function_exists('st_breadcrumbs_new')) {
    function st_breadcrumbs_new()
    {
        get_view_widget('breadcrumbs/news.php');
    }
}

if (!function_exists('st_breadcrumbs_main')) {
    function st_breadcrumbs_main()
    {
        get_view_widget('breadcrumbs/main.php');
    }
}

add_action('admin_init', function () {
    add_post_type_support('post', 'page-attributes');
});

function pp_getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count . ' Views';
}

function pp_setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
//    echo "<pre>";
//    print_r($count);
//    echo "</pre>";
//    die;


    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


add_action('wp_ajax_load_news', 'load_news');
add_action('wp_ajax_nopriv_load_news', 'load_news');
function load_news()
{
    echo get_template_part('/template_parts/contents/view-more', '');
    die;
}


add_action('wp_ajax_load_products', 'load_products');
add_action('wp_ajax_nopriv_load_products', 'load_products');
function load_products()
{
    echo get_template_part('/template_parts/contents/view-more', 'product');
    die;
}

add_action('wp_ajax_load_mobile_news', 'load_mobile_news');
add_action('wp_ajax_nopriv_load_mobile_news', 'load_mobile_news');
function load_mobile_news()
{
    echo get_template_part('/template_parts/contents/mobile/view-more', '');
    die;
}

add_action('wp_ajax_load_mobile_products', 'load_mobile_products');
add_action('wp_ajax_nopriv_load_products', 'load_mobile_products');
function load_mobile_products()
{
    echo get_template_part('/template_parts/contents/mobile/view-more', 'product');
    die;
}

add_filter('loop_shop_per_page', 'so_27395967_products_per_page');
function so_27395967_products_per_page()
{
    return 12;
}


function lb_editor_remove_meta_box()
{
    global $post_type;

    // Check to see if the global $post_type variable exists
    // and then check to see if the current post_type supports
    // excerpts. If so, remove the default excerpt meta box
    // provided by the WordPress core. If you would like to only
    // change the excerpt meta box for certain post types replace
    // $post_type with the post_type identifier.
    if (isset($post_type) && post_type_supports($post_type, 'excerpt')) remove_meta_box('postexcerpt', $post_type, 'normal');
}

add_action('admin_menu', 'lb_editor_remove_meta_box');

function lb_editor_add_custom_meta_box()
{
    global $post_type;

    // Again, check to see if the global $post_type variable
    // exists and then if the current post_type supports excerpts.
    // If so, add the new custom excerpt mwoocommerce_add_to_cart_redirecteta box. If you would
    // like to only change the excerpt meta box for certain post
    // types replace $post_type with the post_type identifier.
    if (isset($post_type) && post_type_supports($post_type, 'excerpt')) add_meta_box('postexcerpt', __('Excerpt'), 'lb_editor_custom_post_excerpt_meta_box', $post_type, 'normal', 'high');
}

add_action('add_meta_boxes', 'lb_editor_add_custom_meta_box');

function lb_editor_custom_post_excerpt_meta_box($post)
{
    // Adjust the settings for the new wp_editor. For all
    // available settings view the wp_editor reference
    // http://codex.wordpress.org/Function_Reference/wp_editor
    $settings = array('textarea_rows' => '12', 'quicktags' => false, 'tinymce' => true);

    // Create the new meta box editor and decode the current
    // post_excerpt value so the TinyMCE editor can display
    // the content as it is styled.
    wp_editor(html_entity_decode(stripcslashes($post->post_excerpt)), 'excerpt', $settings);
}

if (!function_exists('get_view_widget')) {
    function get_view_widget($path, $var = [])
    {
        if ($var) {
            foreach ($var as $key => $value) {
                $$key = $value;
            }
        }
        include(PATH_URL_WIDGET . $path);
    }
}

if (!function_exists('get_view')) {
    function get_view($path, $var = [])
    {
        if ($var) {
            foreach ($var as $key => $value) {
                $$key = $value;
            }
        }
        include(THEME_URL . '/' . $path);
    }
}

function twentytwelve_scripts_styles()
{
    /*
     * Adds JavaScript to pages with the comment form to support
     * sites with threaded comments (when in use).
     */
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'twentytwelve_scripts_styles');

function get_page_id_by_template( $template ) {
    $args = [
        'post_type'  => 'page',
        'fields'     => 'ids',
        'nopaging'   => true,
        'meta_key'   => '_wp_page_template',
        'meta_value' => $template
    ];
    $pages = get_posts( $args );
    return $pages;
}
?>

<?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>
 
	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-feature-checkbox" id="meta-feature-checkbox" value="yes" <?php if ( isset ( $featured['meta-feature-checkbox'] ) ) checked( $featured['meta-feature-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>
        
    </div>
</p>
 
    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>

<?php 
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
 // Checks for input and saves
if( isset( $_POST[ 'meta-feature-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-feature-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-feature-checkbox', '' );
}
 
}
add_action( 'save_post', 'sm_meta_save' );
?>

<?php 
//* Comment Navigation
function famicook_custom_navigation_comment($args = array()) {
    $prev_text = isset($args['prev_text']) ? $args['prev_text'] : __('Cũ hơn');
    $next_text = isset($args['next_text']) ? $args['next_text'] : __('Mới hơn');
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
    <div class="select-comt">
        <div>Sắp xếp theo:
            <span style="display: inline-block">
                <?php if ( $prev_link = get_previous_comments_link( $prev_text ) ) :
                        printf( '<div>%s</div>', $prev_link );
                    endif;
                ?>
                <?php if ( $next_link = get_next_comments_link( $next_text ) ) :
                        printf( '<div>%s</div>', $next_link );
                    endif;
                ?>
            </span>
        </div>
    </div>
	<!-- comment-navigation -->
	<?php
endif;
}

add_action( 'genesis_before_comments', 'famicook_custom_navigation_comment');

if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
}
?>

<?php
if( ! function_exists( 'better_comments' ) ):

function better_comments($comment, $args, $depth) {
    ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div class="comment">
        <div class="comment-block">
            <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                    <br />
                <?php endif; ?>
                <span class="comment-by">
                    <strong><?= get_comment_author() ?><span class="comment-author-role"><?= __('Quản trị viên', TEXTDOMAIN) ?></span></strong>
                </span>
            <div class="comment-contents"><?php comment_text() ?></div>
            <span class="float-right">
                <span> 
                    <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Trả lời', 'textdomain'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </span>
            </span>
        </div>
    </div>
<?php
        }
endif;


function get_author_role()
{
    global $authordata;

    $author_roles = $authordata->roles;
    $author_role = array_shift($author_roles);

    return $author_role;
}