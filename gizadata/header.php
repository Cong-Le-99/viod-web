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
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                            <path d="M2 4a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4zm2 0v.01L12 13l8-8.99V4H4zm16 2.41l-7.29 7.3a1 1 0 0 1-1.42 0L4 6.41V20h16V6.41z" fill="#fff" />
                        </svg>
                        <a href="mailto:VIOD@GMAIL.COM">VIOD@GMAIL.COM</a>
                    </span>
                    <span class="topbar-item">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.07 21 3 13.93 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.24 1.01l-2.2 2.2z" fill="#fff" />
                        </svg>
                        <a href="tel:19000000">1900 0000</a>
                    </span>
                </div>
                <div class="topbar-right">
                    <span class="topbar-lang">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22217 10.4999C2.22217 6.2044 5.7044 2.72217 9.99995 2.72217C14.2955 2.72217 17.7777 6.2044 17.7777 10.4999C17.7777 14.7955 14.2955 18.2777 9.99995 18.2777C5.7044 18.2777 2.22217 14.7955 2.22217 10.4999ZM4.4652 7.90572L6.56549 10.006C6.98594 10.4264 7.22215 10.9967 7.22215 11.5913V12.1666C7.22215 12.7802 7.71961 13.2777 8.33326 13.2777C9.25374 13.2777 9.99993 14.0239 9.99994 14.9444V16.6111C12.6952 16.6111 14.983 14.8662 15.7952 12.4444L14.4444 12.4444C14.291 12.4444 14.1666 12.32 14.1666 12.1666V11.611C14.1666 10.844 13.5448 10.2221 12.7777 10.2221L9.99992 10.2221C9.23077 10.2221 8.61103 9.59178 8.61103 8.82681C8.61103 8.39729 8.80987 7.98772 9.15123 7.72422L9.66447 7.32802C9.90786 7.14014 10.0504 6.85004 10.0504 6.54257L10.0504 6.49728C10.0504 5.66745 10.7231 4.99475 11.5529 4.99475L11.6162 4.99475C11.8315 4.99475 12.0287 4.9178 12.182 4.78991C11.5043 4.53079 10.7687 4.38883 9.99995 4.38883C7.55238 4.38883 5.44088 5.82771 4.4652 7.90572Z" fill="white" />
                        </svg>
                        <?php
                        $languages = apply_filters('wpml_active_languages', NULL, array('skip_missing' => 0));
                        if (!empty($languages)) {
                            $total = count($languages);
                            $index = 0;
                            foreach ($languages as $lang) {
                                $index++;
                                echo '<a href="' . esc_url($lang['url']) . '" class="' . ($lang['active'] ? 'active' : '') . '">';
                                echo strtoupper($lang['language_code']);
                                echo '</a>';
                                if ($index < $total) {
                                    echo ' / ';
                                }
                            }
                        }
                        ?>


                    </span>
                    <span class="topbar-social">
                        <a href="#" title="Facebook" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M11.7084 1.1698L9.85689 1.16675C7.77678 1.16675 6.43253 2.58347 6.43253 4.77623V6.44045H4.57092C4.41005 6.44045 4.27979 6.57442 4.27979 6.73966V9.15092C4.27979 9.31617 4.4102 9.44998 4.57092 9.44998H6.43253V15.5344C6.43253 15.6996 6.56279 15.8334 6.72366 15.8334H9.15253C9.31339 15.8334 9.44366 15.6994 9.44366 15.5344V9.44998H11.6203C11.7812 9.44998 11.9114 9.31617 11.9114 9.15092L11.9123 6.73966C11.9123 6.66032 11.8816 6.58433 11.8271 6.52818C11.7726 6.47203 11.6983 6.44045 11.6211 6.44045H9.44366V5.02967C9.44366 4.3516 9.60096 4.00737 10.4608 4.00737L11.7081 4.00691C11.8688 4.00691 11.9991 3.87295 11.9991 3.70785V1.46886C11.9991 1.30392 11.869 1.1701 11.7084 1.1698Z" fill="white" />
                            </svg>
                        </a>
                        <a href="#" title="Instagram" target="_blank" rel="noopener">
                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                <rect x="2" y="2" width="20" height="20" rx="5" stroke="#fff" stroke-width="2" />
                                <circle cx="12" cy="12" r="5" stroke="#fff" stroke-width="2" />
                                <circle cx="17.5" cy="6.5" r="1.5" fill="#fff" />
                            </svg>
                        </a>
                        <a href="#" title="Twitter" target="_blank" rel="noopener">
                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                <path d="M22 5.92a8.38 8.38 0 0 1-2.36.65A4.13 4.13 0 0 0 21.4 4.1a8.19 8.19 0 0 1-2.6.99A4.1 4.1 0 0 0 11.07 9a11.65 11.65 0 0 1-8.45-4.29a4.07 4.07 0 0 0 1.27 5.47A4.07 4.07 0 0 1 2 9.13v.05a4.1 4.1 0 0 0 3.29 4.02a4.09 4.09 0 0 1-1.85.07a4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 2 19.54a11.62 11.62 0 0 0 6.29 1.84c7.55 0 11.68-6.26 11.68-11.68c0-.18-.01-.36-.02-.54A8.18 8.18 0 0 0 22 5.92z" fill="#fff" />
                            </svg>
                        </a>
                        <a href="#" title="YouTube" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M8 2.8999C8.03205 2.89991 13.0111 2.90123 14.2598 3.24268C14.945 3.42724 15.4854 3.96746 15.6699 4.65283C16.0109 5.89818 16.0001 8.48691 16 8.51416C16 8.51416 16.0003 11.1107 15.6709 12.3628C15.4863 13.0481 14.9452 13.5885 14.2598 13.7729C13.0089 14.1019 8.0149 14.102 8 14.1021C8 14.1021 3.00439 14.1029 1.73926 13.7603C1.054 13.5756 0.51364 13.0343 0.329102 12.3491C0.00171259 11.1173 1.14054e-05 8.53194 1.43085e-09 8.50146C1.43085e-09 8.50146 -0.00033907 5.90482 0.329102 4.65283C0.51353 3.9676 1.06724 3.41351 1.73926 3.229C2.99133 2.89942 8 2.8999 8 2.8999ZM6.40527 10.8999L10.5703 8.50146L6.40527 6.10205V10.8999Z" fill="white" />
                            </svg>
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
                            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="7" stroke="#0A2536" stroke-width="2" />
                                <path d="M20 20l-3.5-3.5" stroke="#0A2536" stroke-width="2" stroke-linecap="round" />
                            </svg>
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
                <button class="mobile-menu-close" aria-label="Đóng menu"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path d="M10.4108 11.5893C10.7363 11.9148 11.2639 11.9148 11.5893 11.5893C11.9148 11.2639 11.9148 10.7363 11.5893 10.4108L7.17859 6.00008L11.5893 1.58934C11.9148 1.2639 11.9148 0.736263 11.5893 0.410826C11.2639 0.0853893 10.7363 0.0853893 10.4108 0.410826L6.00008 4.82157L1.58934 0.410826C1.2639 0.0853888 0.736263 0.0853888 0.410826 0.410826C0.0853888 0.736263 0.0853887 1.2639 0.410826 1.58934L4.82157 6.00008L0.410826 10.4108C0.0853894 10.7363 0.0853894 11.2639 0.410826 11.5893C0.736263 11.9148 1.2639 11.9148 1.58934 11.5893L6.00008 7.17859L10.4108 11.5893Z" fill="white" />
                    </svg></button>
            </div>
            <form class="mobile-search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <div class="search-input-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.097 13.5112C10.8663 14.4456 9.3313 15.0002 7.66683 15.0002C3.61674 15.0002 0.333496 11.7169 0.333496 7.66683C0.333496 3.61674 3.61674 0.333496 7.66683 0.333496C11.7169 0.333496 15.0002 3.61674 15.0002 7.66683C15.0002 9.3313 14.4456 10.8663 13.5112 12.097L17.3739 15.9597C17.7645 16.3502 17.7645 16.9834 17.3739 17.3739C16.9834 17.7645 16.3502 17.7645 15.9597 17.3739L12.097 13.5112ZM13.0002 7.66683C13.0002 10.6123 10.6123 13.0002 7.66683 13.0002C4.72131 13.0002 2.3335 10.6123 2.3335 7.66683C2.3335 4.72131 4.72131 2.3335 7.66683 2.3335C10.6123 2.3335 13.0002 4.72131 13.0002 7.66683Z" fill="#082136" />
                    </svg>
                    <input type="search" name="s" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
                </div>
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
                    <span class="topbar-lang">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.22217 9.99995C2.22217 5.7044 5.7044 2.22217 9.99995 2.22217C14.2955 2.22217 17.7777 5.7044 17.7777 9.99995C17.7777 14.2955 14.2955 17.7777 9.99995 17.7777C5.7044 17.7777 2.22217 14.2955 2.22217 9.99995ZM4.4652 7.40572L6.56549 9.506C6.98594 9.92645 7.22215 10.4967 7.22215 11.0913V11.6666C7.22215 12.2802 7.71961 12.7777 8.33326 12.7777C9.25374 12.7777 9.99993 13.5239 9.99994 14.4444V16.1111C12.6952 16.1111 14.983 14.3662 15.7952 11.9444L14.4444 11.9444C14.291 11.9444 14.1666 11.82 14.1666 11.6666V11.111C14.1666 10.344 13.5448 9.72214 12.7777 9.72214L9.99992 9.72214C9.23077 9.72214 8.61103 9.09178 8.61103 8.32681C8.61103 7.89729 8.80987 7.48772 9.15123 7.22422L9.66447 6.82802C9.90786 6.64014 10.0504 6.35004 10.0504 6.04257L10.0504 5.99728C10.0504 5.16745 10.7231 4.49475 11.5529 4.49475L11.6162 4.49475C11.8315 4.49475 12.0287 4.4178 12.182 4.28991C11.5043 4.03079 10.7687 3.88883 9.99995 3.88883C7.55238 3.88883 5.44088 5.32771 4.4652 7.40572Z" fill="#082136" />
                        </svg>
                        <?php
                        $languages = apply_filters('wpml_active_languages', NULL, array('skip_missing' => 0));
                        if (!empty($languages)) {
                            $total = count($languages);
                            $index = 0;
                            foreach ($languages as $lang) {
                                $index++;
                                echo '<a href="' . esc_url($lang['url']) . '" class="' . ($lang['active'] ? 'active' : '') . '">';
                                echo strtoupper($lang['language_code']);
                                echo '</a>';
                                if ($index < $total) {
                                    echo ' / ';
                                }
                            }
                        }
                        ?>


                    </span>
                </div>
            </div>
        </nav>
        <!-- End Mobile Menu -->