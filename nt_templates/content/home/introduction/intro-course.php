<?php
$arr = [
    'post_type' => 'banner',
    'posts_per_page' => 2,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'banner_group',
            'field' => 'term_id',
            'terms' => $attr['lr_banner_id'], /// Where term_id of Term 1 is "1".
            'include_children' => false
        ),
    )
];
$lr_banners = new WP_Query($arr);

$posts = get_posts( array(
    'numberposts'      => 6,
    'include'          => explode(',',$attr['course_ids']),
) )
?>

<!-- intro course -->
<div class="section-post-homepage">
    <?php while ($lr_banners->have_posts()) : $lr_banners->the_post() ?>
        <div class="poster wow bounce" data-wow-delay="200ms">
            <a href="<?= the_permalink(get_the_ID()) ?>" title=""> <img src="<?= get_the_post_thumbnail_url( get_the_ID(), array(208, 156)) ?>" alt="<?= the_title() ?>"> </a>
        </div>
    <?php break; endwhile ?>
    
    <div class="container container-fluid">
        <div class="row">
            <div class="title-style-1 style-center padding-top-60  wow fadeInUp" data-wow-delay="200ms">
                <h2><span> <?= __((isset($attr['title']) ? $attr['title'] : 'Giới thiệu'), TEXTDOMAIN) ?> </span></h2>
                <p><?= __((isset($attr['description']) ? $attr['description'] : 'Nội dung giới thiệu'), TEXTDOMAIN) ?></p>
            </div>
            <?php if($posts) : ?>
                <div class="post-page <?= wp_is_mobile() ? 'post-page-slide-mb' : ''?> wow fadeInUp" data-wow-delay="200ms">
                    <?php foreach($posts as $post) : ?>
                        <div class="col-md-4 col-sm-4 col-xs-12 post-col">
                            <div class="post-item">
                                <div class="img">
                                    <a href="<?= get_permalink( $post->ID )?>" title="<?= $post->post_title ?>"><img src="<?= get_the_post_thumbnail_url( $post->ID ) ?>" alt="<?= $post->post_title ?>"></a>
                                    <div class="title">
                                        <p><?= $post->post_title ?></p>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="<?= get_permalink( $post->ID )?>" title="<?= $post->post_title ?>">
                                        <p><?= $post->post_title ?></p>
                                        <span><?= __('Xem ngay', TEXTDOMAIN) ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <div class="col-12 btn-famicook style-center">
                <a href="" class="btn btn-seemore" title=""> <?= __('Xem thêm', TEXTDOMAIN) ?> </a>
            </div>
        </div>
    </div>
    <?php $i = 0; while ($lr_banners->have_posts()) : $lr_banners->the_post() ?>
        <?php if($i++ == 1){continue;} ?>
        <div class="poster wow bounce" data-wow-delay="200ms">
            <a href="<?= the_permalink(get_the_ID()) ?>" title=""> <img src="<?= get_the_post_thumbnail_url( get_the_ID(), array(208, 156)) ?>" alt="<?= the_title() ?>"> </a>
        </div>
    <?php endwhile ?>
</div>