<div class="conso-chuongtrinh consobg">
    <div class="">
        <div class="conso">
            <div class="tit">
                <h2>NHỮNG CON SỐ NỔI BẬT</h2>
                <div class="motaconso">
                    Những con số biết nói về hành trình kết nối, lan tỏa tri thức và nâng tầm Quản trị Công ty
                </div>
            </div>

            <div class="highlight-numbers">
                <div class="highlight-item">
                    <span id="number1">0</span>
                    <div class="highlight-title">LƯỢT NGƯỜI THAM DỰ</div>
                </div>
                <div class="highlight-item">
                    <span id="number2">0</span>+
                    <div class="highlight-title">CHƯƠNG TRÌNH & SỰ KIỆN</div>
                </div>
                <div class="highlight-item">
                    <span id="number3">0</span>
                    <div class="highlight-title">TÀI LIỆU VỀ QUẢN TRỊ CÔNG TY</div>
                </div>
            </div>
        </div>
        
        <?php
            get_template_part('trangchu/chuongtrinhdangdienra', null, [
                'title' => 'CHƯƠNG TRÌNH ĐÀO TẠO ĐANG DIỄN RA',
                'description_desktop' => "Chương trình đào tạo chuyên sâu nhằm nâng cao kiến thức \n và cải thiện chất lượng QTCT",
                'description_mobile' => "Chương trình đào tạo chuyên sâu nhằm nâng cao kiến thức và cải thiện chất lượng QTCT",
            ]);
        ?>
    </div>
</div>
<script>
    function animateNumber(id, start, end, duration) {
        const element = document.getElementById(id);
        let startTime = null;

        function animation(currentTime) {
            if (!startTime) startTime = currentTime;
            const progress = Math.min((currentTime - startTime) / duration, 1);
            element.textContent = Math.floor(progress * (end - start) + start);
            if (progress < 1) requestAnimationFrame(animation);
        }
        requestAnimationFrame(animation);
    }

    animateNumber('number1', 0, 1395, 3000);
    animateNumber('number2', 0, 150, 3000);
    animateNumber('number3', 0, 124, 3000);
</script>