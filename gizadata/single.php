<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        // Get category image or default image
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
        if (empty($banner_image)) {
            $banner_image = get_template_directory_uri() . '/images/default-banner.jpg';
        }
        ?>
        <div class="noidungbaiviet">
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
                        Thông tin liên hệ
                    </div>
                    <div class="xemthemlienhe">
                        <a href="">See more contact info →</a>
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
                                ?>
                                
                                <div class="listbv">
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
