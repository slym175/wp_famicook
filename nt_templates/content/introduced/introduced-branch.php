<?php
    $title = isset($attr['title']) ? $attr['title'] : 'Về Famicook';
    $content = isset($attr['contents']) ? $attr['contents'] : 'Về Famicook';
    $image = isset($attr['images']) ? $attr['images'] : 'Về Famicook';
    $images = explode(',', $image);
?>
    
    <div class="section-trademark-title">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-6  trademark-left wow bounceInRight" data-wow-delay="200ms">
                    <div class="title-style-1">
                        <h2><span> <?= __($title, TEXTDOMAIN) ?> </span></h2>
                    </div>
                    <p class="description-title"><?= $content ?></p>
                </div>
                <div class="col-md-6 slider-trademark wow bounceInLeft" data-wow-delay="280ms">
                    <?php foreach($images as $img) : ?>
                        <div class="item">
                            <div class="logo-img">
                                <img src="<?= wp_get_attachment_url( $img ) ?>" alt="Image">
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>