<?php
$args = [
    'post_type' => 'partner',
    'posts_per_page' => $attr['limit'],
    'orderby' => 'menu_order',
    'order' => 'ASC',
];
$partners = new WP_Query($args);
?>

<div class="parner">
    <div class="container container-fluid">
        <div class="row">
            <div class="title-style-1 style-center padding-top-60 wow fadeInUp" data-wow-delay="200ms">
                <h2><span><?= __('Đối tác tin cậy', TEXTDOMAIN) ?></span></h2>
                <p><?= __('Với thiện chí hợp tác cùng phát triển, FamiCook rất tin tưởng vào sự thành công tốt đẹp và lâu
                    dài trong quá trình hợp tác giữa chúng tôi và Quý đối tác.', TEXTDOMAIN) ?></p>
            </div>
            <div class="slider-partner wow fadeInUp" data-wow-delay="250ms">
                <?php while ($partners->have_posts()) : $partners->the_post() ?>
                <div class="item">
                    <img src="<?= get_the_post_thumbnail_url( get_the_ID(), array(208, 156)) ?>" alt="<?= the_title() ?>">
                </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>
</div>