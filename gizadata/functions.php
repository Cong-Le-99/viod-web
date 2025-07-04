<?php
if (!defined('ABSPATH')) {
    exit;
}

// Theme Setup
function viod_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'viod'),
        'footer' => esc_html__('Footer Menu', 'viod'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'viod_setup');


// Enqueue scripts and styles
function viod_scripts() {
    // Get the version based on file modification time
    $style_version = filemtime(get_stylesheet_directory() . '/style.css');
    $js_version = filemtime(get_stylesheet_directory() . '/js/navigation.js');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap-5.0.2-dist/css/bootstrap.min.css', array(), '5.0.2');
    
    // Enqueue styles with version (load after Bootstrap)
    wp_enqueue_style('viod-style', get_stylesheet_uri(), array('bootstrap'), $style_version);
    
    // Enqueue Bootstrap JS (includes Popper.js)
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
    
    // Enqueue navigation script
    wp_enqueue_script('viod-navigation', get_template_directory_uri() . '/js/navigation.js', array('bootstrap'), $js_version, true);
}
add_action('wp_enqueue_scripts', 'viod_scripts');




// Register widget areas
function viod_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'viod'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'viod'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'viod_widgets_init');

// Thêm chức năng nhân bản bài viết
function viod_duplicate_post_as_draft() {
    global $wpdb;
    
    if (!(isset($_GET['post']) || isset($_POST['post']) || (isset($_REQUEST['action']) && 'viod_duplicate_post_as_draft' == $_REQUEST['action']))) {
        wp_die('Không tìm thấy bài viết để nhân bản!');
    }

    // Lấy ID bài viết gốc
    $post_id = (isset($_GET['post']) ? absint($_GET['post']) : absint($_POST['post']));
    
    // Lấy thông tin bài viết gốc
    $post = get_post($post_id);
    
    // Kiểm tra quyền
    if (!current_user_can('edit_post', $post_id)) {
        wp_die('Bạn không có quyền thực hiện thao tác này!');
    }

    // Tạo bài viết mới
    $new_post_author = wp_get_current_user();
    $new_post = array(
        'post_author'    => $new_post_author->ID,
        'post_content'   => $post->post_content,
        'post_title'     => $post->post_title . ' (Bản sao)',
        'post_status'    => 'draft',
        'post_type'      => $post->post_type,
        'post_excerpt'   => $post->post_excerpt,
        'post_name'      => $post->post_name,
        'comment_status' => $post->comment_status,
        'ping_status'    => $post->ping_status,
        'post_password'  => $post->post_password,
        'to_ping'        => $post->to_ping,
        'menu_order'     => $post->menu_order
    );

    // Chèn bài viết mới
    $new_post_id = wp_insert_post($new_post);

    // Sao chép taxonomy
    $taxonomies = get_object_taxonomies($post->post_type);
    foreach ($taxonomies as $taxonomy) {
        $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
        wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
    }

    // Sao chép meta data
    $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
    if (count($post_meta_infos) != 0) {
        $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
        foreach ($post_meta_infos as $meta_info) {
            $meta_key = $meta_info->meta_key;
            if ($meta_key == '_wp_old_slug') continue;
            $meta_value = addslashes($meta_info->meta_value);
            $sql_query_sel[] = "SELECT $new_post_id, '$meta_key', '$meta_value'";
        }
        $sql_query .= implode(" UNION ALL ", $sql_query_sel);
        $wpdb->query($sql_query);
    }

    // Chuyển hướng đến trang chỉnh sửa bài viết mới
    wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
    exit;
}
add_action('admin_action_viod_duplicate_post_as_draft', 'viod_duplicate_post_as_draft');

// Thêm nút nhân bản vào danh sách bài viết
function viod_duplicate_post_link($actions, $post) {
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=viod_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce') . '" title="Nhân bản bài viết này" rel="permalink">Nhân bản</a>';
    }
    return $actions;
}

// Thêm nút nhân bản cho bài viết thông thường
add_filter('post_row_actions', 'viod_duplicate_post_link', 10, 2);

