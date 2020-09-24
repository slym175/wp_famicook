<?php

/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 11:03 AM
 * Template Name: Liên hệ
 */

if (wp_is_mobile()) {
    get_header('mobile');
} else {
    get_header();
}
?>

<main>
    <div class="banner-lienhe">
        <div class="img">
            <img src="<?= THEME_URL_URI ?>/assets/images/banner-lienhe.png" alt="">
        </div>
    </div>
    <div class="section-map wow fadeInUp" data-wow-delay="260ms">
        <div class="container">
            <div class="row">
                <div class="form-and-map">
                    <div class="col-md-6 form-lienhe-item">
                        <div class="title-style-1">
                            <h2><span> <?= __('Liên hệ', TEXTDOMAIN) ?>  </span></h2>
                        </div>
                        <p class="description-title"> <?= __('Vui lòng điền đầy đủ thông tin theo yêu cầu để chúng tôi có thể hỗ trợ quý khách tốt nhất.', TEXTDOMAIN) ?> </p>
                        <?= do_shortcode('[contact-form-7 id="145" title="ContactForm" html_class="form-lienhe"]') ?>
                        <!-- <form class="form-lienhe">
                            <span> <input type="text" placeholder=" Họ - tên "> </span>
                            <span> <input type="text" placeholder=" Email "> </span>
                            <span> <textarea placeholder=" Nội dung "></textarea> </span>
                            <a href="" class="btn btn-seemore" title="">Gửi <img src="THEME_URL_URI/assets/images/gui.png"> </a>
                        </form> -->
                    </div>
                    <div class="col-md-6 map-and">
                        <div class="map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.667871130221!2d105.80159061533195!3d21.00594659393176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca220db8fa9%3A0x3e80cf0cb9fcc246!2zMTcgSG_DoG5nIMSQ4bqhbyBUaMO6eSwgTmjDom4gQ2jDrW5oLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1599187669395!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <img src="<?= THEME_URL_URI ?>/assets/images/map.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-cskh wow fadeInUp" data-wow-delay="200ms">
        <div class="img-cskh">
            <img src="<?= THEME_URL_URI ?>/assets/images/cskh.png" alt="">
        </div>
        <div class="content">
            <div class="text">
                <p><?= __('Đội ngũ CSKH của FamiCook sẽ đồng hành hỗ trợ bạn trong suốt quá trình chăm sóc con, Không còn lo lắng khi tìm kiếm thông tin ăn dặm, nuôi dạy con chính thống.', TEXTDOMAIN) ?></p>
                <a href="" class="btn btn-seemore" title=""><?= __('Gặp CSKH', TEXTDOMAIN) ?> </a>
            </div>
        </div>
    </div>

    <div class="section-lienhe">
        <div class="container">
            <div class="row">
                <div class="title-style-1 style-center padding-top-60">
                    <h2><span><?= __('Liên hệ trực tiếp', TEXTDOMAIN) ?></span></h2>
                </div>
                <div class="col-md-12 lienhe-box-item">
                    <div class="lienhe-box wow fadeInUp" data-wow-delay="260ms">
                        <div class="lienhe-item">
                            <div class="img"> <img src="<?= THEME_URL_URI ?>/assets/images/email.png" alt=""> </div>
                            <span class="text"><strong> <?= __('ĐĂNG KÝ KHÓA HỌC', TEXTDOMAIN) ?></strong><a href="" title="">http://m.me/andam3in1</a></span>
                        </div>
                        <div class="lienhe-item">
                            <div class="img"> <img src="<?= THEME_URL_URI ?>/assets/images/email.png" alt=""> </div>
                            <span class="text"><strong> <?= __('TUYỂN DỤNG', TEXTDOMAIN) ?></strong><a href="" title="">tuyendung@famicook.vn</a></span>
                        </div>
                        <div class="lienhe-item">
                            <div class="img"> <img src="<?= THEME_URL_URI ?>/assets/images/email.png" alt=""> </div>
                            <span class="text"><strong>  <?= __('GÓP Ý VỀ DỊCH VỤ', TEXTDOMAIN) ?> </strong><a href="" title=""> gopy@famicook.vn </a></span>
                        </div>
                        <div class="lienhe-item">
                            <div class="img"> <img src="<?= THEME_URL_URI ?>/assets/images/email.png" alt=""> </div>
                            <span class="text"><strong> <?= __('HỢP TÁC KINH DOANH', TEXTDOMAIN) ?> </strong><a href="" title="">hoptac@famicook.vn</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
        $attr = array(
            'limit' => 10,
        ); 
    ?>
    <?= nt()->load_template('content/home/partner', '', array('attr' => $attr)); ?>
</main>

<?php
get_footer();
?>