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
    
    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <h2 class="title mobile-title d-block">TỔNG QUAN VỀ CHƯƠNG TRÌNH</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="video-container">
                        <video id="certificateVideo" poster="<?php echo get_template_directory_uri(); ?>/images/featured-courses-&-events.png">
                            <source src="<?php echo get_template_directory_uri(); ?>/images/dcp-2025.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="play-button" id="playButton">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5V19L19 12L8 5Z" fill="#3AA735"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="content-text">
                        <!-- <h2 class="title desktop-title d-none d-lg-block">TỔNG QUAN VỀ CHƯƠNG TRÌNH</h2> -->
                        <div class="description">
                            <div class="text-content" id="textContent">
                                <p>Quản trị Công ty tốt là nền tảng vững chắc cho sự thành công cho doanh nghiệp. Chương trình Chứng nhận Thành viên Hội đồng Quản trị (DCP) - chương trình nòng cốt nằm trong chuỗi các Chương trình Quản trị Tiên tiến (GEPs) sẽ là công cụ hoàn hảo giúp các doanh nghiệp đạt được mục tiêu này. DCP được phát triển bởi Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD) với sự hỗ trợ kỹ thuật của Tổ chức Tài chính Quốc tế (IFC) và Cục Kinh tế Liên bang Thụy Sĩ (SECO), đáp ứng các tiêu chuẩn của các Viện Thành viên HĐQT trên thế giới. Chương trình DCP cung cấp các kiến thức về QTCT bao gồm vai trò, trách nhiệm của các HĐQT, chức năng của các Ủy ban chuyên trách, hướng đến chuyên nghiệp hóa QTCT tại Việt Nam, phù hợp với sự phát triển của thị trường tài chính trong nước, trong khu vực ASEAN và trên thế giới. DCP được công nhận rộng rãi cả về chất lượng học thuật, tính thực tiễn trong các tình huống nghiên cứu và chất lượng chuyên môn của đội ngũ người hướng dẫn, các khách mời chuyên gia trong phiên thảo luận.</p>
                                <!-- <p class="extended-content">Chương trình DCP cung cấp các kiến thức về QTCT bao gồm vai trò, trách nhiệm của các HĐQT, chức năng của các Ủy ban chuyên trách, hướng đến chuyên nghiệp hóa QTCT tại Việt Nam, phù hợp với sự phát triển của thị trường tài chính trong nước, trong khu vực ASEAN và trên thế giới. DCP được công nhận rộng rãi cả về chất lượng học thuật, tính thực tiễn trong các tình huống nghiên cứu và chất lượng chuyên môn của đội ngũ người hướng dẫn, các khách mời chuyên gia trong phiên thảo luận.</p> -->
                            </div>
                            <a href="#" class="read-more-btn" id="readMoreBtn">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Content Section program value -->
    <section class="program-value">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title mobile-title d-block">Giá trị chương trình</h2>
                    
                    <!-- Mobile Image -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-value-mb.png" 
                         alt="Program Value Mobile" 
                         class="program-value-image d-block d-md-none">
                    
                    <!-- Desktop Image -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-value-dk.png" 
                         alt="Program Value Desktop" 
                         class="program-value-image d-none d-md-block">
                </div>
            </div>
        </div>
    </section>
    
</div>
<?php        
get_footer();
?>
