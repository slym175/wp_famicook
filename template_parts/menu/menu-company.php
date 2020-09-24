<?php
$menuLocations = get_nav_menu_locations();
$companyMenuId = $menuLocations['footer-menu-company'];
$companyMenu = wp_get_nav_menu_items($companyMenuId);
$menuName = wp_get_nav_menu_name("footer-menu-company");
?>

<?php if ($companyMenu): ?>
    <h4><?= $menuName ?></h4>
    <ul class="list-cate">
        <?php foreach ($companyMenu as $key => $menu): ?>
            <li>
                <a href="<?= $menu->url ?>" title="<?= $menu->title ?>"><?= $menu->title ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- <ul class="list-cate">
    <li><a href="" title="">Về FamiCook</a></li>
    <li><a href="" title="">Tin tức </a></li>
    <li><a href="" title="">Tuyển dụng </a></li>
    <li><a href="" title="">Liên hệ</a></li>
</ul> -->