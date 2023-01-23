<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php the_title(); ?></title>
    <meta charset <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="site-layout">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="navbar-items">
                <?php echo the_custom_logo(); ?>
                <button class="navbar-toggler custom-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                    <span class=" navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMenu">
    <ul>
        
        <?php
            if(wp_get_nav_menu_items('nav-menu')){
            $menu_items = wp_get_nav_menu_items('nav-menu');
            foreach ($menu_items as $menu_item) {
                echo '<li';
                if ($menu_item->current) {
                    echo ' class="current-menu-item"';
                }
                echo '><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
            }
        }
        else {
            echo '<a href="http://donparkett.local/wp-admin/nav-menus.php" style="color: red;">Dodaj menu z nazwą nav-menu</p>';
        }
        ?>
        
    </ul>
</div>
            </div>
            <div class="header-slider">

            </div>
        </nav>