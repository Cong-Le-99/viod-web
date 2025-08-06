<?php get_header(); ?>

<?php 

    $event_name = get_field('event_name');
    $event_bio = get_field('event_bio');
    $event_avatar_url = get_field('event_avatar_url');
    $event_link = get_field('link'); // Sử dụng field name 'link' như trong config

    // Đường dẫn đến default image
    $default_image = get_template_directory_uri() . '/gizadata/images/default.png';

    // Kiểm tra và sử dụng avatar hoặc default image
    // $avatar_url = $event_avatar_url ? $event_avatar_url : $default_image;
    $avatar_alt = $event_name ? $event_name : 'Giảng viên';
?>

<div class="baiviet-daotao">
    <?php while (have_posts()) : the_post(); ?>
        <?php
        // Get the current category
        $categories = get_the_terms(get_the_ID(), 'training_category');
        $current_category = !empty($categories) ? $categories[0] : null;
        
        // Get category image if exists
        $category_image = '';
        if ($current_category) {
            $category_image = get_term_meta($current_category->term_id, 'category_image', true);
        }
        ?>
        
        <!-- <div class="training-header" style="background-image: url('<?php echo esc_url($category_image); ?>');">
            <div class="overlay"></div>
            <div class="container">
                <div class="main">
                    <div class="breadcrumb-wrapper">
                        <?php
                        // Breadcrumb navigation
                        echo '<div class="breadcrumb">';
                        echo '<a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'viod') . '</a>';
                        echo '<span class="separator">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71967 14.5303C7.42678 14.2374 7.42678 13.7626 7.71967 13.4697L11.1893 10L7.71967 6.53033C7.42678 6.23744 7.42678 5.76256 7.71967 5.46967C8.01256 5.17678 8.48744 5.17678 8.78033 5.46967L12.7803 9.46967C13.0732 9.76256 13.0732 10.2374 12.7803 10.5303L8.78033 14.5303C8.48744 14.8232 8.01256 14.8232 7.71967 14.5303Z" />
                        </svg>
                        </span>';
                        if ($current_category) {
                            echo '<a href="' . esc_url(get_term_link($current_category)) . '">' . esc_html($current_category->name) . '</a>';
                            echo '<span class="separator">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71967 14.5303C7.42678 14.2374 7.42678 13.7626 7.71967 13.4697L11.1893 10L7.71967 6.53033C7.42678 6.23744 7.42678 5.76256 7.71967 5.46967C8.01256 5.17678 8.48744 5.17678 8.78033 5.46967L12.7803 9.46967C13.0732 9.76256 13.0732 10.2374 12.7803 10.5303L8.78033 14.5303C8.48744 14.8232 8.01256 14.8232 7.71967 14.5303Z" />
                            </svg>
                            </span>';
                        }
                        echo '<span class="current">' . get_the_title() . '</span>';
                        echo '</div>';
                        ?>
                    </div>
                    
                    <?php if ($current_category) : ?>
                        <div class="category-info">
                            <h1 class="category-title"><?php echo esc_html($current_category->name); ?></h1>
                            <?php if (!empty($current_category->description)) : ?>
                                <div class="category-description">
                                    <?php echo wp_kses_post($current_category->description); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div> -->

        <div class="bannerkhoahoc"
        style="background-color: #0C3555;">
            <div class="main">
                <?php
                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $default_img = get_template_directory_uri() . '/images/default-training.jpg';
                ?>
                <img src="<?php echo esc_url($thumb_url ? $thumb_url : $default_img); ?>" alt="<?php the_title_attribute(); ?>">
            </div>
        </div>
        <div class="wrap-info-data">
      
            <div class="bg">
                <article id="post-<?php the_ID(); ?>" <?php post_class('training-program-single'); ?>>
                    <div class="baivietdaotao">
                        <div class="noidung">
                            <div class="thongtin">
                                <?php
                                the_content();

                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'viod'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>                    
                        </div>
                       
                        <div class="wrap-info-remember member-certificate">
                            <div class="info-remember">
                                <div class="team-member" style="display: block;">
                                <?php if ($event_avatar_url) : ?>
                                 <div class="member-image">
                                     <img src="<?php echo esc_url($event_avatar_url); ?>" alt="<?php echo esc_attr($avatar_alt); ?>" class="member-photo">
                                 </div>
                                 <?php endif; ?>
                                <div class="member-info">
                                    <?php if ($event_name) : ?>
                                    <h3 class="member-name"><?php echo esc_html($event_name); ?></h3>
                                    <?php endif; ?>

                                    <?php if ($event_bio) : ?>
                                    <p class="member-position"><?php echo wp_kses_post($event_bio); ?></p>
                                    <?php endif; ?>

                                    <?php if ($event_link) : ?>
                                    <div class="member-link">
                                        <a href="<?php echo esc_url($event_link); ?>" target="_blank" class="btn btn-primary">Xem thêm</a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            </div>
                            <div class="boxdangky ">
                                <h3>Đăng ký chương trình</h3>
                                <div class="dk2">
                                    <a href="">Trở thành thành viên</a> VIOD để có được các ưu đãi !!!
                                </div>

                                <div class="box">
                                    <?php echo apply_shortcodes( '[forminator_form id="847"]' ); ?>
                                </div>

                                <div class="c">
                                    <i>* Sau khi hoàn thành phiếu đăng ký. Ông/Bà sẽ nhận được thư xác nhận và hướng dẫn thanh toán chi phí tham dự.</i>
                                </div>
                            </div>
                        <div>

                        </div>
                    </div>
                </article>
            </div>
        </div>

        




    <?php endwhile; ?>
</div>


<div class="thongtinlienhe session-wrap">
    <div class="container">
        <!-- <div class="tit">
            CÁC KHOÁ ĐÀO TẠO KHÁC
        </div>  -->
        <h2 class="title">CÁC KHOÁ ĐÀO TẠO KHÁC</h2>
        <div class="ajax-loading-overlay">
            <div class="loader"></div>
        </div>
        <!-- <div class="post-archive-grid"> -->
            <!-- <div class="khoahoc-grid"> -->
                
                <!-- <div class="other-training-ajax-content ds"> -->
                    <?php if (function_exists('render_other_training_programs')) render_other_training_programs(1, get_the_ID()); ?>
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>

<script>var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';</script>
<script>
jQuery(document).ready(function($){
    $(document).on('click', '.other-training-pagination a', function(e){
        e.preventDefault();

        // Lấy data-page
        var paged = $(this).data('page');

        // Nếu không có data-page, thử tự động đoán cho nút « ở trang 2
        if (typeof paged === 'undefined' || paged === false) {
            // Nếu là nút « thì gán về 1
            if ($(this).text().trim() === '«') {
                paged = 1;
            }
        }

        paged = parseInt(paged);

        console.log('data-page:', paged);
        console.log('HTML:', this.outerHTML);

        if (!paged || isNaN(paged) || paged < 1) {
            alert('Không lấy được số trang!\nHTML: ' + this.outerHTML + '\ndata-page: ' + paged);
            return;
        }

        var container = $('.thongtinlienhe');
        var overlay = container.find('.ajax-loading-overlay');
        var content = container.find('.other-training-ajax-content');
        overlay.show();
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'load_other_training_programs',
                paged: paged,
                exclude_id: <?php echo get_the_ID(); ?>
            },
            success: function(res){
                content.html(res);
                overlay.hide();
            },
            error: function(){
                overlay.hide();
            }
        });
    });
});
</script>

<?php get_footer(); ?>  