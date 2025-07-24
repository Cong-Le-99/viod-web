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
            <ol class="breadcrumb dark">
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
            <?php
            // Data cho organized content với SVG icons thực tế
            $organized_content = array(
                array(
                    'icon' => 'calendar-clock.svg',
                    'title' => 'THỜI LƯỢNG',
                    'content' => '4 buổi học tương tác liên tục trong 2 ngày tham dự',
                    'color' => 'dark'
                ),
                array(
                    'icon' => 'user-tie.svg',
                    'title' => 'NGƯỜI HƯỚNG DẪN',
                    'content' => 'Chuyên gia về QTCT, thành viên HĐQT có nhiều kinh nghiệm về QTCT tại Việt Nam',
                    'color' => 'dark'
                ),
                array(
                    'icon' => 'activity.svg',
                    'title' => 'HOẠT ĐỘNG',
                    'content' => 'Tình huống nghiên cứu, thảo luận nhóm, phiên thảo luận và các hoạt động khác',
                    'color' => 'dark'
                ),
                array(
                    'icon' => 'network.svg',
                    'title' => 'KẾT NỐI',
                    'content' => 'Trong và sau chương trình qua các hoạt động "Member Networking" và các sự kiện cho thành viên VIOD',
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
                        'gender' => 'male',
                        'name' => 'Phan Đức Hiếu',
                        'position' => 'Ủy viên Thường trực<br>Ủy ban Kinh tế của Quốc hội khóa XV<br>Cố vấn Cao cấp HĐQT VIOD',
                        'image' => 'lecturer-2.png',
                        'position_more' => array(
                            'Ủy viên Thường trực Ủy ban Kinh tế của Quốc hội khóa XV',
                            'Chủ tịch Ban Cố vấn Cấp cao VIOD',
                        ),
                        'biography' => 'Ông Hiếu nhận bằng Thạc sĩ Luật tại Trường ĐH Maastricht, Hà Lan năm 2004. Là một nhà phân tích và hoạch định chính sách, Ông đã đóng góp cho sự thành công trong dự án về cải cách thủ tục hành chính của Chính phủ với vai trò là Trưởng nhóm đánh giá chính sách đầu tư.<br><br>Ông đã cộng tác và làm việc với Nhóm Ngân hàng Thế giới trên các lĩnh vực Quản trị Công ty, cải cách đổi mới hành chính trong nhiều năm qua và là giảng viên/diễn giả nổi tiếng về Quản trị Công ty.<br><br>Ông Hiếu là người soạn thảo chính của Luật Doanh nghiệp 2014 được biết đến là luật cải cách lớn nhất về tự do kinh doanh. Ông có nhiều kinh nghiệm về các công cụ hoạch định chính sách như đánh giá/dự báo tác động của pháp luật (RIA) và đo lường chi phí tiêu chuẩn (SCM).'
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
                        'gender' => 'male',
                        'name' => 'Nguyễn Thế Mạnh',
                        'position' => 'Giám đốc Tư vấn<br>Deloitte Đông Nam Á',
                        'image' => 'lecturer-4.png',
                        'position_more' => array(
                            'Giám đốc Tư vấn, Deloitte Đông Nam Á'
                        ),
                        'biography' => 'Ông Mạnh là một chuyên gia tư vấn quản trị và tái cấu trúc doanh nghiệp với 14 năm kinh nghiệm trong các lĩnh vực: chiến lược & vận hành, quản trị công ty, quản trị rủi ro, kiểm soát nội bộ, kiểm toán nội bộ, quy trình kinh doanh, mô hình hoạt động, hệ thống phát hiện gian lận sớm, hệ thống quản lý tuân thủ và phân tích dữ liệu. Ông đã tích lũy rất nhiều kinh nghiệm thực tiễn trong việc thiết kế và triển khai các nội dung trên cho khách hàng từ nhiều ngành nghề khác nhau như: sản xuất, FMCG, dầu khí, viễn thông, thương mại, các công ty bảo hiểm và các định chế tài chính.<br><br>Ông Mạnh hiện đang giữ chức vụ Giám đốc Tư vấn tại Deloitte Đông Nam Á và đồng thời là giảng viên cho VIOD. Ông có nhiều kinh nghiệm thực tiễn trong việc phục vụ các doanh nghiệp lớn của khối nhà nước, tư nhân và doanh nghiệp gia đình tại Việt Nam.<br><br>Ông Mạnh đã có chứng nhận DCP của Viện Thành Viên HĐQT Việt Nam (VIOD) cùng nhiều chứng chỉ khác như chứng chỉ PSM I – Professional Scrum Master (Agile), chứng chỉ Quản lý rủi ro Tài chính – FRM.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phạm Hải Âu',
                        'position' => 'Giám đốc Quản trị Rủi ro<br>Ngân hàng Quốc Dân (NCB)',
                        'image' => 'lecturer-8.png',
                        'position_more' => array(
                            'Giám đốc Quản trị Rủi ro – Ngân hàng Quốc Dân (NCB)'
                        ),
                        'biography' => 'Ông Phạm Hải Âu là chuyên gia giàu kinh nghiệm trong lĩnh vực Kiểm toán, Kiểm soát Nội bộ và Quản trị Công ty, với hơn 20 năm công tác tại các tổ chức tài chính hàng đầu như PwC, Deutsche Bank, VietinBank, LPBank và VietCredit. Ông từng đảm nhiệm nhiều vị trí cấp cao như Trưởng Ban Kiểm soát, Thành viên HĐQT, Phó Tổng Giám đốc phụ trách Chiến lược và Rủi ro tại các ngân hàng và công ty tài Chính.<br><br>Trong suốt quá trình công tác, ông đã tham gia trực tiếp vào việc thiết kế, triển khai và giám sát hoạt động kiểm soát nội bộ, quản trị rủi ro và cơ chế vận hành của Ủy ban Kiểm toán. Với kiến thức chuyên môn sâu sắc cùng kinh nghiệm thực tiễn phong phú, ông là một trong những chuyên gia có nhiều đóng góp cho việc chuẩn hóa và nâng cao hiệu quả hoạt động UBKT tại Việt Nam, phù hợp với các chuẩn mực quốc tế về Quản trị Công ty.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Lưu Tuyền',
                        'position' => 'Chuyên gia Ủy Ban kiểm Toán<br>Tập đoàn Nam Long<br>Thành viên Hội đồng tư vấn phát triển thực hành UBKT (VIOD)',
                        'image' => 'lecturer-9.png',
                        'position_more' => array(
                            'Chuyên gia Ủy Ban kiểm Toán Tập đoàn Nam Long',
                            'Thành viên Hội đồng tư vấn phát triển thực hành UBKT (VIOD)'
                        ),
                        'biography' => 'TS. Nguyễn Lưu Tuyền đã có 20 năm kinh nghiệm làm việc trong lĩnh vực kiểm soát nội bộ, quản trị rủi ro, và kiểm toán khi đảm nhiệm các vị trí kiểm toán viên độc lập tại công ty kiểm toán KPMG, Trưởng kiểm soát nội bộ tại Ngân Hàng Credit Agricole CIB, Trưởng Ban Kiểm Soát, thành viên Ủy ban kiểm toán, và hiện nay là Chuyên gia Ủy ban kiểm toán của tập đoàn đầu tư và bất động sản Nam Long.<br><br>Bà Tuyền cũng có nhiều năm kinh nghiệm hướng dẫn và đào tạo chuyên sâu về hoạt động của UBKT và các chương trình cập nhật kiến thức dành cho kiểm toán viên. Cô đã trực tiếp tham gia nhiều hội nghị quốc tế về kiểm toán tại New York, Sydney, Dubai, và Anaheim – South California US. Bằng kinh nghiệm thực tiễn và kiến thức chuyên môn, cô đã có những đóng góp tích cực vào sự phát triển của nghề nghiệp kiểm toán và hoạt động của UBKT tại Việt Nam.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Đồng Thị Thu Hương',
                        'position' => 'Chuyên gia độc lập<br>Thành viên Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD',
                        'image' => 'lecturer-12.png',
                        'position_more' => array(
                            'Chuyên gia độc lập',
                            'Thành viên Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD'
                        ),
                        'biography' => 'Bà Đồng Thu Hương có hơn 15 năm kinh nghiệm trong lĩnh vực Quản trị Rủi ro, Kiểm toán Nội bộ và tư vấn Quản trị Công ty, đặc biệt trong ngành dịch vụ tài chính. Tại Deloitte Việt Nam, bà đảm nhiệm vai trò Giám đốc/Quản lý cấp cao, phụ trách tư vấn các dự án liên quan đến quản trị rủi ro, kiểm soát nội bộ, cấu trúc tổ chức rủi ro, tuân thủ Basel II, tỷ lệ an toàn vốn, và hệ thống đánh giá nội bộ về đầy đủ vốn (ICAAP) cho các ngân hàng thương mại trong nước và tổ chức tài chính quốc tế.<br><br>Bà từng là quản lý cấp trung tại EntroFine Vietnam và chuyên viên tư vấn cao cấp tại KPMG Việt Nam, tham gia nhiều dự án lớn về đánh giá tuân thủ, quản trị doanh nghiệp, phòng chống tội phạm tài chính và tái cấu trúc tổ chức. Khách hàng của bà bao gồm các ngân hàng và tổ chức tài chính lớn như BIDV, Vietcombank, ACB, Sacombank, SMBC, CTBC, JP Morgan Vietnam, cũng như các đơn vị tài trợ phát triển như CIDA, Cowater, BRASS.<br><br>Bà Hương Đông tốt nghiệp Thạc sĩ Tài chính – Ngân hàng tại Đại học Leeds (Vương quốc Anh), Cử nhân Kinh tế Quốc tế tại Đại học Kinh tế Quốc dân Hà Nội, đồng thời sở hữu các chứng chỉ quốc tế chuyên sâu như CIMA (2015) và Financial Risk Manager – FRM (GARP, 2018). Với kiến thức chuyên môn vững vàng và kinh nghiệm triển khai thực tiễn đa dạng, bà có nhiều đóng góp trong việc xây dựng hệ thống kiểm soát rủi ro, kiểm toán nội bộ và chuẩn hóa cơ chế tuân thủ trong các tổ chức tài chính tại Việt Nam.'
                    ),

                    array(
                        'gender' => 'male',
                        'name' => 'Phan Đức Hiếu 1',
                        'position' => 'Ủy viên Thường trực<br>Ủy ban Kinh tế của Quốc hội khóa XV<br>Cố vấn Cao cấp HĐQT VIOD',
                        'image' => 'lecturer-2.png',
                        'position_more' => array(
                            'Ủy viên Thường trực Ủy ban Kinh tế của Quốc hội khóa XV',
                            'Chủ tịch Ban Cố vấn Cấp cao VIOD',
                        ),
                        'biography' => 'Ông Hiếu nhận bằng Thạc sĩ Luật tại Trường ĐH Maastricht, Hà Lan năm 2004. Là một nhà phân tích và hoạch định chính sách, Ông đã đóng góp cho sự thành công trong dự án về cải cách thủ tục hành chính của Chính phủ với vai trò là Trưởng nhóm đánh giá chính sách đầu tư.<br><br>Ông đã cộng tác và làm việc với Nhóm Ngân hàng Thế giới trên các lĩnh vực Quản trị Công ty, cải cách đổi mới hành chính trong nhiều năm qua và là giảng viên/diễn giả nổi tiếng về Quản trị Công ty.<br><br>Ông Hiếu là người soạn thảo chính của Luật Doanh nghiệp 2014 được biết đến là luật cải cách lớn nhất về tự do kinh doanh. Ông có nhiều kinh nghiệm về các công cụ hoạch định chính sách như đánh giá/dự báo tác động của pháp luật (RIA) và đo lường chi phí tiêu chuẩn (SCM).'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Linh Giang 1',
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
                        'name' => 'Nguyễn Anh Tuấn 1',
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
                        'gender' => 'male',
                        'name' => 'Nguyễn Thế Mạnh 1',
                        'position' => 'Giám đốc Tư vấn<br>Deloitte Đông Nam Á',
                        'image' => 'lecturer-4.png',
                        'position_more' => array(
                            'Giám đốc Tư vấn, Deloitte Đông Nam Á'
                        ),
                        'biography' => 'Ông Mạnh là một chuyên gia tư vấn quản trị và tái cấu trúc doanh nghiệp với 14 năm kinh nghiệm trong các lĩnh vực: chiến lược & vận hành, quản trị công ty, quản trị rủi ro, kiểm soát nội bộ, kiểm toán nội bộ, quy trình kinh doanh, mô hình hoạt động, hệ thống phát hiện gian lận sớm, hệ thống quản lý tuân thủ và phân tích dữ liệu. Ông đã tích lũy rất nhiều kinh nghiệm thực tiễn trong việc thiết kế và triển khai các nội dung trên cho khách hàng từ nhiều ngành nghề khác nhau như: sản xuất, FMCG, dầu khí, viễn thông, thương mại, các công ty bảo hiểm và các định chế tài chính.<br><br>Ông Mạnh hiện đang giữ chức vụ Giám đốc Tư vấn tại Deloitte Đông Nam Á và đồng thời là giảng viên cho VIOD. Ông có nhiều kinh nghiệm thực tiễn trong việc phục vụ các doanh nghiệp lớn của khối nhà nước, tư nhân và doanh nghiệp gia đình tại Việt Nam.<br><br>Ông Mạnh đã có chứng nhận DCP của Viện Thành Viên HĐQT Việt Nam (VIOD) cùng nhiều chứng chỉ khác như chứng chỉ PSM I – Professional Scrum Master (Agile), chứng chỉ Quản lý rủi ro Tài chính – FRM.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Phạm Hải Âu 1',
                        'position' => 'Giám đốc Quản trị Rủi ro<br>Ngân hàng Quốc Dân (NCB)',
                        'image' => 'lecturer-8.png',
                        'position_more' => array(
                            'Giám đốc Quản trị Rủi ro – Ngân hàng Quốc Dân (NCB)'
                        ),
                        'biography' => 'Ông Phạm Hải Âu là chuyên gia giàu kinh nghiệm trong lĩnh vực Kiểm toán, Kiểm soát Nội bộ và Quản trị Công ty, với hơn 20 năm công tác tại các tổ chức tài chính hàng đầu như PwC, Deutsche Bank, VietinBank, LPBank và VietCredit. Ông từng đảm nhiệm nhiều vị trí cấp cao như Trưởng Ban Kiểm soát, Thành viên HĐQT, Phó Tổng Giám đốc phụ trách Chiến lược và Rủi ro tại các ngân hàng và công ty tài Chính.<br><br>Trong suốt quá trình công tác, ông đã tham gia trực tiếp vào việc thiết kế, triển khai và giám sát hoạt động kiểm soát nội bộ, quản trị rủi ro và cơ chế vận hành của Ủy ban Kiểm toán. Với kiến thức chuyên môn sâu sắc cùng kinh nghiệm thực tiễn phong phú, ông là một trong những chuyên gia có nhiều đóng góp cho việc chuẩn hóa và nâng cao hiệu quả hoạt động UBKT tại Việt Nam, phù hợp với các chuẩn mực quốc tế về Quản trị Công ty.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Lưu Tuyền 1',
                        'position' => 'Chuyên gia Ủy Ban kiểm Toán<br>Tập đoàn Nam Long<br>Thành viên Hội đồng tư vấn phát triển thực hành UBKT (VIOD)',
                        'image' => 'lecturer-9.png',
                        'position_more' => array(
                            'Chuyên gia Ủy Ban kiểm Toán Tập đoàn Nam Long',
                            'Thành viên Hội đồng tư vấn phát triển thực hành UBKT (VIOD)'
                        ),
                        'biography' => 'TS. Nguyễn Lưu Tuyền đã có 20 năm kinh nghiệm làm việc trong lĩnh vực kiểm soát nội bộ, quản trị rủi ro, và kiểm toán khi đảm nhiệm các vị trí kiểm toán viên độc lập tại công ty kiểm toán KPMG, Trưởng kiểm soát nội bộ tại Ngân Hàng Credit Agricole CIB, Trưởng Ban Kiểm Soát, thành viên Ủy ban kiểm toán, và hiện nay là Chuyên gia Ủy ban kiểm toán của tập đoàn đầu tư và bất động sản Nam Long.<br><br>Bà Tuyền cũng có nhiều năm kinh nghiệm hướng dẫn và đào tạo chuyên sâu về hoạt động của UBKT và các chương trình cập nhật kiến thức dành cho kiểm toán viên. Cô đã trực tiếp tham gia nhiều hội nghị quốc tế về kiểm toán tại New York, Sydney, Dubai, và Anaheim – South California US. Bằng kinh nghiệm thực tiễn và kiến thức chuyên môn, cô đã có những đóng góp tích cực vào sự phát triển của nghề nghiệp kiểm toán và hoạt động của UBKT tại Việt Nam.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Đồng Thị Thu Hương 1',
                        'position' => 'Chuyên gia độc lập<br>Thành viên Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD',
                        'image' => 'lecturer-12.png',
                        'position_more' => array(
                            'Chuyên gia độc lập',
                            'Thành viên Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD'
                        ),
                        'biography' => 'Bà Đồng Thu Hương có hơn 15 năm kinh nghiệm trong lĩnh vực Quản trị Rủi ro, Kiểm toán Nội bộ và tư vấn Quản trị Công ty, đặc biệt trong ngành dịch vụ tài chính. Tại Deloitte Việt Nam, bà đảm nhiệm vai trò Giám đốc/Quản lý cấp cao, phụ trách tư vấn các dự án liên quan đến quản trị rủi ro, kiểm soát nội bộ, cấu trúc tổ chức rủi ro, tuân thủ Basel II, tỷ lệ an toàn vốn, và hệ thống đánh giá nội bộ về đầy đủ vốn (ICAAP) cho các ngân hàng thương mại trong nước và tổ chức tài chính quốc tế.<br><br>Bà từng là quản lý cấp trung tại EntroFine Vietnam và chuyên viên tư vấn cao cấp tại KPMG Việt Nam, tham gia nhiều dự án lớn về đánh giá tuân thủ, quản trị doanh nghiệp, phòng chống tội phạm tài chính và tái cấu trúc tổ chức. Khách hàng của bà bao gồm các ngân hàng và tổ chức tài chính lớn như BIDV, Vietcombank, ACB, Sacombank, SMBC, CTBC, JP Morgan Vietnam, cũng như các đơn vị tài trợ phát triển như CIDA, Cowater, BRASS.<br><br>Bà Hương Đông tốt nghiệp Thạc sĩ Tài chính – Ngân hàng tại Đại học Leeds (Vương quốc Anh), Cử nhân Kinh tế Quốc tế tại Đại học Kinh tế Quốc dân Hà Nội, đồng thời sở hữu các chứng chỉ quốc tế chuyên sâu như CIMA (2015) và Financial Risk Manager – FRM (GARP, 2018). Với kiến thức chuyên môn vững vàng và kinh nghiệm triển khai thực tiễn đa dạng, bà có nhiều đóng góp trong việc xây dựng hệ thống kiểm soát rủi ro, kiểm toán nội bộ và chuẩn hóa cơ chế tuân thủ trong các tổ chức tài chính tại Việt Nam.'
                    ),
                );
                ?>
                
                <?php 
                $member_count = count($team_members);
                $layout_class = 'layout-10'; // Layout cho 10+ giảng viên
                $use_note_more = true; // Sử dụng team-member-note-more để hiển thị tất cả
                $container_class = $use_note_more ? 'team-members team-member-note-more' : 'team-members';
                ?>
                <div class="<?php echo $container_class; ?>">
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

