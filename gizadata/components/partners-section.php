<?php
$images = [
    'vaopa.png',
    'sap.png',
    'phan-bon-ca-mau.png',
    'vp-bank.png',
    'hd-bank.png'
];

$partner_images = [];
for ($i = 0; $i < 10; $i++) {
    $img = $images[$i % count($images)];
    $partner_images[] = get_template_directory_uri() . '/images/' . $img;
}
?>

<section class="partners-section session-wrap d-none d-md-block">
    <div class="container">
        <h2 class="title text-center">Đối tác</h2>
        <p class="text-base text-center partners-section-description">
            Hợp tác chặt chẽ với các cơ quan quản lý, hiệp hội nghề nghiệp, và các tổ chức <br class="d-none d-md-block"> chuyên môn trong và ngoài nước. Mạng lưới đối tác đa dạng cùng VIOD triển <br class="d-none d-md-block"> khai các nghiên cứu, bộ công cụ, chương trình và ấn phẩm chuyên môn về<br class="d-none d-md-block"> Quản trị Công ty nhằm lan tỏa thông lệ tốt, nâng cao năng lực Hội đồng Quản <br class="d-none d-md-block"> trị và thúc đẩy phát triển bền vững của doanh nghiệp Việt Nam.
        </p>
    </div>
    <div class="partners-slider-wrapper mt-5">
        <div class="partners-slider d-flex align-items-center">
            <?php foreach ($partner_images as $img): ?>
                <div class="partner-item">
                    <img src="<?php echo $img; ?>" alt="Đối tác">
                </div>
            <?php endforeach; ?>
            <?php foreach ($partner_images as $img): ?>
                <div class="partner-item">
                    <img src="<?php echo $img; ?>" alt="Đối tác">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.partners-slider');
            let pos = 0;
            const speed = 0.5;

            function animate() {
                pos -= speed;
                const sliderWidth = slider.scrollWidth / 2;
                if (Math.abs(pos) >= sliderWidth) {
                    pos = 0;
                }
                slider.style.transform = `translateX(${pos}px)`;
                requestAnimationFrame(animate);
            }
            animate();
        });
    </script>
</section>