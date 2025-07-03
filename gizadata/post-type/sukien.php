<?php

function gizadata_register_post_type_sukien() {
    register_post_type('sukien', array(
        'labels' => array(
            'name' => 'Sự kiện',
            'singular_name' => 'Sự kiện',
            'add_new_item' => 'Thêm sự kiện mới',
            'edit_item' => 'Chỉnh sửa sự kiện',
            'new_item' => 'Sự kiện mới',
            'view_item' => 'Xem sự kiện',
            'all_items' => 'Tất cả sự kiện',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'su-kien'),
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest' => true, // hỗ trợ Gutenberg + REST API
        'taxonomies' => array(
            'post_tag',              // ✅ Thêm từ khoá
            'the_loai_sukien',
            'trang_thai_sukien',
            'dia_diem_sukien'
        ),
    ));
}
add_action('init', 'gizadata_register_post_type_sukien');




// Taxonomy

function gizadata_register_sukien_taxonomies() {
    // Thể loại
    register_taxonomy('the_loai_sukien', 'sukien', array(
        'labels' => array(
            'name' => 'Thể loại',
            'singular_name' => 'Thể loại',
            'add_new_item' => 'Thêm thể loại',
            'edit_item' => 'Chỉnh sửa thể loại',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'the-loai-su-kien'),
        'show_in_rest' => true,
    ));

    // Trạng thái
    register_taxonomy('trang_thai_sukien', 'sukien', array(
        'labels' => array(
            'name' => 'Trạng thái',
            'singular_name' => 'Trạng thái',
            'add_new_item' => 'Thêm trạng thái',
            'edit_item' => 'Chỉnh sửa trạng thái',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'trang-thai-su-kien'),
        'show_in_rest' => true,
    ));

    // Địa điểm
    register_taxonomy('dia_diem_sukien', 'sukien', array(
        'labels' => array(
            'name' => 'Địa điểm',
            'singular_name' => 'Địa điểm',
            'add_new_item' => 'Thêm địa điểm',
            'edit_item' => 'Chỉnh sửa địa điểm',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'dia-diem-su-kien'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'gizadata_register_sukien_taxonomies');
