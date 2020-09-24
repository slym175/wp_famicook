<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/24/2020
 * Time: 5:48 PM
 */
$args = [
    'post_type' => 'banner',
    'posts_per_page' => $attr['limit'],
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'banner_group',
            'field' => 'term_id',
            'terms' => explode(",", $attr['banner_ids']), /// Where term_id of Term 1 is "1".
            'include_children' => false
        ),
    )
];
$banners = new WP_Query($args);
?>

<div class="slider-page">
    <div class="slide-homepage">
        <?php while ($banners->have_posts()) : $banners->the_post() ?>
            <div class="item">
                <img src="<?= get_the_post_thumbnail_url(get_the_ID(), array(1920, 810)) ?>" alt="Slide Item">
            </div>
        <?php endwhile; ?>
    </div>
</div>
