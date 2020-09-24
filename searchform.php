<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/27/2020
 * Time: 11:35 AM
 */
?>

<div class="col-md-6 col-sm-6 f-right form-search">
    <form role="search" method="get" action="<?= home_url( '/' ) ?>">
        <input type="text" class="field" name="s" id="s" placeholder="<?= __( 'Nhập từ khóa tìm kiếm', TEXTDOMAIN ) ?>" />
        <button type="submit" class="submit btn btn-search" name="submit" id="searchsubmit"> 
            <img src="<?= THEME_URL_URI ?>/assets/images/search.png" alt="Search Button"> 
        </button>
    </form>
</div>