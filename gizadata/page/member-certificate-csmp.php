<?php
/*
Template Name: Chương tình Chuyên sâu dành cho Thư ký Quản trị Công ty (CSMP)
*/
get_header();
?>
<div class="member-certificate blue">
    <div class="banner banner-csmp">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <nav class="breadcrumb-nav d-none d-md-block">
            <ol class="breadcrumb dark">
                <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link('training_program'); ?>">Chương trình đào tạo</a></li>
                <li class="breadcrumb-item active">CORPORATE SECRETARY MASTER PROGRAM</li>
            </ol>
        </nav>
    </div>

    <!-- Content Section -->
    <section class="content-section content-section-csmp px-custom px-md-0">
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
                                <p>Thư ký Quản trị Công ty (QTCT) là một chức năng quan trọng của Hội đồng Quản trị (HĐQT), có vị trí then chốt trong chiến lược và hành động hướng tới QTCT hiệu quả và bền vững. Thư ký QTCT có ba nhiệm vụ chính: trợ giúp HĐQT triển khai và cải tiến các chương trình QTCT cho doanh nghiệp, kết nối các thành viên HĐQT và HĐQT với các nhà đầu tư và các bên hữu quan, kết nối HĐQT với Ban Điều hành trong mục tiêu triển khai QTCT hiệu quả và bền vững. </p>
                                <p>Chương trình Chuyên sâu về Thư ký Quản trị Công ty (CSMP) là một trong các chương trình cốt lõi nắm trong chuỗi Chương trình đào tạo về Quản trị Tiên tiến (GEP) do Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD) tổ chức nhằm nâng cao các hiểu biết về chức năng, nhiệm vụ, và vai trò trách nhiệm của Thư ký QTCT trong hệ sinh thái QTCT của doanh nghiệp.</p>
                            </div>
                            <a href="#" class="read-more-btn" id="readMoreBtn">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section program value -->
    <section class="program-value program-value-csmp px-custom px-md-0">
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
                        'Cơ hội tiếp cận kiền thức chuyên sâu và kinh nghiệm lâu năm của những người hướng dẫn và diễn giả quốc tế, khu vực và Việt Nam.',
                        'Cơ hội chia sẻ và học hỏi từ các câu chuyện trải nghiệm thực tế.'
                    ),
                    'color' => 'blue',
                    'icon' => 'check-circle-blue.svg'
                ),
                array(
                    'title' => 'Linh hoạt',
                    'sub_title' => 'Chương trình giảng dạy & Tình huống nghiên cứu',
                    'content' => array(
                        'Cập nhật các thông lệ tốt nhất của Việt Nam và Quốc tế về QTCT & ESG.',
                        'Chương trình, nội dung và tình huống bám sát diễn biến thị trường.',
                    ),
                    'color' => 'blue',
                    'icon' => 'check-circle-blue.svg'
                ),
                array(
                    'title' => 'Ưu việt',
                    'sub_title' => 'Mạng lưới người tham dự',
                    'content' => array(
                        'Trở thành một phần của Cộng đồng người làm nghê Thư ký QTCT chuyên nghiệp đến từ nhiều ngành nghê, lĩnh vực khác nhau tại Việt Nam.',
                        'Cơ hội kết nối, học hỏi, cập nhật các thông tin, tư vấn và phát triển quan hệ tốt, giúp tăng cường văn hóá quản trị tốt.',
                    ),
                    'color' => 'blue',
                    'icon' => 'check-circle-blue.svg'
                ),
                array(
                    'title' => 'Thịnh vượng',
                    'sub_title' => 'Phát triển nghề nghiệp',
                    'content' => array(
                        'Tham gia lộ trình phát triển nghề nghiệp bài bản của VIOD.',
                        'Được công nhận 15 giờ CPD *Phát triển chuyên môn của VIOD.',
                    ),
                    'color' => 'blue',
                    'icon' => 'check-circle-blue.svg'
                )
            );
            ?>

            <div class="program-values-content">
                <div class="desktop-layout-program-value relative">
                    <div class="left-column">
                        <?php for ($i = 0; $i < 2; $i++): ?>
                            <div class="value-item <?php echo $program_values[$i]['color']; ?>">
                                <div class="value-title <?php echo $program_values[$i]['color']; ?>">
                                    <h3><?php echo $program_values[$i]['title']; ?></h3>
                                    <p class="sub-title"><?php echo $program_values[$i]['sub_title']; ?></p>
                                </div>
                                <div class="value-content">
                                    <?php foreach ($program_values[$i]['content'] as $content_item): ?>
                                        <div class="content-item content-item-csmp">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/value-csmp.png"
                            alt="CSMP Value Center"
                            class="center-value-image">
                    </div>

                    <!-- Right Column -->
                    <div class="right-column">
                        <?php for ($i = 2; $i < 4; $i++): ?>
                            <div class="value-item <?php echo $program_values[$i]['color']; ?>">
                                <div class="value-title <?php echo $program_values[$i]['color']; ?>">
                                    <h3><?php echo $program_values[$i]['title']; ?></h3>
                                    <p class="sub-title"><?php echo $program_values[$i]['sub_title']; ?></p>
                                </div>
                                <div class="value-content">
                                    <?php foreach ($program_values[$i]['content'] as $content_item): ?>
                                        <div class="content-item content-item-csmp">
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
    <section class="program-goals program-goals-csmp d-none d-md-block px-custom px-md-0">
        <div class="container-custom-program-goals">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Mục tiêu tham dự chương trình</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/program-golds-csmp.png"
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
                    <div class="attendee-item">Thành viên HĐQT</div>
                    <div class="attendee-item">Người làm QTCT: Thư ký Công ty, người phụ trách QTCT, Trợ lý Tổng Giám đốc & Ban Điều hành, Chuyên viên Văn phòng HĐQT, người phụ trách quan hệ nhà đầu tư & các bên hữu quan.</div>
                </div>

                <div class="attendees-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-csmp.png"
                        alt="Attendees Mobile"
                        class="attendees-mobile-image">
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="d-none d-md-block">
                <div class="desktop-layout">
                    <div class="attendees-desktop-row">
                        <div class="attendees-content-col">
                            <h2 class="title mt-md-3 mb-3">Đối tượng tham dự</h2>
                            <p class="description">Cá nhân mong muốn nâng cao năng lực Quản trị Công ty</p>
                            <div class="attendees-items">
                                <div class="attendee-item">Thành viên HĐQT</div>
                                <div class="attendee-item">Người làm QTCT: Thư ký Công ty, người phụ trách QTCT, Trợ lý Tổng Giám đốc & Ban Điều hành, Chuyên viên Văn phòng HĐQT, người phụ trách quan hệ nhà đầu tư & các bên hữu quan.</div>
                            </div>
                        </div>
                    </div>
                    <div class="attendees-image-col">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/attendees-csmp.png"
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
                    'icon' => 'calendar-clock-blue.svg',
                    'title' => 'THỜI LƯỢNG',
                    'content' => '3 buổi tương tác liên tục trong 1,5 ngày tham dự',
                    'color' => 'blue'
                ),
                array(
                    'icon' => 'user-tie-blue.svg',
                    'title' => 'NGƯỜI HƯỚNG DẪN',
                    'content' => 'Các chuyên gia Quản trị Công ty, các nhà chuyên môn về thực hành nghề Thư ký QTCT hàng đầu của Việt Nam và quốc tế ',
                    'color' => 'blue'
                ),
                array(
                    'icon' => 'activity-blue.svg',
                    'title' => 'HOẠT ĐỘNG',
                    'content' => 'Tình huống nghiên cứu, thảo luận nhóm, phiên thảo luận, nhập vai và các hoạt động khác ',
                    'color' => 'blue'
                ),
                array(
                    'icon' => 'network-blue.svg',
                    'title' => 'KẾT NỐI',
                    'content' => 'Trong và sau chương trình thông qua hoạt động “Member Networking” và Câu lạc bộ Thư ký QTCT của VIOD',
                    'color' => 'blue'
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
    <section class="team-contact team-contact-csmp px-custom px-md-0">
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
                        'name' => 'Nguyễn minh hiền, FCCA',
                        'position' => 'Giám đốc Chuyên môn<br class="d-none d-md-block">Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        'image' => 'nguyen-minh-hien.png',
                        'position_more' => array(
                            'Giám đốc Chuyên môn, Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)',
                        ),
                        'biography' => 'Bà Hiền có hơn 20 năm công tác tại Deloitte Việt Nam, trong đó có trên 13 năm kinh nghiệm cung cấp dịch vụ kiểm toán và đảm bảo, hơn 10 năm phụ trách quản lý và thực hiện hoạt động đào tạo của toàn công ty và cung cấp dịch vụ đào tạo chuyên môn về kế toán và kiểm toán cho các khách hàng là các Tập đoàn đa quốc gia, Tập đoàn trong nước, các DN niêm yết, DN tư nhân hoạt động trong các lĩnh vực sản xuất, khách sạn, kinh doanh bất động sản, dịch vụ…<br><br>Bà có nhiều năm cung cấp dịch vụ tư vấn và đào tạo về Quản trị Công ty (QTCT) cho các doanh nghiệp niêm yết, công ty cổ phần đại chúng, công ty cổ phần chưa niêm yết, công ty cổ phần có vốn nhà nước,…liên quan đến các lĩnh vực như: đánh giá hiệu quả hoạt động QTCT của doanh nghiệp theo quy định pháp luật, VN CG Code, ASEAN CG Scorecard…, tư vấn về cấu trúc Hội đồng Quản trị và các Ủy ban chuyên trách, tư vấn soát xét, hoàn thiện, xây dựng mới quy chế, chính sách liên quan đến hoạt động QTCT để đáp ứng yêu cầu pháp luật, thông lệ tốt và đặc điểm của doanh nghiệp. Bà là chuyên gia trong nước (ký hợp đồng dịch vụ) của Ngân hàng Phát triển Châu Á (ADB) trong việc đánh giá hoạt động QTCT cho các khách hàng do ADB chỉ định; thành viên tham gia đánh giá về QTCT và phát triển bền vững: ACGS, VNSI, VLCA, CSI 100, CSA…; giảng viên cho nhiều khóa đào tạo về QTCT; hỗ trợ xây dựng bản tin, viết bài chuyên sâu về lĩnh vực này; và thành viên chính của Việt Nam để phối hợp triển khai các chương trình Deloitte Global Boardroom Program (dự án nghiên cứu chuyên sâu, dự án đánh giá chuyên đề, chương trình hội thảo dành cho các thành viên HĐQT toàn cầu…).<br><br>Bên cạnh đó, Bà cũng có một số kinh nghiệm trong lĩnh vực nghiên cứu và tư vấn về ESG bao gồm các dự án nghiên cứu chuyên sâu tác động môi trường của chất thải bao bì rắn, sản xuất lúa phát thải thấp, nghiên cứu tiềm năng phát triển thương mại của Green Hydrogen, Kiểm kê khí nhà kính và dịch vụ đảm bảo, đánh giá thực hành PTBV đáp ứng mục tiêu của Liên Hợp Quốc (SDG) tư vấn soát xét và hướng dẫn xây dựng báo cáo Phát triển bền vững theo quy định Việt Nam và khung chuẩn mực báo cáo Quốc tế…'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Nguyễn Linh Giang',
                        'position' => 'Thành viên HĐQT<br class="d-none d-md-block">Tổng Công ty Dầu Việt Nam (PVOIL)',
                        'image' => 'nguyen-linh-giang.png',
                        'position_more' => array(
                            'Thành viên HĐQT, Tổng Công ty Dầu Việt Nam (PVOIL)',
                            'Thành viên HĐQT, Trưởng Tiểu Ban Kiểm toán & Quản trị rủi ro Tổng công ty Cổ phần Vận tải Dầu khí (PVTrans)',
                            'Chủ tịch HĐQT Công ty Cổ phần Vận tải Nhật Việt',
                            'Giảng viên (thỉnh giảng) Khoa Tài chính, Đại học Kinh tế TP. Hồ Chí Minh'
                        ),
                        'biography' => 'Bà Giang có gần 25 năm công tác trong ngành Tài chính – Kế toán – Ngân hàng tại các Global Bank và Tập đoàn kinh tế Nhà nước với hơn 15 năm đảm nhận chức danh lãnh đạo quản lý chuyên sâu về Quản trị Công ty qua các chức danh Trưởng Ban kiểm soát, Trưởng Ban Kiểm toán nội bộ, CFO, Thành viên/Chủ tịch HĐQT, Trưởng Tiểu Ban KT&QTRR, Phó Chủ tịch UB ESG tại các Công ty niêm yết lớn trên sàn chứng khoán như Gas Shipping (GSP), PVTrans(PVT), PVOil (OIL) Bà Giang có bằng MBA, Đại học Impac Hoa Kỳ (Honour Certificate) & Bằng Cử nhân Kế toán Kiểm toán, Đại học Kinh tế TP HCM. Bà Giang hiện cũng là giảng viên môn Quản trị Công ty tại trường Đại học Kinh tế Thành phố Hồ Chí Minh, bà đã có chứng nhận DCP và hiện là thành viên IMP của Viện Thành viên HĐQT Việt Nam.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Hồ Thị Phương Tú',
                        'position' => 'Giám đốc Phòng Quản lý Niêm yết<br class="d-none d-md-block">Sở Giao dịch Chứng khoán Hà Nội (HNX)',
                        'image' => 'ho-thi-phuong-tu.png',
                        'position_more' => array(
                            'Giám đốc Phòng Quản lý Niêm yết, Sở Giao dịch Chứng khoán Hà Nội (HNX)',
                        ),
                        'biography' => 'Bà Tú có hơn 20 năm kinh nghiệm làm việc trên thị trường vốn Việt Nam. Bà từng làm việc tại Vụ Phát triển thị trường Ủy ban Chứng khoán Nhà nước trong 02 năm (1999 – 2000) trước khi chuyển sang Trung tâm Giao dịch Chứng khoán Hà Nội – HaSTC (nay là Sở Giao dịch Chứng khoán Hà Nội – HNX). Bà là một trong những cán bộ đầu tiên của Trung tâm.<br><br>Bà có nhiều năm công tác ở mảng thẩm định và quản lý niêm yết và hiện đang giữ cương vị Giám đốc Phòng Quản lý Niêm yết tại HNX. Bà cũng tham gia nhiều chương trình quản trị công ty tại Việt Nam.<br><br>Bà Tú có bằng cử nhân của Đại học Kinh tế quốc dân và MBA của ĐH Quốc tế Nhật Bản.'
                    ),
                    array(
                        'gender' => 'male',
                        'name' => 'Nguyễn Thế Mạnh',
                        'position' => 'Giám đốc Tư vấn<br class="d-none d-md-block">Deloitte Đông Nam Á',
                        'image' => 'nguyen-the-manh.png',
                        'position_more' => array(
                            'Giám đốc Tư vấn, Deloitte Đông Nam Á',
                        ),
                        'biography' => 'Ông Mạnh là một chuyên gia tư vấn quản trị và tái cấu trúc doanh nghiệp với 14 năm kinh nghiệm trong các lĩnh vực: chiến lược & vận hành, quản trị công ty, quản trị rủi ro, kiểm soát nội bộ, kiểm toán nội bộ, quy trình kinh doanh, mô hình hoạt động, hệ thống phát hiện gian lận sớm, hệ thống quản lý tuân thủ và phân tích dữ liệu. Ông đã tích lũy rất nhiều kinh nghiệm thực tiễn trong việc thiết kế và triển khai các nội dung trên cho khách hàng từ nhiều ngành nghề khác nhau như: sản xuất, FMCG, dầu khí, viễn thông, thương mại, các công ty bảo hiểm và các định chế tài chính.<br><br>Ông Mạnh hiện đang giữ chức vụ Giám đốc Tư vấn tại Deloitte Đông Nam Á và đồng thời là giảng viên cho VIOD. Ông có nhiều kinh nghiệm thực tiễn trong việc phục vụ các doanh nghiệp lớn của khối nhà nước, tư nhân và doanh nghiệp gia đình tại Việt Nam.<br><br>Ông Mạnh đã có chứng nhận DCP của Viện Thành Viên HĐQT Việt Nam (VIOD) cùng nhiều chứng chỉ khác như chứng chỉ PSM I – Professional Scrum Master (Agile), chứng chỉ Quản lý rủi ro Tài chính – FRM.'
                    ),
                    array(
                        'gender' => 'female',
                        'name' => 'Phan Mẫu Đơn',
                        'position' => 'Phó Phòng Quản trị và CNTT Tập đoàn – Khối CNTT<br class="d-none d-md-block">Ngân hàng TMCP Quân đội (MB)',
                        'image' => 'phan-mau-don.png',
                        'position_more' => array(
                            'Phó Phòng Quản trị và CNTT Tập đoàn – Khối CNTT, Ngân hàng TMCP Quân đội (MB)',
                        ),
                        'biography' => 'Bà Mẫu Đơn gắn bó với Ngân hàng TMCP Quân đội 21 năm và 17 năm là cán bộ quản lý của Phòng Kế hoạch tổng hợp – cơ quan giúp việc của TGĐ và Văn phòng HĐQT - cơ quan giúp việc của HĐQT. Bà Mẫu Đơn có 12 năm kinh nghiệm tại Văn phòng HĐQT với các mảng công việc từng phụ trách là: Thư ký Hội đồng quản trị, Thư ký Uỷ ban Nhân sự, Thư ký Hội đồng thi đua khen thưởng cấp HĐQT và là Thư ký của Đại hội đồng cổ đông MB từ năm 2017 đến nay.<br><br>Bà Mẫu Đơn có kinh nghiệm triển khai các mảng công việc: i) Báo cáo HĐQT, Đại hội đồng cổ đông, báo cáo thường niên, báo cáo quản trị theo quy định; ii) Hoạt động truyền thông định hướng và chính sách, hoạt động của HĐQT/BKS trong và ngoài MB; iii) Tham mưu và kết nối công tác truyền thông Tập đoàn và Quan hệ Công chúng theo chủ trương chính sách, định hướng của HĐQT về Tập đoàn. Ngoài ra, Bà Mẫu Đơn còn có nhiều kinh nghiệm trong triển khai hoạt động đối ngoại, hậu cần của HĐQT, BKS.'
                    ),
                );

                // Mặc định hiển thị 5 giảng viên cho CSMP
                $member_count = count($team_members);
                $layout_class = 'layout-5';
                ?>

                <div class="team-grid <?php echo $layout_class; ?>">
                    <?php foreach ($team_members as $member): ?>
                        <div class="team-member">
                            <div class="member-image-wrapper">
                                <div class="member-image">
                                    <div class="member-image-overlay">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $member['image']; ?>"
                                            alt="<?php echo $member['name']; ?>"
                                            class="member-photo">
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4 class="member-title text-uppercase">
                                        <?php echo ($member['gender'] == 'male') ? 'Ông' : 'Bà'; ?>
                                    </h4>
                                    <h3 class="member-name"><?php echo $member['name']; ?></h3>
                                    <p class="member-position"><?php echo $member['position']; ?></p>
                                </div>
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
                        <div class="member-image-modal lecturer-modal-image">
                            <div class="member-image-overlay">
                                <img id="lecturerImage" src="" alt="Lecturer" class="member-photo">
                            </div>
                        </div>
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