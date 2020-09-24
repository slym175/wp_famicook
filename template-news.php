<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 7/4/2020
 * Time: 9:54 AM
 * Template Name: Tin tức
 */

$paged = 1; //hoặc 0
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
} elseif (get_query_var('page')) {
    $paged = get_query_var('page');
}

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'menu_order publish_date',
    'order' => 'ASC',
    'posts_per_page' => 9,
    'paged' => $paged,
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
get_header();

$pageID = get_page_id_by_template('template-news.php')[0];

?>

<main>
    <div class="section-banner-title">
        <div class="img">
            <img src="<?= wp_get_attachment_url( get_post_thumbnail_id($pageID) ); ?>" alt="Image-<?= $pageID ?>">
        </div>
        <div class="title-banner">
            <h2><span><?= get_the_title($pageID) ?></span></h2>
        </div>
    </div>

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
                                        <img src="<?= THEME_URL_URI ?>/assets/images/ser1.png" alt="">
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile ?>
                    <?php if (isset($posts->max_num_pages) && $posts->max_num_pages > 1): ?>
                        <div class="pagination-clean">
                            <ul>
                                <?php if($paged != 1) : ?>
                                    <li class="active-prev"> <a href="" title="Prev"> <img src="<?= THEME_URL_URI ?>/assets/images/pagination-icon.png" alt="..">
                                    </a> </li>
                                <?php endif ?>
                                <?php $i = 1; while($i <= $posts->max_num_pages ) :?>
                                    <li class="<?= ($paged == $i) ? 'active-pagination' : '' ?>"> <a href="" title=".."> <?= $i ?> </a> </li>
                                <?php $i++; endwhile ?>
                                <?php if($paged != $posts->max_num_pages) : ?>
                                    <li class="active-next"> <a href="" title="Next"> <img src="<?= THEME_URL_URI ?>/assets/images/pagination-icon.png" alt="..">
                                    </a> </li>
                                <?php endif ?>
                            </ul>
                        </div> 
                    <?php endif; ?>
                </div>
                <?= nt()->load_template('content/news/news', 'sidebar', array('current' => '', 'feature' => 1)) ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>