// Thêm nút nhân bản cho chương trình đào tạo
add_filter('page_row_actions', 'viod_duplicate_post_link', 10, 2);

// Thêm nút nhân bản cho custom post type
function viod_duplicate_post_link_cpt($actions, $post) {
    if ($post->post_type == 'training_program' && current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=viod_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce') . '" title="Nhân bản chương trình này" rel="permalink">Nhân bản</a>';
    }
    return $actions;
}
add_filter('post_row_actions', 'viod_duplicate_post_link_cpt', 10, 2); 



/* imgtowebp */
require_once get_stylesheet_directory() . '/fun/imgtowebp.php';

/* meta-image */
require_once get_stylesheet_directory() . '/fun/meta-image.php';





// === ẢNH BÌA CHO CHUYÊN MỤC ĐÀO TẠO ===
// Thêm trường upload ảnh vào form thêm chuyên mục
add_action('training_category_add_form_fields', function() {
    ?>
    <div class="form-field">
        <label for="category_image"><?php _e('Ảnh bìa', 'viod'); ?></label>
        <input type="text" name="category_image" id="category_image" value="" />
        <button class="button viod-upload-image"><?php _e('Chọn ảnh', 'viod'); ?></button>
        <div class="category-image-preview" style="margin-top:10px;"></div>
    </div>
    <?php
});
// Thêm trường upload ảnh vào form sửa chuyên mục
add_action('training_category_edit_form_fields', function($term) {
    $image = get_term_meta($term->term_id, 'category_image', true);
    ?>
    <tr class="form-field">
        <th scope="row"><label for="category_image"><?php _e('Ảnh bìa', 'viod'); ?></label></th>
        <td>
            <input type="text" name="category_image" id="category_image" value="<?php echo esc_attr($image); ?>" />
            <button class="button viod-upload-image"><?php _e('Chọn ảnh', 'viod'); ?></button>
            <div class="category-image-preview" style="margin-top:10px;">
                <?php if ($image) : ?>
                    <img src="<?php echo esc_url($image); ?>" style="max-width:150px;" />
                <?php endif; ?>
            </div>
        </td>
    </tr>
    <?php
});
// Lưu meta khi thêm/sửa chuyên mục
add_action('created_training_category', 'viod_save_category_image', 10, 2);
add_action('edited_training_category', 'viod_save_category_image', 10, 2);
function viod_save_category_image($term_id) {
    if (isset($_POST['category_image'])) {
        update_term_meta($term_id, 'category_image', esc_url_raw($_POST['category_image']));
    }
}
// Đảm bảo nạp media uploader cho trang chuyên mục đào tạo
add_action('admin_enqueue_scripts', function($hook) {
    if (isset($_GET['taxonomy']) && $_GET['taxonomy'] === 'training_category') {
        wp_enqueue_media();
    }
});
// Thêm JS cho nút chọn ảnh (sử dụng Media Library của WP)
add_action('admin_footer', function() {
    $screen = get_current_screen();
    if ($screen && ($screen->taxonomy === 'training_category')) :
    ?>
    <script>
    jQuery(document).ready(function($){
        var frame;
        $(document).on('click', '.viod-upload-image', function(e){
            e.preventDefault();
            var button = $(this);
            if (frame) { frame.open(); return; }
            frame = wp.media({
                title: '<?php _e('Chọn ảnh bìa chuyên mục', 'viod'); ?>',
                button: { text: '<?php _e('Chọn ảnh', 'viod'); ?>' },
                multiple: false
            });
            frame.on('select', function(){
                var attachment = frame.state().get('selection').first().toJSON();
                button.prev('input').val(attachment.url);
                button.next('.category-image-preview').html('<img src="'+attachment.url+'" style="max-width:150px;" />');
            });
            frame.open();
        });
    });
    </script>
    <?php
    endif;
});
// === END ẢNH BÌA CHO CHUYÊN MỤC ===






