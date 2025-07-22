<section class="post-archive-home session-wrap">
    <div class="container">
        <h2 class="title text-center">TIN TỨC MỚI NHẤT về ACGS</h2>
        <p class="text-base text-center post-subtitle-home">CG ASSESMENT ĐƯỢC THỰC THI BỞI VIOD QUỐC GIA VÀ QUÓC TẾ</p>
        <div class="btn-see-more text-center mb-5">
            <a href="<?php echo home_url('/tin-tuc'); ?>">XEM THÊM →</a>
        </div>
        <div class="post-archive-grid">
            <?php
            // Lấy category ID của "Tin tức"
            $news_category = get_category_by_slug('tin-tuc');
            $news_category_id = $news_category ? $news_category->term_id : 0;
            
            $featured_posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3,
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

            // Nếu không có bài viết nổi bật, lấy 3 bài viết mới nhất
            if (!$featured_posts->have_posts()) {
                $featured_posts = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'cat' => $news_category_id,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ]);
            }

            $post_count = 0;
            if ($featured_posts->have_posts()) :
                while ($featured_posts->have_posts()) : $featured_posts->the_post();
                    $post_count++;
                    $card_class = 'post-card large';
                    
                    if ($post_count % 2 === 0) {
                        $card_class .= ' post-card-order';
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