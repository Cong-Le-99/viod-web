
<?php
/*
Template Name: Chương trình Chuyên sâu về Uỷ ban Kiểm toán (ACMP)
*/
get_header();
?>
<div class="member-certificate">
    <div class="banner banner-acmp">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <nav class="breadcrumb-nav d-none d-md-block">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link('training_program'); ?>">Chương trình đào tạo</a></li>
                <li class="breadcrumb-item active">Audit Committee Master Program (ACMP)</li>
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
                                src="https://www.youtube.com/embed/sEn-e3oYyQM" 
                                title="Director Certification Program (ACMP)" 
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
                                <p>Chương trình Chuyên sâu về Ủy ban Kiểm toán (ACMP) được Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD) triển khai với sự hỗ trợ kỹ thuật của Tổ chức Tài chính Quốc tế (IFC), hợp tác cùng PwC Việt Nam, đáp ứng các tiêu chuẩn của các Viện Thành viên Hội đồng Quản trị trên thế giới.</p>
                                <p>Chương trình được thiết kế phù hợp với bối cảnh các công ty Việt Nam, nhằm hỗ trợ doanh nghiệp triển khai mô hình Ủy ban Kiểm toán (UBKT) theo các thông lệ quản trị công ty tốt nhất tại Việt Nam và quốc tế. Được tổ chức dưới hình thức trực tiếp, chương trình tạo cơ hội cho các thành viên tham dự được trao đổi chi tiết về cơ cấu, chức năng, quyền hạn và nghĩa vụ của UBKT theo quy định pháp luật hiện hành, bao gồm các văn bản hướng dẫn thi hành luật, nghị định liên quan. Đồng thời, chương trình cũng chia sẻ các thông lệ thực tiễn tại các doanh nghiệp hàng đầu Việt Nam, nhằm giúp các thành viên áp dụng hiệu quả mô hình UBKT trong tổ chức của mình.</p>
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
                </div>
            </div>
            
            <?php
                         $program_values = array(
                 array(
                     'title' => 'Uyên thâm',
                     'sub_title' => 'Người hướng dẫn & Chuyên gia',
                     'content' => array(
                         'Giao lưu với đội ngũ hướng dẫn giàu kiến thức và kinh nghiệm thực tế trong việc triển khai mô hình UBKT',
                         'Chia sẻ kinh nghiệm quý báu cùng các chuyên gia hàng đầu trong việc thành lập và vận hành mô hình UBKT'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 ),
                 array(
                     'title' => 'Linh hoạt',
                     'sub_title' => 'Chương trình giảng dạy & Tình huống nghiên cứu',
                     'content' => array(
                         'Trang bị kiến thức về UBKT ở góc độ pháp lý',
                         'Tiếp cận với các bộ công cụ thực tiễn để có thể được áp dụng khi vận hành mô hình UBKT'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 ),
                 array(
                     'title' => 'Ưu việt',
                     'sub_title' => 'Mạng lưới người tham dự',
                     'content' => array(
                         'Trở thành một phần của mạng lưới thành viên của VIOD',
                         'Trở thành một đại sứ với cam kết cải cách thị trường và quản trị hiệu quả'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 ),
                 array(
                     'title' => 'Thịnh vượng',
                     'sub_title' => 'Phát triển nghề nghiệp',
                     'content' => array(
                         'Cập nhật các thông lệ tốt liên quan đến UBKT',
                         'Kết nối mạng lưới xuyên quốc gia của các thành viên HĐQT',
                         'Được công nhận 16 giờ CPD (Phát triển chuyên môn) của VIOD'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 )
             );
            ?>
            
             <div class="program-values-content">
                 <div class="desktop-layout-program-value relative">
                     <div class="left-column">
                         <?php for($i = 0; $i < 2; $i++): ?>
                             <div class="value-item <?php echo $program_values[$i]['color']; ?>">
                                 <div class="value-title <?php echo $program_values[$i]['color']; ?>">
                                     <h3><?php echo $program_values[$i]['title']; ?></h3>
                                     <p class="sub-title"><?php echo $program_values[$i]['sub_title']; ?></p>
                                 </div>
                                 <div class="value-content">
                                     <?php foreach ($program_values[$i]['content'] as $content_item): ?>
                                         <div class="content-item">
                                             <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $program_values[$i]['icon']; ?>" alt="Check" class="check-icon">
                                             <p><?php echo $content_item; ?></p>
                                         </div>
                                     <?php endforeach; ?>
                                 </div>
                             </div>
                         <?php endfor; ?>
                     </div>

                     <!-- Center Image -->  
                     <div class="center-image">
                         <img src="<?php echo get_template_directory_uri(); ?>/images/value-acmp.png" 
                              alt="DCP Value Center" 
                              class="center-value-image">
                     </div>

                     <!-- Right Column -->
                     <div class="right-column">
                         <?php for($i = 2; $i < 4; $i++): ?>
                             <div class="value-item <?php echo $program_values[$i]['color']; ?>">
                                 <div class="value-title <?php echo $program_values[$i]['color']; ?>">
                                     <h3><?php echo $program_values[$i]['title']; ?></h3>
                                     <p class="sub-title"><?php echo $program_values[$i]['sub_title']; ?></p>
                                 </div>
                                 <div class="value-content">
                                     <?php foreach ($program_values[$i]['content'] as $content_item): ?>
                                         <div class="content-item">
                                             <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $program_values[$i]['icon']; ?>" alt="Check" class="check-icon">
                                             <p><?php echo $content_item; ?></p>
                                         </div>
                                     <?php endforeach; ?>
                                 </div>
                             </div>
                         <?php endfor; ?>
                     </div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-golds-acmp.png" 
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
                <p class="description">Cá nhân mong muốn nâng cao năng lực Quản trị Công ty</p>
                
                <div class="attendees-items">
                    <div class="attendee-item">THÀNH VIÊN HĐQT, BKS , UBKT</div>
                    <div class="attendee-item">TRƯỞNG BỘ PHẬN KIỂM TOÁN NỘI BỘ, THƯ KÝ QTCT</div>
                    <div class="attendee-item">CÁC CÁ NHÂN MUỐN TÌM HIỂU HOẠT ĐỘNG CỦA UBKT</div>
                    <div class="attendee-item">Các cá nhân muốn theo đuổi nghề nghiệp là thành viên độc lập trong HĐQT</div>
                </div>
                
                <div class="attendees-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-acmp-dk.png" 
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
                    <p class="description">Cá nhân mong muốn nâng cao năng lực Quản trị Công ty</p>
                        <div class="attendees-items">
                            <div class="attendee-item">THÀNH VIÊN HĐQT, BKS , UBKT</div>
                            <div class="attendee-item">TRƯỞNG BỘ PHẬN KIỂM TOÁN NỘI BỘ, THƯ KÝ QTCT</div>
                            <div class="attendee-item">CÁC CÁ NHÂN MUỐN TÌM HIỂU HOẠT ĐỘNG CỦA UBKT</div>
                            <div class="attendee-item">Các cá nhân muốn theo đuổi nghề nghiệp là thành viên độc lập trong HĐQT</div>
                        </div>
                    </div>
                </div>
                <div class="attendees-image-col">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-acmp-dk.png" 
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
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-organized-box-acmp-mb.png" 
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/program-organized-box-acmp-dk.png" 
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
                <p class="description">Đội ngũ chuyên gia giàu kinh nghiệm thực tiễn, tiên phong trong Quản trị Công ty hiện<br class="d-none d-md-inline"> đại, được trang bị kỹ năng và tư duy quản trị tiên tiến từ các chuyên gia quốc tế hàng đầu.</p>
            </div>
            
            <div class="team-members">
                <?php
                $team_members = array(
                    array(
                        'gender' => 'female',
                        'name' => 'Hà Thu Thanh',
                        'position' => 'Chủ tịch HĐQT<br>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        'image' => 'lecturer-1.png',
                        'position_more' => array(
                            'Chủ tịch HĐQT, Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                            'Thành viên HĐQT Công ty Cổ phần Đầu tư Tài chính Việt Nam',
                            'Giảng viên (thỉnh giảng) Khoa Quản trị Kinh doanh, Đại học Kinh tế TP.HCM'
                        ),
                        'biography' => 'Bà Thanh có gần 23 năm công tác trong ngành Tài chính - Kế toán - Ngân hàng tại các Global Bank và Tập đoàn kinh tế Nhà nước với hơn 15 năm kinh nghiệm đảm nhận các vị trí Trưởng Ban Kiểm toán nội bộ, CFO, Trưởng Ban kiểm soát, Thành viên/Chủ tịch HĐQT của các công ty niêm yết lớn trong ngành vận tải tại Việt Nam.<br><br>Bà Thanh có bằng MBA, Đại học Impac Hoa Kỳ (Honour Certificate) & Bằng Cử nhân Kế toán Kiểm toán, Đại học Kinh tế TP HCM.<br><br>Bà Thanh hiện cũng là giảng viên môn Quản trị Công ty tại trường Đại học Kinh tế Thành phố Hồ Chí Minh, bà đã có chứng nhận DCP và hiện là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phan Đức Hiếu',
                        'position' => 'Uỷ viên chuyên trách Uỷ ban Kinh tế và Tài chính Quốc hội khóa XV',
                        'image' => 'lecturer-2.png',
                        'position_more' => array(
                            'Uỷ viên chuyên trách Uỷ ban Kinh tế và Tài chính Quốc hội khóa XV',
                            'Cựu Phó Tổng Giám đốc Ngân hàng Nhà nước Việt Nam',
                            'Chuyên gia tư vấn chính sách tài chính - tiền tệ'
                        ),
                        'biography' => 'Ông Hiếu có gần 25 năm công tác trong ngành Tài chính - Ngân hàng - Chính sách Kinh tế tại các cơ quan Nhà nước và tổ chức tài chính lớn với hơn 15 năm kinh nghiệm đảm nhận các vị trí lãnh đạo cao cấp trong hệ thống ngân hàng và quản lý chính sách tài chính quốc gia.<br><br>Ông Hiếu có bằng Tiến sĩ Kinh tế, Đại học Kinh tế Quốc dân & Bằng Thạc sĩ Tài chính Ngân hàng, Đại học Kinh tế TP HCM.<br><br>Ông Hiếu hiện cũng là chuyên gia tư vấn chính sách tài chính tiền tệ và có chứng nhận DCP, đồng thời là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Linh Giang',
                        'position' => 'Thành viên HĐQT<br>Tổng Công ty Dầu Việt Nam (PVOIL)',
                        'image' => 'lecturer-3.png',
                        'position_more' => array(
                            'Thành viên HĐQT, Tổng Công ty Dầu Việt Nam (PVOIL)',
                            'Chủ tịch HĐQT Công ty Cổ phần Vận tải Nhật Việt',
                            'Giảng viên (thỉnh giảng) Khoa Tài chính, Đại học Kinh tế TP.HCM'
                        ),
                        'biography' => 'Bà Giang có gần 23 năm công tác trong ngành Tài chính - Kế toán - Ngân hàng tại các Global Bank và Tập đoàn kinh tế Nhà nước với hơn 15 năm kinh nghiệm đảm nhận các vị trí Trưởng Ban Kiểm toán nội bộ, CFO, Trưởng Ban kiểm soát, Thành viên/Chủ tịch HĐQT của các công ty niêm yết lớn trong ngành vận tải tại Việt Nam.<br><br>Bà Giang có bằng MBA, Đại học Impac Hoa Kỳ (Honour Certificate) & Bằng Cử nhân Kế toán Kiểm toán, Đại học Kinh tế TP HCM.<br><br>Bà Giang hiện cũng là giảng viên môn Quản trị Công ty tại trường Đại học Kinh tế Thành phố Hồ Chí Minh, bà đã có chứng nhận DCP và hiện là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Lê Quang Phúc',
                        'position' => 'Chủ tịch HĐQT, Công ty Cổ phần Tư vấn Quản lý BDSC',
                        'image' => 'lecturer-4.png',
                        'position_more' => array(
                            'Chủ tịch HĐQT, Công ty Cổ phần Tư vấn Quản lý BDSC',
                            'Thành viên HĐQT Công ty Cổ phần Đầu tư Phát triển Bất động sản',
                            'Chuyên gia tư vấn chiến lược doanh nghiệp'
                        ),
                        'biography' => 'Ông Phúc có gần 20 năm công tác trong ngành Tài chính - Đầu tư - Bất động sản tại các Tập đoàn kinh tế tư nhân và Nhà nước với hơn 12 năm kinh nghiệm đảm nhận các vị trí Giám đốc Tài chính, Trưởng Ban Đầu tư, Thành viên/Chủ tịch HĐQT của các công ty niêm yết lớn trong ngành bất động sản và tư vấn quản lý.<br><br>Ông Phúc có bằng MBA, Đại học Kinh tế TP HCM & Bằng Cử nhân Quản trị Kinh doanh, Đại học Ngoại thương.<br><br>Ông Phúc hiện cũng là chuyên gia tư vấn chiến lược doanh nghiệp và có chứng nhận DCP, đồng thời là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Nguyễn Anh Tuấn',
                        'position' => 'Tổng CTCP Tái Bảo hiểm Quốc gia Việt Nam (VINARE)',
                        'image' => 'lecturer-5.png',
                        'position_more' => array(
                            'Tổng Giám đốc CTCP Tái Bảo hiểm Quốc gia Việt Nam (VINARE)',
                            'Thành viên HĐQT Hiệp hội Bảo hiểm Việt Nam',
                            'Chuyên gia tư vấn rủi ro và bảo hiểm'
                        ),
                        'biography' => 'Ông Tuấn có gần 18 năm công tác trong ngành Bảo hiểm - Tái bảo hiểm - Quản lý rủi ro tại các công ty bảo hiểm lớn trong và ngoài nước với hơn 10 năm kinh nghiệm đảm nhận các vị trí Giám đốc Kinh doanh, Phó Tổng Giám đốc, Tổng Giám đốc của các công ty bảo hiểm và tái bảo hiểm hàng đầu.<br><br>Ông Tuấn có bằng Thạc sĩ Tài chính Bảo hiểm, Đại học Kinh tế TP HCM & Bằng Cử nhân Toán - Thống kê, Đại học Khoa học Tự nhiên TP HCM.<br><br>Ông Tuấn hiện cũng là chuyên gia tư vấn quản lý rủi ro doanh nghiệp và có chứng nhận DCP, đồng thời là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Minh Hiền, FCCA',
                        'position' => 'Giám đốc Chuyên môn<br>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        'image' => 'lecturer-6.png',
                        'position_more' => array(
                            'Giám đốc Chuyên môn, Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                            'Thành viên HĐQT Công ty Cổ phần Tư vấn Tài chính Kế toán',
                            'Giảng viên (thỉnh giảng) Khoa Kế toán, Đại học Kinh tế TP.HCM'
                        ),
                        'biography' => 'Bà Hiền có gần 22 năm công tác trong ngành Tài chính - Kế toán - Kiểm toán tại các công ty Big4 và Tập đoàn đa quốc gia với hơn 14 năm kinh nghiệm đảm nhận các vị trí Trưởng Ban Kế toán, CFO, Giám đốc Tài chính, Thành viên HĐQT của các công ty niêm yết lớn trong ngành dịch vụ tài chính và sản xuất.<br><br>Bà Hiền có bằng FCCA (Fellow of the Association of Chartered Certified Accountants), ACCA UK & Bằng Cử nhân Kế toán Kiểm toán, Đại học Kinh tế TP HCM.<br><br>Bà Hiền hiện cũng là giảng viên môn Kế toán Tài chính tại trường Đại học Kinh tế Thành phố Hồ Chí Minh, bà đã có chứng nhận DCP và hiện là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phạm Việt Anh',
                        'position' => 'Chủ tịch HĐQT<br>Tổng Công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                        'image' => 'lecturer-7.png',
                        'position_more' => array(
                            'Chủ tịch HĐQT, Tổng Công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                            'Thành viên HĐQT Tập đoàn Dầu khí Việt Nam (PVN)',
                            'Chuyên gia tư vấn logistics và vận tải'
                        ),
                        'biography' => 'Ông Anh có gần 24 năm công tác trong ngành Dầu khí - Vận tải - Logistics tại Tập đoàn Dầu khí Việt Nam và các công ty liên kết với hơn 16 năm kinh nghiệm đảm nhận các vị trí Giám đốc Kinh doanh, Phó Tổng Giám đốc, Thành viên/Chủ tịch HĐQT của các công ty niêm yết lớn trong ngành vận tải dầu khí.<br><br>Ông Anh có bằng MBA, Đại học Kinh tế TP HCM & Bằng Cử nhân Kỹ thuật Hàng hải, Đại học Hàng hải Việt Nam.<br><br>Ông Anh hiện cũng là chuyên gia tư vấn logistics và vận tải biển tại Việt Nam, ông đã có chứng nhận DCP và hiện là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Đinh Toàn Trung',
                        'position' => 'Thành viên Ban Cố vấn Chuyên môn VIOD',
                        'image' => 'lecturer-8.png',
                        'position_more' => array(
                            'Thành viên Ban Cố vấn Chuyên môn VIOD',
                            'Cựu Giám đốc Tài chính Tập đoàn Điện lực Việt Nam (EVN)',
                            'Chuyên gia tư vấn quản trị rủi ro doanh nghiệp'
                        ),
                        'biography' => 'Ông Trung có gần 26 năm công tác trong ngành Điện lực - Tài chính - Kiểm toán tại Tập đoàn Điện lực Việt Nam và các tổ chức tài chính lớn với hơn 18 năm kinh nghiệm đảm nhận các vị trí Trưởng Ban Tài chính, CFO, Giám đốc Tài chính, Thành viên HĐQT của các công ty niêm yết lớn trong ngành năng lượng.<br><br>Ông Trung có bằng Thạc sĩ Quản trị Kinh doanh, Đại học Kinh tế TP HCM & Bằng Cử nhân Tài chính Kế toán, Đại học Kinh tế TP HCM.<br><br>Ông Trung hiện cũng là chuyên gia tư vấn quản trị rủi ro doanh nghiệp và có chứng nhận DCP, đồng thời là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
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

<!-- Script để truyền dữ liệu PHP sang JavaScript -->
<script>
// Truyền dữ liệu team_members từ PHP sang JavaScript
var teamMembersData = <?php echo json_encode($team_members); ?>;
</script>

<!-- Modal thông tin giảng viên -->
<div class="modal fade" id="lecturerModal" tabindex="-1" aria-labelledby="lecturerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered lecturer-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lecturerModalLabel">THÔNG TIN GIẢNG VIÊN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="lecturer-info-container">
                    <div class="lecturer-image-section">
                        <img id="lecturerImage" src="" alt="Lecturer" class="lecturer-modal-image">
                    </div>
                    <div class="lecturer-details-section">
                        <div class="lecturer-name-box">
                            <p class="lecturer-prefix" id="lecturerPrefix">Bà</p>
                            <h3 class="lecturer-name" id="lecturerName">NGUYỄN LINH GIANG</h3>
                            <div class="lecturer-positions" id="lecturerPositions">
                            </div>

                        </div>
        
                    </div>
                </div>
                <div class="lecturer-biography" id="lecturerBiography">
                        
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Content Section program organized -->
<?php
    get_template_part('trangchu/chuongtrinhdangdienra', null, [
        'title' => 'CHƯƠNG TRÌNH ĐÀO TẠO ĐANG DIỄN RA',
        'description' => "DCP cung cấp các kiến thức về QTCT, hướng đến chuyên nghiệp hóa QTCT tại Việt Nam, \n phù hợp với sự phát triển của thị trường tài chính trong nước và thế giới. ",
    ]);
?>
<!-- Testimonial Slider Section -->
<?php get_template_part('trangchu/testimonial-slider'); ?>
<?php        
get_footer();
?>

