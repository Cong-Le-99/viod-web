<?php
/*
Template Name:  Tin tức
*/
get_header();

// Get the current category object
$category = get_queried_object();

$posts_page_id = get_option('page_for_posts');

// Lấy group post_banner từ trang đó
$banner_data = get_field('post_banner', $posts_page_id);

// Thiết lập default banner
$default_desktop = get_template_directory_uri() . '/images/banner-heading.png';
$default_mobile = get_template_directory_uri() . '/images/banner-heading-mb.png';

$banner_desktop = $default_desktop;
$banner_mobile = $default_mobile;

if (!empty($banner_data['banner_desktop'])) {
    if (is_array($banner_data['banner_desktop'])) {
        $banner_desktop = $banner_data['banner_desktop']['url'];
    } else {
        $banner_desktop = $banner_data['banner_desktop'];
    }
}

// Xử lý banner mobile
if (!empty($banner_data['banner_mobile'])) {
    if (is_array($banner_data['banner_mobile'])) {
        $banner_mobile = $banner_data['banner_mobile']['url'];
    } else {
        $banner_mobile = $banner_data['banner_mobile'];
    }
}

?>

<div class="member-certificate post-archive bg-post-archive custom-banner-bg">
    <h1 class="d-none"><?php echo single_cat_title('', false); ?></h1>
    <div class="banner" data-desktop="<?php echo esc_url($banner_desktop); ?>" data-mobile="<?php echo esc_url($banner_mobile); ?>">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <nav class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="d-none d-md-block" href="<?php echo home_url(); ?>">Home</a>
                    <a class="d-block d-md-none" href="<?php echo home_url(); ?>" style="width: 20px; height: 20px;">
                        <img class="w-1 h-1" src="<?php echo get_template_directory_uri(); ?>/images/home.svg" alt="">
                    </a>
                </li>
                <li class="breadcrumb-item active">Tin tức</li>
            </ol>
        </nav>
        <div class="banner-content px-4">
            <h2 class="title light">Tin tức</h2>
            <p class="text-base light text-center">
                Quản trị Công ty tốt là nền tảng vững chắc cho sự thành công cho doanh nghiệp. <br class="d-none d-md-block"> Chương trình Chứng nhận Thành viên Hội đồng Quản trị (DCP)
            </p>
        </div>
    </div>
