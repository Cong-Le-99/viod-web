<?php
/*
Template Name: Chương trình Chứng nhận Thành viên HĐQT (DCP)
*/
get_header();
?>
<div class="member-certificate">
    <div class="banner">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <nav class="breadcrumb-nav d-none d-md-block">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link('training_program'); ?>">Chương trình đào tạo</a></li>
                <li class="breadcrumb-item active">Director Certification Program (DCP)</li>
            </ol>
        </nav>
    </div>
</div>
<?php        
get_footer();
?>
