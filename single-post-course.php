<main>
    <?php st_breadcrumbs_main() ?>

    <div class="section-service">
        <div class="container">
            <div class="row">
                <div class="col-md-9 service-left wow fadeInUp" data-wow-delay="200ms">
                    <div class="service-detail">
                        <div class="title-detail">
                            <h2><?= the_title() ?></h2>
                            <div class="date-dervice">
                                <div class="img"><img src="<?= THEME_URL_URI ?>/assets/images/dh.png" alt="Image"></div>
                                <span class="time"><?= get_the_date( 'H:i', the_id() ) ?></span>
                                <span class="date"><?= get_the_date( 'Y/m/d', the_id() ) ?></span>
                            </div>
                        </div>
                        <div class="list-choose">
                            <ul>
                                <li> <a href="#thongtinchung" title="" class="active"> <?= __('Thông tin chung', TEXTDOMAIN) ?> </a> </li>
                                <li> <a href="#giangvien" title="" class=""> <?= __('Giảng viên', TEXTDOMAIN) ?> </a> </li>
                                <li> <a href="#feedback" title="" class="">  <?= __('Feedback', TEXTDOMAIN) ?>  </a> </li>
                                <li> <a href="#chitietkhoahoc" title="" class=""> <?= __('Chi tiết', TEXTDOMAIN) ?> </a> </li>
                            </ul>
                        </div>
                        <div class="post-contents" id="thongtinchung">
                            <?php while (have_posts()) : the_post(); ?>
                                <?php pp_setPostViews(get_the_ID()); ?>
                                <?php
                                    the_content()
                                ?>
                            <?php endwhile; ?>
                        </div>
                        <div id="giangvien">
                            <?= get_post_meta( get_the_ID(), 'course_teacher', true ) ?>
                        </div>
                        <div id="feedback">
                            <p><strong><?= __('Phản hồi', TEXTDOMAIN) ?></strong></p>

                            <?php $feedback = get_post_meta( get_the_ID(), 'post_img_gallery', true ) ?>
                            <?php if($feedback) :?>
                                <div class="gallery-feedback"> 
                                    <ul class="list-inline thumbnail-box">
                                        <?php foreach($feedback as $key => $fb) : ?>
                                            <li>
                                                <a href="#myGallery" data-slide-to="<?= $key ?>">
                                                    <img class="img-thumbnail" src="<?= wp_get_attachment_url($fb) ?>" data-toggle="modal" data-target="#myimg" alt="Image">
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                    <!--modal body-->
                                <div class="modal fade" id="myimg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" title="Close">
                                            <span class="glyphicon glyphicon-remove"></span></button>
                                            </div>
                                            <div class="modal-body">
                                            <div id="myGallery" class="carousel slide" data-interval="false">
                                                <div class="carousel-inner">
                                                    <?php foreach($feedback as $key => $fb) : ?>
                                                        <div class="item">
                                                            <img src="<?= wp_get_attachment_url($fb) ?>" alt="Image">
                                                        </div>
                                                    <?php endforeach ?>
                                                </div>
                                                <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span></a> 
                                                <a class="right carousel-control" href="#myGallery" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span></a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="title-style-1 style-center padding-top-60" id="chitietkhoahoc">
                            <a href="" title=""><h2><span>Chi tiết khóa học</span></h2></a>
                        </div>
                        <!-- like -->
                        <div class="like-detail like-detail-border">
                            <div class="btn-box">
                                <a href="" class="btn btn-like" title=""><img src="<?= THEME_URL_URI ?>/assets/images/like.png" alt="Image"> Thích 200</a>
                                <a href="" class="btn btn-like" title=""><img src="<?= THEME_URL_URI ?>/assets/images/share.png" alt="Image"> Chia sẻ 200</a>
                            </div>
                            <p><a href="<?= get_post_meta( get_the_ID(), 'post_origin_url', true); ?>" title="<?= get_post_meta( get_the_ID(), 'post_origin', true); ?>"> Nguồn: <?= get_post_meta( get_the_ID(), 'post_origin', true); ?></a></p>
                        </div>
                    </div>

                    <div>
                        <?php 
                            if ( comments_open() || get_comments_number() ) :
                                comments_template('/comments.php');
                            endif;
                        ?>

                        <!-- khoa hoc lien quan -->
                        <?= nt()->load_template('content/news/post', 'related', array('postID' => get_the_ID(), 'section_title' => 'Khóa học liên quan')) ?>
                    </div>
                </div>
                <?= nt()->load_template('content/news/news', 'sidebar', array('current' => get_the_category()[0]->term_id, 'feature' => 0)) ?>
            </div>
        </div>
    </div>
</main>