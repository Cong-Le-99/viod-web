<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        $custom_hero_bg = get_field('post_hero_bg', get_the_ID());

        if ($custom_hero_bg) {
            $banner_image = $custom_hero_bg;
        } else {
            // Nếu không có custom field, sử dụng category image
            $categories = get_the_category();
            $banner_image = '';
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $image = get_term_meta($category->term_id, 'category_image', true);
                    if ($image) {
                        $banner_image = $image;
                        break;
                    }
                }
            }
            // Nếu không có category image, sử dụng featured image
            if (empty($banner_image)) {
                $banner_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if (!$banner_image) {
                    $banner_image = get_template_directory_uri() . '/images/default-banner.jpg';
                }
            }
        }
?>
        <div class="noidungbaiviet custom-banner-bg">
            <div class="single-banner" style="background-image: url('<?php echo esc_url($banner_image); ?>');">
                <div class="overlay"></div>
                <div class="banner-content">
                    <div class="breadcrumb-wrapper">
                        <?php viod_breadcrumb(); ?>
                    </div>
                    <div class="title-wrapper">
                        <span class="post-date"><?php echo get_the_date(); ?> | By <?php the_author(); ?></span>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>

            <div class="post-content-wrapper">
                <div class="post-content">

                    <div class="anhbiabaiviet">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>

                    <div class="ndbaiviet">
                        <?php the_content(); ?>
                    </div>

                    <?php if (has_tag()) { ?>
                        <div class="tukhoa">
                            <h3>Tags</h3>
                            <div class="dstukhoa">
                                <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="nutchiasebaiviet">
                        <h3>Chia sẻ bài viết</h3>
                        <div class="mxh">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>




            <div class="thongtinlienhe">
                <div class="main">

                    <div class="tit">
                        Tin tức khác
                    </div>
                    <div class="xemthemlienhe">
                        <a href="">Xem thêm tin tức →</a>
                    </div>


                    <div class="dscacbaivietxemthem">
                        <?php
                        $recent_posts = new WP_Query(array(
                            'posts_per_page' => 3,
                            'post__not_in' => array(get_the_ID()),
                            'orderby' => 'date',
                            'order' => 'DESC'
                        ));
                        if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                // Mở grid một lần đầu tiên
                                static $opened_grid = false;
                                if (!$opened_grid) {
                                    echo '<div class="posts-grid" id="posts-container">';
                                    $opened_grid = true;
                                }

                                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                if (!$image_url) {
                                    $image_url = get_template_directory_uri() . '/images/default.png';
                                }

                                $categories = get_the_category();
                                $category_names = array();
                                foreach ($categories as $category) {
                                    $category_names[] = $category->name;
                                }
                        ?>
                                <article class="post-card">
                                    <div class="post-card-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                        </a>
                                    </div>
                                    <div class="post-card-content">
                                        <div class="post-card-tags">
                                            <?php foreach ($category_names as $category_name) { ?>
                                                <a href="#" class="post-card-tag"><?php echo esc_html($category_name); ?></a>
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
                            if (isset($opened_grid) && $opened_grid) { echo '</div>'; }
                            wp_reset_postdata();
                        else :
                            echo '<p>No related posts found.</p>';
                        endif;
                        ?>

                    </div>
                </div>
            </div>

        </div>
<?php
    endwhile;
else :
    echo '<p>No content found.</p>';
endif;

get_footer();
?>