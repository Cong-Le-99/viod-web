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
                <li class="breadcrumb-item active">Về chúng tôi</li>
            </ol>
        </nav>
        <div class="banner-content">
            <h2 class="title">viện thành viên hội đồng quản trị việt nam <br class="d-none d-md-block">(viod)</h2>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="content-section  about-us-info px-custom px-md-0 ">
    <div class="container">
        <h2 class="title mobile-title d-block">chúng tôi là</h2>
        <div class="row ">
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
                <div class="content-text >
                    <div class="description">
                        <div class="text-content text-content-about-us"" id="textContent">
                            <p>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD) là định chế chuyên nghiệp, độc lập và tiên phong về Quản trị Công ty (QTCT) và Phát triển bền vững tại Việt Nam. VIOD có sứ mệnh thúc đẩy nâng cao chất lượng và mặt bằng QTCT thông qua đào tạo, huấn luyện và đánh giá thực hành QTCT theo luật định, các chuẩn mực và thông lệ quốc tế. Các hoạt động của VIOD hướng đến chuyên nghiệp hóa Hội đồng Quản trị (HĐQT), hỗ trợ thúc đẩy các chuẩn mực cao về tính minh bạch và đạo đức kinh doanh. VIOD đồng thời xây dựng và phát triển mạng lưới những người thực hành và làm Nghề QTCT, đó là các thành viên HĐQT, các thành viên phụ trách & thư ký QTCT, các nhà tư vấn đến từ các công ty tư vấn trong hệ sinh thái QTCT của thị trường.</p>
                        </div>
                        <a href="#" class="read-more-btn" id="readMoreBtn">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-overview session-wrap d-block d-md-none">
    <!-- Tiêu đề (chỉ hiện trên mobile) -->
    <h2 class="title d-block d-md-none text-start text-md-end px-3">
        ĐỊNH CHẾ TIÊN PHONG VÀ <br class="d-md-none" />
        CHUYÊN NGHIỆP về QTCT TẠI VIỆT NAM
    </h2>

    <!-- 3 Box icon đầu -->
    <div class="overview-wrapper">
        <div class="container">
            <div class="row gy-4">
                <!-- Box 1 -->
                <div class="col-12 col-lg-4">
                    <div class="overview-box h-100">
                        <div class="box-title d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>chúng tôi là</span>
                        </div>
                        <p class="box-content">
                            Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD) là thể chế chuyên nghiệp, độc lập, tiên phong thúc đẩy việc thực hiện chuẩn mực và thông lệ tốt nhất về Quản trị Công ty (QTCT) &amp; phát triển bền vững cho doanh nghiệp Việt Nam.
                        </p>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-12 col-lg-4">
                    <div class="overview-box h-100">
                        <div class="box-title d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>đối tượng mục tiêu</span>
                        </div>
                        <p class="box-content">
                            Các tổ chức và cá nhân mong muốn xây dựng và áp dụng thông lệ tốt về QTCT, từ thành viên HĐQT, Giám đốc điều hành đến các cơ quan quản lý và tổ chức học thuật, chuyên môn về QTCT.
                        </p>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-12 col-lg-4">
                    <div class="overview-box h-100">
                        <div class="box-title d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>sứ mệnh</span>
                        </div>
                        <p class="box-content mb-1">
                            • Trợ giúp cải thiện niềm tin của nhà đầu tư trong khu vực kinh tế tư nhân của Việt Nam và trên thị trường vốn.<br />
                            • Thúc đẩy tính chuyên nghiệp, năng lực chuyên môn, và vị thế của các thành viên HĐQT tại Việt Nam.<br />
                            • Tăng cường năng lực về QTCT cho các doanh nghiệp.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Giá trị cam kết & Tầm nhìn -->
    <div class="container">
        <div class="row">
            <!-- Giá trị cam kết -->
            <div class="col-12 col-lg-6">
                <div class="h-100">
                    <div class="commitment mt-5">
                        <div class="box-title title-center text-center mb-4 d-flex justify-content-lg-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>giá trị cam kết</span>
                        </div>
                        <div class="row g-4 justify-content-center commitment-items text-center">
                            <div class="col-4 col-md-2">
                                <div class="commit-item d-flex flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-icon-1.svg" alt="Tuân thủ" class="commit-icon mb-2" />
                                    <span class="commit-label">tuân thủ</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-2">
                                <div class="commit-item d-flex flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-icon-2.svg" alt="Minh bạch" class="commit-icon mb-2" />
                                    <span class="commit-label">minh bạch</span>
                                </div>
                            </div>
                            <div class="col-4 col-md-2">
                                <div class="commit-item d-flex flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-icon-3.svg" alt="Chính trực" class="commit-icon mb-2" />
                                    <span class="commit-label">chính trực</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tầm nhìn -->
            <div class="col-12 col-lg-6">
                <div class="h-100 mt-5 mt-lg-0">
                    <div class="box-title d-flex align-items-start">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                        <span>tầm nhìn</span>
                    </div>
                    <p class="box-content">
                        VIOD là lựa chọn hàng đầu của các HĐQT và lãnh đạo tiên phong nhằm tạo dựng cộng đồng doanh nghiệp vững mạnh, minh bạch và hiệu quả.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-overview d-md-block d-none">
