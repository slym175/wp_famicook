<!-- intro -->
<div class="section-video wow fadeInUp" data-wow-delay="200ms">
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 introduce">
                <div class="title-style-1">
                    <h2><span> <?= __((isset($attr['title']) ? $attr['title'] : 'Giới thiệu'), TEXTDOMAIN) ?> </span></h2>
                </div>
                <p class="description-title"><?= __((isset($attr['description']) ? $attr['description'] : 'Nội dung giới thiệu'), TEXTDOMAIN) ?></p>
                <div class="btn-famicook">
                    <a href="<?= isset($attr['path']) ? esc_url(vc_build_link($attr['path'])['url']) : get_page_link(get_page_by_path('gioi-thieu')); ?>" class="btn btn-seemore" title=""> Xem thêm </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 video-homepage">

                <a href="" title="" class="btn" data-toggle="modal" data-target="#myModal">
                    <div class="img-thumnail">
                        <img src="<?= isset($attr['featured_image']) ? wp_get_attachment_image_src( $attr['featured_image'],array(550,352) )[0] : THEME_URL_URI.'/assets/images/thumnail.png'?>" alt="Image">
                        <img class="btn-play" alt="Image" src="<?= THEME_URL_URI ?>/assets/images/play-video.png">
                    </div>
                </a>

                <!-- video -->
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <iframe width="560" height="315" src="<?= isset($attr['featured_video']) ? $attr['featured_video'] : 'https://www.youtube.com/embed/T1-r_feNNnw' ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen=""></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><?= __('Đóng', TEXTDOMAIN) ?></button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- video -->
            </div>
        </div>
    </div>
</div>
