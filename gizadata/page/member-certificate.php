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
                </div>
            </div>
            
            <?php
                         $program_values = array(
                 array(
                     'title' => 'Uyên thâm',
                     'sub_title' => 'Người hướng dẫn & Chuyên gia',
                     'content' => array(
                         'Cơ hội tiếp cận kiến thức và kinh nghiệm của người hướng dẫn và diễn giả quốc tế và Việt Nam',
                         'Cơ hội chia sẻ và học hỏi từ các câu chuyện trải nghiệm thực tế'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 ),
                 array(
                     'title' => 'Linh hoạt',
                     'sub_title' => 'Chương trình giảng dạy & Tình huống nghiên cứu',
                     'content' => array(
                         'Chương trình, nội dung và tình huống bám sát diễn biến thị trường',
                         'Cập nhật theo thông lệ tốt nhất của Việt Nam và quốc tế về QTCT & phát triển bền vững (ESG)',
                         'Cơ hội chia sẻ và học hỏi từ các câu chuyện trải nghiệm thực tế'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 ),
                 array(
                     'title' => 'Ưu việt',
                     'sub_title' => 'Mạng lưới người tham dự',
                     'content' => array(
                         'Gia nhập cộng đồng các thành viên HĐQT chuyên',
                         'Trở thành một đại sứ với cam kết cải cách thị trường và quản trị hiệu quả',
                         'Cơ hội chia sẻ và học hỏi từ các câu chuyện trải nghiệm thực tế'
                     ),
                     'color' => 'green',
                     'icon' => 'check-circle.svg'
                 ),
                 array(
                     'title' => 'Thịnh vượng',
                     'sub_title' => 'Phát triển nghề nghiệp',
                     'content' => array(
                         'Tham gia lộ trình phát triển nghề nghiệp bài bản của VIOD',
                         'Được công nhận 30 giờ CPD (Phát triển chuyên môn) của VIOD',
                         'Cơ hội chia sẻ và học hỏi từ các câu chuyện trải nghiệm thực tế'
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
                         <img src="<?php echo get_template_directory_uri(); ?>/images/value-dcp.png" 
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
                <p class="description">Cá nhân mong muốn nâng cao năng lực Quản trị Công ty</p>
                
                <div class="attendees-items">
                    <div class="attendee-item">Thành viên hội đồng quản trị</div>
                    <div class="attendee-item">Thành viên Ban Điều hành</div>
                    <div class="attendee-item">Thành viên thuộc các phòng ban trong hệ sinh thái quản trị công ty</div>
                    <div class="attendee-item">Thư ký quản trị công ty</div>
                </div>
                
                <div class="attendees-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-dk.png" 
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
                            <div class="attendee-item">Thành viên hội đồng quản trị</div>
                            <div class="attendee-item">Thành viên Ban Điều hành</div>
                            <div class="attendee-item">Thành viên thuộc các phòng ban trong hệ sinh thái quản trị công ty</div>
                            <div class="attendee-item">Thư ký quản trị công ty</div>
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
            <?php
            // Data cho organized content với SVG icons thực tế
            $organized_content = array(
                array(
                    'icon' => 'calendar-clock.svg',
                    'title' => 'THỜI LƯỢNG',
                    'content' => '6 buổi học tương tác liên tục trong 3 ngày tham dự',
                    'color' => 'dark'
                ),
                array(
                    'icon' => 'user-tie.svg',
                    'title' => 'NGƯỜI HƯỚNG DẪN',
                    'content' => 'Chuyên gia QTCT, thành viên HĐQT nhiều kinh nghiệm về QTCT tại Việt Nam và trên thế giới',
                    'color' => 'dark'
                ),
                array(
                    'icon' => 'activity.svg',
                    'title' => 'HOẠT ĐỘNG',
                    'content' => 'Tính hướng nghiên cứu, thảo luận nhóm, phiên thảo luận và các hoạt động khác',
                    'color' => 'dark'
                ),
                array(
                    'icon' => 'network.svg',
                    'title' => 'KẾT NỐI',
                    'content' => 'Hoạt động "Member Networking" và các sự kiện cho thành viên VIOD',
                    'color' => 'dark'
                )
            );
            ?>
            
            <!-- Mobile Layout -->
            <div class="mobile-layout d-block d-md-none">
                <h2 class="title">Chương trình được tổ chức như thế nào?</h2>
                <p class="description">Trusted partner of Board of Directors, business leaders and experts in the journey to improve governance capacity.</p>
                
                <div class="organized-content-grid">
                    <?php foreach ($organized_content as $content): ?>
                        <div class="organized-content-box <?php echo $content['color']; ?>">
                            <div class="organized-box-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $content['icon']; ?>" alt="<?php echo $content['title']; ?>" />
                            </div>
                            <h3 class="organized-box-title"><?php echo $content['title']; ?></h3>
                            <p class="organized-box-content"><?php echo $content['content']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="desktop-layout d-none d-md-block">
                <div class="organized-desktop-row">
                    <div class="organized-content-col organized-desktop-row">
                        <div class="organized-content-col">
                            <h2 class="title mb-0">Chương trình được tổ chức như thế nào?</h2>
                        </div>
                        <div class="organized-image-col">
                            <div class="organized-content-grid">
                                <?php foreach ($organized_content as $content): ?>
                                    <div class="organized-content-box <?php echo $content['color']; ?>">
                                        <div class="organized-box-icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $content['icon']; ?>" alt="<?php echo $content['title']; ?>" />
                                        </div>
                                        <h3 class="organized-box-title"><?php echo $content['title']; ?></h3>
                                        <p class="organized-box-content"><?php echo $content['content']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section team contact -->
    <section class="team-contact px-custom px-md-0">
        <div class="container">
            <div class="team-header text-center">
                <h2 class="title mb-3">Đội ngũ hướng dẫn</h2>
                <p class="description">Đội ngũ chuyên gia giàu kinh nghiệm thực tiễn, tiên phong trong Quản trị Công ty hiện<br class="d-none d-md-inline"> đại, được trang bị kỹ năng và tư duy quản trị tiên tiến từ các chuyên gia quốc tế hàng đầu.</p>
            </div>
            
            <div class="team-members">
                <?php
                $team_members = array(
                    array(
                        'gender' => 'female',
                        'name' => 'Hà Thu Thanh',
                        'position' => 'Chủ tịch HĐQT<br>Viện Thành viên HĐQT Việt Nam (VIOD)',
                        'image' => 'lecturer-1.png',
                        'position_more' => array(
                            'Chủ tịch HĐQT, Viện Thành viên HĐQT Việt Nam (VIOD)',
                            'Luật sư hành nghề, Đoàn Luật sư Thành phố Hà Nội',
                        ),
                        'biography' => 'Bà Hà Thu Thanh là Chủ tịch HĐTV và là một trong những người sáng lập của Deloitte Việt Nam – hãng tư vấn chuyên ngành và kiểm toán lớn nhất trên thế giới và tại Việt Nam, với hơn 40 năm kinh nghiệm, bao gồm 32 năm làm việc tại Deloitte Việt Nam trong đó có 25 năm đảm nhiệm vị trí lãnh đạo. Bên cạnh đó, Bà cũng có 8 năm làm việc tại Bộ Tài Chính trong vai trò là người làm chính sách về kế toán, kiểm toán. <br></br>
                        Bà Thanh là Chủ tịch Viện Thành viên Hội đồng Quản trị (VIOD) kể từ khi VIOD được thành lập vào năm 2018. Bên cạnh vai trò lãnh đạo tại VIOD, Bà Thanh được đánh giá cao về những đóng góp to lớn và tiên phong trong việc phát triển nghề kế toán, kiểm toán, thúc đẩy quyền năng phụ nữ và tư duy lãnh đạo thông qua những vai trò chủ chốt trong một số hiệp hội và tổ chức nghề nghiệp. Trong những năm gần đây, Bà Thanh cũng là chuyên gia cao cấp trong lĩnh vực Quản trị Công ty, tư vấn về phát triển bền vững (ESG) cho cộng đồng doanh nghiệp xã hội và doanh nghiệp tư nhân tại Việt Nam. <br></br>
                        Bà Thanh là một trong "50 phụ nữ có ảnh hưởng tại Việt Nam" được bình chọn bởi Forbes và vinh dự nhận giải thưởng "Doanh nhân xuất sắc Châu Á Thái Bình Dương" năm 2017 & 2019 do Enterprise Asia tổ chức.
                        '
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phan Đức Hiếu',
                        'position' => 'Ủy viên Thường trực <br>Ủy ban Kinh tế của Quốc hội khóa XV<br>Cố vấn Cao cấp HĐQT VIOD',
                        'image' => 'lecturer-2.png',
                        'position_more' => array(
                            'Ủy viên Thường trực Ủy ban Kinh tế của Quốc hội khóa XV',
                            'Chủ tịch Ban Cố vấn Cấp cao VIOD',
                        ),
                        'biography' => 'Ông Hiếu nhận bằng Thạc sĩ Luật tại Trường ĐH Maastricht, Hà Lan năm 2004. Là một nhà phân tích và hoạch định chính sách, Ông đã đóng góp cho sự thành công trong dự án về cải cách thủ tục hành chính của Chính phủ với vai trò là Trưởng nhóm đánh giá chính sách đầu tư.<br></br>
                        Ông đã cộng tác và làm việc với Nhóm Ngân hàng Thế giới trên các lĩnh vực Quản trị Công ty, cải cách đổi mới hành chính trong nhiều năm qua và là giảng viên/diễn giả nổi tiếng về Quản trị Công ty. <br></br>
                        Ông Hiếu là người soạn thảo chính của Luật Doanh nghiệp 2014 được biết đến là luật cải cách lớn nhất về tự do kinh doanh. Ông có nhiều kinh nghiệm về các công cụ hoạch định chính sách như đánh giá/dự báo tác động của pháp luật (RIA) và đo lường chi phí tiêu chuẩn (SCM).'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Linh Giang',
                        'position' => 'Thành viên HĐQT<br>Tổng Công ty Dầu Việt Nam (PVOIL)',
                        'image' => 'lecturer-3.png',
                        'position_more' => array(
                            'Thành viên HĐQT, Tổng Công ty Dầu Việt Nam (PVOIL)',
                            'Thành viên HĐQT, Trưởng Tiểu Ban Kiểm toán & Quản trị rủi ro Tổng công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                            'Chủ tịch HĐQT Công ty Cổ phần Vận tải Nhật Việt',
                            'Giảng viên (thỉnh giảng) Khoa Tài chính, Đại học Kinh tế TP. Hồ Chí Minh'
                        ),
                        'biography' => 'Bà Giang có gần 25 năm công tác trong ngành Tài chính – Kế toán – Ngân hàng tại các Global Bank và Tập đoàn kinh tế Nhà nước với hơn 15 năm đảm nhận chức danh lãnh đạo quản lý chuyên sâu về Quản trị Công ty qua các chức danh Trưởng Ban kiểm soát, Trưởng Ban Kiểm toán nội bộ, CFO, Thành viên/Chủ tịch HĐQT, Trưởng Tiểu Ban KT&QTRR, Phó Chủ tịch UB ESG tại các Công ty niêm yết lớn trên sàn chứng khoán như Gas Shipping (GSP), PVTrans(PVT), PVOil (OIL) Bà Giang có bằng MBA, Đại học Impac Hoa Kỳ (Honour Certificate) & Bằng Cử nhân Kế toán Kiểm toán, Đại học Kinh tế TP HCM. Bà Giang hiện cũng là giảng viên môn Quản trị Công ty tại trường Đại học Kinh tế Thành phố Hồ Chí Minh, bà đã có chứng nhận DCP và hiện là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Lê Quang Phúc',
                        'position' => 'Chủ tịch HĐQT<br>Công ty Cổ phần Tư vấn Quản lý BDSC',
                        'image' => 'lecturer-4.png',
                        'position_more' => array(
                            'Chủ tịch HĐQT, Công ty Cổ phần Tư vấn Quản lý BDSC',
                            'Thành viên HĐQT độc lập, Chủ tịch UBKT, Công ty Cổ phần Vàng bạc đá quý Phú Nhuận (PNJ)',
                            'Thành viên HĐQT độc lập, Chủ tịch UBNS&LT, Công ty Cổ phần Searefico (SRF)',
                            'Thành viên HĐQT không điều hành, Công ty Cổ phần Phát triển bất động sản Phát Đạt (PDR)',
                            'Thành viên độc lập HĐQT kiêm Chủ tịch Uỷ ban ESG/Chủ tịch UBKT Công ty Cổ phần Thành Thành Công - Biên Hoà (SBT)'
                        ),
                        'biography' => 'Ông Phúc có hơn 25 năm kinh nghiệm làm việc ở các vị trí quản lý cấp cao tại các doanh nghiệp quy mô vừa và lớn ở Việt Nam; đặc biệt ở vị trí cố vấn cho HĐQT/Chủ tịch HĐQT/CEO của các công ty. Ông cũng có hơn 16 năm kinh nghiệm thực hiện dịch vụ tư vấn quản lý và giữ vị trí thành viên HĐQT độc lập/không điều hành của các công ty đại chúng/niêm yết tại việt Nam.<br><br>Với tư cách là Chủ tịch Công ty Cổ phần Tư vấn Quản lý BDSC, Ông Phúc đã tham gia vào nhiều dự án tư vấn quản lý cho các doanh nghiệp hàng đầu Việt Nam như Bến Thành Group, Trung Nguyên Group, Cienco 5, Acecook, Merap Group…. Ông cũng đã dẫn dắt đội ngũ chuyên gia tư vấn dày dặn kinh nghiệm đưa ra các giải pháp về quản trị công ty, chiến lược và vận hành cho nhiều công ty trong các ngành công nghiệp khác nhau tại Việt Nam. BDSC đã giúp cải thiện đáng kể hiệu suất, hiệu quả và tính bền vững trong hoạt động kinh doanh của khách hàng.<br><br>Ngoài vai trò lãnh đạo tại BDSC, ông Phúc hiện đang giữ vai trò Thành viên HĐQT độc lập/không điều hành trong hội đồng quản trị của các công ty niêm yết như PNJ, SRF, PDR và SBT. Ông đã vận dụng kiến thức sâu rộng của mình về quản trị công ty, kiểm toán nội bộ và quản lý doanh nghiệp để góp phần xây dựng văn hóa tuân thủ, minh bạch và trách nhiệm giải trình, đảm bảo rằng các doanh nghiệp này không chỉ phát triển mạnh mẽ mà còn đóng góp tích cực cho cộng đồng. Ông Phúc cam kết thúc đẩy sự phát triển và tiến bộ của cộng đồng doanh nghiệp Việt Nam thông qua những nỗ lực về chuyên môn và đạo đức nghề nghiệp của mình.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Nguyễn Anh Tuấn',
                        'position' => 'Thành viên<br>Ban Cố vấn Chuyên môn, VIOD​<br>Chủ tịch HĐQT<br>Tổng CTCP Tái Bảo hiểm Quốc gia Việt Nam (VINARE)​',
                        'image' => 'lecturer-5.png',
                        'position_more' => array(
                            'Chủ tịch, Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD​',
                            'Thành viên, Ban Cố vấn Chuyên môn, VIOD​',
                            'Chủ tịch HĐQT, Tổng Công ty Cổ phần Tái Bảo hiểm Quốc gia Việt Nam (VINARE)​',
                            'Doanh nhân trẻ Việt Nam tiêu biểu 2022​'
                        ),
                        'biography' => 'Ông Tuấn có 20 năm kinh nghiệm trên vai trò là Thư ký HĐQT rồi Trưởng Ban Quản lý Vốn đầu tư, Tổng Công ty Đầu tư và Kinh doanh Vốn nhà nước.<br><br>Đặc biệt, Ông Tuấn đã có thời gian đảm nhiệm các vị trí quan trọng trong Hội đồng Quản trị bao gồm Chủ tịch điều hành, không điều hành, Phó Chủ tịch không điều hành và thành viên Hội đồng Quản trị không điều hành ở nhiều tổ chức như Tổng Công ty Cổ phần Tái Bảo hiểm Quốc gia Việt Nam, Cơ quan quốc gia về xe cơ giới quá cảnh ASEAN của Việt Nam, Tổng Công ty Thủy sản Việt Nam, Công ty TNHH Bảo hiểm Samsung Vina, Hiệp hội Bảo hiểm Việt Nam, Công ty Cổ phần nhựa Thiếu niên Tiền Phong, Công ty Cổ phần Traphaco.<br><br>Ông Tuấn tốt nghiệp cử nhân Đại học Ngoại thương Hà Nội và có bằng Thạc Sỹ Luật Kinh doanh Quốc tế của Pháp. Với mong muốn góp phần vào nâng cao nhận thức, hiệu quả của quản trị công ty đối với các doanh nghiệp Việt Nam, Ông đã tham gia nhiều hoạt động do VIOD tổ chức trên cương vị là diễn giả, tham gia các phiên thảo luận, là Chủ tịch, Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD​, Phó Chủ tịch Câu lạc bộ các Chủ tịch HĐQT (Chair Club), thành viên Ban Cố vấn Chuyên môn VIOD và là Thành viên Cao cấp, Chương trình Thành viên Cá nhân (IMP).'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Minh Hiền, FCCA',
                        'position' => 'Giám đốc Chuyên môn<br>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        'image' => 'lecturer-6.png',
                        'position_more' => array(
                            'Giám đốc Chuyên môn, Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)'
                        ),
                        'biography' => 'Bà Hiền có hơn 20 năm công tác tại Deloitte Việt Nam, trong đó có trên 13 năm kinh nghiệm cung cấp dịch vụ kiểm toán và đảm bảo, hơn 10 năm phụ trách quản lý và thực hiện hoạt động đào tạo của toàn công ty và cung cấp dịch vụ đào tạo chuyên môn về kế toán và kiểm toán cho các khách hàng là các Tập đoàn đa quốc gia, Tập đoàn trong nước, các DN niêm yết, DN tư nhân hoạt động trong các lĩnh vực sản xuất, khách sạn, kinh doanh bất động sản, dịch vụ…<br><br>Bà có nhiều năm cung cấp dịch vụ tư vấn và đào tạo về Quản trị Công ty (QTCT) cho các doanh nghiệp niêm yết, công ty cổ phần đại chúng, công ty cổ phần chưa niêm yết, công ty cổ phần có vốn nhà nước,…liên quan đến các lĩnh vực như: đánh giá hiệu quả hoạt động QTCT của doanh nghiệp theo quy định pháp luật, VN CG Code, ASEAN CG Scorecard…, tư vấn về cấu trúc Hội đồng Quản trị và các Ủy ban chuyên trách, tư vấn soát xét, hoàn thiện, xây dựng mới quy chế, chính sách liên quan đến hoạt động QTCT để đáp ứng yêu cầu pháp luật, thông lệ tốt và đặc điểm của doanh nghiệp. Bà là chuyên gia trong nước (ký hợp đồng dịch vụ) của Ngân hàng Phát triển Châu Á (ADB) trong việc đánh giá hoạt động QTCT cho các khách hàng do ADB chỉ định; thành viên tham gia đánh giá về QTCT và phát triển bền vững: ACGS, VNSI, VLCA, CSI 100, CSA…; giảng viên cho nhiều khóa đào tạo về QTCT; hỗ trợ xây dựng bản tin, viết bài chuyên sâu về lĩnh vực này; và thành viên chính của Việt Nam để phối hợp triển khai các chương trình Deloitte Global Boardroom Program (dự án nghiên cứu chuyên sâu, dự án đánh giá chuyên đề, chương trình hội thảo dành cho các thành viên HĐQT toàn cầu…).<br><br>Bên cạnh đó, Bà cũng có một số kinh nghiệm trong lĩnh vực nghiên cứu và tư vấn về ESG bao gồm các dự án nghiên cứu chuyên sâu tác động môi trường của chất thải bao bì rắn, sản xuất lúa phát thải thấp, nghiên cứu tiềm năng phát triển thương mại của Green Hydrogen, Kiểm kê khí nhà kính và dịch vụ đảm bảo, đánh giá thực hành PTBV đáp ứng mục tiêu của Liên Hợp Quốc (SDG) tư vấn soát xét và hướng dẫn xây dựng báo cáo Phát triển bền vững theo quy định Việt Nam và khung chuẩn mực báo cáo Quốc tế…'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phạm Việt Anh',
                        'position' => 'Chủ tịch HĐQT<br>Tổng Công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                        'image' => 'lecturer-7.png',
                        'position_more' => array(
                            'Chủ tịch HĐQT Tổng Công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                            'Nguyên Phó Chủ tịch HĐQT Tổng công ty Cổ phần Dịch vụ Kỹ thuật Dầu khí'
                        ),
                        'biography' => 'Ông Việt Anh có hơn 30 năm kinh nghiệm làm trong ngành công nghiệp dầu khí tại PetroVietnam và các công ty dầu khí hàng đầu quốc tế như BP, ExxonMobil. Từ năm 2007 đến nay ông đã đảm nhận các vị trí quản lý cấp cao như Tổng Giám đốc, Phó Chủ tịch HĐQT, Chủ tịch HĐQT của các Tổng công ty niêm yết lớn trên sàn chứng khoán như PVGAS (GAS), PTSC (PVS) và PVTrans (PVT).<br><br>Ông là một trong những nhà lãnh đạo tiên phong và dày dạn kinh nghiệm thực tiễn trong thực hành quản trị công ty, quản trị chiến lược và các mô hình tái cấu trúc tại các công ty đại chúng. Ông Việt Anh đã nhiều lần nhận các giải thưởng cao quý về lãnh đạo quản lý của Chính phủ cũng như các giải thưởng uy tín quốc tế như Doanh nhân Xuất sắc Châu Á các năm 2018, 2022 do APEA trao tặng (Master Entrepreneur Award).<br><br>Ông là Kỹ sư cơ khí và có bằng MBA, từng tham dự nhiều khóa học quản trị doanh nghiệp trong và ngoài nước. Ông đã có chứng nhận DCP và hiện là Thành viên Cao cấp, Chương trình Thành viên Cá nhân (IMP) của Viện Thành Viên HĐQT Việt Nam (VIOD).'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Đinh Toàn Trung',
                        'position' => 'Thành viên<br>Ban Cố vấn Chuyên môn VIOD​<br>Thành viên<br>Trung tâm Quản trị Công ty Quốc tế/Thụy Sĩ',
                        'image' => 'lecturer-8.png',
                        'position_more' => array(
                            'Thành viên Ban Cố vấn Chuyên môn VIOD​',
                            'Thành viên Trung tâm Quản trị Công ty Quốc tế/Thụy Sĩ'
                        ),
                        'biography' => 'Tiến sĩ Đinh Toàn Trung có nhiều kinh nghiệm làm việc tại các công ty đa quốc gia, như UBS AG, Credit Suisse, Trisa AG, và Holcim Ltd, và cũng là một doanh nhân khởi nghiệp, đồng sáng lập một công ty bao bì hàng đầu Việt Nam, Giám đốc Điều hành của PAT Industry Park. Ông cũng là cố vấn chiến lược cho nhiều công ty ở Việt Nam, như Công ty Xi măng Holcim Việt Nam, Ngân hàng Việt Á, Khu Công nghiệp PAT, Bao bì Thiên Ý.<br><br>Ông cũng đã hoạt động nhiều năm trong lĩnh vực giáo dục, là Giáo sư chính môn Chiến lược & Quản lý Quốc tế tại Trường đại học Khoa học Ứng dụng và Nghệ thuật Tây Bắc Thụy Sĩ. Ông cũng là giảng viên môn Quản lý Sự Thay đổi trong một chương trình "Đào tạo Giảng viên" cho lãnh đạo cấp cao của chính phủ ở Bắc Kinh và Sáng lập viên của một Chương trình Cao học Thụy Sĩ chuyên ngành Ngân hàng - Tài chính ở TP. Hồ Chí Minh.<br><br>Hiện tại, Ông là Giám đốc Khoa học cho trường Solvay Brussels School ở Việt Nam và giảng dạy bộ môn Chiến lược/Quản trị Công ty. Trong nghiên cứu, Tiến sĩ Đinh Toàn Trung là Cố vấn Danh mục của Trung tâm Quốc tế về Quản trị Công ty tại Trường Đại học St. Gallen và là tác giả cũng như dịch giả trong các bộ môn chuyên về chiến lược, Quản trị Công ty. Ông có bằng Tiến sĩ Kinh tế học của Trường Đại học St. Gallen, và bằng Thạc sĩ QTKD của Trường Đại học Fribourg, Thụy Sĩ.'
                    )
                );
                ?>
                
                <?php 
                $member_count = count($team_members);
                $layout_class = 'layout-7'; // Mặc định hiển thị 7 giảng viên
                ?>
                <div class="team-grid <?php echo $layout_class; ?>">
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