add_action('wp_enqueue_scripts', function() {
    wp_enqueue_script('jquery');
});





function render_other_training_programs($paged = 1, $exclude_id = 0) {
    $args = array(
        'post_type'      => 'training_program',
        'posts_per_page' => 6,
        'paged'          => $paged,
        'post_status'    => 'publish',
        'post__not_in'   => array($exclude_id),
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
        <div class="other-training-grid">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="other-training-card">
                    <?php
                    $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $default_img = get_template_directory_uri() . '/images/default-training.jpg';
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($thumb_url ? $thumb_url : $default_img); ?>" alt="<?php the_title_attribute(); ?>">
                    </a>
                    <div class="nd">
                        <div class="tag">
                            <span>Event</span>
                            <span>Networking</span>
                        </div>
                        <div class="tenbaiviet">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'training_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo '<p>' . esc_html($term->name) . '</p>';
                                    }
                                }
                                ?>
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                        
                        <div class="thongtinthem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 3.5C7.75 3.08579 7.41421 2.75 7 2.75C6.58579 2.75 6.25 3.08579 6.25 3.5V3.90665C6.00413 3.96421 5.77128 4.04472 5.54754 4.15873C4.84193 4.51825 4.26825 5.09193 3.90873 5.79754C3.68239 6.24175 3.58803 6.7219 3.54336 7.26853C3.49999 7.79944 3.49999 8.45505 3.5 9.26789V10.7321C3.49999 11.5449 3.49999 12.2006 3.54336 12.7315C3.58803 13.2781 3.68239 13.7582 3.90873 14.2025C4.26825 14.9081 4.84193 15.4817 5.54754 15.8413C5.99175 16.0676 6.4719 16.162 7.01853 16.2066C7.54944 16.25 8.20505 16.25 9.01788 16.25L12.4013 16.25C12.7236 16.25 12.943 16.2501 13.1364 16.23C14.9018 16.0472 16.2972 14.6518 16.48 12.8864C16.5001 12.693 16.5 12.4736 16.5 12.1514L16.5 9.26788C16.5 8.45505 16.5 7.79944 16.4566 7.26853C16.412 6.7219 16.3176 6.24175 16.0913 5.79754C15.7317 5.09193 15.1581 4.51825 14.4525 4.15873C14.2287 4.04472 13.9959 3.96421 13.75 3.90665V3.5C13.75 3.08579 13.4142 2.75 13 2.75C12.5858 2.75 12.25 3.08579 12.25 3.5V3.75859C11.8765 3.74999 11.456 3.75 10.9821 3.75H9.0179C8.54396 3.75 8.12348 3.74999 7.75 3.75859V3.5ZM6.22852 5.49524C6.42604 5.3946 6.68681 5.32547 7.14068 5.28838C7.60331 5.25058 8.19755 5.25 9.05 5.25H10.95C11.8025 5.25 12.3967 5.25058 12.8593 5.28838C13.3132 5.32547 13.574 5.3946 13.7715 5.49524C14.1948 5.71095 14.5391 6.05516 14.7548 6.47852C14.8554 6.67604 14.9245 6.9368 14.9616 7.39068C14.9764 7.57123 14.9855 7.77183 14.991 8H5.00895C5.01455 7.77183 5.02363 7.57123 5.03838 7.39068C5.07547 6.9368 5.1446 6.67604 5.24524 6.47852C5.46095 6.05516 5.80516 5.71095 6.22852 5.49524ZM5 9.5V10.7C5 11.5525 5.00058 12.1467 5.03838 12.6093C5.07547 13.0632 5.1446 13.324 5.24524 13.5215C5.46095 13.9448 5.80516 14.289 6.22852 14.5048C6.42604 14.6054 6.68681 14.6745 7.14068 14.7116C7.60331 14.7494 8.19755 14.75 9.05 14.75H12.3557C12.7407 14.75 12.8759 14.749 12.9818 14.738C14.0411 14.6283 14.8783 13.7911 14.988 12.7318C14.999 12.6259 15 12.4907 15 12.1057V9.5H5Z" />
                            </svg>
                            16 Apr 2025 | 3:00 PM - 6:00 PM
                        </div>
                        <div class="thongtinthem">
                            <div class="a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 11C11.3807 11 12.5 9.88071 12.5 8.5C12.5 7.11929 11.3807 6 10 6C8.61929 6 7.5 7.11929 7.5 8.5C7.5 9.88071 8.61929 11 10 11ZM10 9.5C10.5523 9.5 11 9.05228 11 8.5C11 7.94772 10.5523 7.5 10 7.5C9.44772 7.5 9 7.94772 9 8.5C9 9.05228 9.44772 9.5 10 9.5Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82655 16H5.75C5.33579 16 5 16.3358 5 16.75C5 17.1642 5.33579 17.5 5.75 17.5H14.25C14.6642 17.5 15 17.1642 15 16.75C15 16.3358 14.6642 16 14.25 16H11.1734C11.196 15.98 11.219 15.9596 11.2424 15.9387C11.707 15.5229 12.3273 14.9219 12.9495 14.1805C14.1737 12.7217 15.5 10.6071 15.5 8.2267C15.5 5.06038 13.1721 2.75 10 2.75C6.82792 2.75 4.5 5.06038 4.5 8.2267C4.5 10.6071 5.82627 12.7217 7.0505 14.1805C7.6727 14.9219 8.29304 15.5229 8.75765 15.9387C8.781 15.9596 8.80398 15.98 8.82655 16ZM10 4.25C7.64924 4.25 6 5.8959 6 8.2267C6 10.073 7.04873 11.845 8.1995 13.2162C8.7648 13.8898 9.33196 14.4397 9.75798 14.8209C9.84521 14.899 9.9263 14.9698 10 15.033C10.0737 14.9698 10.1548 14.899 10.242 14.8209C10.668 14.4397 11.2352 13.8898 11.8005 13.2162C12.9513 11.845 14 10.073 14 8.2267C14 5.8959 12.3508 4.25 10 4.25Z" />
                                </svg>
                                Hanoi
                            </div>
                            <div class="a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.70484 5.49369C7.59707 5.1973 7.31538 5 7 5C6.68462 5 6.40293 5.1973 6.29516 5.49369L4.29516 10.9937C4.1536 11.383 4.35442 11.8133 4.74369 11.9548C5.13297 12.0964 5.56329 11.8956 5.70484 11.5063L5.89178 10.9922C5.92711 10.9974 5.96325 11 6 11H8.11104L8.29516 11.5063C8.43671 11.8956 8.86703 12.0964 9.25631 11.9548C9.64558 11.8133 9.8464 11.383 9.70484 10.9937L7.70484 5.49369ZM7 7.94463L7.56559 9.5H6.43441L7 7.94463Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.25 8.25L15.1493 8.25C15.1405 8.32198 15.1296 8.40058 15.1161 8.4849C15.049 8.90511 14.9167 9.47895 14.6539 10.0904C14.4652 10.5293 14.2077 10.9892 13.8598 11.4243C14.1545 11.5875 14.491 11.7241 14.8759 11.824C15.2768 11.9281 15.5175 12.3374 15.4135 12.7384C15.3094 13.1393 14.9 13.38 14.4991 13.2759C13.7974 13.0938 13.2099 12.8168 12.7188 12.4826C12.2276 12.8168 11.6401 13.0938 10.9384 13.2759C10.5375 13.38 10.1281 13.1393 10.024 12.7384C9.92 12.3374 10.1607 11.9281 10.5616 11.824C10.9465 11.7241 11.283 11.5875 11.5777 11.4243C11.2298 10.9892 10.9723 10.5293 10.7836 10.0904C10.5208 9.47895 10.3885 8.90511 10.3214 8.4849C10.3079 8.40057 10.297 8.32197 10.2881 8.24999H10.25C9.83576 8.24999 9.49997 7.9142 9.49998 7.49999C9.49998 7.08577 9.83576 6.74999 10.25 6.74999L12 6.74999V6C12 5.58579 12.3358 5.25 12.75 5.25C13.1642 5.25 13.5 5.58579 13.5 6V6.75L15.25 6.75C15.6642 6.75 16 7.08579 16 7.5C16 7.91422 15.6642 8.25 15.25 8.25ZM11.8029 8.24999C11.856 8.58135 11.96 9.02884 12.1617 9.49798C12.2984 9.81595 12.4785 10.1423 12.7188 10.4501C12.959 10.1423 13.1391 9.81595 13.2758 9.49798C13.4775 9.02885 13.5815 8.58136 13.6346 8.25L11.8029 8.24999Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 15.75H10.6213L9.06066 17.3107C8.63166 17.7397 7.98649 17.868 7.42597 17.6358C6.86546 17.4036 6.5 16.8567 6.5 16.25V15.75H5.5C3.567 15.75 2 14.183 2 12.25V6.25C2 4.317 3.567 2.75 5.5 2.75H14.5C16.433 2.75 18 4.317 18 6.25V12.25C18 14.183 16.433 15.75 14.5 15.75ZM8 16.25L10 14.25H14.5C15.6046 14.25 16.5 13.3546 16.5 12.25V6.25C16.5 5.14543 15.6046 4.25 14.5 4.25H5.5C4.39543 4.25 3.5 5.14543 3.5 6.25V12.25C3.5 13.3546 4.39543 14.25 5.5 14.25H8V16.25Z"/>
                                    </svg>
                                    VN - EN
                            </div>
                        </div>

                        <div class="nutdangky">
                            <a href="<?php the_permalink(); ?>">ĐĂNG KÝ NGAY</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php
        // Pagination
        $pagination = paginate_links(array(
            'base'      => '%_%',
            'format'    => '?paged=%#%',
            'current'   => max(1, $paged),
            'total'     => $query->max_num_pages,
            'type'      => 'array',
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        ));
        if ($pagination) {
            echo '<div class="other-training-pagination">';
            foreach ($pagination as $page) {
                // Chuyển nút « có href="" thành <a href="#" data-page="1">«</a>
                $page = preg_replace(
                    '/<a\b[^>]*href=""[^>]*>«<\/a>/i',
                    '<a href="#" data-page="1">«</a>',
                    $page
                );
                // Chuyển nút prev/next có href="...paged=N"
                $page = preg_replace_callback(
                    '/<a[^>]*href="([^"]*?)[?&]paged=(\d+)"[^>]*>([^\d]+)<\/a>/i',
                    function($m) use ($paged, $query) {
                        $label = trim($m[3]);
                        $total = $query->max_num_pages;
                        if ($label === '«') {
                            $prev = $paged - 1;
                            if ($prev < 1) $prev = 1;
                            return '<a href="#" data-page="' . $prev . '">«</a>';
                        } elseif ($label === '»') {
                            $next = $paged + 1;
                            if ($next > $total) $next = $total;
                            return '<a href="#" data-page="' . $next . '">»</a>';
                        } else {
                            return '<a href="#" data-page="' . $m[2] . '">' . $m[3] . '</a>';
                        }
                    },
                    $page
                );
                // Chuyển nút số có href="...paged=N"
                $page = preg_replace_callback(
                    '/<a[^>]*href="([^"]*?)[?&]paged=(\d+)"[^>]*>(\d+)<\/a>/i',
                    function($m) {
                        return '<a href="#" data-page="' . $m[2] . '">' . $m[3] . '</a>';
                    },
                    $page
                );
                // Chuyển <span class="current">N</span> thành <a href="#" data-page="N" class="current">N</a>
                $page = preg_replace_callback(
                    '/<span class="current">(\d+)<\/span>/i',
                    function($m) {
                        return '<a href="#" data-page="' . $m[1] . '" class="current">' . $m[1] . '</a>';
                    },
                    $page
                );
                // Chuyển nút 1 có href="" thành <a href="#" data-page="1">1</a>
                $page = preg_replace(
                    '/<a\b[^>]*href=""[^>]*>1<\/a>/i',
                    '<a href="#" data-page="1">1</a>',
                    $page
                );
                echo $page;
            }
            echo '</div>';
        } else {
            // Nếu chỉ có 1 trang, vẫn render <a> để JS bắt được
            echo '<div class="other-training-pagination" style="margin:32px 0;text-align:center;">';
            echo '<a href="#" data-page="1" class="current">1</a>';
            echo '</div>';
        }
        wp_reset_postdata();
    else :
        echo '<p>Không có khoá đào tạo nào.</p>';
    endif;
}

