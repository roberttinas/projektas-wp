<!-- HEADER CONTACTS ================================================== -->
<section class="container-header">
    <div class="container flex-container">
        <h4>
            <?php the_field('hc_section_heading'); ?>
        </h4>
        <?php
        $menu_options = [
            'menu_class' => 'header-contacts flex-container',
            'container' => false,
            'theme_location' => 'secondary-navigation',
            'walker' => new custom_navwalker()
        ];
        wp_nav_menu($menu_options);
        ?>
    </div>
</section>