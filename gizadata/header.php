<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <!-- Bootstrap 5 CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/thuvien/fancy/fancy.css'>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <!-- Topbar -->
    <div class="topbar">
        <div class="main">
            <div class="topbar-left">
                <span class="topbar-item">
                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><path d="M2 4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4zm2 0v.01L12 13l8-8.99V4H4zm16 2.41l-7.29 7.3a1 1 0 0 1-1.42 0L4 6.41V20h16V6.41z" fill="#fff"/></svg>
                    <a href="mailto:VIOD@GMAIL.COM">VIOD@GMAIL.COM</a>
                </span>
                <span class="topbar-item">
                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.07 21 3 13.93 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.24 1.01l-2.2 2.2z" fill="#fff"/></svg>
                    <a href="tel:19000000">1900 0000</a>
                </span>
            </div>
            <div class="topbar-right">
                <span class="topbar-lang">
                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="#fff" stroke-width="2"/><path d="M2 12h20M12 2c2.5 2.5 2.5 17.5 0 20M12 2c-2.5 2.5-2.5 17.5 0 20" stroke="#fff" stroke-width="2"/></svg>
                    <a href="#" class="active">VN</a> / <a href="#">EN</a>
                </span>
                <span class="topbar-social">
                    <a href="#" title="Facebook" target="_blank" rel="noopener">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88v-6.99H7.9v-2.89h2.54V9.84c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.89h-2.34v6.99C18.34 21.13 22 17 22 12z" fill="#fff"/></svg>
                    </a>
                    <a href="#" title="Instagram" target="_blank" rel="noopener">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" stroke="#fff" stroke-width="2"/><circle cx="12" cy="12" r="5" stroke="#fff" stroke-width="2"/><circle cx="17.5" cy="6.5" r="1.5" fill="#fff"/></svg>
                    </a>
                    <a href="#" title="Twitter" target="_blank" rel="noopener">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><path d="M22 5.92a8.38 8.38 0 0 1-2.36.65A4.13 4.13 0 0 0 21.4 4.1a8.19 8.19 0 0 1-2.6.99A4.1 4.1 0 0 0 11.07 9a11.65 11.65 0 0 1-8.45-4.29a4.07 4.07 0 0 0 1.27 5.47A4.07 4.07 0 0 1 2 9.13v.05a4.1 4.1 0 0 0 3.29 4.02a4.09 4.09 0 0 1-1.85.07a4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 2 19.54a11.62 11.62 0 0 0 6.29 1.84c7.55 0 11.68-6.26 11.68-11.68c0-.18-.01-.36-.02-.54A8.18 8.18 0 0 0 22 5.92z" fill="#fff"/></svg>
                    </a>
                    <a href="#" title="YouTube" target="_blank" rel="noopener">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" stroke="#fff" stroke-width="2"/><path d="M10 9l5 3-5 3V9z" fill="#fff"/></svg>
                    </a>
                </span>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

    <header id="masthead" class="site-header">
        <div class="header-inner">
            <div class="main">
                <div class="site-branding">
                    <a href="/">
                        <img src="https://viod.1994.cloud/wp-content/uploads/2025/05/image_Screenshot-2025-03-12-at-10.53.38-2_UXQv.webp" alt="">
                    </a>
                </div>
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                    ));
                    ?>
                </nav>
                <div class="header-actions">
                    <button class="search-toggle" aria-label="Tìm kiếm">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7" stroke="#0A2536" stroke-width="2"/><path d="M20 20l-3.5-3.5" stroke="#0A2536" stroke-width="2" stroke-linecap="round"/></svg>
                    </button>
                    <!-- <a href="#" class="login-btn">ĐĂNG NHẬP</a> -->
                </div>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    ≡
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay & Drawer -->
    <div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>
    <nav id="mobile-menu" class="mobile-menu" aria-hidden="true">
        <div class="mobile-menu-header">
            <div class="mobile-logo">
                <img src="https://viod.1994.cloud/wp-content/uploads/2025/05/image_Screenshot-2025-03-12-at-10.53.38-2_UXQv.webp" alt="">
            </div>
            <button class="mobile-menu-close" aria-label="Đóng menu">&times;</button>
        </div>
        <form class="mobile-search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
            <input type="search" name="s" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
        </form>
        <div class="mobile-menu-content">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'mobile-primary-menu',
                'container'      => false,
                'walker'         => new Walker_Nav_Menu(), // Sử dụng walker mặc định, sẽ xử lý JS cho accordion
            ));
            ?>
        </div>
        <div class="mobile-menu-footer">
            <!-- <a href="#" class="login-btn">ĐĂNG NHẬP</a> -->
            <div class="mobile-lang-switch">
                <a href="#" class="active">VN</a> / <a href="#">EN</a>
            </div>
        </div>
    </nav>
    <!-- End Mobile Menu -->

    