add_action('wp_ajax_load_other_training_programs', 'ajax_load_other_training_programs');
add_action('wp_ajax_nopriv_load_other_training_programs', 'ajax_load_other_training_programs');
function ajax_load_other_training_programs() {
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $exclude_id = isset($_POST['exclude_id']) ? intval($_POST['exclude_id']) : 0;
    render_other_training_programs($paged, $exclude_id);
    wp_die();
}



/* xử lý link chuyên mục */
/* xử lý link chuyên mục */
/* xử lý link chuyên mục */

// Remove Parent Category from Child Category URL
add_filter('term_link', 'xulylinkchuyenmuc', 1000, 3);
function xulylinkchuyenmuc($url, $term, $taxonomy) {
    if($taxonomy == 'category'){
        $term_nicename = $term->slug;
        $url = trailingslashit(get_option( 'home' )) . user_trailingslashit( $term_nicename, 'category' );
    }
    return $url;
}
// Rewrite url mới
function xulylinkchuyenmuc_rewrite_rules($flash = false) {
    $terms = get_terms( array(
        'taxonomy' => 'category',
        'post_type' => 'post',
        'hide_empty' => false,
    ));
    if($terms && !is_wp_error($terms)){
        foreach ($terms as $term){
            $term_slug = $term->slug;
            add_rewrite_rule($term_slug.'/?$', 'index.php?category_name='.$term_slug,'top');
            add_rewrite_rule($term_slug.'/page/([0-9]{1,})/?$', 'index.php?category_name='.$term_slug.'&paged=$matches[1]','top');
            add_rewrite_rule($term_slug.'/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', 'index.php?category_name='.$term_slug.'&feed=$matches[1]','top');
        }
    }
    if ($flash == true)
        flush_rewrite_rules(false);
}
add_action('init', 'xulylinkchuyenmuc_rewrite_rules');
 
