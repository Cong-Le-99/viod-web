<?php
/*
Template Name: chương trình đào tạo
*/
get_header();
?>
<div class="member-certificate post-archive bg-post-archive custom-banner-bg">
    <h1 class="d-none"><?php echo single_cat_title('', false); ?></h1>
    <div class="banner">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <!-- <nav class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="d-none d-md-block" href="<?php echo home_url(); ?>">Home</a>
                    <a class="d-block d-md-none" href="<?php echo home_url(); ?>" style="width: 20px; height: 20px;">
                        <img class="w-1 h-1" src="<?php echo get_template_directory_uri(); ?>/images/home.svg" alt="">
                    </a>
                </li>
                <li class="breadcrumb-item active">Tin tức</li>
            </ol>
        </nav> -->
        <div class="banner-content px-4">
            <h2 class="title light">CHƯƠNG TRÌNH ĐÀO TẠO</h2>
            <p class="text-base light text-center">
                Trusted partner of Board of Directors, business leaders and experts in the journey to improve governance capacity.
            </p>
        </div>
    </div>
</div>
<div class="post-archive-news archive-training-program psk">
    <section class="session-wrap">
        <div class="container">
            <div class="training-layout">
                <div class="daotao">
                    <div class="training-layout archive-training-program">
                        <!-- SIDEBAR -->
                        <div class="filter-sidebar d-none d-lg-block">
                            <aside class="training-sidebar ">
                                <div class="nda">
                                    <form method="get" action="">
                                        <div class="filter-section">
                                            <div class="search-box">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/Search.svg" alt="Search" class="search-icon">
                                                <input type="text" name="s" placeholder="Find a training program..." value="<?php echo esc_attr(get_search_query()); ?>" />
                                            </div>
                                        </div>
                                        <div class="tit">
                                            <div class="a">Danh mục</div>
                                            <?php if (!empty($_GET['training_category']) || !empty($_GET['tag']) || !empty($_GET['s'])) : ?>
                                                <div class="b">
                                                    <a href="<?php echo get_post_type_archive_link('training_program'); ?>">Bỏ chọn x</a>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="category-options">
                                            <?php
                                            $cats = get_terms('training_category');
                                            foreach ($cats as $cat) {
                                                $checked = (isset($_GET['training_category']) && $_GET['training_category'] == $cat->slug);

                                                // Tạo URL với các tham số hiện tại
                                                $current_params = $_GET;
                                                if ($checked) {
                                                    unset($current_params['training_category']);
                                                } else {
                                                    $current_params['training_category'] = $cat->slug;
                                                }

                                                $filter_url = add_query_arg($current_params, get_post_type_archive_link('training_program'));

                                                echo '<label class="radio-option">';
                                                echo '<input type="radio" name="training_category" value="' . esc_attr($cat->slug) . '" ' . ($checked ? 'checked' : '') . ' data-url="' . esc_url($filter_url) . '">';
                                                echo '<span class="radio-custom"></span>';
                                                echo '<span class="radio-label' . ($checked ? ' active' : '') . '">' . esc_html($cat->name) . '</span>';
                                                echo '</label>';
                                            }
                                            ?>
                                        </div>

                                        <div class="tit">
                                            <div class="a">Tags</div>
                                        </div>

                                        <div class="tag-filter">
                                            <?php
                                            $tags = get_terms('post_tag');
                                            foreach ($tags as $tag) {
                                                $active = (isset($_GET['tag']) && $_GET['tag'] == $tag->slug);

                                                // Tạo URL với các tham số hiện tại
                                                $current_params = $_GET;
                                                if ($active) {
                                                    unset($current_params['tag']);
                                                } else {
                                                    $current_params['tag'] = $tag->slug;
                                                }

                                                $filter_url = add_query_arg($current_params, get_post_type_archive_link('training_program'));
                                                echo '<a class="tag' . ($active ? ' active' : '') . '" href="' . esc_url($filter_url) . '">' . esc_html($tag->name) . '</a>';
                                            }
                                            ?>
                                        </div>
                                    </form>
                                </div>

                                <div class="nda anmobi">
                                    <div class="tit2">
                                        <div class="a">
                                            Top Training Programs
                                        </div>
                                    </div>

                                    <ol class="top-programs">
                                        <?php
                                        $top_programs = [
                                            [
                                                'title' => 'Chương trình Chứng nhận Thành viên HĐQT (DCP)',
                                                'url' => '/chuong-trinh-chung-nhan-thanh-vien-hdqt-dcp'
                                            ],
                                            [
                                                'title' => 'Chương trình Chuyên sâu dành cho Thư ký Quản trị Công ty (CSMP)',
                                                'url' => '/chuong-trinh-chuyen-sau-danh-cho-thu-ky-quan-tri-cong-ty-csmp'
                                            ],
                                            [
                                                'title' => 'Chương trình Chuyên sâu về Uỷ ban Kiểm toán (ACMP)',
                                                'url' => 'chuong-trinh-chuyen-sau-ve-uy-ban-kiem-toan-acmp/'
                                            ]
                                        ];

                                        $i = 1;
                                        foreach ($top_programs as $program) : ?>
                                            <li>
                                                <div class="top-program-item">
                                                    <div class="number"><?php echo $i++; ?></div>
                                                    <div class="info">
                                                        <a href="<?php echo $program['url']; ?>"><?php echo $program['title']; ?></a>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ol>

                                </div>
                            </aside>
                        </div>

                        <!-- MAIN CONTENT -->
                        <main class="news-content">
                            <?php
                            $paged = get_query_var('paged') ?: 1;
                            $args = [
                                'post_type' => 'training_program',
                                'posts_per_page' => 6,
                                'paged' => $paged,
                            ];

                            if (!empty($_GET['s'])) {
                                $args['s'] = sanitize_text_field($_GET['s']);
                            }

                            $tax_queries = [];

                            if (!empty($_GET['training_category'])) {
                                $tax_queries[] = [
                                    'taxonomy' => 'training_category',
                                    'field' => 'slug',
                                    'terms' => sanitize_text_field($_GET['training_category']),
                                ];
                            }

                            if (!empty($_GET['tag'])) {
                                $tax_queries[] = [
                                    'taxonomy' => 'post_tag',
                                    'field' => 'slug',
                                    'terms' => sanitize_text_field($_GET['tag']),
                                ];
                            }

                            if (!empty($tax_queries)) {
                                if (count($tax_queries) > 1) {
                                    $args['tax_query'] = [
                                        'relation' => 'AND',
                                        $tax_queries
                                    ];
                                } else {
                                    $args['tax_query'] = $tax_queries;
                                }
                            }

                            $query = new WP_Query($args);
                            ?>

                            <?php if ($query->have_posts()) : ?>
                                <div class="posts-grid">
                                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                                        <div class="sukien-card post-card card-event-session-list">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="sukien-thumb post-card-image">
                                                    <?php
                                                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                                                    if (!$image_url) {
                                                        $image_url = get_template_directory_uri() . '/images/default.png';
                                                    }
                                                    ?>
                                                    <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                                </div>
                                            </a>
                                            <div class="nd post-card-content">
                                                <div class="sukien-tags post-card-tags">
                                                    <?php
                                                    $tags = get_the_tags(get_the_ID());
                                                    if ($tags && !is_wp_error($tags)) {
                                                        foreach ($tags as $tag) {
                                                            echo '<span class="post-card-tag">' . esc_html($tag->name) . '</span> ';
                                                        }
                                                    }
                                                    ?>
                                                </div>

                                                <h2 class="post-card-title mb-0">
                                                    <a href="<?php the_permalink(); ?>" class="post-card-title-link" title="<?php echo esc_attr(get_the_title()); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>

                                                <?php
                                                $ngay = get_field('ngay');
                                                $gio = get_field('gio');
                                                if ($ngay || $gio) : ?>
                                                    <div class="card-event_time">
                                                        <div class="a">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 3.5C7.75 3.08579 7.41421 2.75 7 2.75C6.58579 2.75 6.25 3.08579 6.25 3.5V3.90665C6.00413 3.96421 5.77128 4.04472 5.54754 4.15873C4.84193 4.51825 4.26825 5.09193 3.90873 5.79754C3.68239 6.24175 3.58803 6.7219 3.54336 7.26853C3.49999 7.79944 3.49999 8.45505 3.5 9.26789V10.7321C3.49999 11.5449 3.49999 12.2006 3.54336 12.7315C3.58803 13.2781 3.68239 13.7582 3.90873 14.2025C4.26825 14.9081 4.84193 15.4817 5.54754 15.8413C5.99175 16.0676 6.4719 16.162 7.01853 16.2066C7.54944 16.25 8.20505 16.25 9.01788 16.25L12.4013 16.25C12.7236 16.25 12.943 16.2501 13.1364 16.23C14.9018 16.0472 16.2972 14.6518 16.48 12.8864C16.5001 12.693 16.5 12.4736 16.5 12.1514L16.5 9.26788C16.5 8.45505 16.5 7.79944 16.4566 7.26853C16.412 6.7219 16.3176 6.24175 16.0913 5.79754C15.7317 5.09193 15.1581 4.51825 14.4525 4.15873C14.2287 4.04472 13.9959 3.96421 13.75 3.90665V3.5C13.75 3.08579 13.4142 2.75 13 2.75C12.5858 2.75 12.25 3.08579 12.25 3.5V3.75859C11.8765 3.74999 11.456 3.75 10.9821 3.75H9.0179C8.54396 3.75 8.12348 3.74999 7.75 3.75859V3.5ZM6.22852 5.49524C6.42604 5.3946 6.68681 5.32547 7.14068 5.28838C7.60331 5.25058 8.19755 5.25 9.05 5.25H10.95C11.8025 5.25 12.3967 5.25058 12.8593 5.28838C13.3132 5.32547 13.574 5.3946 13.7715 5.49524C14.1948 5.71095 14.5391 6.05516 14.7548 6.47852C14.8554 6.67604 14.9245 6.9368 14.9616 7.39068C14.9764 7.57123 14.9855 7.77183 14.991 8H5.00895C5.01455 7.77183 5.02363 7.57123 5.03838 7.39068C5.07547 6.9368 5.1446 6.67604 5.24524 6.47852C5.46095 6.05516 5.80516 5.71095 6.22852 5.49524ZM5 9.5V10.7C5 11.5525 5.00058 12.1467 5.03838 12.6093C5.07547 13.0632 5.1446 13.324 5.24524 13.5215C5.46095 13.9448 5.80516 14.289 6.22852 14.5048C6.42604 14.6054 6.68681 14.6745 7.14068 14.7116C7.60331 14.7494 8.19755 14.75 9.05 14.75H12.3557C12.7407 14.75 12.8759 14.749 12.9818 14.738C14.0411 14.6283 14.8783 13.7911 14.988 12.7318C14.999 12.6259 15 12.4907 15 12.1057V9.5H5Z" />
                                                            </svg>
                                                            <?php
                                                            if ($ngay && $gio) {
                                                                echo esc_html($ngay) . ' | ' . esc_html($gio);
                                                            } elseif ($ngay) {
                                                                echo esc_html($ngay);
                                                            } elseif ($gio) {
                                                                echo esc_html($gio);
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <?php
                                                $vitri = get_field('vitri');
                                                if ($vitri) : ?>
                                                    <div class="card-event_address d-flex justify-content-between gap-1">
                                                        <div class="flex-fill text-start">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 11C11.3807 11 12.5 9.88071 12.5 8.5C12.5 7.11929 11.3807 6 10 6C8.61929 6 7.5 7.11929 7.5 8.5C7.5 9.88071 8.61929 11 10 11ZM10 9.5C10.5523 9.5 11 9.05228 11 8.5C11 7.94772 10.5523 7.5 10 7.5C9.44772 7.5 9 7.94772 9 8.5C9 9.05228 9.44772 9.5 10 9.5Z" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82655 16H5.75C5.33579 16 5 16.3358 5 16.75C5 17.1642 5.33579 17.5 5.75 17.5H14.25C14.6642 17.5 15 17.1642 15 16.75C15 16.3358 14.6642 16 14.25 16H11.1734C11.196 15.98 11.219 15.9596 11.2424 15.9387C11.707 15.5229 12.3273 14.9219 12.9495 14.1805C14.1737 12.7217 15.5 10.6071 15.5 8.2267C15.5 5.06038 13.1721 2.75 10 2.75C6.82792 2.75 4.5 5.06038 4.5 8.2267C4.5 10.6071 5.82627 12.7217 7.0505 14.1805C7.6727 14.9219 8.29304 15.5229 8.75765 15.9387C8.781 15.9596 8.80398 15.98 8.82655 16ZM10 4.25C7.64924 4.25 6 5.8959 6 8.2267C6 10.073 7.04873 11.845 8.1995 13.2162C8.7648 13.8898 9.33196 14.4397 9.75798 14.8209C9.84521 14.899 9.9263 14.9698 10 15.033C10.0737 14.9698 10.1548 14.899 10.242 14.8209C10.668 14.4397 11.2352 13.8898 11.8005 13.2162C12.9513 11.845 14 10.073 14 8.2267C14 5.8959 12.3508 4.25 10 4.25Z" />
                                                            </svg>
                                                            <?php echo esc_html($vitri); ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="sukien-btn">
                                                    <a href="<?php the_permalink(); ?>">ĐĂNG KÝ NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>

                                <div class="pagination">
                                    <?php
                                    echo paginate_links([
                                        'total' => $query->max_num_pages,
                                        'current' => $paged,
                                        'prev_text' => '←',
                                        'next_text' => '→',
                                    ]);
                                    ?>
                                </div>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p>Không tìm thấy chương trình đào tạo phù hợp.</p>
                            <?php endif; ?>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<script>
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.body.classList.remove('show-filter');
        }
    });

    // Xử lý click vào radio button
    document.addEventListener('DOMContentLoaded', function() {
        const radioButtons = document.querySelectorAll('input[name="training_category"]');

        radioButtons.forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.checked) {
                    const url = this.getAttribute('data-url');
                    if (url) {
                        window.location.href = url;
                    }
                }
            });
        });
    });
</script>


<?php get_footer(); ?>