<div class="overview-wrapper">
        <div class="container">
            <div class="row gy-4">
                <div class="col-6">
                    <div class="overview-box overview-box-transparent h-100">
                        <div class="box-title d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>đối tượng mục tiêu</span>
                        </div>
                        <p class="box-content">
                            Các tổ chức và cá nhân mong muốn xây dựng và áp dụng thông lệ tốt về QTCT, từ thành viên HĐQT, Giám đốc điều hành đến các cơ quan quản lý và tổ chức học thuật, chuyên môn về QTCT.
                        </p>
                    </div>
                </div>
            

                <div class="col-6">
                    <div class="overview-box h-100">
                        <div class="box-title d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>sứ mệnh</span>
                        </div>
                        <p class="box-content mb-1">
                            • Trợ giúp cải thiện niềm tin của nhà đầu tư trong khu vực kinh tế tư nhân của Việt Nam và trên thị trường vốn.<br />
                            • Thúc đẩy tính chuyên nghiệp, năng lực chuyên môn, và vị thế của các thành viên HĐQT tại Việt Nam.<br />
                            • Tăng cường năng lực về QTCT cho các doanh nghiệp.
                        </p>
                    </div>
                </div>

                <div class="col-6">
                    <div class="overview-box overview-box-transparent h-100">
                        <div class="box-title d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>Tầm nhìn</span>
                        </div>
                        <p class="box-content">
                        VIOD là lựa chọn hàng đầu của các HĐQT và lãnh đạo tiên phong nhằm tạo dựng cộng đồng doanh nghiệp vững mạnh, minh bạch và hiệu quả.
                        </p>
                    </div>
                </div>

                <div class="col-6">
                <div class="h-100 overview-box overview-box-transparent">
                    <div class="commitment ">
                        <div class="box-title d-flex align-items-start mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-arrow.svg" alt="arrow" class="me-1" />
                            <span>giá trị cam kết</span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="commit-item d-flex flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-icon-1.svg" alt="Tuân thủ" class="commit-icon mb-2" />
                                    <span class="commit-label">tuân thủ</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="commit-item d-flex flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-icon-2.svg" alt="Minh bạch" class="commit-icon mb-2" />
                                    <span class="commit-label">minh bạch</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="commit-item d-flex flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-icon-3.svg" alt="Chính trực" class="commit-icon mb-2" />
                                    <span class="commit-label">chính trực</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="viod-partner d-md-block d-none">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <h2 class="viod-partner-title text-center text-lg-start mb-0">VIOD Là đối tác kỹ thuật đáng tin cậy của Cuộc Bình chọn Doanh nghiệp Niêm yết (VLCA). Đồng thời là Cơ quan tham gia đánh giá Thẻ điểm Quản trị Công ty khu vực ASEAN (ACGS)</h2>
            </div>
            <div class="col-6">
                <div class="viod-partner-content d-flex justify-content-center align-items-center flex-wrap flex-lg-nowrap">
                    <div class="viod-partner-content-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner-1.png" alt="partner-1" class="partner-img" />
                    </div>
                    <div class="viod-partner-content-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner-2.png" alt="partner-2" class="partner-img" />
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="roadmap  session-wrap d-md-block d-none bg-before position-relative">
    <div class="container relative">
        <div class="row">
            <div class="col-12">
                <h2 class="title mb-5">CHẶNG ĐƯỜNG HÌNH THÀNH VÀ PHÁT TRIỂN</h2>
                <img src="<?php echo get_template_directory_uri(); ?>/images/roadmap.png" alt="roadmap" class="roadmap-image w-100 h-auto mt-1" />
            </div>
        </div>
    </div>
    <div class="container mt-5 md-mt-3 px-0">
        <div class="row">
            <div class="col-12">
                <h2 class="title ">Đối tác sáng lập</h2>
               <div class="founder-partners">
                   <?php
                       $founder_imgs = [
                           'partner-3.png',
                           'partner-4.png',
                           'partner-5.png',
                           'partner-6.png',
                           'partner-7.png'
                       ];
                       foreach ($founder_imgs as $img_name) : ?>
                           <div class="founder-item">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $img_name; ?>" alt="founder-partner" class="img-fluid" />
                           </div>
                   <?php endforeach; ?>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="roadmap-partners  session-wrap d-md-none d-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 class="title">CHẶNG ĐƯỜNG HÌNH THÀNH VÀ PHÁT TRIỂN</h2>
            <p class="roadmap-title-sub text-center mb-5">
                VIOD là định chế tiên phong và chuyên nghiệp về Quản trị Công ty và phát triển bền vững tại Việt Nam.
            </p>
            <?php
                $roadmap_mobile = [
                    [
                        'year' => '12/2016',
                        'title' => 'Sáng kiến Quản trị Công ty Việt Nam (VCGI)',
                        'description' => 'Sáng kiến Quản trị Công ty Việt Nam (VCGI) hình thành với sự hỗ trợ của <strong>Tổ chức Tài chính quốc tế (IFC)</strong> phối hợp <strong>Sở Giao dịch Chứng khoán TP.HCM (HOSE)</strong> và <strong>Sở Giao dịch Chứng khoán Hà Nội (HNX)</strong> cùng sự hỗ trợ của <strong>Ủy ban Chứng khoán Nhà nước (SSC)</strong>.',
                    ],
                    [
                        'year' => '2018',
                        'title' => 'Thành lập VIOD',
                        'description' => 'VCGI thành lập <strong>Viện Thành viên Hội đồng quản trị Việt Nam (VIOD)</strong> với sự hỗ trợ kỹ thuật của <strong>IFC</strong> và <strong>Cục Kinh tế Liên bang Thụy Sĩ (SECO)</strong>.',
                    ],
                    [
                        'year' => '2019',
                        'title' => 'Ra đời CMP',
                        'description' => 'Từ năm 2018–2021, phạm vi phủ sóng của VIOD ngày càng phát triển nhanh chóng trong cộng đồng và mạng lưới quan hệ đối tác với sự ra đời của <strong>Chương trình thành viên Doanh nghiệp (CMP)</strong>.',
                    ],
                    [
                        'year' => '2022',
                        'title' => 'Kỷ niệm 6 năm',
                        'description' => '<strong>Nhận Bằng khen của Bộ Tài chính vào tháng 9/2024</strong>.',
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Dấu ấn 5 năm',
                        'description' => '',
                    ],
                    [
                        'year' => '2024',
                        'title' => 'Thành viên GNDi & Ra mắt IMP',
                        'description' => '<strong>Chính thức là Thành viên của GNDi</strong> – Đại diện Việt Nam trong mạng lưới các Viện Thành viên Hội đồng Quản trị toàn cầu. Ra mắt <strong>Chương trình thành viên Cá nhân (IMP)</strong>.',
                    ],
                ];
            ?>
            <div class="roadmap-time-line">
                <?php foreach ($roadmap_mobile as $item): ?>
                    <div class="roadmap-card">
                       <div class="d-flex align-items-center gap-1 mb-2">
                       <span class="roadmap-year"><?php echo $item['year']; ?></span>
                       <img src="<?php echo get_template_directory_uri(); ?>/images/viod.svg" alt="viod" class="roadmap-logo" />
                       </div>
                        <h3 class="roadmap-card-title"><?php echo $item['title']; ?></h3>
                        <?php if (!empty($item['description'])): ?>
                        <p class="roadmap-desc"><?php echo $item['description']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container mt-5 md-mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="title ">Đối tác sáng lập</h2>
               <div class="founder-partners">
                   <?php
                       $founder_imgs = [
                           'partner-3.png',
                           'partner-4.png',
                           'partner-5.png',
                           'partner-6.png',
                           'partner-7.png'
                       ];
                       foreach ($founder_imgs as $img_name) : ?>
                           <div class="founder-item">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $img_name; ?>" alt="founder-partner" class="img-fluid" />
                           </div>
                   <?php endforeach; ?>
               </div>
            </div>
        </div>
    </div>
</section>
<?php get_template_part('components/board-of-directors'); ?>
<?php get_template_part('components/partners-section'); ?>
<?php get_template_part('components/publications-and-research'); ?>
<?php get_template_part('components/contact-us-membership-programs'); ?>
<?php get_template_part('components/contact-us-global-partnerships'); ?>
<?php get_template_part('components/contact-us-socials'); ?>
</div>

<?php        
get_footer();
?>



