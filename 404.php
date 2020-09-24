<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 9:56 AM
 */
get_header();
?>

<div class="banner-notfound">
    <div class="img">
        <img src="<?= THEME_URL_URI ?>/assets/images/bgnotfound.png" alt="404 Background">
    </div>
    <div class="title-banner">
        <p><?php __('Đang trong thời gian bảo trì, nâng cấp', TEXTDOMAIN) ?></p>
        <div class=" btn-famicook">
            <a href="<?php home_url() ?>" class="btn btn-seemore btn-notfound" title=""><?= __('Quay lại', TEXTDOMAIN) ?></a>
        </div>
    </div>
</div>

<?php
get_footer();
?>