<?php

$home_data = get_field('home'); 
$training_programs = $home_data['home_current_trainings']; 
$training_programs = array_slice($training_programs, 0, 3);

// Chuyển đổi dữ liệu ACF thành format phù hợp
$formatted_programs = [];
if (is_array($training_programs)) {
    foreach ($training_programs as $program) {
        if (is_object($program) && isset($program->ID)) {
            // Nếu là post object từ ACF
            $formatted_programs[] = [
                'id' => $program->ID,
                'title' => $program->post_title,
                'image' => get_the_post_thumbnail_url($program->ID, 'full') ?: 'https://viod.1994.cloud/wp-content/uploads/2025/05/image_image_szoz.webp',
                'tags' => wp_get_post_terms($program->ID, 'post_tag', ['fields' => 'names']) ?: ['Event', 'Networking'],
                'date' => get_the_date('d M Y', $program->ID),
                'time' => get_field('event_time', $program->ID) ?: '3:00 PM - 6:00 PM',
                'countdown' => get_field('countdown_text', $program->ID),
                'location' => get_field('event_location', $program->ID) ?: 'Hanoi',
                'language' => get_field('event_language', $program->ID) ?: 'VN - EN',
                'badge' => get_field('event_badge', $program->ID),
                'register_text' => get_field('register_text', $program->ID) ?: 'ĐĂNG KÝ NGAY',
                'permalink' => get_permalink($program->ID)
            ];
        } elseif (is_array($program)) {
            // Nếu đã là array format
            $formatted_programs[] = $program;
        }
    }
}

// Sử dụng fallback nếu không có dữ liệu
if (empty($formatted_programs)) {
    $formatted_programs = $training_programs;
}
?>

