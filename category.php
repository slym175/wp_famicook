<?php

/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 9:56 AM
 */
    get_header();

    $category = get_category(get_query_var('cat'));

    $cat_id = $category->cat_ID;
    $cat_name = $category->name;

    global $wp_query;

    $categories = get_terms([
        'taxonomy' => 'category',
        'hide_empty' => 0,
        'meta_key' => 'menu_order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
            'meta_value_num' => array(
                'key' => 'status',
                'type' => 'NUMERIC',
                'value' => 1,
            )
        )
    ]);
    
    $cats = [];
    foreach ($categories as $val) {
        $cats[$val->term_id] = (array)$val;
    }

    $cla_cat = new ClaCategory();
    $cate = $cla_cat->data_tree($cats, 0);
    

    $args = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'menu_order publish_date',
        'order' => 'ASC',
        'posts_per_page' => 9,
        'paged' => $paged,
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
                'operator' => 'NOT IN'
            ),
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => $cat_id,
                'include_children' => true
            )
        )
    ];
    $posts = new WP_Query($args);

?>

<main>
    <?php st_breadcrumbs_main() ?>

    <div class="section-service">
        <div class="container">
            <div class="row">
                <div class="col-md-9 service-left">
                    <?php while ($posts->have_posts()) : $posts->the_post() ?>
                        <div class="service-post wow fadeInUp" data-wow-delay="200ms">
                            <div class="img">
                                <a href="<?php the_permalink( get_the_ID() ) ?>" title="<?= the_title() ?>">
                                    <img src="<?= get_the_post_thumbnail_url(get_the_ID(), array(407, 283)) ?>" alt="<?= the_title() ?>">
                                </a>
                            </div>
                            <div class="content">
                                <h4> <a href="<?php the_permalink( get_the_ID() ) ?>" title="<?= the_title() ?>"><?= the_title() ?></a> </h4>
                                <p class="author-service"><?= __('Tác giả: ') ?><?= get_the_author() ?></p>
                                <p class="description-service"><?= the_excerpt() ?></p>
                                <p>
                                    <a href="<?php the_permalink( get_the_ID() ) ?>" title="<?= the_title() ?>" class="btn-detail"><?= __('Xem chi tiết', TEXTDOMAIN) ?>
                                        <img src="<?= THEME_URL_URI ?>/assets/images/ser1.png" alt="Image">
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile ?>
                    <?php if (isset($posts->max_num_pages) && $posts->max_num_pages > 1): ?>
                        <div class="pagination-clean">
                            <ul>
                                <?php if($paged != 1) : ?>
                                    <li class="active-prev"> <a href="" title="Prev"> <img src="<?= THEME_URL_URI ?>/assets/images/pagination-icon.png" alt="Image">
                                    </a> </li>
                                <?php endif ?>
                                <?php $i = 1; while($i <= $posts->max_num_pages ) :?>
                                    <li class="<?= ($paged == $i) ? 'active-pagination' : '' ?>"> <a href="" title=".."> <?= $i ?> </a> </li>
                                <?php $i++; endwhile ?>
                                <?php if($paged != $posts->max_num_pages) : ?>
                                    <li class="active-next"> <a href="" title="Next"> <img src="<?= THEME_URL_URI ?>/assets/images/pagination-icon.png" alt="Image">
                                    </a> </li>
                                <?php endif ?>
                            </ul>
                        </div> 
                    <?php endif; ?>
                </div>
                <?php if($cat_id == 10) : ?>
                    <?= nt()->load_template('content/news/news', 'sidebar', array('current' => $cat_id, 'feature' => 0)) ?>
                <?php else : ?>
                    <?= nt()->load_template('content/news/news', 'sidebar', array('current' => $cat_id, 'feature' => 1)) ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
