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

<div class="chuyenmucbaiviet">
    <div class="archive-banner" style="background-image: url('<?php echo esc_url($banner_image); ?>');">
        <div class="overlay"></div>
        <div class="banner-content">
            <h1><?php echo single_cat_title('', false); ?></h1>
            <div class="mota">
                <?php echo $description; ?>
            </div>
        </div>
    </div>

    <div class="dsbaivietchuyenmuc">
        <div class="main">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 9,
                'paged' => $paged,
                'cat' => $category->term_id,
            ];
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>

                    <div class="bvchuyenmuc">
                        <div class="anhbia">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                        
                        <div class="nd">
                            <div class="tenchuyenmuc">
                                <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        foreach ($categories as $cat) {
                                            echo '<a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a> '; 
                                        }
                                    }
                                ?>
                            </div>
                            <div class="thoigiantacgia">
                                <?php echo get_the_date(); ?> | <?php the_author(); ?>
                            </div>
                            <div class="tieude">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="mota">
                                <?php echo wp_trim_words(get_the_content(), 4); ?>
                            </div>
                            <div class="xemthem">
                                <a href="<?php the_permalink(); ?>">ĐỌC THÊM →</a>
                            </div>
                        </div>
                    </div>

                    <?php
                endwhile;

                echo '<div class="phantrang">';
                the_posts_pagination([
                    'mid_size' => 2,
                    'prev_text' => __('«', 'viod'),
                    'next_text' => __('»', 'viod'),
                ]);
                echo '</div>';
            else :
                echo '<p>No posts found.</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
