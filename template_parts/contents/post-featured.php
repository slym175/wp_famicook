<?php 
$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'menu_order publish_date',
    'order' => 'ASC',
    'posts_per_page' => 5,
    'meta_key' => 'meta-feature-checkbox',
    'meta_value' => 'yes',
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
            'operator' => 'NOT IN'
        )
    )
];
$posts = new WP_Query($args);
?>

<div class="news-sidebar">
    <div class="title-news-sb">
        <h2><?= __('Bài viết nổi bật', TEXTDOMAIN) ?></h2>
    </div>
    <?php while ($posts->have_posts()) : $posts->the_post() ?>
        <div class="post-sb">
            <div class="img">
                <a href="<?= the_permalink( get_the_ID() ) ?>" title="<?= the_title() ?>">
                    <img src="<?= get_the_post_thumbnail_url( get_the_ID(), array(123, 82) ) ?>" alt="<?= the_title() ?>">
                </a>
            </div>
            <div class="content">
                <div class="cate-news"> <a href="" title="" tabindex="0"><?php get_the_category(get_the_ID()) ?></a> </div>
                <h4>
                    <a href="<?= the_permalink( get_the_ID() ) ?>" title="<?= the_title() ?>"><?= the_title() ?></a>
                </h4>
            </div>
        </div>
    <?php endwhile ?>
</div>