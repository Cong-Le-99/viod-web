<?php
/*
Template Name: faq
*/
get_header();
?>

<div class="noidungbaiviet custom-banner-bg faq">
    <div class="single-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
');">
        <div class="overlay"></div>
        <div class="banner-content">
            <div class="breadcrumb-wrapper">

                <nav class="breadcrumb"><a href="/">Home</a> » <a href="/faq">FAQ</a></nav>

            </div>
            <div class="title-wrapper">
                <h1 class="post-title">FAQ</h1>

                <div class="mota sub-title">
                    Cần hỗ trợ thêm? Đây là nơi bạn tìm thấy câu trả lời cho những thắc mắc phổ biến nhất
                </div>
            </div>
        </div>
    </div>

    <div class="post-content-wrapper">
        <div class="post-content">




            <div class="faq-container">
                <div class="faq-item active">
                    <div class="faq-question">
                        <span class="faq-title">TITTLE FOR FREQUENTLY ASKED QUESTION</span>
                        <span class="faq-toggle">−</span>
                    </div>
                    <div class="faq-answer">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Urna pulvinar mi lorem scelerisque tortor nisi aliquam vehicula tincidunt.
                            Lobortis lorem a integer nunc ut amet consectetur id. Urna dictum in aenean commodo nunc scelerisque faucibus neque neque.
                            Felis viverra ornare nibh orci...
                        </p>
                    </div>
                </div>

                <!-- FAQ item repeat -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-title">TITTLE FOR FREQUENTLY ASKED QUESTION</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Nội dung câu trả lời cho câu hỏi này.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-title">TITTLE FOR FREQUENTLY ASKED QUESTION</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Nội dung câu trả lời cho câu hỏi này.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-title">TITTLE FOR FREQUENTLY ASKED QUESTION</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Nội dung câu trả lời cho câu hỏi này.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-title">TITTLE FOR FREQUENTLY ASKED QUESTION</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Nội dung câu trả lời cho câu hỏi này.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <span class="faq-title">TITTLE FOR FREQUENTLY ASKED QUESTION</span>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Nội dung câu trả lời cho câu hỏi này.</p>
                    </div>
                </div>

                <!-- Thêm các câu hỏi khác tương tự -->
            </div>



        </div>
    </div>






</div>

<script>
    document.querySelectorAll('.faq-question').forEach(item => {
        item.addEventListener('click', () => {
            const parent = item.parentElement;
            parent.classList.toggle('active');

            // Đổi dấu +/-
            const toggle = item.querySelector('.faq-toggle');
            toggle.textContent = parent.classList.contains('active') ? '−' : '+';
        });
    });
</script>



<?php
get_footer();
?>