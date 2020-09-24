<?php

/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 11:03 AM
 * Template Name: Tuyển dụng
 */

if (wp_is_mobile()) {
    get_header('mobile');
} else {
    get_header();
}
?>

<?php st_breadcrumbs_main() ?>
<div class="woocommerce-order" style="text-align: center;min-height: 100vh; padding: 100px">
	<h2 style="text-align: center;margin-top: 15px"><?= __('Hệ thống đang cập nhật', TEXTDOMAIN) ?></h2>
    <a href="<?= home_url() ?>" class="btn btn-success"><?= __('Quay lại trang chủ', TEXTDOMAIN) ?></a>
</div>

<?php
get_footer();
?>