<?php
$linked_websites = [
    [
        'title' => 'Website liên kết',
        'subtitle' => 'Với thế mạnh về nghiên cứu và đào tạo, VIOD là đối tác kỹ thuật của các giải thưởng như Vietnam Listed Company
Award (VLCA), Asia Corporate Governance Scorecard (ACGS) và đại diện của Thành viên HĐQT đang hành nghề ở
Việt Nam trong các diễn đàn quốc tế.',
        'images' => [
            'partnership-1.png',
            'partnership-2.png',
        ]
    ],
    [
        'title' => 'ACGS',
        'subtitle' => 'Asia Corporate Governance Scorecard',
        'images' => [
            'partnership-3.png',
            'partnership-4.png',
        ]
    ],
];
?>

<section class="linked-websites-slider-section session-wrap position-relative">
    <div class="container">
        <div class="row g-5">
            <!-- Bên trái: title, subtitle -->
            <div class="col-12 col-md-5">
                <div class="linked-websites-slider-content">
                    <h2 class="title text-start" id="linked-slider-title">
                        <?php echo $linked_websites[0]['title']; ?>
                    </h2>
                    <p class="text-base" id="linked-slider-subtitle">
                        <?php echo $linked_websites[0]['subtitle']; ?>
                    </p>
                </div>
            </div>
            <!-- Bên phải: nút + 2 hình -->
            <div class="col-12 col-md-7">
                <div class="linked-websites-slider-right">
                    <div class="linked-websites-slider-nav mb-3">
                        <!-- <button class="linked-websites-slider-prev" aria-label="Trước">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-left.svg" alt="Prev">
                        </button>
                        <button class="linked-websites-slider-next" aria-label="Sau">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slider-arrow-right.svg" alt="Next">
                        </button> -->
                        <div class="linked-websites-slider-navigation-top">
                            <div class="linked-websites-slider-prev testimonial-prev nav-btn-top"></div>
                            <div class="linked-websites-slider-next testimonial-next nav-btn-top"></div>
                        </div>
                    </div>
                    <div class="linked-websites-slider-images " id="linked-slider-images">
                        <div class="linked-website-card">
                         
                                <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $linked_websites[0]['images'][0]; ?>" alt="Logo 1">
                     
                        </div>
                        <div class="linked-website-card">
    
                                <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $linked_websites[0]['images'][1]; ?>" alt="Logo 2">
                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = <?php echo json_encode($linked_websites); ?>;
    let currentSlide = 0;
    const titleEl = document.getElementById('linked-slider-title');
    const subtitleEl = document.getElementById('linked-slider-subtitle');
    const imagesEl = document.getElementById('linked-slider-images');
    const prevBtn = document.querySelector('.linked-websites-slider-prev');
    const nextBtn = document.querySelector('.linked-websites-slider-next');

    function renderSlide(idx) {
        titleEl.textContent = slides[idx].title;
        subtitleEl.textContent = slides[idx].subtitle;
        imagesEl.innerHTML = slides[idx].images.map(img => `
            <div class="linked-website-card">
                    <img class="w-100 h-auto" src="<?php echo get_template_directory_uri(); ?>/images/${img}" alt="Logo">
            </div>
        `).join('');
    }

    prevBtn.addEventListener('click', function() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        renderSlide(currentSlide);
    });
    nextBtn.addEventListener('click', function() {
        currentSlide = (currentSlide + 1) % slides.length;
        renderSlide(currentSlide);
    });
});
</script>
