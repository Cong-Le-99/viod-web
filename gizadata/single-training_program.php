<?php get_header(); ?>


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
                    <div class="boxdangky ">
                        <h3>Đăng ký chương trình</h3>
                        <div class="dk2">
                            <a href="">Trở thành thành viên</a> VIOD để có được các ưu đãi !!!
                        </div>

                        <div class="box">
                            <?php echo apply_shortcodes( '[contact-form-7 id="9134801" title="đăng ký chương trình"]' ); ?>
                        </div>

                        <div class="c">
                            <i>* Sau khi hoàn thành phiếu đăng ký. Ông/Bà sẽ nhận được thư xác nhận và hướng dẫn thanh toán chi phí tham dự.</i>
                        </div>
                    </div>

                
                </div>
            </article>
        </div>

        




    <?php endwhile; ?>
</div>


<div
class="cacchuongtrinh xemthemformtrangdangky"
id="other-training-ajax-section">
    <div class="main">
        <h2 class="tit" >Các khoá đào tạo khác</h2>
        <div class="mota">
            Trusted partner of Board of Directors, business leaders and experts in the journey to improve governance capacity.
        </div>
        <div class="ajax-loading-overlay">
            <div class="loader"></div>
        </div>
        <div class="other-training-ajax-content ds">
            <?php if (function_exists('render_other_training_programs')) render_other_training_programs(1, get_the_ID()); ?>
        </div>
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

        var container = $('#other-training-ajax-section');
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