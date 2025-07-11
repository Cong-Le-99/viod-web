<?php
/*
Template Name: About us
*/
get_header();
?>
<div class="member-certificate">
<section class="about-us">
    <h1 class="d-none"><?php the_title(); ?></h1>
    <div class="banner">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <nav class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="d-none d-md-block" href="<?php echo home_url(); ?>">Home</a>
                    <a class="d-block d-md-none" href="<?php echo home_url(); ?>" style="width: 20px; height: 20px;">
                        <img class="w-1 h-1" src="<?php echo get_template_directory_uri(); ?>/images/home.svg" alt="">
                    </a>
                </li>
                <li class="breadcrumb-item active">Liên hệ</li>
            </ol>
        </nav>
        <div class="banner-content">
            <h2 class="title">viện thành viên hội đồng quản trị việt nam <br class="d-none d-md-block">(viod)</h2>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="content-section px-custom px-md-0">
    <div class="container">
        <h2 class="title mobile-title d-block">chúng tôi là</h2>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="video-container">
                    <iframe id="certificateVideo" 
                            src="https://www.youtube.com/embed/sEn-e3oYyQM" 
                            title="Director Certification Program (DCP)" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="content-text">
                    <!-- <h2 class="title desktop-title d-none d-lg-block">TỔNG QUAN VỀ CHƯƠNG TRÌNH</h2> -->
                    <div class="description">
                        <div class="text-content" id="textContent">
                            <p>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD) là định chế chuyên nghiệp, độc lập và tiên phong về Quản trị Công ty (QTCT) và Phát triển bền vững tại Việt Nam. VIOD có sứ mệnh thúc đẩy nâng cao chất lượng và mặt bằng QTCT thông qua đào tạo, huấn luyện và đánh giá thực hành QTCT theo luật định, các chuẩn mực và thông lệ quốc tế. Các hoạt động của VIOD hướng đến chuyên nghiệp hóa Hội đồng Quản trị (HĐQT), hỗ trợ thúc đẩy các chuẩn mực cao về tính minh bạch và đạo đức kinh doanh. VIOD đồng thời xây dựng và phát triển mạng lưới những người thực hành và làm Nghề QTCT, đó là các thành viên HĐQT, các thành viên phụ trách & thư ký QTCT, các nhà tư vấn đến từ các công ty tư vấn trong hệ sinh thái QTCT của thị trường.</p>
                            <!-- <p class="extended-content">Chương trình DCP cung cấp các kiến thức về QTCT bao gồm vai trò, trách nhiệm của các HĐQT, chức năng của các Ủy ban chuyên trách, hướng đến chuyên nghiệp hóa QTCT tại Việt Nam, phù hợp với sự phát triển của thị trường tài chính trong nước, trong khu vực ASEAN và trên thế giới. DCP được công nhận rộng rãi cả về chất lượng học thuật, tính thực tiễn trong các tình huống nghiên cứu và chất lượng chuyên môn của đội ngũ người hướng dẫn, các khách mời chuyên gia trong phiên thảo luận.</p> -->
                        </div>
                        <a href="#" class="read-more-btn" id="readMoreBtn">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php        
get_footer();
?>

