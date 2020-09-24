<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/25/2020
 * Time: 9:23 AM
 */
class Partner{
    function __construct()
    {
        add_action( 'init', array(__CLASS__,'nt_parter_init') );
    }

    public static function nt_parter_init(){
        $labels = array(
            'name'               => __( 'Partners', TEXTDOMAIN ),
            'singular_name'      => __( 'Partner', TEXTDOMAIN ),
            'menu_name'          => __( 'Partners', TEXTDOMAIN ),
            'name_admin_bar'     => __( 'Partner', TEXTDOMAIN ),
            'add_new'            => __( 'Add New', TEXTDOMAIN ),
            'add_new_item'       => __( 'Add New Partner', TEXTDOMAIN ),
            'new_item'           => __( 'New Partner', TEXTDOMAIN ),
            'edit_item'          => __( 'Edit Partner', TEXTDOMAIN ),
            'view_item'          => __( 'View Partner', TEXTDOMAIN ),
            'all_items'          => __( 'All Partner', TEXTDOMAIN ),
            'search_items'       => __( 'Search Partner', TEXTDOMAIN ),
            'parent_item_colon'  => __( 'Parent Partner:', TEXTDOMAIN ),
            'not_found'          => __( 'No partners found.', TEXTDOMAIN ),
            'not_found_in_trash' => __( 'No partners found in Trash.', TEXTDOMAIN ),
            'insert_into_item'   => __( 'Insert into Partner', TEXTDOMAIN),
            'uploaded_to_this_item'=> __( "Uploaded to this Partner", TEXTDOMAIN),
            'featured_image'=> __( "Partner Logo", TEXTDOMAIN),
            'set_featured_image'=> __( "Set partner logo", TEXTDOMAIN),
            'menu_icon'          => 'dashicons-businessman'
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => get_option( 'partner_permalink' ,'nt_partner' ) ),
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => 30,
            'supports'           => array( 'title', 'thumbnail', 'excerpt','links','page-attributes'),
            'menu_icon'          => 'dashicons-businessman',
            'exclude_from_search'=>true,

        );

        nt_reg_post_type('partner', $args );
        
    }
}
new Partner();