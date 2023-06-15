    <?php
    function add_css()
    {
        wp_register_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', false, '1.1', 'all');
        wp_enqueue_style('aos');

        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', false, '1.1', 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', false, '1.1', 'all');
        wp_enqueue_style('bootstrap-icons');

        wp_register_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', false, '1.1', 'all');
        wp_enqueue_style('boxicons');

        wp_register_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', false, '1.1', 'all');
        wp_enqueue_style('glightbox');

        wp_register_style('remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', false, '1.1', 'all');
        wp_enqueue_style('remixicon');

        wp_register_style('swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', false, '1.1', 'all');
        wp_enqueue_style('swiper-bundle');

        wp_register_style('main', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');
        wp_enqueue_style('main');

        wp_register_style('theme', get_template_directory_uri() . '/assets/css/theme.min.css', false, '1.1', 'all');
        wp_enqueue_style('theme');
    }
    add_action('wp_enqueue_scripts', 'add_css');


    function add_script()

    {

        wp_register_script('js-aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery'), 1.1, true);
        wp_enqueue_script('js-aos');

        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);
        wp_enqueue_script('bootstrap');

        wp_register_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), 1.1, true);
        wp_enqueue_script('glightbox');

        wp_register_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), 1.1, true);
        wp_enqueue_script('isotope');

        wp_register_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), 1.1, true);
        wp_enqueue_script('swiper');

        wp_register_script('waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array('jquery'), 1.1, true);
        wp_enqueue_script('waypoints');

        wp_register_script('php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery'), 1.1, true);
        wp_enqueue_script('php-email-form');

        wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.1, true);
        wp_enqueue_script('main');
    }

    add_action('wp_enqueue_scripts', 'add_script');
    add_theme_support('menus');

    function register_my_menu()
    {
        register_nav_menu('primary-menu', __('Primary Menu', 'vsct_theme_user_navigation'));
    }

    add_action('init', 'register_my_menu');