</div>
<div class="post-archive-content-wrap">
    <section class="post-archive-content tin-tuc session-wrap">
        <div class="container">
            <div class="d-flex justify-content-between ">
                <h2 class="title text-start mb-3 mb-md-5">TIN TỨC NỔI BẬT</h2>
                <div class="d-flex justify-content-start align-items-baseline mt-2">
                    <a href="<?php echo home_url('/xem-them-tin-tuc/'); ?>" class="post-card-readmore">
                        Xem tất cả →
                    </a>
                </div>
            </div>
            <div class="post-archive-grid">
                <?php
                // Lấy category ID của "Tin tức"
                $news_category = get_category_by_slug('tin-tuc');
                $news_category_id = $news_category ? $news_category->term_id : 0;

                $featured_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'cat' => $news_category_id,
                    'meta_query' => [
                        [
                            'key' => '_is_featured',
                            'value' => '1',
                            'compare' => '='
                        ]
                    ],
                    'orderby' => 'date',
                    'order' => 'DESC'
                ]);

                // Nếu không có bài viết nổi bật, lấy 4 bài viết mới nhất
                if (!$featured_posts->have_posts()) {
                    $featured_posts = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'cat' => $news_category_id,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ]);
                }

                $post_count = 0;
                if ($featured_posts->have_posts()) :
                    while ($featured_posts->have_posts()) : $featured_posts->the_post();
                        $post_count++;
                        $card_class = 'post-card';

                        if ($post_count === 1) {
                            $card_class .= ' large';
                        }

                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        if (!$image_url) {
                            $image_url = get_template_directory_uri() . '/images/default.png';
                        }

                        $categories = get_the_category();
                        $category_names = [];
                        foreach ($categories as $category) {
                            $category_names[] = $category->name;
                        }
                ?>
                        <article class="<?php echo $card_class; ?>">
                            <div class="post-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="post-card-tags">
                                    <?php foreach ($category_names as $category_name) { ?>
                                        <a href="<?php echo get_category_link(get_category_by_slug(sanitize_title($category_name))->term_id); ?>" class="post-card-tag"><?php echo $category_name; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="post-card-meta"><?php echo get_the_date('d M Y'); ?> | By <?php the_author(); ?></div>
                                <h2 class="post-card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-card-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="post-card-readmore">ĐỌC THÊM →</a>
                            </div>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="no-posts">Không có bài viết nào trong chuyên mục Tin tức.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="post-archive-tabs session-wrap">
        <div class="container">
            <?php
            // Lấy category "Tin tức" và các sub categories
            $news_category = get_category_by_slug('tin-tuc');
            $news_category_id = $news_category ? $news_category->term_id : 0;

            // Lấy các sub categories của "Tin tức"
            $sub_categories = get_categories([
                'parent' => $news_category_id,
                'hide_empty' => false
            ]);

            // Nếu không có sub categories, tạo mảng mặc định
            if (empty($sub_categories)) {
                $sub_categories = [
                    // (object) ['term_id' => 0, 'name' => 'Tất cả', 'slug' => 'all'],
                    (object) ['term_id' => 0, 'name' => 'Tin thành viên', 'slug' => 'tin-thanh-vien'],
                    (object) ['term_id' => 0, 'name' => 'Góc chuyên gia', 'slug' => 'goc-chuyen-gia'],
                    (object) ['term_id' => 0, 'name' => 'Thông cáo báo chí', 'slug' => 'thong-cao-bao-chi']
                ];
            } else {
                // Thêm option "Tất cả" vào đầu
                // array_unshift($sub_categories, (object) ['term_id' => 0, 'name' => 'Tất cả', 'slug' => 'all']);
            }

            // Lấy category hiện tại từ URL parameter hoặc mặc định là category đầu tiên
            $current_category_slug = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : $sub_categories[0]->slug;
            ?>

            <!-- Tab Navigation -->
            <div class="category-tabs mb-4">
                <div class="tab-nav">
                    <?php foreach ($sub_categories as $sub_cat) : ?>
                        <button class="tab-button <?php echo ($current_category_slug === $sub_cat->slug) ? 'active' : ''; ?>"
                            data-category="<?php echo $sub_cat->slug; ?>">
                            <?php echo $sub_cat->name; ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="d-flex justify-content-between ">
                <h2 class="title text-start mb-3 mb-md-5">TIN THÀNH VIÊN</h2>
                <div class="d-flex justify-content-start align-items-baseline mt-2">
                    <a href="<?php echo home_url('/xem-them-tin-tuc/'); ?>" class="post-card-readmore">
                        Xem tất cả →
                    </a>
                </div>
            </div>



            <!-- Posts Grid -->
            <div class="posts-tabs-content">
                <?php
                // Query posts theo category được chọn
                $query_args = [
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];

                if ($current_category_slug !== 'all') {
                    // Tìm category ID theo slug
                    $selected_category = get_category_by_slug($current_category_slug);
                    if ($selected_category) {
                        $query_args['cat'] = $selected_category->term_id;
                    } else {
                        // Nếu không tìm thấy category, lấy tất cả bài viết trong "Tin tức"
                        $query_args['cat'] = $news_category_id;
                    }
                } else {
                    // Hiển thị tất cả bài viết trong "Tin tức"
                    $query_args['cat'] = $news_category_id;
                }

                $posts_query = new WP_Query($query_args);

                if ($posts_query->have_posts()) :
                    echo '<div class="posts-grid">';
                    while ($posts_query->have_posts()) : $posts_query->the_post();
                        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        if (!$image_url) {
                            $image_url = get_template_directory_uri() . '/images/default.png';
                        }

                        $categories = get_the_category();
                        $category_names = [];
                        foreach ($categories as $category) {
                            $category_names[] = $category->name;
                        }
                ?>
                        <article class="post-card">
                            <div class="post-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </a>
                            </div>
                            <div class="post-card-content">
                                <div class="post-card-tags">
                                    <?php foreach ($category_names as $category_name) { ?>
                                        <a href="#" class="post-card-tag"><?php echo $category_name; ?></a>
                                    <?php } ?>
                                </div>
                                <div class="post-card-meta"><?php echo get_the_date('d M Y'); ?> | By <?php the_author(); ?></div>
                                <h2 class="post-card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-card-excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="post-card-readmore">ĐỌC THÊM →</a>
                            </div>
                        </article>
                <?php
                    endwhile;
                    echo '</div>';
                    wp_reset_postdata();
                else :
                    echo '<div class="no-posts-message">Không có bài viết nào trong chuyên mục này.</div>';
                endif;
                ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>