<?php
$menuLocations = get_nav_menu_locations();
$socialMenuId = $menuLocations['social-menu'];
$socialMenu = wp_get_nav_menu_items($socialMenuId);
?>

<?php if ($socialMenu): ?>
    <?php foreach ($socialMenu as $key => $menu): ?>
        <span>
            <a href="<?= $menu->url ?>" title="<?= $menu->title ?>">
                <img src="<?= get_the_post_thumbnail_url($menu->ID) ?>" alt="Image">
            </a>
        </span>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 
<span><a href="" title=""> <img src="<?= THEME_URL_URI ?>/assets/images/fb.png"> </a></span>
<span><a href="" title=""> <img src="<?= THEME_URL_URI ?>/assets/images/ins.png"></a> </span>
<span><a href="" title=""> <img src="<?= THEME_URL_URI ?>/assets/images/youtube.png"></a> </span> -->