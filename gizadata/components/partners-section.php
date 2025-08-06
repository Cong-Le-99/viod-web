<?php
$partner_images = [];
for ($i = 0; $i < 10; $i++) {
    $img = ($i % 2 == 0) ? 'partners-slider-1.png' : 'partners-slider-2.png';
    $partner_images[] = get_template_directory_uri() . '/images/' . $img;
}
?>
<section class="partners-section session-wrap d-none d-md-block">
    <div class="container">
        <h2 class="title text-center">Đối tác</h2>
        <p class="text-base text-center partners-section-description">
        Với thế mạnh về nghiên cứu và đào tạo, VIOD là đối tác kỹ thuật của các giải thưởng <br class="d-none d-md-block"> như Vietnam Listed Company
Award (VLCA), Asia Corporate <br class="d-none d-md-block"> Governance Scorecard (ACGS) và đại diện của Thành viên HĐQT đang hành <br class="d-none d-md-block" > nghề ở
Việt Nam trong các diễn đàn quốc tế.
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