<div class="ongoing-training">
<section class="training-program relative">
    <div class="container">
        <h2 class="title">CHƯƠNG TRÌNH ĐÀO TẠO ĐANG DIỄN RA</h2>
        <p class="description mb-4">
            Các khoá đào tạo chất lượng cao về QTCT duy nhất tại Việt Nam. Được thiết kế để<br class="d-none d-lg-block">phục vụ nhu cầu ngày càng tăng về phát triển chuyên môn, kiến ​​thức, nâng cao kỹ<br class="d-none d-lg-block">
            năng của người làm nghề QTCT
        </p>
        <div class="btn-see-more text-center mb-5">
            <a href="/chuong-trinh-dao-tao/">XEM THÊM →</a>
        </div>

    <div class="ongoing-training-swiper" id="training-programs-container">
        <?php foreach ($formatted_programs as $index => $program): ?>
            <div class="swiper-slide training-program-item" data-index="<?php echo $index; ?>">
                <div class="ct<?php echo $index + 1; ?> relative card-event w-100">
                    <div class="card-event_img">
                        <img src="<?php echo $program['image']; ?>" alt="<?php echo htmlspecialchars($program['title']); ?>">
                    </div>
                    <div class="card-event_content">
                        <div class="card-event_wrapper">
                            <div class="card-event_tag">
                                <?php foreach ($program['tags'] as $tag): ?>
                                    <span><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="card-event_title">
                                <?php echo htmlspecialchars($program['title']); ?>
                            </div>

                            <div class="card-event_time">
                                <div class="a">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 3.5C7.75 3.08579 7.41421 2.75 7 2.75C6.58579 2.75 6.25 3.08579 6.25 3.5V3.90665C6.00413 3.96421 5.77128 4.04472 5.54754 4.15873C4.84193 4.51825 4.26825 5.09193 3.90873 5.79754C3.68239 6.24175 3.58803 6.7219 3.54336 7.26853C3.49999 7.79944 3.49999 8.45505 3.5 9.26789V10.7321C3.49999 11.5449 3.49999 12.2006 3.54336 12.7315C3.58803 13.2781 3.68239 13.7582 3.90873 14.2025C4.26825 14.9081 4.84193 15.4817 5.54754 15.8413C5.99175 16.0676 6.4719 16.162 7.01853 16.2066C7.54944 16.25 8.20505 16.25 9.01788 16.25L12.4013 16.25C12.7236 16.25 12.943 16.2501 13.1364 16.23C14.9018 16.0472 16.2972 14.6518 16.48 12.8864C16.5001 12.693 16.5 12.4736 16.5 12.1514L16.5 9.26788C16.5 8.45505 16.5 7.79944 16.4566 7.26853C16.412 6.7219 16.3176 6.24175 16.0913 5.79754C15.7317 5.09193 15.1581 4.51825 14.4525 4.15873C14.2287 4.04472 13.9959 3.96421 13.75 3.90665V3.5C13.75 3.08579 13.4142 2.75 13 2.75C12.5858 2.75 12.25 3.08579 12.25 3.5V3.75859C11.8765 3.74999 11.456 3.75 10.9821 3.75H9.0179C8.54396 3.75 8.12348 3.74999 7.75 3.75859V3.5ZM6.22852 5.49524C6.42604 5.3946 6.68681 5.32547 7.14068 5.28838C7.60331 5.25058 8.19755 5.25 9.05 5.25H10.95C11.8025 5.25 12.3967 5.25058 12.8593 5.28838C13.3132 5.32547 13.574 5.3946 13.7715 5.49524C14.1948 5.71095 14.5391 6.05516 14.7548 6.47852C14.8554 6.67604 14.9245 6.9368 14.9616 7.39068C14.9764 7.57123 14.9855 7.77183 14.991 8H5.00895C5.01455 7.77183 5.02363 7.57123 5.03838 7.39068C5.07547 6.9368 5.1446 6.67604 5.24524 6.47852C5.46095 6.05516 5.80516 5.71095 6.22852 5.49524ZM5 9.5V10.7C5 11.5525 5.00058 12.1467 5.03838 12.6093C5.07547 13.0632 5.1446 13.324 5.24524 13.5215C5.46095 13.9448 5.80516 14.289 6.22852 14.5048C6.42604 14.6054 6.68681 14.6745 7.14068 14.7116C7.60331 14.7494 8.19755 14.75 9.05 14.75H12.3557C12.7407 14.75 12.8759 14.749 12.9818 14.738C14.0411 14.6283 14.8783 13.7911 14.988 12.7318C14.999 12.6259 15 12.4907 15 12.1057V9.5H5Z" />
                                    </svg>
                                    <?php echo $program['date']; ?> | <?php echo $program['time']; ?>
                                </div>
                                <?php if ($program['countdown']): ?>
                                    <div class="card-event_countdown">
                                        <?php echo $program['countdown']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="card-event_address d-flex justify-content-between gap-1">
                                <div class="flex-fill text-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 11C11.3807 11 12.5 9.88071 12.5 8.5C12.5 7.11929 11.3807 6 10 6C8.61929 6 7.5 7.11929 7.5 8.5C7.5 9.88071 8.61929 11 10 11ZM10 9.5C10.5523 9.5 11 9.05228 11 8.5C11 7.94772 10.5523 7.5 10 7.5C9.44772 7.5 9 7.94772 9 8.5C9 9.05228 9.44772 9.5 10 9.5Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82655 16H5.75C5.33579 16 5 16.3358 5 16.75C5 17.1642 5.33579 17.5 5.75 17.5H14.25C14.6642 17.5 15 17.1642 15 16.75C15 16.3358 14.6642 16 14.25 16H11.1734C11.196 15.98 11.219 15.9596 11.2424 15.9387C11.707 15.5229 12.3273 14.9219 12.9495 14.1805C14.1737 12.7217 15.5 10.6071 15.5 8.2267C15.5 5.06038 13.1721 2.75 10 2.75C6.82792 2.75 4.5 5.06038 4.5 8.2267C4.5 10.6071 5.82627 12.7217 7.0505 14.1805C7.6727 14.9219 8.29304 15.5229 8.75765 15.9387C8.781 15.9596 8.80398 15.98 8.82655 16ZM10 4.25C7.64924 4.25 6 5.8959 6 8.2267C6 10.073 7.04873 11.845 8.1995 13.2162C8.7648 13.8898 9.33196 14.4397 9.75798 14.8209C9.84521 14.899 9.9263 14.9698 10 15.033C10.0737 14.9698 10.1548 14.899 10.242 14.8209C10.668 14.4397 11.2352 13.8898 11.8005 13.2162C12.9513 11.845 14 10.073 14 8.2267C14 5.8959 12.3508 4.25 10 4.25Z" />
                                    </svg>
                                    <?php echo $program['location']; ?>
                                </div>
                                <div class="flex-fill text-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.70484 5.49369C7.59707 5.1973 7.31538 5 7 5C6.68462 5 6.40293 5.1973 6.29516 5.49369L4.29516 10.9937C4.1536 11.383 4.35442 11.8133 4.74369 11.9548C5.13297 12.0964 5.56329 11.8956 5.70484 11.5063L5.89178 10.9922C5.92711 10.9974 5.96325 11 6 11H8.11104L8.29516 11.5063C8.43671 11.8956 8.86703 12.0964 9.25631 11.9548C9.64558 11.8133 9.8464 11.383 9.70484 10.9937L7.70484 5.49369ZM7 7.94463L7.56559 9.5H6.43441L7 7.94463Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.25 8.25L15.1493 8.25C15.1405 8.32198 15.1296 8.40058 15.1161 8.4849C15.049 8.90511 14.9167 9.47895 14.6539 10.0904C14.4652 10.5293 14.2077 10.9892 13.8598 11.4243C14.1545 11.5875 14.491 11.7241 14.8759 11.824C15.2768 11.9281 15.5175 12.3374 15.4135 12.7384C15.3094 13.1393 14.9 13.38 14.4991 13.2759C13.7974 13.0938 13.2099 12.8168 12.7188 12.4826C12.2276 12.8168 11.6401 13.0938 10.9384 13.2759C10.5375 13.38 10.1281 13.1393 10.024 12.7384C9.92 12.3374 10.1607 11.9281 10.5616 11.824C10.9465 11.7241 11.283 11.5875 11.5777 11.4243C11.2298 10.9892 10.9723 10.5293 10.7836 10.0904C10.5208 9.47895 10.3885 8.90511 10.3214 8.4849C10.3079 8.40057 10.297 8.32197 10.2881 8.24999H10.25C9.83576 8.24999 9.49997 7.9142 9.49998 7.49999C9.49998 7.08577 9.83576 6.74999 10.25 6.74999L12 6.74999V6C12 5.58579 12.3358 5.25 12.75 5.25C13.1642 5.25 13.5 5.58579 13.5 6V6.75L15.25 6.75C15.6642 6.75 16 7.08579 16 7.5C16 7.91422 15.6642 8.25 15.25 8.25ZM11.8029 8.24999C11.856 8.58135 11.96 9.02884 12.1617 9.49798C12.2984 9.81595 12.4785 10.1423 12.7188 10.4501C12.959 10.1423 13.1391 9.81595 13.2758 9.49798C13.4775 9.02885 13.5815 8.58136 13.6346 8.25L11.8029 8.24999Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5 15.75H10.6213L9.06066 17.3107C8.63166 17.7397 7.98649 17.868 7.42597 17.6358C6.86546 17.4036 6.5 16.8567 6.5 16.25V15.75H5.5C3.567 15.75 2 14.183 2 12.25V6.25C2 4.317 3.567 2.75 5.5 2.75H14.5C16.433 2.75 18 4.317 18 6.25V12.25C18 14.183 16.433 15.75 14.5 15.75ZM8 16.25L10 14.25H14.5C15.6046 14.25 16.5 13.3546 16.5 12.25V6.25C16.5 5.14543 15.6046 4.25 14.5 4.25H5.5C4.39543 4.25 3.5 5.14543 3.5 6.25V12.25C3.5 13.3546 4.39543 14.25 5.5 14.25H8V16.25Z" />
                                    </svg>
                                    <?php echo $program['language']; ?>
                                </div>
                            </div>

                        </div>
                        <div class="card-event_button">
                            <div class="button-group">
                                    <a href="<?php echo $program['permalink']; ?>" class="btn-register">
                                        <?php if($program['badge']): ?>
                                            <span class="badge"><?php echo $program['badge']; ?></span>
                                        <?php endif; ?>
                                        <?php echo $program['register_text']; ?>
                                    </a>
                                    <a href="/chuong-trinh-dao-tao/" class="btn-outline">GIỚI THIỆU</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

</section>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/ongoing-training.js"></script>
