<!-- NAVIGATION MENU ================================================== -->
<section class="nav-menu">
    <div class="container flex-container">
        <a href="#">
            <?php
            $image = get_field('ho_logo_image', 'option');
            ?>
            <img src="<?php echo $image['sizes']['logo']; ?>" alt="<?php bloginfo('name'); ?>" class="logo">
        </a>
        <nav class="main-menu">
            <?php
            $menu_options = [
                'menu_class' => false,
                'container' => false,
                'theme_location' => 'primary-navigation',
                'walker' => new custom_navwalker()
            ];

            wp_nav_menu($menu_options);
            ?>
        </nav>
        <button class="burger">
            <i class="fa fa-bars fa-fw"></i>
        </button>
    </div>
</section>