<?php
    $title = isset($attr['title']) ? $attr['title'] : 'Về Famicook';
    $content = isset($attr['advantages']) ? $attr['advantages'] : 'Về Famicook';
    $image = isset($attr['image']) ? $attr['image'] : 'Về Famicook';
    $advantages = array_slice(explode('**', $content), 1);
    $delay = 240;
?> 
    
    <div class="section-famishop">
        <div class="container container-fluid">
            <div class="row">
                <div class="title-style-1 style-center padding-top-60 wow bounce" data-wow-delay="200ms">
                    <h2><span><?= __($title, TEXTDOMAIN) ?></span></h2>
                </div>
                <div class="fami-style1">
                    <div class="col-md-6 col-sm-12 famishop-banner wow bounceInLeft" data-wow-delay="200ms">
                        <div class="img">
                            <a href="" title=""> <img src="<?= wp_get_attachment_url( $image ) ?>" alt="Image"> </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 fami-style1-text">
                        <?php foreach($advantages as $key => $advantage) : ?>
                            <div class="item item2 <?= $key == 0 ? 'text-1' : 'text-2' ?> wow bounceInRight" data-wow-delay="<?= $delay.'ms' ?>">
                                <div class="text">
                                    <p><span><?= $key+1 ?></span><?= $advantage ?></p>
                                </div>
                            </div>
                        <?php $delay+=50; endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>