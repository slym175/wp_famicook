<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/17/2020
 * Time: 9:56 AM
 */

if( wp_is_mobile() ) {
    get_header('mobile');
} else { 
    get_header(); 
}

if(have_posts()){
    while (have_posts()){
        the_post();
        the_content();
    }
}
?>


<?php get_footer() ?>
