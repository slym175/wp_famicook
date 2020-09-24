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
?>

<?php
    $parent = array();
    $children = array();

    $category = get_the_category($post->ID);

    if($category):
        foreach ($category as $cat):
            if($cat->parent != 0) :
                $ancestors = get_ancestors($cat->term_id,'category');
                $parent[] = end($ancestors);
            else:
                $parent[] = $cat->term_id;
            endif;
        endforeach;
    endif;

    if($parent):
        foreach ($parent as $par):
            $child_categories = get_categories(
                array( 'child_of' => $par )
            );
            foreach($child_categories as $child):
                $children[] = $child->term_id;
            endforeach;
        endforeach;
    endif;
?>

<?php if(in_array(10, $parent) || in_array(10, $children)) :
    get_template_part( 'single', 'post-course',  array());
else :?>
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
                                <span class="time"><?= get_the_date( 'H:i' ) ?></span>
                                <span class="date"><?= get_the_date( 'd/m/Y' ) ?></span>
                            </div>
                        </div>
                        <div class="post-contents">
                            <?php while (have_posts()) : the_post(); ?>
                                <?php pp_setPostViews(get_the_ID()); ?>
                                <?php
                                    the_content()
                                ?>
                            <?php endwhile; ?>
                        </div>
                        
                        <!-- like -->
                        <div class="like-detail like-detail-border">
                            <div class="btn-box">
                                <a href="" class="btn btn-like" title=""><img src="<?= THEME_URL_URI ?>/assets/images/like.png" alt="Image"> Thích 200</a>
                                <a href="" class="btn btn-like" title=""><img src="<?= THEME_URL_URI ?>/assets/images/share.png" alt="Image"> Chia sẻ 200</a>
                            </div>
                            <p><a href="<?= get_post_meta( get_the_ID(), 'post_origin_url', true); ?>" title="<?= get_post_meta( get_the_ID(), 'post_origin', true); ?>"> Nguồn: <?= get_post_meta( get_the_ID(), 'post_origin', true); ?></a></p>
                        </div>

                        <?php $posttags = get_the_tags(get_the_ID()); ?>
                        <!-- tags -->
                        
                        <?php if ($posttags) : ?>
                            <div class="tags-item">
                                <?php foreach($posttags as $tag) : ?>
                                    <div class="tag-box">
                                        <a href="<?= $tag->url ?>" title="<?= $tag->name ?>"><?= $tag->name ?></a>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        <?php endif ?>

                        <?php 
                            if ( comments_open() || get_comments_number() ) :
                                comments_template('/comments.php');
                            endif;
                        ?>


                        <!-- bai viet lien quan -->
                        <?= nt()->load_template('content/news/post', 'related', array('postID' => get_the_ID(), 'section_title' => 'Bài viết liên quan') ) ?>
                    </div>
                </div>
                <?= nt()->load_template('content/news/news', 'sidebar', array('current' => get_the_category()[0]->term_id, 'feature' => 1)) ?>
            </div>
        </div>
    </div>
</main>
<?php endif ?>
<?php 
get_footer();
?>