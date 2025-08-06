<?php
$events = [
    [
        'title' => 'VIOD TUYỂN DỤNG THỰC TẬP SINH 2025 – CƠ HỘI ĐỂ BỨT PHÁ!',
        'video' => 'https://www.youtube.com/embed/sEn-e3oYyQM',
        'desc'  => 'Cơ hội thực tập tại VIOD dành cho sinh viên năm cuối, phát triển kỹ năng và mở rộng mạng lưới.'
    ],
    [
        'title' => 'DIỄN ĐÀN “VÌ MỘT MÙA ĐẠI HỘI MỚI” NĂM 2025',
        'video' => 'https://www.youtube.com/embed/sEn-e3oYyQM',
        'desc'  => 'Sự kiện thường niên quy tụ các chuyên gia hàng đầu về quản trị công ty.'
    ],
    [
        'title' => 'CHƯƠNG TRÌNH ĐÀO TẠO QTCT 2025 – KHỞI ĐẦU HÀNH TRÌNH MỚI',
        'video' => 'https://www.youtube.com/embed/sEn-e3oYyQM',
        'desc'  => 'Đào tạo chuyên sâu về quản trị công ty dành cho lãnh đạo trẻ.'
    ],
    [
        'title' => 'HỘI THẢO “CƠ HỘI VÀ THÁCH THỨC TRONG QTCT”',
        'video' => 'https://www.youtube.com/embed/sEn-e3oYyQM',
        'desc'  => 'Cập nhật xu hướng mới nhất về quản trị công ty tại Việt Nam.'
    ],
];
?>
<section class="viod-events-carousel-section session-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title text-center">Video</h2>
                <p class="text-base text-center">Trusted partner of Board of Directors, business leaders and experts in the <br class="d-none d-md-block"> journey to improve governance capacity.</p>
                <div class="d-flex justify-content-center">
                    <button class="btn-register-outline  mt-2 text-center">
                    Xem tất cả →
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper viod-events-swiper mt-5">
        <div class="swiper-wrapper">
            <?php foreach ($events as $event): ?>
            <div class="swiper-slide">
                <div class="video-wrapper" style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;border-radius:12px;">
                    <iframe src="<?php echo $event['video']; ?>"
                            title="<?php echo $event['title']; ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius:12px;"></iframe>
                </div>
                <h3 class="title-video" style="font-size:1.1rem;margin-top:1rem;"> <?php echo $event['title']; ?> </h3>
              
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination" ></div>
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.viod-events-swiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    <?php if (count($events) > 1): ?>loop: true,<?php endif; ?>
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    // navigation: {
    //   nextEl: '.swiper-button-next',
    //   prevEl: '.swiper-button-prev',
    // },
  });
});
</script>
