<?php
// Lấy dữ liệu slider từ ACF
$home_data = get_field('home'); 
$slider_items = $home_data['home_hero']; 
?>

<div class="slider-trangchu">
    <?php 
    if($slider_items && is_array($slider_items)) {
        foreach($slider_items as $index => $slide) {
            $background_image = $slide['image'] ? $slide['image']['url'] : '';
            $title = $slide['title'] ? $slide['title'] : '';
            $subtitle = $slide['subtitle'] ? $slide['subtitle'] : '';
            $link = $slide['link'] ? $slide['link'] : '#';
            $opacity = $index === 0 ? '1' : '0';
    ?>
        <div class="ndslide" style="background-image: url('<?php echo esc_url($background_image); ?>'); opacity: <?php echo $opacity; ?>;">
            <div class="slide-content container">
                <?php if($title): ?>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>
                <?php if($subtitle): ?>
                    <p><?php echo esc_html($subtitle); ?></p>
                <?php endif; ?>
                <?php if($link): ?>
                    <a href="<?php echo esc_url($link); ?>" class="button">CHÚNG TÔI LÀ AI</a>
                <?php endif; ?>
            </div>
        </div>
    <?php 
        }
    } else {
        // Fallback nếu không có dữ liệu ACF
    ?>
        <div class="ndslide" style="background-image: url('https://viod.1994.cloud/wp-content/uploads/2025/07/image_bg-slider-home-page_fc4i.webp');">
            <div class="slide-content container">
                <h1>Viện Thành viên Hội đồng Quản trị Việt Nam (VIOD)</h1>
                <p>Thành viên của Mạng lưới Thành viên Hội đồng Quản trị Toàn cầu (GNDI), là định chế chuyên nghiệp, độc lập và tiên phong trong lĩnh vực Quản trị công ty & Phát triển bền vững tại Việt Nam.</p>
                <a href="#" class="button">CHÚNG TÔI LÀ AI</a>
            </div>
        </div>
    <?php } ?>
    
    <button class="nav-button nav-left">&#8592;</button>
    <button class="nav-button nav-right">&#8594;</button>
    <div class="dots">
        <?php 
        if($slider_items && is_array($slider_items)) {
            foreach($slider_items as $index => $slide) {
                $active_class = $index === 0 ? 'active' : '';
                echo '<div class="dot ' . $active_class . '"></div>';
            }
        } else {
            echo '<div class="dot active"></div>';
        }
        ?>
    </div>
</div>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.ndslide');
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
            dots[i].classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    document.querySelector('.nav-left').addEventListener('click', prevSlide);
    document.querySelector('.nav-right').addEventListener('click', nextSlide);

    setInterval(nextSlide, 5000); // Automatically move to the next slide every 3 seconds
</script>