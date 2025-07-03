<div class="slider-trangchu">
    <div class="ndslide" style="background-image: url('https://viod.1994.cloud/wp-content/uploads/2025/05/image_concrete-building-city_EjnX.webp');">
        <div class="slide-content">
            <h1>ĐỊNH CHẾ TIÊN PHONG VÀ CHUYÊN NGHIỆP VỀ QTCT TẠI VIỆT NAM</h1>
            <p>Trusted partner of Board of Directors, business leaders, and experts in the journey to improve governance capacity.</p>
            <a href="#" class="button">XEM THÊM</a>
        </div>
    </div>
    <div class="ndslide" style="background-image: url('https://viod.1994.cloud/wp-content/uploads/2025/05/image_abstract-building-with-sky_x4Pc-scaled.webp'); opacity: 0;">
        <div class="slide-content">
            <h1>ĐỊNH CHẾ TIÊN PHONG VÀ CHUYÊN NGHIỆP VỀ QTCT TẠI VIỆT NAM</h1>
            <p>Trusted partner of Board of Directors, business leaders, and experts in the journey to improve governance capacity.</p>
            <a href="#" class="button">DISCOVER MORE</a>
        </div>
    </div>
    <div class="ndslide" style="background-image: url('https://viod.1994.cloud/wp-content/uploads/2025/05/image_large-modern-office-building_TQni.webp'); opacity: 0;">
        <div class="slide-content">
            <h1>ĐỊNH CHẾ TIÊN PHONG VÀ CHUYÊN NGHIỆP VỀ QTCT TẠI VIỆT NAM</h1>
            <p>Trusted partner of Board of Directors, business leaders, and experts in the journey to improve governance capacity.</p>
            <a href="#" class="button">LEARN MORE</a>
        </div>
    </div>
    <button class="nav-button nav-left">&#8592;</button>
    <button class="nav-button nav-right">&#8594;</button>
    <div class="dots">
        <div class="dot active"></div>
        <div class="dot"></div>
        <div class="dot"></div>
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