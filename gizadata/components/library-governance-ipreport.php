<?php
// Mảng publications với title, image và link
$publications = [
    [
        'title' => 'Đề cử Thành viên Hội đồng Quản trị',
        'image' => get_template_directory_uri() . '/images/books-2.png',
        'link' => '/van-ban-phap-luat-lien-quan/'
    ],
    [
        'title' => 'QTCT HIỆN ĐẠI <br class="d-none d-md-block">Bộ công cụ cho Hội đồng Quản trị <br class="d-none d-md-block">thành công vượt trội',
        'image' => get_template_directory_uri() . '/images/publications-1.png',
        'link' => '/van-ban-phap-luat-lien-quan/'
    ],
    [
        'title' => 'Quản trị Công ty hiện đại <br class="d-none d-md-block"> Những bài học thực tiễn',
        'image' => get_template_directory_uri() . '/images/publications-1.png',
        'link' => '/van-ban-phap-luat-lien-quan/'
    ],
];
?>

<section class="library-governance publications-and-research session-wrap position-relative bg-session-image">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ">
                <h2 class="title text-center text-md-start text-nowrap-md">tủ sách sGDG</h2>
                <p class="text-base ">
                Cập nhật thông tin mới nhất về Quản trị Công ty và <br class="d-none d-md-block">  những xu hướng nổi bật trong lĩnh vực
                </p>    
                <div class="d-flex flex-column gap-3">
                <div class="publications-grid mt-3">
                    <?php foreach ($publications as $index => $publication): ?>
                        <div class="publication-item dark <?php echo $index === 0 ? 'active' : ''; ?>" 
                            data-image="<?php echo $publication['image']; ?>"
                            data-link="<?php echo $publication['link']; ?>"
                            data-index="<?php echo $index; ?>">
                            <span><?php echo $publication['title']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.7773 10.0001C2.7773 9.53982 3.15039 9.16672 3.61063 9.16672L14.3769 9.16672L11.3547 6.1449C11.0293 5.81948 11.0293 5.29184 11.3547 4.96638C11.6801 4.64093 12.2077 4.6409 12.5332 4.96633L16.9781 9.41077C17.1344 9.56705 17.2222 9.77903 17.2222 10.0001C17.2222 10.2211 17.1344 10.4331 16.9781 10.5893L12.5332 15.0338C12.2077 15.3592 11.6801 15.3592 11.3547 15.0337C11.0293 14.7083 11.0293 14.1806 11.3547 13.8552L14.3769 10.8334L3.61063 10.8334C3.15039 10.8334 2.7773 10.4603 2.7773 10.0001Z"></path>
                            </svg>
                        </div>
                    <?php endforeach; ?>
                </div>
                </div>
                <button class="btn-register mt-5" onclick="window.location.href='/van-ban-phap-luat-lien-quan/'">
                Xem tất cả
                </button>
            </div>
            <div class="col-12 col-md-6 d-none d-md-block text-center">
                <img class="library-governance-img publications-and-research-img w-100 h-auto" src="<?php echo $publications[0]['image']; ?>" alt="Tài liệu và nghiên cứu"> 
            </div>
        </div>
    </div>
</section>

<script>
// Khởi tạo publication items cho section này
document.addEventListener("DOMContentLoaded", function() {
    initializePublicationItems(".library-governance");
});
</script>