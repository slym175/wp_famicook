<footer>
    <div class="footer-pc">
        <div class="footer-top">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="logo-footer">
                            <img src="<?= get_theme_mod('logo_footer') ?>" alt="Logo Footer">
                        </div>
                        <ul class="address-footer">
                            <li>
                                <span> <img src="<?= THEME_URL_URI ?>/assets/images/f1.png" alt="Image"> </span>
                                <p><?= __('17T5 Hoàng Đạo Thúy, Thanh Xuân, Hà Nội', TEXTDOMAIN) ?></p>
                            </li>
                            <li>
                                <span> <img src="<?= THEME_URL_URI ?>/assets/images/f2.png" alt="Image"> </span>
                                <p>0916 617 687</p>
                            </li>
                            <li>
                                <span> <img src="<?= THEME_URL_URI ?>/assets/images/f3.png" alt="Image"> </span>
                                <p>cskh.famiedu@gmail.com</p>
                            </li>
                        </ul>
                        <div class="icon-footer">
                            <?php get_template_part('template_parts/menu/menu', 'social'); ?>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 list-cate-footer">
                        <?php get_template_part('template_parts/menu/menu', 'company'); ?>
                    </div>
                    <div class="col-md-3 col-sm-6 list-cate-footer">
                        <?php get_template_part('template_parts/menu/menu', 'services'); ?>
                    </div>
                    <div class="col-md-2 col-sm-6 list-cate-footer">
                        <?php get_template_part('template_parts/menu/menu', 'links'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p><?= __( '@2020 Bản quyền thuộc FamiCook', 'copyright' ) ?></p>
        </div>
    </div>
</footer>
<a href="#" class="top-up"><img src="<?= THEME_URL_URI ?>/assets/images/top.png" alt="Image"></a>
<a href="#" class="circle zalo-btn"><img src="<?= THEME_URL_URI ?>/assets/images/zalo.png" alt="Image"></a>

</body>
</html>