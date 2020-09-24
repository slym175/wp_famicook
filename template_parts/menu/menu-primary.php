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
$half = round(count($primaryMenu) / 3 + 0.5);
?>

<?php if ($primaryMenu): ?>
    <div class="header-bottom">
        <div class="container container-fluid">
            <div lang="row">
                <ul class="main-menu">
                    <?php foreach ($primaryMenu as $key => $menu_prd): ?>
                        <?php if($key == $half): ?>
                            <li class="logo"><a href="<?= home_url() ?>" title="<?= __('Trang chủ', TEXTDOMAIN) ?>"> <img src="<?= get_theme_mod('logo') ?>" alt="Logo"> </a></li>
                            <li><a href="<?= $menu_prd->url ?>" title="<?= __($menu_prd->title, TEXTDOMAIN) ?>"><?= __($menu_prd->title, TEXTDOMAIN) ?></a></li>
                        <?php continue; endif ?>
                        <li><a href="<?= $menu_prd->url ?>" title="<?= __($menu_prd->title, TEXTDOMAIN) ?>"><?= __($menu_prd->title, TEXTDOMAIN) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>