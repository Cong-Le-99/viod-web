<?php
// Lấy tất cả categories (không phải sub-categories)
$parent_cat = get_category_by_slug('van-ban-phap-luat');
$parent_id = $parent_cat ? $parent_cat->term_id : 0;

$categories = get_categories([
    'parent'     => $parent_id, // Lấy category con
    'hide_empty' => false,
    'number'     => 4  // Giới hạn tối đa 4 category
]);

if (empty($categories)) {
    $categories = [
        (object) [
            'term_id' => 0,
            'name'    => 'Tài liệu về QTCT',
            'slug'    => 'tai-lieu-ve-qtct-cua-viet-nam'
        ],
    ];
}

$category_posts = [];
foreach ($categories as $category) {
    $posts_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' =>  2,
        'cat'            => $category->term_id,
        'orderby'        => 'date',
        'order'          => 'DESC'
    ]);

    $posts = [];
    if ($posts_query->have_posts()) {
        while ($posts_query->have_posts()) {
            $posts_query->the_post();
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: get_template_directory_uri() . '/images/default.png';
            $pdf_file  = get_field('pdf_file', get_the_ID());

            $posts[] = [
                'title'   => get_the_title(),
                'image'   => $image_url,
                'link'    => $pdf_file ? $pdf_file : get_permalink(),
                'has_pdf' => !empty($pdf_file)
            ];
        }
        wp_reset_postdata();
    }

    $category_posts[$category->term_id] = $posts;
}

$default_posts = !empty($category_posts) ? reset($category_posts) : [];
?>

<section class="viod-directors-bulletin publications-and-research-2 session-wrap position-relative bg-session-image">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <h2 class="title text-center text-md-start text-nowrap-md">TÀI LIỆU VỀ QTCT</h2>
                <p class="text-base ">
                    Cập nhật thông tin mới nhất về Quản trị Công ty và <br class="d-none d-md-block"> những xu hướng nổi bật trong lĩnh vực
                </p>
                <div class="d-flex flex-column gap-3">
                    <div class="publications-grid mt-3">
                        <?php foreach ($categories as $index => $category): ?>
                            <div class="publication-item dark <?php echo $index === 0 ? 'active' : ''; ?>"
                                data-category-id="<?php echo $category->term_id; ?>"
                                data-category-slug="<?php echo $category->slug; ?>"
                                data-index="<?php echo $index; ?>">
                                <span><?php echo wp_kses_post($category->name); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.7773 10.0001C2.7773 9.53982 3.15039 9.16672 3.61063 9.16672L14.3769 9.16672L11.3547 6.1449C11.0293 5.81948 11.0293 5.29184 11.3547 4.96638C11.6801 4.64093 12.2077 4.6409 12.5332 4.96633L16.9781 9.41077C17.1344 9.56705 17.2222 9.77903 17.2222 10.0001C17.2222 10.2211 17.1344 10.4331 16.9781 10.5893L12.5332 15.0338C12.2077 15.3592 11.6801 15.3592 11.3547 15.0337C11.0293 14.7083 11.0293 14.1806 11.3547 13.8552L14.3769 10.8334L3.61063 10.8334C3.15039 10.8334 2.7773 10.4603 2.7773 10.0001Z"></path>
                                </svg>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="btn-register mt-5" onclick="window.location.href='/van-ban-phap-luat-lien-quan/'">
                    Xem tất cả
                </button>
            </div>
            <div class="col-12 col-md-6 d-none d-md-block">
                <div class="publication-display">
                    <div class="posts-grid-pdf" id="posts-container">
                        <?php if (!empty($default_posts)): ?>
                            <?php foreach ($default_posts as $post): ?>
                                <article class="post-card">
                                    <div class="post-card-image-pdf">
                                        <?php if ($post['has_pdf']) : ?>
                                            <!-- Nếu có PDF file, mở trong tab mới -->
                                            <a href="<?php echo esc_url($post['link']); ?>" target="_blank" rel="noopener noreferrer">
                                                <img src="<?php echo $post['image']; ?>" alt="<?php echo esc_attr($post['title']); ?>">
                                                <div class="pdf-overlay">
                                                    <div class="pdf-icon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M14 2V8H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16 13H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M16 17H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M10 9H9H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div class="pdf-text">Xem PDF</div>
                                                </div>
                                            </a>
                                        <?php else : ?>
                                            <!-- Nếu không có PDF, chỉ hiển thị ảnh không có link -->
                                            <img src="<?php echo $post['image']; ?>" alt="<?php echo esc_attr($post['title']); ?>">
                                        <?php endif; ?>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const publicationItems = document.querySelectorAll('.publication-item');
        const postsContainer = document.querySelector('#posts-container');

        // Dữ liệu bài viết cho từng category (được load từ PHP)
        const categoryPosts = <?php echo json_encode($category_posts); ?>;

        // Cập nhật hiển thị bài viết
        function updatePublicationDisplay(categoryId) {
            const posts = categoryPosts[categoryId] || [];

            if (postsContainer) {
                // Xóa nội dung cũ
                postsContainer.innerHTML = '';

                // Thêm bài viết mới
                posts.forEach(post => {
                    const article = document.createElement('article');
                    article.className = 'post-card';

                    const imageDiv = document.createElement('div');
                    imageDiv.className = 'post-card-image-pdf';

                    if (post.has_pdf) {
                        // Nếu có PDF
                        const link = document.createElement('a');
                        link.href = post.link;
                        link.target = '_blank';
                        link.rel = 'noopener noreferrer';

                        const img = document.createElement('img');
                        img.src = post.image;
                        img.alt = post.title;

                        const overlay = document.createElement('div');
                        overlay.className = 'pdf-overlay';

                        const icon = document.createElement('div');
                        icon.className = 'pdf-icon';
                        icon.innerHTML = `<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 2V8H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 13H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 17H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 9H9H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>`;

                        const text = document.createElement('div');
                        text.className = 'pdf-text';
                        text.textContent = 'Xem PDF';

                        overlay.appendChild(icon);
                        overlay.appendChild(text);
                        link.appendChild(img);
                        link.appendChild(overlay);
                        imageDiv.appendChild(link);
                    } else {
                        // Nếu không có PDF
                        const img = document.createElement('img');
                        img.src = post.image;
                        img.alt = post.title;
                        imageDiv.appendChild(img);
                    }

                    article.appendChild(imageDiv);
                    postsContainer.appendChild(article);
                });

                // Thêm hiệu ứng fade
                postsContainer.style.opacity = '0';
                setTimeout(() => {
                    postsContainer.style.opacity = '1';
                }, 150);
            }
        }

        // Xử lý hover cho từng item
        publicationItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                // Remove active class từ tất cả items
                publicationItems.forEach(i => i.classList.remove('active'));

                // Add active class cho item hiện tại
                this.classList.add('active');

                const categoryId = parseInt(this.dataset.categoryId);

                // Cập nhật hiển thị bài viết
                updatePublicationDisplay(categoryId);
            });
        });

        // Khởi tạo với bài viết đầu tiên
        if (publicationItems.length > 0 && Object.keys(categoryPosts).length > 0) {
            const firstCategoryId = parseInt(publicationItems[0].dataset.categoryId);
            updatePublicationDisplay(firstCategoryId);
        }
    });
</script>