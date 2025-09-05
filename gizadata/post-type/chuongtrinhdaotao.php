<?php


// Register Custom Post Type: Chương trình đào tạo
function viod_register_training_program() {
    $labels = array(
        'name'               => 'Chương trình đào tạo',
        'singular_name'      => 'Chương trình đào tạo',
        'menu_name'          => 'Chương trình đào tạo',
        'add_new'            => 'Thêm mới',
        'add_new_item'       => 'Thêm chương trình mới',
        'edit_item'          => 'Sửa chương trình',
        'new_item'           => 'Chương trình mới',
        'view_item'          => 'Xem chương trình',
        'search_items'       => 'Tìm chương trình',
        'not_found'          => 'Không tìm thấy chương trình nào',
        'not_found_in_trash' => 'Không có chương trình nào trong thùng rác',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => 'chuong-trinh-dao-tao',
        'publicly_queryable'  => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'chuong-trinh-dao-tao', 'with_front' => false),
        'capability_type'    => 'post',
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array(
            'title',           // Tiêu đề
            'editor',          // Nội dung
            'thumbnail',       // Ảnh đại diện
            'excerpt',         // Tóm tắt
            'custom-fields',   // Custom fields
            'revisions',       // Phiên bản
            'page-attributes', // Thuộc tính trang
        ),
        'show_in_rest'       => true,  // Bật Gutenberg editor
        'rest_base'          => 'training-programs', // REST API base
        'menu_position'      => 5,
        'hierarchical'       => false,
        'can_export'         => true,
        'delete_with_user'   => false,
        'taxonomies' => array('post_tag'), // Thêm dòng này

    );

    register_post_type('training_program', $args);

    // Đăng ký Taxonomy cho Chương trình đào tạo
    $taxonomy_labels = array(
        'name'              => 'Chuyên mục đào tạo',
        'singular_name'     => 'Chuyên mục đào tạo',
        'search_items'      => 'Tìm chuyên mục',
        'all_items'         => 'Tất cả chuyên mục',
        'parent_item'       => 'Chuyên mục cha',
        'parent_item_colon' => 'Chuyên mục cha:',
        'edit_item'         => 'Sửa chuyên mục',
        'update_item'       => 'Cập nhật chuyên mục',
        'add_new_item'      => 'Thêm chuyên mục mới',
        'new_item_name'     => 'Tên chuyên mục mới',
        'menu_name'         => 'Chuyên mục',
    );

    $taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => $taxonomy_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'chuong-trinh', 'with_front' => false),
        'show_in_rest'      => true,  // Bật Gutenberg cho taxonomy
        'rest_base'         => 'training-categories', // REST API base cho taxonomy
    );

    register_taxonomy('training_category', 'training_program', $taxonomy_args);
}
add_action('init', 'viod_register_training_program');
