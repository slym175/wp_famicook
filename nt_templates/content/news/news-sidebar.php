<?php
$args = array(
    'taxonomy' => 'category',
    'show_count' => 0,
    'pad_counts' => 0,
    'hierarchical' => 1,
    'title_li' => '',
    'hide_empty' => 0,
);
$all_categories = get_terms($args);
$cats = [];
foreach ($all_categories as $val) {
    $cats[] = (array)$val;
}

$cla = new ClaCategory();
$categories = $cla->data_tree($cats, 0);

$c = isset($current) ? $current : '';

$args = [
    'post_type'         => 'banner',
    'posts_per_page'    => 4,
    'orderby'           => 'menu_order',
    'order'             => 'ASC',
    'tax_query'         => array(
        array(
            'taxonomy'          => 'banner_group',
            'field'             => 'term_id',
            'terms'             => 17, /// Where term_id of Term 1 is "1".
            'include_children'  => false
        ),
    )
];
$banners = new WP_Query($args);

?>

<div class="col-md-3 service-right">
    <div class="sidebar-service wow fadeInUp" data-wow-delay="200ms">
        <div class="cate-service">
            <?php foreach($categories as $category) : ?>
            <div class="cate-item">
                <div class="title-service <?= $category['term_id'] == $c ? 'active' : ''  ?>"><a href="<?= get_category_link( $category['term_id'] ) ?>" title="" class="btn"><?= $category['name'] ?></a></div>
                <?php if ($category['items']): ?>
                    <ul class="service-submenu">
                        <?php foreach ($category['items'] as $category_item_lv2): ?>
                            <li class="<?= $category_item_lv2['term_id'] == $c ? 'actived' : ''  ?>"><a href="<?= get_category_link( $category_item_lv2['term_id'] ) ?>" title="" class="cate-active"><?= $category_item_lv2['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
            </div>
            <?php endforeach ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php while($banners->have_posts()) : $banners->the_post() ?>
            <div class="img-service">
                <a href="<?= permalink_link(get_the_ID()) ?>" title="<?php the_title() ?>"> 
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= the_title() ?>">
                </a>
            </div>
        <?php break; endwhile ?>

        <?php if($feature == 1) : ?>
            <?= get_template_part('template_parts/contents/post', 'featured', array()) ?>
        <?php endif ?>

        <?php  while ($banners->have_posts()) : $banners->the_post() ?>
            <div class="img-service">
                <a href="<?= permalink_link(get_the_ID()) ?>" title="<?php the_title() ?>"> 
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= the_title() ?>"> 
                </a>
            </div>
        <?php endwhile ?>
    </div>
</div>