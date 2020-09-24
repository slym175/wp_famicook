<?php
$menuLocations = get_nav_menu_locations();
$serviceMenuId = $menuLocations['footer-menu-services'];
$serviceMenu = wp_get_nav_menu_items($serviceMenuId);
$menuName = wp_get_nav_menu_name('footer-menu-services');
?>

<?php if ($serviceMenu): ?>
    <h4><?= $menuName ?></h4>
    <ul class="list-cate">
        <?php foreach ($serviceMenu as $key => $menu): ?>
            <li>
                <a href="<?= $menu->url ?>" title="<?= $menu->title ?>"><?= $menu->title ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>



<!-- <ul class="list-cate">
    <li><a href="" title="">Khóa học ăn dặm</a></li>
    <li><a href="" title="">Cửa hàng </a></li>
</ul> -->