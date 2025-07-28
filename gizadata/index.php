<?php
/*
    Template Name: Trang chủ
*/
?>
<?php get_header();

/* slide trang chủ */
get_template_part('trangchu/slide');

/* những con số nổi bật */
// get_template_part('trangchu/nhungconsonoibat');
get_template_part('trangchu/core-values');

/* chương trình đào tạo đang diễn ra */
get_template_part('components/ongoing-training');

/* chương trình đào tạo dự kiến */
// get_template_part('trangchu/daotaodukien');

get_template_part('trangchu/upcoming-training-programs');
/* sự kiện sắp diễn ra */
get_template_part('trangchu/sukiensapdienra');



/* tài liệu */
// get_template_part('trangchu/tailieu');

/* tin tức */
get_template_part('trangchu/tintuc');

/* ceo */
// get_template_part('trangchu/ceo');
get_template_part('trangchu/testimonial-slider');

get_footer(); 