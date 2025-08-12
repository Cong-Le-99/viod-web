<?php
$testimonials = array(
    // array(
    //     'name' => 'Georgina Freeman',
    //     'gender' => 'male',
    //     'position' => 'Tổng giám đốc điều hành tại VIOD',
    //     'content_desktop' => "VIOD luôn đi đầu trong việc cập nhật những diễn biến đang diễn ra trên toàn thế giới và cách các Giám đốc nên theo dõi sát sao tình hình.",
    //     'content_mobile' => "VIOD luôn đi đầu trong việc cập nhật những diễn biến đang diễn ra trên toàn thế giới và cách các Giám đốc nên theo dõi sát sao tình hình.",
    //     'image' => 'Georgina-Freeman.jpg'
    // ),
    array(
        'name' => 'NGUYỄN ANH TUẤN',
        'gender' => 'male',
        'position' => 'Chủ tịch, Hội đồng Tư vấn Phát triển Thực hành UBKT tại Việt Nam, VIOD',
        'content_desktop' => '“Chương trình DCP giúp hệ thống hóa đầy đủ kiến thức, kỹ năng và kinh nghiệm thực chiến, là công cụ hỗ trợ đắc lực cho việc thực hành nghề Quản trị Công ty một cách chuyên nghiệp, và phù hợp với môi trường của Việt Nam, đặc biệt trong bối cảnh hội nhập sâu và thực chất.”',
        'content_mobile' => '“Chương trình DCP giúp hệ thống hóa đầy đủ kiến thức, kỹ năng và kinh nghiệm thực chiến, là công cụ hỗ trợ đắc lực cho việc thực hành nghề Quản trị Công ty một cách chuyên nghiệp, và phù hợp với môi trường của Việt Nam, đặc biệt trong bối cảnh hội nhập sâu và thực chất.”',
        'image' => 'testimonial-dk-2.png'
    ),
    array(
        'name' => 'NGUYỄN LINH GIANG',
        'gender' => 'female',
        'position' => 'Thành viên HĐQT<br>Tổng Công ty Dầu Việt Nam (PVOIL)',
        'content_desktop' => '“Các khóa học như <strong>DCP, CSMP, ACMP</strong> không chỉ giúp hệ thống hóa kiến thức về Quản trị Công ty (QTCT), mà trên hết còn là cơ hội quý báu để những người hành nghề chia sẻ kinh nghiệm thực tiễn. Quan trọng hơn, các chương trình này góp phần thay đổi nhận thức, đưa QTCT vượt lên trên sự tuân thủ, hướng theo các thông lệ quốc tế – từ đó góp phần thúc đẩy nâng hạng thị trường Chứng khoán Việt Nam, gia tăng uy tín thương hiệu doanh nghiệp và tạo dựng hồ sơ nghề nghiệp chuyên nghiệp cho mỗi cá nhân hành nghề.”',
        'content_mobile' => '“Các khóa học như <strong>DCP CSMP ACMP</strong> không chỉ giúp hệ thống hóa kiến thức về Quản trị Công ty (QTCT), mà trên hết còn là cơ hội quý báu để những người hành nghề chia sẻ kinh nghiệm thực tiễn.”',
        'image' => 'testimonial-dk-1.png'
    )
);
?>

