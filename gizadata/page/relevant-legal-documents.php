<?php
/* Template Name: Văn bản pháp luật liên quan */
get_header();

$category = get_category_by_slug('van-ban-phap-luat');

if (!$category) {
    echo '<p>Category not found.</p>';
    get_footer();
    exit;
}

$banner_image = get_term_meta($category->term_id, 'category_image', true);
$default_image = get_template_directory_uri() . '/images/default-banner.jpg';
$banner_image = $banner_image ? $banner_image : $default_image;
$description = category_description($category->term_id);
?>

<div class="chuyenmucbaiviet">
    <div class="archive-banner" style="background-image: url('<?php echo esc_url($banner_image); ?>');">
        <div class="overlay"></div>
        <div class="banner-content">
            <h1><?php echo esc_html($category->name); ?></h1>
            <div class="mota">
                <?php echo $description; ?>
            </div>
        </div>
    </div>

    <div class="dsbaivietchuyenmuc relevant-legal-documents-img psk">
        <div class="sukien-layout">
            <aside class="sukien-sidebar">
                <form id="filter-form" method="GET" action="">

                    <input type="text" name="s" placeholder="Tìm kiếm sự kiện" value="<?php echo esc_attr($_GET['s'] ?? ''); ?>" />


                    <div class="skw">
                        <div class="a tit">
                            Sắp xếp theo
                        </div>
                        <div class="b">
                            <select name="orderby">
                                <option value="">Chọn</option>
                                <option value="date" <?php selected($_GET['orderby'] ?? '', 'date'); ?>>Mới nhất</option>
                                <option value="title" <?php selected($_GET['orderby'] ?? '', 'title'); ?>>Tên A-Z</option>
                            </select>
                        </div>
                    </div>

                    <div class="skw">
                        <div class="tit">Thể loại</div>
                    </div>
                    <div class="dsnut relavant-legal-documents">

                        <?php
                        if ($category) {
                            $cats = get_categories([
                                'child_of' => $category->term_id,
                                'hide_empty' => false
                            ]);

                            $selected = $_GET['training_category'] ?? '';

                            echo '<div class="dscmdt">';
                            echo '<input type="radio" name="training_category" value="" ' . (empty($selected) ? 'checked' : '') . '> ';
                            echo 'Toàn bộ văn bản';
                            echo '</div>';

                            if (!empty($cats)) {
                                foreach ($cats as $cat) {
                                    $checked = ($selected === $cat->slug) ? 'checked' : '';
                                    echo '<div class="dscmdt">';
                                    echo '<input type="radio" name="training_category" value="' . esc_attr($cat->slug) . '" ' . $checked . '> ';
                                    echo esc_html($cat->name);
                                    echo '</div>';
                                }
                            }
                        }
                        ?>


                    </div>
                </form>
            </aside>


            <div class="main">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $selected = $_GET['training_category'] ?? '';
                $args = [
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                ];

                if (!empty($selected)) {
                    $selected_term = get_category_by_slug($selected);
                    if ($selected_term) {
                        $args['cat'] = $selected_term->term_id;
                    }
                } else {
                    $args['tax_query'] = [
                        [
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => [$category->term_id],
                            'include_children' => true,
                        ]
                    ];
                }

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <?php
                        $content = get_the_content();

                        preg_match('/https?:\/\/[^\s"]+\.pdf/', $content, $matches);

                        $pdf_url = isset($matches[0]) ? esc_url($matches[0]) : '';
                        ?>

                        <div class="bvchuyenmuc">
                            <div class="anhbia">
                                <?php if ($pdf_url): ?>
                                    <a href="<?php echo $pdf_url; ?>" target="_blank">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a>
                                <?php else: ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                            </div>
                        </div>

                <?php endwhile;

                    echo '<div class="phantrang">';
                    the_posts_pagination([
                        'mid_size' => 2,
                        'prev_text' => __('«', 'viod'),
                        'next_text' => __('»', 'viod'),
                    ]);
                    echo '</div>';
                else :
                    echo '<p>No posts found.</p>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const radios = document.querySelectorAll('input[name="training_category"]');
    const selectOrder = document.querySelector('select[name="orderby"]');
    const form = document.getElementById('filter-form');

    radios.forEach(function (radio) {
        radio.addEventListener('change', function () {
            cleanAndSubmitForm();
        });
    });

    if (selectOrder) {
        selectOrder.addEventListener('change', function () {
            cleanAndSubmitForm();
        });
    }

    function cleanAndSubmitForm() {
        const inputs = form.querySelectorAll('input, select');
        let hasValue = false;

        inputs.forEach(input => {
            if (input.value && input.name) {
                hasValue = true;
            } else {
                input.disabled = true; 
            }
        });

        if (hasValue) {
            form.submit();
        } else {
            window.location.href = window.location.pathname;
        }

        setTimeout(() => {
            inputs.forEach(input => input.disabled = false);
        }, 100);
    }
});
</script>



<?php get_footer(); ?>