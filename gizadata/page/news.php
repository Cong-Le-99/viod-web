<?php
/*
Template Name: Xem thêm tin tức 
*/
get_header();

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
        (object) ['term_id' => 0, 'name' => 'Toàn bộ tin', 'slug' => 'all'],
        (object) ['term_id' => 0, 'name' => 'Tin thành viên', 'slug' => 'tin-thanh-vien'],
        (object) ['term_id' => 0, 'name' => 'Góc chuyên gia', 'slug' => 'goc-chuyen-gia'],
        (object) ['term_id' => 0, 'name' => 'Thông cáo báo chí', 'slug' => 'thong-cao-bao-chi']
    ];
} else {
    // Thêm option "Tất cả" vào đầu
    array_unshift($sub_categories, (object) ['term_id' => 0, 'name' => 'Toàn bộ tin', 'slug' => 'all']);
}

// Lấy các tham số từ URL
$search_query = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
$sort_by = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : '';
$selected_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'all';
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

<div class="post-archive-news">
    <section class="session-wrap">
        <div class="container">
            <div class="news-layout">
                <!-- Filter Sidebar - Desktop -->
                <div class="filter-sidebar d-none d-lg-block">
                    <div class="filter-card">
                        <h3 class="filter-title">BỘ LỌC</h3>
                        
                        <!-- Search -->
                        <div class="filter-section">
                            <div class="search-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/Search.svg" alt="Search" class="search-icon">
                                <input type="text" id="desktop-search" placeholder="Tìm kiếm sự kiện" value="<?php echo esc_attr($search_query); ?>">
                            </div>
                        </div>

                        <hr class="filter-hr">

                        <!-- Sort -->
                        <div class="filter-section">
                            <label class="filter-label">Sắp xếp theo</label>
                            <div class="select-wrapper">
                                <select id="desktop-sort" class="filter-select">
                                    <option value="">Chọn</option>
                                    <option value="newest" <?php selected($sort_by, 'newest'); ?>>Mới nhất</option>
                                    <option value="name" <?php selected($sort_by, 'name'); ?>>Tên A-Z</option>
                                </select>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ChevronRight.svg" alt="Dropdown" class="select-icon">
                            </div>
                        </div>

                        <hr class="filter-hr">

                        <!-- Categories -->
                        <div class="filter-section-label">
                            <label class="filter-label">Thể loại</label>
                            <div class="category-options">
                                <?php foreach ($sub_categories as $category) : ?>
                                    <label class="radio-option">
                                        <input type="radio" name="desktop-category" value="<?php echo $category->slug; ?>" 
                                               <?php checked($selected_category, $category->slug); ?>>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label"><?php echo $category->name; ?></span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="news-content">
                    <!-- Test Button -->
                    
                    <!-- Mobile Filter Button -->
                    <button class="filter-toggle mobile-filter-btn" id="mobile-filter-toggle">
                        <div class="filter-bar">
                            <div class="filter-bar-left">
                                <div class="hamburger-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6C3 5.58579 3.33579 5.25 3.75 5.25H16.25C16.6642 5.25 17 5.58579 17 6C17 6.41421 16.6642 6.75 16.25 6.75H3.75C3.33579 6.75 3 6.41421 3 6Z" fill="black"/>
                                    <path d="M6.75 14C6.75 13.5858 7.08579 13.25 7.5 13.25H12.5C12.9142 13.25 13.25 13.5858 13.25 14C13.25 14.4142 12.9142 14.75 12.5 14.75H7.5C7.08579 14.75 6.75 14.4142 6.75 14Z" fill="black"/>
                                    <path d="M5.5 9.25C5.08579 9.25 4.75 9.58579 4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75H14.5C14.9142 10.75 15.25 10.4142 15.25 10C15.25 9.58579 14.9142 9.25 14.5 9.25H5.5Z" fill="black"/>
                                </svg>

                                </div>
                                <span class="filter-text">Bộ lọc</span>
                            </div>
                            <div class="filter-bar-right">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/ChevronRight.svg" alt="Filter" class="chevron-icon">
                            </div>
                        </div>
                    </button>
                    <?php
                    // Query posts với filter
                    $query_args = [
                        'post_type' => 'post',
                        'posts_per_page' => 12,
                        'cat' => $news_category_id,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ];

                    // Thêm search
                    if (!empty($search_query)) {
                        $query_args['s'] = $search_query;
                    }

                    // Thêm sort
                    if ($sort_by === 'name') {
                        $query_args['orderby'] = 'title';
                        $query_args['order'] = 'ASC';
                    }

                    // Thêm category filter
                    if ($selected_category !== 'all') {
                        $selected_cat = get_category_by_slug($selected_category);
                        if ($selected_cat) {
                            $query_args['cat'] = $selected_cat->term_id;
                        }
                    }

                    $posts_query = new WP_Query($query_args);

                    if ($posts_query->have_posts()) :
                    ?>
                        <!-- Posts Grid -->
                        <div class="posts-grid" id="posts-container">
                            <?php
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
                            wp_reset_postdata();
                            ?>
                        </div>
                    <?php else : ?>
                        <div class="no-posts-message">Không có bài viết nào phù hợp với bộ lọc.</div>
                    <?php endif; ?>

                    <!-- Pagination -->
                    <?php if ($posts_query->max_num_pages > 1) : ?>
                        <div class="pagination-wrapper">
                            <?php
                                echo paginate_links([
                                    'total' => $posts_query->max_num_pages,
                                    'current' => max(1, get_query_var('paged')),
                                    'prev_text' => __('←', 'viod'),
                                    'next_text' => __('→', 'viod'),
                                    'type' => 'list'
                                ]);
                            ?> 
                            <!-- <div class="pagination"><?php the_posts_pagination(); ?></div> -->
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Mobile Filter Drawer - Bootstrap 5 -->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="mobileFilterDrawer" aria-labelledby="mobileFilterDrawerLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileFilterDrawerLabel">BỘ LỌC</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form id="mobile-filter-form" class="filter-form">
            <!-- Search -->
            <div class="filter-section">
                <div class="search-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Search.svg" alt="Search" class="search-icon">
                    <input type="text" name="search" placeholder="Tìm kiếm sự kiện" value="<?php echo esc_attr($search_query); ?>">
                </div>
            </div>

            <hr class="filter-hr">

            <!-- Sort -->
            <div class="filter-section">
                <label class="filter-label">Sắp xếp theo</label>
                <div class="select-wrapper">
                    <select name="sort" class="filter-select">
                        <option value="">Chọn</option>
                        <option value="newest" <?php selected($sort_by, 'newest'); ?>>Mới nhất</option>
                        <option value="name" <?php selected($sort_by, 'name'); ?>>Tên A-Z</option>
                    </select>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ChevronRight.svg" alt="Dropdown" class="select-icon">
                </div>
            </div>

            <hr class="filter-hr">

            <!-- Categories -->
            <div class="filter-section-label">
                <label class="filter-label">Thể loại</label>
                <div class="category-options">
                    <?php foreach ($sub_categories as $category) : ?>
                        <label class="radio-option">
                            <input type="radio" name="category" value="<?php echo $category->slug; ?>" 
                                   <?php checked($selected_category, $category->slug); ?>>
                            <span class="radio-custom"></span>
                            <span class="radio-label"><?php echo $category->name; ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <hr class="filter-hr">

            <!-- Action Buttons -->
            <div class="filter-actions">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">HUỶ</button>
                <button type="submit" class="btn btn-success">LƯU</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded');
    
    // Desktop filter functionality
    const desktopSearch = document.getElementById('desktop-search');
    const desktopSort = document.getElementById('desktop-sort');
    const desktopCategories = document.querySelectorAll('input[name="desktop-category"]');

    function updateDesktopFilters() {
        const searchValue = desktopSearch.value;
        const sortValue = desktopSort.value;
        const categoryValue = document.querySelector('input[name="desktop-category"]:checked')?.value || 'all';

        const url = new URL(window.location);
        if (searchValue) url.searchParams.set('search', searchValue);
        else url.searchParams.delete('search');
        
        if (sortValue) url.searchParams.set('sort', sortValue);
        else url.searchParams.delete('sort');
        
        if (categoryValue !== 'all') url.searchParams.set('category', categoryValue);
        else url.searchParams.delete('category');

        window.location.href = url.toString();
    }

    // Desktop event listeners
    if (desktopSearch) {
        desktopSearch.addEventListener('input', debounce(updateDesktopFilters, 500));
    }
    if (desktopSort) {
        desktopSort.addEventListener('change', updateDesktopFilters);
    }
    desktopCategories.forEach(radio => {
        radio.addEventListener('change', updateDesktopFilters);
    });

    // Mobile filter drawer - Bootstrap 5 Offcanvas
    const filterToggle = document.getElementById('mobile-filter-toggle');
    const mobileFilterForm = document.getElementById('mobile-filter-form');
    const offcanvasElement = document.getElementById('mobileFilterDrawer');

    console.log('Filter toggle:', filterToggle);
    console.log('Offcanvas element:', offcanvasElement);
    console.log('Bootstrap available:', typeof bootstrap !== 'undefined');

    if (filterToggle && offcanvasElement) {
        // Initialize Bootstrap 5 Offcanvas
        let offcanvas;
        
        if (typeof bootstrap !== 'undefined') {
            offcanvas = new bootstrap.Offcanvas(offcanvasElement);
            console.log('Bootstrap offcanvas initialized');
        } else {
            console.error('Bootstrap not loaded');
            return;
        }

        // Open drawer when filter toggle is clicked
        filterToggle.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Filter toggle clicked');
            try {
                offcanvas.show();
                console.log('Offcanvas show called');
            } catch (error) {
                console.error('Error showing offcanvas:', error);
            }
        });

        // Handle form submission
        if (mobileFilterForm) {
            mobileFilterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                console.log('Form submitted');
                
                const formData = new FormData(mobileFilterForm);
                const url = new URL(window.location);
                
                for (let [key, value] of formData.entries()) {
                    if (value) {
                        url.searchParams.set(key, value);
                    } else {
                        url.searchParams.delete(key);
                    }
                }
                
                // Close offcanvas before redirecting
                try {
                    offcanvas.hide();
                    console.log('Offcanvas hide called');
                } catch (error) {
                    console.error('Error hiding offcanvas:', error);
                }
                
                // Small delay to allow offcanvas to close
                setTimeout(() => {
                    window.location.href = url.toString();
                }, 300);
            });
        }
    }

    // Debounce function
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
});
</script>

<?php        
get_footer();
?>

