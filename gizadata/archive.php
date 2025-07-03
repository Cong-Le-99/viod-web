<?php
get_header();

// Get the current category object
$category = get_queried_object();
$banner_image = get_term_meta($category->term_id, 'category_image', true);
$default_image = get_template_directory_uri() . '/images/default-banner.jpg';
$banner_image = $banner_image ? $banner_image : $default_image;
$description = category_description($category->term_id);
?>

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
