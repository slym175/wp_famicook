<?php
    $title = isset($attr['title']) ? $attr['title'] : 'Về Famicook';
    $content = isset($attr['contents']) ? $attr['contents'] : 'Về Famicook';
    $image = isset($attr['image']) ? $attr['image'] : 'Về Famicook';
?>
    
    <div class="about-famicook">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 about-left ">
                    <div class="title-style-1">
                        <h2><span> <?= __($title, TEXTDOMAIN) ?> </span></h2>
                    </div>
                    <div class="description-title">
                        <input type="checkbox" id="load-more">
                        <?= $content ?>
                        <label class="load-more-btn" for="load-more">
                            <div class="btn-famicook unloaded">
                            	<span class="btn btn-seemore" title=""><?= __('Xem thêm', TEXTDOMAIN) ?></span>
                            </div>
                            <div class="btn-famicook loaded">
                            	<span class="btn btn-seemore" title=""><?= __('Thu gon', TEXTDOMAIN) ?></span>
                            </div>  
                        </label>  
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 about-right wow fadeIn" data-wow-delay="280ms">
                    <div class="img">
                        <img src="<?= wp_get_attachment_url($image) ?>" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>