<section class="testimonial-slider px-custom px-md-0">
    <div class="container">
        <!-- Desktop Layout theo tỷ lệ thiết kế -->
        <div class="testimonial-desktop d-none d-md-block">
            <div class="testimonial-layout">
                <!-- Phần hình ảnh - 56% -->
                <div class="testimonial-image-section">
                    <div class="testimonial-image-container">
                        <?php foreach ($testimonials as $index => $testimonial): ?>
                            <div class="testimonial-image <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $testimonial['image']; ?>" 
                                     alt="<?php echo $testimonial['name']; ?>" 
                                     class="testimonial-photo">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Khoảng cách giữa - 6% -->
                <div class="testimonial-gap"></div>
                
                <!-- Phần content - 27% -->
                <div class="testimonial-content-section">
                    <!-- Navigation buttons căn giữa -->
                    <div class="testimonial-navigation-top">
                        <div class="testimonial-prev nav-btn-top"></div>
                        <div class="testimonial-next nav-btn-top"></div>
                    </div>
                    
                    <!-- Content container -->
                    <div class="testimonial-content-container">
                        <?php foreach ($testimonials as $index => $testimonial): ?>
                            <div class="testimonial-content <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>">
                                <div class="testimonial-quote">
                                    <p><?php echo $testimonial['content_desktop']; ?></p>
                                </div>
                                <div class="testimonial-author">
                                    <h4 class="author-prefix"><?php echo $testimonial['gender'] === 'male' ? 'Ông' : 'Bà'; ?></h4>
                                    <h3 class="author-name"><?php echo $testimonial['name']; ?></h3>
                                    <p class="author-position"><?php echo $testimonial['position']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Khoảng cách phải - 11% -->
                <!-- <div class="testimonial-gap-right"></div> -->
            </div>
        </div>
        
        <!-- Mobile Layout -->
        <div class="testimonial-mobile-new d-block d-md-none">
            <div class="testimonial-mobile-container">
                <?php foreach ($testimonials as $index => $testimonial): ?>
                    <div class="testimonial-mobile-slide <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>">
                        <!-- Hình ảnh -->
                        <div class="testimonial-mobile-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $testimonial['image']; ?>" 
                                 alt="<?php echo $testimonial['name']; ?>" 
                                 class="testimonial-mobile-photo">
                        </div>
                        
                        <!-- Content mobile -->
                        <div class="testimonial-mobile-content">
                            <div class="testimonial-mobile-quote">
                                <p><?php echo $testimonial['content_mobile']; ?></p>
                            </div>
                            
                            <!-- Gender + Name -->
                            <div class="testimonial-mobile-author">
                                <h4 class="mobile-author-prefix"><?php echo $testimonial['gender'] === 'male' ? 'Ông' : 'Bà'; ?></h4>
                                <h3 class="mobile-author-name"><?php echo $testimonial['name']; ?></h3>
                            </div>
                            
                            <!-- Position -->
                            <div class="testimonial-mobile-position">
                                <p class="mobile-author-position"><?php echo $testimonial['position']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Mobile Navigation -->
            <div class="testimonial-mobile-nav">
                <button class="mobile-nav-btn mobile-nav-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-left.svg" alt="Previous">
                </button>
                <button class="mobile-nav-btn mobile-nav-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-right.svg" alt="Next">
                </button>
            </div>
            <div class="testimonial-navigation-top">
                <div class="testimonial-prev nav-btn-top"></div>
                <div class="testimonial-next nav-btn-top"></div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Only run desktop logic on desktop widths
    if (window.innerWidth < 768) return;
    let currentSlide = 0;
    const totalSlides = <?php echo count($testimonials); ?>;
    
    // Desktop navigation
    function showSlide(index) {
        // Hide all slides
        document.querySelectorAll('.testimonial-image').forEach(img => img.classList.remove('active'));
        document.querySelectorAll('.testimonial-content').forEach(content => content.classList.remove('active'));
        
        // Show current slide
        document.querySelectorAll('.testimonial-image[data-slide="' + index + '"]').forEach(img => img.classList.add('active'));
        document.querySelectorAll('.testimonial-content[data-slide="' + index + '"]').forEach(content => content.classList.add('active'));
        
        currentSlide = index;
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }
    
        // Desktop navigation event listeners
    document.querySelector('.testimonial-next')?.addEventListener('click', nextSlide);
    document.querySelector('.testimonial-prev')?.addEventListener('click', prevSlide);
});

// Mobile Slider - Separate DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    // Mobile slider only works on mobile devices
    if (window.innerWidth >= 768) return;
    
    let mobileCurrentSlide = 0;
    const mobileTotalSlides = <?php echo count($testimonials); ?>;
    
    // Mobile slider functions
    function showMobileSlide(index) {
        // Hide all mobile slides
        document.querySelectorAll('.testimonial-mobile-slide').forEach(slide => slide.classList.remove('active'));
        
        // Show current mobile slide
        const targetSlide = document.querySelector('.testimonial-mobile-slide[data-slide="' + index + '"]');
        if (targetSlide) {
            targetSlide.classList.add('active');
        }
        
        mobileCurrentSlide = index;
    }
    
    function nextMobileSlide() {
        mobileCurrentSlide = (mobileCurrentSlide + 1) % mobileTotalSlides;
        showMobileSlide(mobileCurrentSlide);
    }
    
    function prevMobileSlide() {
        mobileCurrentSlide = (mobileCurrentSlide - 1 + mobileTotalSlides) % mobileTotalSlides;
        showMobileSlide(mobileCurrentSlide);
    }
    
    // Init first slide to ensure correct state
    showMobileSlide(0);

    // Mobile navigation buttons (bottom arrows)
    const mobileNextButton = document.querySelector('.mobile-nav-next');
    const mobilePrevButton = document.querySelector('.mobile-nav-prev');
    mobileNextButton?.addEventListener('click', nextMobileSlide);
    mobilePrevButton?.addEventListener('click', prevMobileSlide);

    // Mobile top navigation (if present inside mobile layout)
    document.querySelector('.testimonial-mobile-new .testimonial-next')?.addEventListener('click', nextMobileSlide);
    document.querySelector('.testimonial-mobile-new .testimonial-prev')?.addEventListener('click', prevMobileSlide);


    
    // Touch/Swipe support for mobile
    let startX = 0;
    let endX = 0;
    
    const mobileContainer = document.querySelector('.testimonial-mobile-container');
    
    if (mobileContainer) {
        mobileContainer.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
        });
        
        mobileContainer.addEventListener('touchend', function(e) {
            endX = e.changedTouches[0].clientX;
            
            // Determine swipe direction
            const diff = startX - endX;
            
            if (Math.abs(diff) > 50) { // Minimum swipe distance
                if (diff > 0) {
                    // Swipe left - next slide
                    nextMobileSlide();
                } else {
                    // Swipe right - previous slide
                    prevMobileSlide();
                }
            }
        });
    }
});
</script>
