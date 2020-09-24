<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 7/10/2020
 * Time: 1:53 PM
 */

global $post;

$related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID)));
?>

<div>
    <?php if ($related) : ?>
    <div class="title-style-2">
        <h2><span><?= __((isset($section_title) ? $section_title : 'Demo'), TEXTDOMAIN) ?></span></h2>
    </div>
    <div class="khoahoc">
        <?php foreach ($related as $post) : setup_postdata($post);?>
            <div class="new-col">
                <div class="new-item">
                    <div class="img"> 
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="Image"> 
                    </div>
                    <div class="content-news">
                        <div class="title-news">
                            <h4><a href="<?= the_permalink() ?>" title="<?= the_title() ?>"><?= the_title() ?></a></h4>
                            <p class="author-service"><?= __('Tác giả: ', TEXTDOMAIN) ?><?= get_the_author() ?></p>
                            <p class="description-service">
                                <?= get_the_excerpt() ?>
                            </p>
                        </div>
                        <div class="see-detail"> <a href="<?= the_permalink() ?>" title="<?= the_title() ?>"><?= __('Xem chi tiết', TEXTDOMAIN) ?></a> </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <?php endif ?>
    <?php wp_reset_postdata(); ?>
</div>