/*Sửa lỗi khi tạo mới category bị 404*/
function gz_new_category_edit_success() {
    xulylinkchuyenmuc_rewrite_rules(true);
}
add_action('created_category','gz_new_category_edit_success');
add_action('edited_category','gz_new_category_edit_success');
add_action('delete_category','gz_new_category_edit_success');



/* ảnh bìa chuyên mục post */
/* ảnh bìa chuyên mục post */
/* ảnh bìa chuyên mục post */

// Enqueue Media Library for category image selection
if (!function_exists('viod_enqueue_media_library')) {
    function viod_enqueue_media_library() {
        wp_enqueue_media();
    }
    add_action('admin_enqueue_scripts', 'viod_enqueue_media_library');
}

// Function to add category image field with Media Library button
if (!function_exists('viod_add_post_category_image_field')) {
    function viod_add_post_category_image_field($taxonomy) {
        ?>
        <div class="form-field">
            <label for="category_image"><?php _e('Category Image', 'viod'); ?></label>
            <input type="text" name="category_image" id="category_image" value="" class="regular-text">
            <button class="button viod-upload-image">Chọn ảnh</button>
            <div class="category-image-preview" style="margin-top:10px;"></div>
        </div>
        <?php
    }
    add_action('category_add_form_fields', 'viod_add_post_category_image_field');
}

