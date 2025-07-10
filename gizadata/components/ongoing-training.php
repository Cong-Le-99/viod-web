<?php
// Fake data cho chương trình đào tạo
$training_programs = [
    [
        'id' => 1,
        'title' => 'CHƯƠNG TRÌNH CHUYÊN SÂU VỀ UỶ BAN KIỂM TOÁN ACMP8',
        'image' => 'https://viod.1994.cloud/wp-content/uploads/2025/05/image_image_szoz.webp',
        'tags' => ['Event', 'Networking'],
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'countdown' => 'Chỉ còn 1 ngày nữa!!',
        'location' => 'Hanoi',
        'language' => 'VN - EN',
        'badge' => 'LAST MIN 30%',
        'register_text' => 'ĐĂNG KÝ NGAY'
    ],
    [
        'id' => 2,
        'title' => 'CHƯƠNG TRÌNH CHỨNG NHẬN THÀNH VIÊN HỘI ĐỒNG QUẢN TRỊ DCP32',
        'image' => 'https://viod.1994.cloud/wp-content/uploads/2025/05/image_image-1_n2UQ.webp',
        'tags' => ['Event', 'Networking'],
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'countdown' => null,
        'location' => 'Hanoi',
        'language' => 'VN - EN',
        'badge' => null,
        'register_text' => 'ĐĂNG KÝ NGAY'
    ],
    [
        'id' => 3,
        'title' => 'CHƯƠNG TRÌNH CHUYÊN SÂU VỀ THƯ KÝ QUẢN TRỊ CÔNG TY CSMP9',
        'image' => 'https://viod.1994.cloud/wp-content/uploads/2025/05/image_image-2_Rh8b.webp',
        'tags' => ['Event', 'Networking'],
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'countdown' => null,
        'location' => 'Hanoi',
        'language' => 'VN - EN',
        'badge' => null,
        'register_text' => 'ĐĂNG KÝ NGAY'
    ],
];
?>

<div class="ongoing-training">
<section class="training-program relative">
    <div class="container">
        <h2 class="title">CHƯƠNG TRÌNH ĐÀO TẠO ĐANG DIỄN RA</h2>
        <p class="description mb-4">
            Các khoá đào tạo chất lượng cao về QTCT duy nhất tại Việt Nam.<br class="d-none d-lg-block">
            Được thiết kế để phục vụ nhu cầu ngày càng tăng về phát triển chuyên môn, kiến ​​thức, nâng cao kỹ<br class="d-none d-lg-block">
            năng của người làm nghề QTCT
        </p>
        <div class="btn-see-more text-center mb-5">
            <a href="#">XEM THÊM →</a>
        </div>


    <div class="ongoing-training-swiper">
        <?php foreach ($training_programs as $index => $program): ?>
            <div class="swiper-slide">
                <div class="ct<?php echo $index + 1; ?> relative card-event w-100">
                    <div class="card-event_img">
                        <img src="<?php echo $program['image']; ?>" alt="<?php echo htmlspecialchars($program['title']); ?>">
                    </div>
                    <div class="card-event_content">
                        <div class="card-event_wrapper">
                            <div class="card-event_tag">
                                <?php foreach ($program['tags'] as $tag): ?>
                                    <span><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="card-event_title">
                                <?php echo htmlspecialchars($program['title']); ?>
                            </div>

                            <div class="card-event_time">
                                <div class="a">
                                    <!-- SVG ICON: Clock -->
                                    <?php echo $program['date']; ?> | <?php echo $program['time']; ?>
                                </div>
                                <?php if ($program['countdown']): ?>
                                    <div class="card-event_countdown">
                                        <?php echo $program['countdown']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="card-event_address d-flex justify-content-between gap-1">
                                <div class="flex-fill text-start">
                                    <!-- SVG ICON: Location -->
                                    <?php echo $program['location']; ?>
                                </div>
                                <div class="flex-fill text-start">
                                    <!-- SVG ICON: Language -->
                                    <?php echo $program['language']; ?>
                                </div>
                            </div>

                            <div class="card-event_button">
                                <div class="button-group">
                                    <button class="btn-register">
                                        <?php if ($program['badge']): ?>
                                            <span class="badge"><?php echo $program['badge']; ?></span>
                                        <?php endif; ?>
                                        <?php echo $program['register_text']; ?>
                                    </button>
                                    <button class="btn-outline">GIỚI THIỆU</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

</section>
</div>
<?php
    get_template_part('trangchu/chuongtrinhdangdienra', null, [
        'title' => 'CHƯƠNG TRÌNH ĐÀO TẠO ĐANG DIỄN RA',
        'description_desktop' => "Chương trình đào tạo chuyên sâu nhằm nâng cao kiến thức \n và cải thiện chất lượng QTCT",
        'description_mobile' => "Chương trình đào tạo chuyên sâu nhằm nâng cao kiến thức và cải thiện chất lượng QTCT",
    ]);
?>

<script src="<?php echo get_template_directory_uri(); ?>/js/ongoing-training.js"></script>
