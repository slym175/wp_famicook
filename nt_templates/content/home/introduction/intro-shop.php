<!-- intro shop -->
<?php
$advantages = array_slice(explode('**', $attr['advantages']), 1);
$delay = 240;
?>

<div class="section-famishop">
    <div class="container container-fluid">
        <div class="row">
            <div class="title-style-1 style-center padding-top-60 wow fadeInUp" data-wow-delay="200ms">
                <h2><span><?= __((isset($attr['title']) ? $attr['title'] : 'Giới thiệu'), TEXTDOMAIN) ?></span></h2>
                <p><?= __((isset($attr['description']) ? $attr['description'] : 'Nội dung giới thiệu'), TEXTDOMAIN) ?></p>
            </div>
            <div class="famishop-homepage">
                <div class="col-md-6 col-sm-6 famishop-banner wow bounceInLeft" data-wow-delay="200ms">
                    <div class="img">
                        <a href="<?= isset($attr['path']) ? esc_url(vc_build_link($attr['path'])['url']) : get_page_link(get_page_by_path('tin-tuc')); ?>" title="">
                            <img src="<?= isset($attr['featured_image']) ? wp_get_attachment_image_src( $attr['featured_image'] )[0] : THEME_URL_URI.'/assets/images/banner-shop.png'?>" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 <?= wp_is_mobile() ? 'fami-style1-text' : 'fami-style2-text' ?>">
                    <?php foreach($advantages as $key => $advantage) : ?>
                        <div class="item <?= $key == 0 ? 'text-1' : 'text-2' ?> wow bounceInRight" data-wow-delay="<?= $delay.'ms' ?>">
                            <div class="text">
                                <p><span><?= $key+1 ?></span><?= $advantage ?></p>
                            </div>
                        </div>

                    <?php $delay+=40; endforeach ?>
                </div>

            </div>
        </div>
    </div>
</div>