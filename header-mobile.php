<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>

<?php
/**
 * Created by trugnduc.vnu@gmail.com.
 * User: trungduc
 * Date: 6/23/2020
 * Time: 9:15 AM
 */

$menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
$primaryMenuId = $menuLocations['primary-menu'];
$primaryMenu = wp_get_nav_menu_items($primaryMenuId);
$socialMenuId = $menuLocations['social-menu'];
$socialMenu = wp_get_nav_menu_items($socialMenuId);

?>

<header>

    <div class="header-mobile">
        <div class="top-mobile">
            <div class="mb-left">
                <span> <img src="<?= THEME_URL_URI ?>/assets/images/logomobile.png" alt="Image"> </span>
                <span>
                    <p>0916 617 687</p>
                </span>
            </div>
            <?php if ($socialMenu): ?>
                <div class="mb-right">
                    <div class="icon-mb-right">
                        <?php foreach ($socialMenu as $key => $menu): ?>
                            <span><a href="<?= $menu->url ?>" title="<?= $menu->title ?>">
                                <img src="<?= get_the_post_thumbnail_url($menu->ID) ?>" alt="Image">
                            </a></span>
                        <?php endforeach ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
        <div class="bottom-mobile">
            <div class="humberger-menu">
                <div class="icon-menu"> <img src="<?= THEME_URL_URI ?>/assets/images/humberger.png" alt="Image"> </div>
                <?php if ($primaryMenu): ?>
                    <div class="sub-menu-mb">
                        <ul>
                            <?php foreach ($primaryMenu as $key => $menu): ?>
                                <li>  
                                    <span>
                                        <img src="<?= THEME_URL_URI ?>/assets/images/logot.png" alt="<?= $menu->title ?>">
                                    </span>
                                    <a href="<?= $menu->url ?>" title="<?= $menu->title ?>"><?= __($menu->title, TEXTDOMAIN) ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
            </div>
            <div class="logo-mo">
                <a href="" title=""> <img src="<?= THEME_URL_URI ?>/assets/images/logomb.png" alt="Image"> </a>
            </div>
            <div class="search-mb">
                <div class="img-serach"> <img src="<?= THEME_URL_URI ?>/assets/images/lup.png" alt="Image"> </div>
                <div class="item-search">
                    <form>
                        <input type="text" name="" placeholder="<?= __('Tìm kiếm', TEXTDOMAIN) ?>">
                        <a href="" title="" class="btn btn-searchmb"> <img src="<?= THEME_URL_URI ?>/assets/images/searchmb.png"> </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="weglot_here"></div>