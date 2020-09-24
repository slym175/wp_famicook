<?php
    $tamnhin = isset($attr['tam-nhin']) ? $attr['tam-nhin'] : 'Về Famicook';
    $sumenh = isset($attr['su-menh']) ? $attr['su-menh'] : 'Về Famicook';
    $giatri = isset($attr['gia-tri']) ? $attr['gia-tri'] : 'Về Famicook';
?>

    <div class="section-info-page">
        <div class="bg-img">
            <img src="<?= THEME_URL_URI ?>/assets/images/bgabout.png" alt="Image">
        </div>
        <div class="container container-fluid">
            <div class="row">
                <div class="info-fw">
                    <div class="col-md-4 item wow fadeInUp" data-wow-delay="240ms">
                        <div class="item-fw">
                            <div class="img">
                                <img src="<?= THEME_URL_URI ?>/assets/images/fwv.png" alt="Image">
                                <img src="<?= THEME_URL_URI ?>/assets/images/fw1.png" alt="Image" class="img-hover">
                            </div>
                            <div class="title">
                                <span><?= __('Tầm nhìn', TEXTDOMAIN) ?></span>
                            </div>
                            <div class="description-fw">
                                <p><?= $tamnhin ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 item wow fadeInUp" data-wow-delay="320ms">
                        <div class="item-fw">
                            <div class="img">
                                <img src="<?= THEME_URL_URI ?>/assets/images/fw2.png" alt="Image">
                                <img src="<?= THEME_URL_URI ?>/assets/images/fwt.png" alt="Image" class="img-hover">
                            </div>
                            <div class="title">
                                <span><?= __('Sứ mệnh', TEXTDOMAIN) ?></span>
                            </div>
                            <div class="description-fw">
                                <p><?= $sumenh ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 item wow fadeInUp" data-wow-delay="400ms">
                        <div class="item-fw">
                            <div class="img">
                                <img src="<?= THEME_URL_URI ?>/assets/images/fw3.png" alt="Image">
                                <img src="<?= THEME_URL_URI ?>/assets/images/fw3t.png" alt="Image" class="img-hover">
                            </div>
                            <div class="title">
                                <span><?= __('Giá trị cốt lõi', TEXTDOMAIN) ?></span>
                            </div>
                            <div class="description-fw">
                                <p><?= $giatri ?></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>