// Function to edit category image field with Media Library button
if (!function_exists('viod_edit_post_category_image_field')) {
    function viod_edit_post_category_image_field($term) {
        $image = get_term_meta($term->term_id, 'category_image', true);
        ?>
        <tr class="form-field">
            <th scope="row"><label for="category_image"><?php _e('Category Image', 'viod'); ?></label></th>
            <td>
                <input type="text" name="category_image" id="category_image" value="<?php echo esc_attr($image); ?>" class="regular-text">
                <button class="button viod-upload-image">Chọn ảnh</button>
                <div class="category-image-preview" style="margin-top:10px;">
                    <?php if ($image) : ?>
                        <img src="<?php echo esc_url($image); ?>" style="max-width:150px;" />
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        <?php
    }
    add_action('category_edit_form_fields', 'viod_edit_post_category_image_field', 10, 2);
}

// Save category image
if (!function_exists('viod_save_post_category_image')) {
    function viod_save_post_category_image($term_id) {
        if (isset($_POST['category_image'])) {
            update_term_meta($term_id, 'category_image', esc_url_raw($_POST['category_image']));
        }
    }
    add_action('created_category', 'viod_save_post_category_image', 10, 2);
    add_action('edited_category', 'viod_save_post_category_image', 10, 2);
}

// JavaScript for Media Library
if (!function_exists('viod_media_library_script')) {
    function viod_media_library_script() {
        ?>
        <script>
        jQuery(document).ready(function($){
            var frame;
            $(document).on('click', '.viod-upload-image', function(e){
                e.preventDefault();
                var button = $(this);
                if (frame) { frame.open(); return; }
                frame = wp.media({
                    title: '<?php _e('Chọn ảnh bìa chuyên mục', 'viod'); ?>',
                    button: { text: '<?php _e('Chọn ảnh', 'viod'); ?>' },
                    multiple: false
                });
                frame.on('select', function(){
                    var attachment = frame.state().get('selection').first().toJSON();
                    button.prev('input').val(attachment.url);
                    button.next('.category-image-preview').html('<img src="' + attachment.url + '" style="max-width:150px;" />');
                });
                frame.open();
            });
        });
        </script>
        <?php
    }
    add_action('admin_footer', 'viod_media_library_script');
}
// Ensure Media Library is loaded on post category pages
add_action('admin_enqueue_scripts', function($hook) {
    if (isset($_GET['taxonomy']) && $_GET['taxonomy'] === 'category') {
        wp_enqueue_media();
    }
});



