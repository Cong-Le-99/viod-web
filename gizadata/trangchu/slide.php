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
            $professional = $slide['professional'] ? $slide['professional'] : '';
    ?>
        <div class="ndslide" style="background-image: url('<?php echo esc_url($background_image); ?>'); opacity: <?php echo $opacity; ?>;">
            <div class="slide-content container-slider">
                <?php if($title): ?>
                    <h5 class="professional-title"><?php echo esc_html($professional); ?></h5>
                    <h1><?php echo esc_html($title); ?></h1>
                <?php endif; ?>
                <?php if($subtitle): ?>
                    <p class="subtitle"><?php echo esc_html($subtitle); ?></p>
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
    
    <button class="nav-button nav-left">
        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 5.99994C14.5 6.46018 14.1269 6.83328 13.6667 6.83328L2.90087 6.83328L5.923 9.8551C6.24845 10.1805 6.24848 10.7082 5.92306 11.0336C5.59764 11.3591 5.07 11.3591 4.74455 11.0337L0.299659 6.58923C0.14336 6.43295 0.0555513 6.22097 0.0555513 5.99995C0.0555513 5.77892 0.14336 5.56694 0.299659 5.41066L4.74455 0.966216C5.07 0.640795 5.59764 0.640822 5.92306 0.966275C6.24848 1.29173 6.24845 1.81937 5.923 2.14479L2.90087 5.16661L13.6667 5.16661C14.1269 5.16661 14.5 5.53971 14.5 5.99994Z" fill="white"/>
        </svg>
    </button>
    <button class="nav-button nav-right">
        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.777344 6.00005C0.777344 5.53982 1.15044 5.16672 1.61068 5.16672L12.3769 5.16672L9.35478 2.1449C9.02933 1.81948 9.02931 1.29184 9.35473 0.966385C9.68015 0.640931 10.2078 0.640904 10.5332 0.966326L14.9781 5.41077C15.1344 5.56705 15.2222 5.77903 15.2222 6.00005C15.2222 6.22108 15.1344 6.43306 14.9781 6.58934L10.5332 11.0338C10.2078 11.3592 9.68015 11.3592 9.35473 11.0337C9.02931 10.7083 9.02933 10.1806 9.35478 9.85521L12.3769 6.83339L1.61068 6.83339C1.15044 6.83339 0.777344 6.46029 0.777344 6.00005Z" fill="white"/>
        </svg>
    </button>
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