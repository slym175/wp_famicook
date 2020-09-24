<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 11:03 AM
 * Template Name: Về FamiCook
 */


if (wp_is_mobile()) {
    get_header('mobile');
} else {
    get_header();
}
?>

<main>
    <div class="section-banner-title">
        <div class="img">
            <img src="<?= THEME_URL_URI ?>/assets/images/bannergt.png" alt="Image">
        </div>
        <div class="title-banner">
            <h2><span><?= __('GIỚI THIỆU', TEXTDOMAIN) ?></span></h2>
        </div>
    </div>

    <?php 
        st_breadcrumbs_main();
        if (have_posts()) {
            the_post();
            the_content();
        }
    ?>

    
</main>

<?php
if(wp_is_mobile( )){
    get_footer('mobile');
}else{
    get_footer();
}
?>