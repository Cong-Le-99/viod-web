<?php
get_header();

// Get the current category object
$category = get_queried_object();
$banner_image = get_term_meta($category->term_id, 'category_image', true);
$default_image = get_template_directory_uri() . '/images/default-banner.jpg';
$banner_image = $banner_image ? $banner_image : $default_image;
$description = category_description($category->term_id);
?>

<div class="member-certificate post-archive bg-post-archive">
    <h1 class="d-none"><?php echo single_cat_title('', false); ?></h1>
    <div class="banner">
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
<section class="post-archive-content session-wrap">
    <div class="container">
        <h2 class="title text-start mb-3 mb-md-5">TIN TỨC nổi bật</h2>
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


<?php get_footer(); ?>
