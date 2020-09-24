<?php
$menuLocations = get_nav_menu_locations();
$linkMenuId = $menuLocations['footer-menu-links'];
$linkMenu = wp_get_nav_menu_items($linkMenuId);
$menuName = wp_get_nav_menu_name('footer-menu-links');
?>

<?php if ($linkMenu): ?>
    <h4><?= $menuName ?></h4>
    <ul class="list-cate">
        <?php foreach ($linkMenu as $key => $menu): ?>
            <li>
                <a href="<?= $menu->url ?>" title="<?= $menu->title ?>"><?= $menu->title ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>