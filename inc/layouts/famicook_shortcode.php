<?php

/**
 * Created by thuyhu9876@gmail.com.
 * User: slym175
 * Date: 6/17/2020
 * Time: 9:55 AM
 */

if(!function_exists('st_home_introdution')){
    function st_home_introdution($attr, $content = null)
    {
        $attr = shortcode_atts([
            'title'             => '',
            'description'       => '',
            'path'              => '',
            'featured_image'    => '',
            'featured_video'    => ''
        ], $attr);
        return nt()->load_template('content/home/introduction/intro', '', array('attr' => $attr));
    }
    add_shortcode('st_home_introdution', 'st_home_introdution');
}

if(!function_exists('st_home_introdution_course')){
    function st_home_introdution_course($attr, $content = null)
    {
        $attr = shortcode_atts([
            'lr_banner_id'  => '',
            'title'         => '',
            'description'   => '',
            'course_ids'    => ''
        ], $attr);
        return nt()->load_template('content/home/introduction/intro', 'course', array('attr' => $attr));
    }
    add_shortcode('st_home_introdution_course', 'st_home_introdution_course');
}

if(!function_exists('st_home_introdution_shop')){
    function st_home_introdution_shop($attr, $content = null)
    {
        $attr = shortcode_atts([
            'title'             => '',
            'description'       => '',
            'path'              => '',
            'featured_image'    => '',
            'advantages'        => ''
        ], $attr);
        return nt()->load_template('content/home/introduction/intro', 'shop', array('attr' => $attr));
    }
    add_shortcode('st_home_introdution_shop', 'st_home_introdution_shop');
}

if(!function_exists('st_home_introdution_link')){
    function st_home_introdution_link($attr, $content = null)
    {
        $attr = shortcode_atts([
            'contents' => '',
        ], $attr);
        return nt()->load_template('content/home/introduction/intro', 'link', array('attr' => $attr));
    }
    add_shortcode('st_home_introdution_link', 'st_home_introdution_link');
}

if(!function_exists('st_introduced')){
    function st_introduced($attr, $content = null)
    {
        $attr = shortcode_atts([
            'title'     => '',
            'contents'  => '',
            'image'     => '',
        ], $attr);
        return nt()->load_template('content/introduced/introduced', '', array('attr' => $attr));
    }
    add_shortcode('st_introduced', 'st_introduced');
}

if(!function_exists('st_introduced_2nd_section')){
    function st_introduced_2nd_section($attr, $content = null)
    {
        $attr = shortcode_atts([
            'tam-nhin'      => '',
            'su-menh'       => '',
            'gia-tri'       => '',
        ], $attr);
        return nt()->load_template('content/introduced/introduced', 'section-2', array('attr' => $attr));
    }
    add_shortcode('st_introduced_2nd_section', 'st_introduced_2nd_section');
}

if(!function_exists('st_introduced_3rd_section')){
    function st_introduced_3rd_section($attr, $content = null)
    {
        $attr = shortcode_atts([
            'title'     => '',
            'advantages'  => '',
            'image'     => '',
        ], $attr);
        return nt()->load_template('content/introduced/introduced', 'section-3', array('attr' => $attr));
    }
    add_shortcode('st_introduced_3rd_section', 'st_introduced_3rd_section');
}

if(!function_exists('st_introduced_branch')){
    function st_introduced_branch($attr, $content = null)
    {
        $attr = shortcode_atts([
            'title'     => '',
            'contents'  => '',
            'images'     => '',
        ], $attr);
        return nt()->load_template('content/introduced/introduced', 'branch', array('attr' => $attr));
    }
    add_shortcode('st_introduced_branch', 'st_introduced_branch');
}