/* breadcumb bài viết */
/* breadcumb bài viết */
/* breadcumb bài viết */


function viod_breadcrumb() {
    echo '<nav class="breadcrumb">';
    echo '<a href="' . home_url() . '">Home</a>';

    if (is_singular('sukien')) {
        echo ' » <a href="' . home_url('/su-kien/') . '">Sự kiện</a>';
        echo '<span class="breadcrumb-title"> » ' . get_the_title() . '</span>';

    } elseif (is_post_type_archive('sukien')) {
        echo ' » Sự kiện';

    } elseif (is_tax(['the_loai_sukien', 'trang_thai_sukien', 'dia_diem_sukien'])) {
        echo ' » <a href="' . home_url('/su-kien/') . '">Sự kiện</a>';
        echo '<span class="breadcrumb-title"> » ' . esc_html(get_queried_object()->name) . '</span>';

    } elseif (is_single()) {
        $category = get_the_category();
        if (!empty($category)) {
            echo ' » <a href="' . get_category_link($category[0]->term_id) . '">' . esc_html($category[0]->name) . '</a>';
        }
        echo '<span class="breadcrumb-title"> » ' . get_the_title() . '</span>';

    } elseif (is_page()) {
        echo '<span class="breadcrumb-title"> » ' . get_the_title() . '</span>';

    } elseif (is_search()) {
        echo ' » Tìm kiếm: "' . get_search_query() . '"';

    } elseif (is_404()) {
        echo ' » 404 - Không tìm thấy nội dung';
    }

    echo '</nav>';
}







// post type
require_once get_stylesheet_directory() . '/post-type/sukien.php';
require_once get_stylesheet_directory() . '/post-type/chuongtrinhdaotao.php';