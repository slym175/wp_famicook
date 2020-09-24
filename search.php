<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 9:56 AM
 */
if (wp_is_mobile()) {
    get_header('mobile');
} else {
    get_header();
}

global $wp_query;
$total_results = $wp_query->found_posts;

$s=get_search_query();
$args = array( 's' => $s );
$the_query = new WP_Query( $args );

?>

<div class="section-post-homepage" style="margin-top: 0">
    <div class="container container-fluid">
        <div class="row">
            <div class="title-style-1 style-center padding-top-60  wow fadeInUp" data-wow-delay="200ms">
                <h2 style='font-weight:bold;color:#000'><?= __('Kết quả tìm kiếm cho từ khóa: '.$s, TEXTDOMAIN)?></h2>
            </div>
            <?php if($the_query->have_posts()) : ?>
                <div class="post-page <?= wp_is_mobile() ? 'post-page-slide-mb' : ''?> wow fadeInUp" data-wow-delay="200ms">
                    <?php while($the_query->have_posts()) : $the_query->the_post();?>
                        <div class="col-md-4 col-sm-4 col-xs-12 post-col">
                            <div class="post-item">
                                <div class="img">
                                    <a href="<?= the_permalink() ?>" title="<?= the_title() ?>"><img src="<?= get_the_post_thumbnail_url( get_the_ID() ) ?>" alt="<?= the_title() ?>"></a>
                                    <div class="title">
                                        <p><?= the_title() ?></p>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="<?= the_permalink() ?>" title="<?= the_title() ?>">
                                        <p><?= the_title() ?></p>
                                        <span><?= __('Xem ngay', TEXTDOMAIN) ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
                <div class="col-12 btn-famicook style-center">
                    <a href="" class="btn btn-seemore" title=""> <?= __('Xem thêm', TEXTDOMAIN) ?> </a>
                </div>
            <?php else : ?>
                <h2 style='font-weight:bold;color:#000;text-align: center'><?= __('Không tìm thấy kết quả phù hợp', TEXTDOMAIN)?></h2>
            <?php endif ?>
            <div class="col-12 btn-famicook style-center">
                <a href="<?= home_url( ) ?>" class="btn btn-seemore" title=""> <?= __('Quay về trang chủ', TEXTDOMAIN) ?> </a>
            </div>
        </div>
    </div>
</div>
<?php
if(wp_is_mobile( )){
    get_footer('mobile');
}else{
    get_footer();
}
?>