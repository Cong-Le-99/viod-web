<?php
// Query posts từ category van-ban-phap-luat
$publications_query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 4,
    'category_name' => 'van-ban-phap-luat',
    'orderby' => 'date',
    'order' => 'DESC'
]);

$publications = [];
if ($publications_query->have_posts()) {
    while ($publications_query->have_posts()) {
        $publications_query->the_post();

        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if (!$image_url) {
            $image_url = get_template_directory_uri() . '/images/publications-1.png'; // Default image
        }
        $pdf_file = get_field('pdf_file', get_the_ID());

        $publications[] = [
            'title' => get_the_title(),
            'image' => $image_url,
            'link' => $pdf_file ? $pdf_file : get_permalink(),
            'has_pdf' => !empty($pdf_file)
        ];
    }
    wp_reset_postdata();
}
?>

<section class="publications-and-research session-wrap position-relative bg-session-image publications-and-research-3">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-7 ">
                <h2 class="title text-center text-md-start light text-nowrap-md">các nghiên cứu và ấn phẩm</h2>
                <p class="text-base light">
                    Cập nhật thông tin mới nhất về Quản trị Công ty <br class="d-none d-md-block"> và những xu hướng nổi bật trong lĩnh vực
                </p>
                <div class="d-flex flex-column gap-3">
                    <div class="publications-grid mt-3">
                        <?php foreach ($publications as $index => $publication): ?>
                            <div class="publication-item <?php echo $index === 0 ? 'active' : ''; ?>"
                                data-image="<?php echo $publication['image']; ?>"
                                data-link="<?php echo $publication['link']; ?>"
                                data-index="<?php echo $index; ?>"
                                data-has-pdf="<?php echo $publication['has_pdf'] ? 'true' : 'false'; ?>">
                                <span><?php echo wp_kses_post($publication['title']); ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.7773 10.0001C2.7773 9.53982 3.15039 9.16672 3.61063 9.16672L14.3769 9.16672L11.3547 6.1449C11.0293 5.81948 11.0293 5.29184 11.3547 4.96638C11.6801 4.64093 12.2077 4.6409 12.5332 4.96633L16.9781 9.41077C17.1344 9.56705 17.2222 9.77903 17.2222 10.0001C17.2222 10.2211 17.1344 10.4331 16.9781 10.5893L12.5332 15.0338C12.2077 15.3592 11.6801 15.3592 11.3547 15.0337C11.0293 14.7083 11.0293 14.1806 11.3547 13.8552L14.3769 10.8334L3.61063 10.8334C3.15039 10.8334 2.7773 10.4603 2.7773 10.0001Z"></path>
                                </svg>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button class="btn-register color-dark mt-5" onclick="window.location.href='/van-ban-phap-luat-lien-quan/'">
                    Xem tất cả
                </button>
            </div>
            <div class="col-12 col-md-5 d-none d-md-block text-center">
                <img class="publications-and-research-img w-100 h-auto" src="<?php echo $publications[0]['image']; ?>" alt="Tài liệu và nghiên cứu">
            </div>
        </div>
    </div>
</section>


<script>
    // Khởi tạo publication items cho section này
    document.addEventListener("DOMContentLoaded", function() {
        initializePublicationItems(".publications-and-research-3");
    });
</script>