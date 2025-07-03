<?php
/**
 * Ảnh bìa meta mặc định - Meta Image Manager
 * Chức năng tự động thêm thẻ meta image cho website WordPress
 */

// Thêm các thẻ meta image
function thum_web_add_meta_images() {
    // Lấy ảnh đại diện của bài viết/trang
    $image_url = '';
    
    if (is_singular()) {
        $post_id = get_the_ID();
        $image_url = get_the_post_thumbnail_url($post_id, 'full');
    }

    // Nếu không có ảnh đại diện, sử dụng ảnh mặc định
    if (empty($image_url)) {
        $image_url = get_option('thum_web_default_image', '');
    }

    // Nếu vẫn không có ảnh, không thêm meta
    if (empty($image_url)) {
        return;
    }

    // Thêm các thẻ meta image
    echo '<meta property="og:image" content="' . esc_url($image_url) . '" />' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image_url) . '" />' . "\n";
    echo '<meta name="image" content="' . esc_url($image_url) . '" />' . "\n";
}
add_action('wp_head', 'thum_web_add_meta_images');

// Thêm menu vào admin
function thum_web_add_admin_menu() {
    add_options_page(
        'Ảnh bìa meta mặc định Settings', // Tiêu đề trang
        'Ảnh bìa meta mặc định', // Tên menu
        'manage_options', // Quyền truy cập
        'thum-web', // Slug
        'thum_web_settings_page' // Callback function
    );
}
add_action('admin_menu', 'thum_web_add_admin_menu');

// Đăng ký settings
function thum_web_register_settings() {
    register_setting('thum_web_settings', 'thum_web_default_image');
}
add_action('admin_init', 'thum_web_register_settings');

// Thêm scripts cho media uploader
function thum_web_admin_scripts($hook) {
    if ('settings_page_thum-web' !== $hook) {
        return;
    }
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'thum_web_admin_scripts');

// Trang cài đặt
function thum_web_settings_page() {
    ?>
    <div class="wrap">
        <h1>Ảnh bìa meta mặc định Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('thum_web_settings');
            do_settings_sections('thum_web_settings');
            ?>
            <table class="form-table">
                <tr>
                    <th scope="row">Ảnh mặc định</th>
                    <td>
                        <div class="thum-web-image-preview" style="margin-bottom: 10px;">
                            <?php
                            $image_url = get_option('thum_web_default_image', '');
                            if (!empty($image_url)) {
                                echo '<img src="' . esc_url($image_url) . '" style="max-width: 300px; height: auto;" />';
                            }
                            ?>
                        </div>
                        <input type="hidden" name="thum_web_default_image" id="thum_web_default_image" value="<?php echo esc_attr($image_url); ?>" />
                        <input type="button" class="button" id="thum_web_upload_button" value="Chọn ảnh" />
                        <input type="button" class="button" id="thum_web_remove_button" value="Xóa ảnh" <?php echo empty($image_url) ? 'disabled' : ''; ?> />
                        <p class="description">Ảnh mặc định sẽ được sử dụng khi không có ảnh đại diện cho bài viết/trang</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var mediaUploader;
            
            $('#thum_web_upload_button').click(function(e) {
                e.preventDefault();
                
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                
                mediaUploader = wp.media({
                    title: 'Chọn ảnh mặc định',
                    button: {
                        text: 'Chọn ảnh'
                    },
                    multiple: false
                });
                
                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#thum_web_default_image').val(attachment.url);
                    $('.thum-web-image-preview').html('<img src="' + attachment.url + '" style="max-width: 300px; height: auto;" />');
                    $('#thum_web_remove_button').prop('disabled', false);
                });
                
                mediaUploader.open();
            });
            
            $('#thum_web_remove_button').click(function(e) {
                e.preventDefault();
                $('#thum_web_default_image').val('');
                $('.thum-web-image-preview').html('');
                $(this).prop('disabled', true);
            });
        });
    </script>
    <?php
}