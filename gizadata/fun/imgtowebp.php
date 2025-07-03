<?php

/* xử lý đổi tên file và nén webp nhẹ hình, phát triển bởi gizadata.vn */

add_action('add_attachment', 'rename_uploaded_file');
add_filter('wp_handle_upload_prefilter', 'custom_upload_filter');

function rename_uploaded_file($attachment_id) {
    $post_id = wp_get_post_parent_id($attachment_id);
    if ($post_id) {
        $post_title = get_the_title($post_id);
        $post_title = substr($post_title, 0, 10);
        $file = get_attached_file($attachment_id);
        $path = pathinfo($file);

        $new_filename = sanitize_file_name($post_title) . '_' . $path['filename'] . '_' . wp_generate_password(4, false) . '.' . $path['extension'];
        $new_file = $path['dirname'] . '/' . $new_filename;

        rename($file, $new_file);
        update_attached_file($attachment_id, $new_file);
    }
}

function custom_upload_filter($file) {
    add_filter('wp_handle_upload', 'custom_resize_compress_to_webp');

    $post_id = $_REQUEST['post_id'] ?? 0;
    $post_title = $post_id ? get_the_title($post_id) : 'image';
    $post_title = substr($post_title, 0, 20);
    $file['name'] = wp_unique_filename($file['upload_path'], sanitize_file_name($post_title) . '_' . $file['name']);
    $file['name'] = pathinfo($file['name'], PATHINFO_FILENAME) . '_' . wp_generate_password(4, false) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    return $file;
}

function custom_resize_compress_to_webp($upload) {
    $file_path = $upload['file'];
    $image_info = getimagesize($file_path);

    if (!$image_info) return $upload;

    $width = $image_info[0];
    $mime = $image_info['mime'];
    $max_width = 1920;

    // Bỏ qua nếu là ảnh PNG
    if ($mime === 'image/png') {
        return $upload;
    }

    $editor = wp_get_image_editor($file_path);
    if (is_wp_error($editor)) return $upload;

    // Chỉ resize nếu chiều rộng lớn hơn $max_width
    if ($width > $max_width) {
        $editor->resize($max_width, null);
    }

    $pathinfo = pathinfo($file_path);
    $new_path = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp';

    $saved = $editor->save($new_path, 'image/webp');

    if (!is_wp_error($saved)) {
        unlink($file_path);
        $upload['file'] = $new_path;
        $upload['url'] = dirname($upload['url']) . '/' . basename($new_path);
        $upload['type'] = 'image/webp';
    }

    return $upload;
}




/* xử lý đổi tên file và nén webp nhẹ hình, phát triển bởi gizadata.vn */

/* add_action('add_attachment', 'rename_uploaded_file');
add_filter('wp_handle_upload_prefilter', 'custom_upload_filter');

function rename_uploaded_file($attachment_id) {
    $post_id = wp_get_post_parent_id($attachment_id);
    if ($post_id) {
        $post_title = get_the_title($post_id);
        $post_title = substr($post_title, 0, 10);
        $file = get_attached_file($attachment_id);
        $path = pathinfo($file);

        $new_filename = sanitize_file_name($post_title) . '_' . $path['filename'] . '_' . wp_generate_password(4, false) . '.' . $path['extension'];
        $new_file = $path['dirname'] . '/' . $new_filename;

        rename($file, $new_file);
        update_attached_file($attachment_id, $new_file);
    }
}

function custom_upload_filter($file) {
    add_filter('wp_handle_upload', 'custom_resize_compress_to_webp');

    $post_id = $_REQUEST['post_id'] ?? 0;
    $post_title = $post_id ? get_the_title($post_id) : 'image';
    $post_title = substr($post_title, 0, 20);
    $file['name'] = wp_unique_filename($file['upload_path'], sanitize_file_name($post_title) . '_' . $file['name']);
    $file['name'] = pathinfo($file['name'], PATHINFO_FILENAME) . '_' . wp_generate_password(4, false) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    return $file;
}

function custom_resize_compress_to_webp($upload) {
    $file_path = $upload['file'];
    $image_info = getimagesize($file_path);

    if (!$image_info) return $upload;

    $width = $image_info[0];
    $mime = $image_info['mime'];
    $max_width = 1920;

    $editor = wp_get_image_editor($file_path);
    if (is_wp_error($editor)) return $upload;

    if ($width > $max_width) {
        $editor->resize($max_width, null);
    }

    $pathinfo = pathinfo($file_path);
    $new_path = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '.webp';

    $saved = $editor->save($new_path, 'image/webp');

    if (!is_wp_error($saved)) {
        unlink($file_path);
        $upload['file'] = $new_path;
        $upload['url'] = dirname($upload['url']) . '/' . basename($new_path);
        $upload['type'] = 'image/webp';
    }

    return $upload;
} */