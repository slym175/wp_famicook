<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/24/2020
 * Time: 5:49 PM
 */
$c1 = explode(',', $attr['news_ids'])[0];
$c2 = explode(',', $attr['news_ids'])[1];

$cat1 = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'post_modified',
    'posts_per_page' => $attr['limit'],
    'tax_query' => array(array(
        'taxonomy' => 'category',
        'field' => 'term_id',
        'terms' => $c1
    ))
);

$cat2 = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'post_modified',
    'posts_per_page' => $attr['limit'],
    'tax_query' => array(array(
        'taxonomy' => 'category',
        'field' => 'term_id',
        'terms' => $c2
    ))
);
$list_post_1 = new WP_Query($cat1);
$list_post_2 = new WP_Query($cat2);
?>

<div class="new-fami wow fadeInUp" data-wow-delay="250ms">
    <div class="container container-fluid">
        <div class="row">
            <div class="title-style-1 style-center padding-top-60">
                <h2><span><?= __('Tin tức & sự kiện', TEXTDOMAIN) ?></span></h2>
                <p><?= __('Famicook luôn mong muốn cung cấp tới mọi gia đình Việt Nam những giải pháp ăn dặm tốt nhất cho
                    con', TEXTDOMAIN) ?></p>
            </div>
            <!-- tab -->
            <div class="nav-tabs-news">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true"><?= get_cat_name($c1) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false"><?= get_cat_name($c2) ?></a>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content tab-content-news" id="myTabContent">
                <?php if ($list_post_1->have_posts()): ?>
                    <div class="tab-pane fade show active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="your-class">
                            <?php while ($list_post_1->have_posts()): $list_post_1->the_post() ?>
                                <div class="col-md-4 new-col">
                                    <div class="new-item">
                                        <a href="<?= get_permalink(get_the_ID()) ?>" class="img">
                                            <img src="<?= get_the_post_thumbnail_url( get_the_ID(), array(338, 244)) ?>" alt="<?= the_title() ?>">
                                        </a>
                                        <div class="content-news">
                                            <div class="cate-news">
                                                <a href="<?= get_permalink($c1) ?>" title="<?= get_cat_name($c1) ?>"><?= get_cat_name($c1) ?></a>
                                            </div>
                                            <div class="title-news">
                                                <h4><a href="<?= get_permalink(get_the_ID()) ?>" title="<?= the_title() ?>"><?= the_title() ?></a></h4>
                                                <p><?= the_excerpt() ?></p>
                                            </div>
                                            <div class="see-detail">
                                                <a href="<?= get_permalink(get_the_ID()) ?>" title="<?= the_title() ?>"><?= __('Xem chi tiết', TEXTDOMAIN) ?></a>
                                            </div>
                                        </div>
                                        <div class="date-news">
                                            <p><span><?=get_the_date( 'd', get_the_ID() )?></span><span><?=get_the_date( 'm', get_the_ID() )?></span><span><?=get_the_date( 'y', get_the_ID() )?></span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($list_post_2->have_posts()): ?>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="your-class">
                            <?php while ($list_post_2->have_posts()): $list_post_2->the_post() ?>
                                <div class="col-md-4 new-col">
                                    <div class="new-item">
                                        <a href="<?= get_permalink(get_the_ID()) ?>" class="img">
                                            <img src="<?= get_the_post_thumbnail_url( get_the_ID(), array(338, 244)) ?>" alt="<?= the_title() ?>">
                                        </a>
                                        <div class="content-news">
                                            <div class="cate-news">
                                                <a href="<?= get_permalink($c2) ?>" title="<?= get_cat_name($c2) ?>"><?= get_cat_name($c2) ?></a>
                                            </div>
                                            <div class="title-news">
                                                <h4><a href="<?= get_permalink(get_the_ID()) ?>" title="<?= the_title() ?>"><?= the_title() ?></a></h4>
                                                <p><?= the_excerpt() ?></p>
                                            </div>
                                            <div class="see-detail">
                                                <a href="<?= get_permalink(get_the_ID()) ?>" title="<?= the_title() ?>"><?= __('Xem chi tiết', TEXTDOMAIN) ?></a>
                                            </div>
                                        </div>
                                        <div class="date-news">
                                            <p><span><?=get_the_date( 'd', get_the_ID() )?></span><span><?=get_the_date( 'm', get_the_ID() )?></span><span><?=get_the_date( 'y', get_the_ID() )?></span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>

        <!-- tab -->
        <div class="btn-famicook style-center">
            <a href="<?= get_page_link(get_page_by_path('tin-tuc')); ?>" class="btn btn-seemore" title=""><?= __('Xem tất cả', TEXTDOMAIN) ?></a>
        </div>
    </div>
</div>