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
    <section class="content-section px-custom px-md-0">
        <div class="container">
            <h2 class="title mobile-title d-block">TỔNG QUAN VỀ CHƯƠNG TRÌNH</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="video-container">
                        <iframe id="certificateVideo" 
                                src="https://www.youtube.com/embed/0eesDH_3wR0" 
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
    <section class="program-value px-custom px-md-0">
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

    <!-- Content Section program goals - Desktop only -->
    <section class="program-goals d-none d-md-block px-custom px-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Mục tiêu tham dự chương trình</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-golds.png" 
                         alt="Program goals Desktop" 
                         class="program-goals-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section attendees -->
    <section class="attendees px-custom px-md-0">
        <div class="container">
            <!-- Mobile Layout -->
            <div class="mobile-layout d-block d-md-none">
                <h2 class="title">Đối tượng tham dự</h2>
                <p class="description">Trusted partner of Board of Directors, business leaders and experts in the journey to improve governance capacity.</p>
                
                <div class="attendees-items">
                    <div class="attendee-item">Thành viên HĐQT</div>
                    <div class="attendee-item">Thành viên Ban Điều hành</div>
                    <div class="attendee-item">Thư ký QTCT</div>
                    <div class="attendee-item">Thành viên thuộc các phòng ban trong hệ sinh thái QTCT</div>
                </div>
                
                <div class="attendees-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-mb.png" 
                         alt="Attendees Mobile" 
                         class="attendees-mobile-image">
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="d-none d-md-block">
                <div class="desktop-layout">
                <div class="attendees-desktop-row">
                    <div class="attendees-content-col">
                    <h2 class="title mt-md-3">Đối tượng tham dự</h2>
                    <p class="description">Cá nhân mong muốn nâng cao năng lực Quản trị Công ty.</p>
                        <div class="attendees-items">
                            <div class="attendee-item">Thành viên Hội đồng Quản trị</div>
                            <div class="attendee-item">Thành viên Ban Điều hành</div>
                            <div class="attendee-item">Thành viên thuộc các phòng ban trong hệ sinh thái Quản trị Công ty</div>
                            <div class="attendee-item">Thư ký Quản trị Công ty</div>
                        </div>
                    </div>
                </div>
                <div class="attendees-image-col">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-dk.png" 
                             alt="Attendees Desktop" 
                             class="attendees-desktop-image">
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section program organized -->
    <section class="program-organized px-custom px-md-0">
        <div class="container">
            <!-- Mobile Layout -->
            <div class="mobile-layout d-block d-md-none">
                <h2 class="title">Chương trình được tổ chức như thế nào?</h2>
                <p class="description">Trusted partner of Board of Directors, business leaders and experts in the journey to improve governance capacity.</p>
                
                <div class="organized-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-organized-box-mb.png" 
                         alt="Program Organized Mobile" 
                         class="organized-mobile-image">
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="desktop-layout d-none d-md-block">
                <div class="organized-desktop-row">
                    <div class="organized-content-col">
                        <h2 class="title">Chương trình được tổ chức như thế nào?</h2>
                    </div>
                    <div class="organized-image-col">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/program-organized-box-dk.png" 
                             alt="Program Organized Desktop" 
                             class="organized-desktop-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section team contact -->
    <section class="team-contact px-custom px-md-0">
        <div class="container">
            <div class="team-header text-center">
                <h2 class="title">Đội ngũ hướng dẫn</h2>
                <p class="description">Đội ngũ chuyên gia giàu kinh nghiệm thực tiễn, tiên phong trong Quản trị Công ty hiện đại, được trang bị kỹ năng và tư duy quản trị tiên tiến từ các chuyên gia quốc tế hàng đầu.</p>
            </div>
            
            <div class="team-members">
                <?php
                $team_members = array(
                    array(
                        'gender' => 'female',
                        'name' => 'Hà Thu Thanh',
                        'position' => 'Chủ tịch HĐQT<br>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        'image' => 'lecturer-1.png'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phan Đức Hiếu',
                        'position' => 'Uỷ viên chuyên trách Uỷ ban Kinh tế và Tài chính Quốc hội khóa XV',
                        'image' => 'lecturer-2.png'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Linh Giang',
                        'position' => 'Thành viên HĐQT<br>Tổng Công ty Dầu Việt Nam (PVOIL)',
                        'image' => 'lecturer-3.png'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Lê Quang Phúc',
                        'position' => 'Chủ tịch HĐQT, Công ty Cổ phần Tư vấn Quản lý BDSC',
                        'image' => 'lecturer-4.png'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Nguyễn Anh Tuấn',
                        'position' => 'Tổng CTCP Tái Bảo hiểm Quốc gia Việt Nam (VINARE)',
                        'image' => 'lecturer-5.png'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Minh Hiền, FCCA',
                        'position' => 'Giám đốc Chuyên môn<br>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        'image' => 'lecturer-6.png'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phạm Việt Anh',
                        'position' => 'Chủ tịch HĐQT<br>Tổng Công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                        'image' => 'lecturer-7.png'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Đinh Toàn Trung',
                        'position' => 'Thành viên Ban Cố vấn Chuyên môn VIOD',
                        'image' => 'lecturer-8.png'
                    )
                );
                ?>
                
                <div class="team-grid">
                    <?php foreach ($team_members as $member): ?>
                        <div class="team-member">
                            <div class="member-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $member['image']; ?>" 
                                     alt="<?php echo $member['name']; ?>" 
                                     class="member-photo">
                            </div>
                            <div class="member-info">
                                <h4 class="member-title">
                                    <?php echo ($member['gender'] == 'male') ? 'Ông' : 'Bà'; ?>
                                </h4>
                                <h3 class="member-name"><?php echo $member['name']; ?></h3>
                                <p class="member-position"><?php echo $member['position']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="team-button text-center">
                    <a href="#" class="btn-view-more">Xem thêm giảng viên</a>
                </div>
            </div>
        </div>
    </section>
    
</div>
<!-- Content Section program organized -->
<?php
    get_template_part('trangchu/chuongtrinhdangdienra', null, [
        'title' => 'CHƯƠNG TRÌNH ĐÀO TẠO ĐANG DIỄN RA',
        'description' => "DCP cung cấp các kiến thức về QTCT, hướng đến chuyên nghiệp hóa QTCT tại Việt Nam, \n phù hợp với sự phát triển của thị trường tài chính trong nước và thế giới. ",
    ]);
?>
<?php        
get_footer();
?>
