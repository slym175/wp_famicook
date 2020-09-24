<?php
add_action('vc_before_init', 'loadVCMapNewLayout');

function loadVCMapNewLayout(){
    
    // Home Slider
    vc_map(array(
        'name' => esc_html__('Home Slider',TEXTDOMAIN),
        'base' => 'st_home_slider',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Limit', TEXTDOMAIN),
                'param_name' => 'limit',
                'description' => __('Giới hạn số lượng banner lấy ra.', TEXTDOMAIN),
            ],
            [
                'type' => 'textfield',
                'heading' => __('Danh sách id banner', TEXTDOMAIN),
                'param_name' => 'banner_ids',
                'description' => 'Các id được phân cách bằng dấu ",". Ví dụ: 123,456'
            ],
        )
    ));

    // Home Introduction
    vc_map(array(
        'name' => esc_html__('Home Introduction',TEXTDOMAIN),
        'base' => 'st_home_introdution',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Tiêu đề', TEXTDOMAIN),
                'param_name' => 'title',
                'description' => __('Tiêu đề của mục.', TEXTDOMAIN),
            ],
            [
                'type' => 'textarea',
                'heading' => __('Mô tả ngắn', TEXTDOMAIN),
                'param_name' => 'description',
                'description' => 'Mô tả/Giới thiệu ngắn khoảng 100 từ.'
            ],
            [
                'type' => 'vc_link',
                'heading' => __('Đường dẫn', TEXTDOMAIN),
                'param_name' => 'path',
                'description' => 'Đường dẫn chuyển trang.'
            ],
            [
                'type' => 'attach_image',
                'heading' => __('Ảnh đại diện', TEXTDOMAIN),
                'param_name' => 'featured_image',
                'description' => 'Ảnh đại diện cho video của mục.'
            ],
            [
                'type' => 'textfield',
                'heading' => __('Video', TEXTDOMAIN),
                'param_name' => 'featured_video',
                'description' => 'Video URL của mục. VD: "https://www.youtube.com/embed/T1-r_feNNnw"'
            ],
        )
    ));

    // Home Introduction Course
    vc_map(array(
        'name' => esc_html__('Home Introduction Course',TEXTDOMAIN),
        'base' => 'st_home_introdution_course',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Left & Right Home Banner', TEXTDOMAIN),
                'param_name' => 'lr_banner_id',
                'description' => 'Banner trái và phải trang chủ'
            ],
            [
                'type' => 'textfield',
                'heading' => __('Tiêu đề', TEXTDOMAIN),
                'param_name' => 'title',
                'description' => __('Tiêu đề của mục.', TEXTDOMAIN),
            ],
            [
                'type' => 'textarea',
                'heading' => __('Mô tả ngắn', TEXTDOMAIN),
                'param_name' => 'description',
                'description' => 'Mô tả/Giới thiệu ngắn khoảng 100 từ.'
            ],
            [
                'type' => 'textfield',
                'heading' => __('Danh sách course banner', TEXTDOMAIN),
                'param_name' => 'course_ids',
                'description' => 'Các id được phân cách bằng dấu ",". Ví dụ: 123,456'
            ],
        )
    ));

    // Home Introduction Shop
    vc_map(array(
        'name' => esc_html__('Home Introduction Shop',TEXTDOMAIN),
        'base' => 'st_home_introdution_shop',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Tiêu đề', TEXTDOMAIN),
                'param_name' => 'title',
                'description' => __('Tiêu đề của mục.', TEXTDOMAIN),
            ],
            [
                'type' => 'textarea',
                'heading' => __('Mô tả ngắn', TEXTDOMAIN),
                'param_name' => 'description',
                'description' => 'Mô tả/Giới thiệu ngắn khoảng 100 từ.'
            ],
            [
                'type' => 'textarea',
                'heading' => __('Danh sách ưu điểm', TEXTDOMAIN),
                'param_name' => 'advantages',
                'description' => 'Trình bày dưới dạng danh sách "**" ở đầu mỗi phần tử.'
            ],
            [
                'type' => 'attach_image',
                'heading' => __('Ảnh đại diện', TEXTDOMAIN),
                'param_name' => 'featured_image',
                'description' => 'Ảnh đại diện cho video của mục.'
            ],
            [
                'type' => 'vc_link',
                'heading' => __('Đường dẫn', TEXTDOMAIN),
                'param_name' => 'path',
                'description' => 'Đường dẫn chuyển trang.'
            ],
        )
    ));


    // Home Introduction Link
    vc_map(array(
        'name' => esc_html__('Home Introduction Link',TEXTDOMAIN),
        'base' => 'st_home_introdution_link',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textarea_html',
                'heading' => __('Nội dung', TEXTDOMAIN),
                'param_name' => 'content',
                'description' => 'Nội dung hiển thị'
            ],
        )
    ));

    // Home App Feature
    vc_map(array(
        'name' => esc_html__('Home App Feature',TEXTDOMAIN),
        'base' => 'st_home_app_feature',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Limit', TEXTDOMAIN),
                'param_name' => 'limit',
                'description' => __('Giới hạn số lượng banner lấy ra.', TEXTDOMAIN),
            ],
            [
                'type' => 'textfield',
                'heading' => __('Danh sách id banner', TEXTDOMAIN),
                'param_name' => 'banner_ids',
                'description' => 'Các id được phân cách bằng dấu ",". Ví dụ: 123,456'
            ],
        )
    ));

    // Home Partner
    vc_map(array(
        'name' => esc_html__('Home Partner',TEXTDOMAIN),
        'base' => 'st_home_partner',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Limit', TEXTDOMAIN),
                'param_name' => 'limit',
                'description' => __('Giới hạn số lượng banner lấy ra.', TEXTDOMAIN),
            ]
        )
    ));

    // Home News
    vc_map(array(
        'name' => esc_html__('Home News',TEXTDOMAIN),
        'base' => 'st_home_news',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Limit', TEXTDOMAIN),
                'param_name' => 'limit',
                'description' => __('Giới hạn số lượng banner lấy ra.', TEXTDOMAIN),
            ],
            [
                'type' => 'textfield',
                'heading' => __('Danh sách id news', TEXTDOMAIN),
                'param_name' => 'news_ids',
                'description' => 'Các id được phân cách bằng dấu ",". Ví dụ: 123,456'
            ],
        )
    ));

    // Introduced
    vc_map(array(
        'name' => esc_html__('Introduced Section 1',TEXTDOMAIN),
        'base' => 'st_introduced',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Tiêu đề', TEXTDOMAIN),
                'param_name' => 'title',
            ],
            [
                'type' => 'textarea_html',
                'heading' => __('Nội dung', TEXTDOMAIN),
                'param_name' => 'contents',
            ],
            [
                'type' => 'attach_image',
                'heading' => __('Ảnh đại diện', TEXTDOMAIN),
                'param_name' => 'image',
                'description' => 'Ảnh đại diện hiện bên phải'
            ],
        )
    ));

    vc_map(array(
        'name' => esc_html__('Introduced Section 2',TEXTDOMAIN),
        'base' => 'st_introduced_2nd_section',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textarea',
                'heading' => __('Tầm nhìn', TEXTDOMAIN),
                'param_name' => 'tam-nhin',
            ],
            [
                'type' => 'textarea',
                'heading' => __('Sứ mệnh', TEXTDOMAIN),
                'param_name' => 'su-menh',
            ],
            [
                'type' => 'textarea',
                'heading' => __('Giá trị cốt lõi', TEXTDOMAIN),
                'param_name' => 'gia-tri',
            ],
        )
    ));

    vc_map(array(
        'name' => esc_html__('Introduced Section 3',TEXTDOMAIN),
        'base' => 'st_introduced_3rd_section',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Tiêu đề', TEXTDOMAIN),
                'param_name' => 'title',
            ],
            [
                'type' => 'textarea',
                'heading' => __('Năng lực hợp tác', TEXTDOMAIN),
                'param_name' => 'advantages',
                'description' => 'Trình bày dưới dạng danh sách "**" ở đầu mỗi phần tử.'
            ],
            [
                'type' => 'attach_image',
                'heading' => __('Ảnh đại diện', TEXTDOMAIN),
                'param_name' => 'image',
                'description' => 'Ảnh đại diện hiện bên trái'
            ],
        )
    ));

    vc_map(array(
        'name' => esc_html__('Introduced Branch',TEXTDOMAIN),
        'base' => 'st_introduced_branch',
        'icon' => 'icon-st',
        'category' => 'FamiCook',
        'params' => array(
            [
                'type' => 'textfield',
                'heading' => __('Tiêu đề', TEXTDOMAIN),
                'param_name' => 'title',
            ],
            [
                'type' => 'textarea_html',
                'heading' => __('Mô tả', TEXTDOMAIN),
                'param_name' => 'contents',
            ],
            [
                'type' => 'attach_images',
                'heading' => __('Album thương hiệu', TEXTDOMAIN),
                'param_name' => 'images',
                'description' => 'Ảnh các thương hiệu hiện bên phải'
            ],
        )
    ));
}