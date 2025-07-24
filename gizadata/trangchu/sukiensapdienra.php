<?php
// Mảng dữ liệu sự kiện sắp diễn ra
$upcoming_events = [
    [
        'tags' => ['EVENT', 'NETWORKING'],
        'title' => '[Event] HỘI THẢO CHUYÊN ĐỀ',
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'location' => 'Hanoi',
        'link' => '#'
    ],
    [
        'tags' => ['EVENT', 'NETWORKING'],
        'title' => '[Event] DIRECTOR TALK #22',
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'location' => 'Hanoi',
        'link' => '#'
    ],
    [
        'tags' => ['EVENT', 'NETWORKING'],
        'title' => '[Event] MEMBER NETWORKING: Thuế đối ứng',
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'location' => 'Hanoi',
        'link' => '#'
    ],
    [
        'tags' => ['EVENT', 'NETWORKING'],
        'title' => '[Event] CHƯƠNG TRÌNH CHỨNG NHẬN THÀNH VIÊN HĐQT',
        'date' => '16 Apr 2025',
        'time' => '3:00 PM - 6:00 PM',
        'location' => 'Hanoi',
        'link' => '#'
    ]
];
?>

<div class="sukiensapdienra">
    <div class="main">
        <div class="event-details ">
            <h2>SỰ KIỆN SẮP DIỄN RA</h2>
            <p>Được tổ chức thường xuyên nhằm nâng cao nhận thức về các thông lệ QTCT tốt và cập nhật cho các thành viên HĐQT những xu hướng mới nhất trong QTCT.</p>
            <a href="/su-kien/" class="event-link">XEM THÊM →</a>
            <div class="event-cards">
                <?php foreach ($upcoming_events as $event): ?>
                    <div class="post-card-border position-relative card-event card-event-session card-hover">
                      
                        <div class="card-event_content">
                            <div class="card-event_tag">
                                <?php foreach($event['tags'] as $tag): ?>
                                    <span><?php echo $tag; ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="card-event_title card-event_title-event">
                                <?php echo $event['title']; ?>
                            </div>
                            <div class="card-event_time">
                                <div class="a">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 3.5C7.75 3.08579 7.41421 2.75 7 2.75C6.58579 2.75 6.25 3.08579 6.25 3.5V3.90665C6.00413 3.96421 5.77128 4.04472 5.54754 4.15873C4.84193 4.51825 4.26825 5.09193 3.90873 5.79754C3.68239 6.24175 3.58803 6.7219 3.54336 7.26853C3.49999 7.79944 3.49999 8.45505 3.5 9.26789V10.7321C3.49999 11.5449 3.49999 12.2006 3.54336 12.7315C3.58803 13.2781 3.68239 13.7582 3.90873 14.2025C4.26825 14.9081 4.84193 15.4817 5.54754 15.8413C5.99175 16.0676 6.4719 16.162 7.01853 16.2066C7.54944 16.25 8.20505 16.25 9.01788 16.25L12.4013 16.25C12.7236 16.25 12.943 16.2501 13.1364 16.23C14.9018 16.0472 16.2972 14.6518 16.48 12.8864C16.5001 12.693 16.5 12.4736 16.5 12.1514L16.5 9.26788C16.5 8.45505 16.5 7.79944 16.4566 7.26853C16.412 6.7219 16.3176 6.24175 16.0913 5.79754C15.7317 5.09193 15.1581 4.51825 14.4525 4.15873C14.2287 4.04472 13.9959 3.96421 13.75 3.90665V3.5C13.75 3.08579 13.4142 2.75 13 2.75C12.5858 2.75 12.25 3.08579 12.25 3.5V3.75859C11.8765 3.74999 11.456 3.75 10.9821 3.75H9.0179C8.54396 3.75 8.12348 3.74999 7.75 3.75859V3.5ZM6.22852 5.49524C6.42604 5.3946 6.68681 5.32547 7.14068 5.28838C7.60331 5.25058 8.19755 5.25 9.05 5.25H10.95C11.8025 5.25 12.3967 5.25058 12.8593 5.28838C13.3132 5.32547 13.574 5.3946 13.7715 5.49524C14.1948 5.71095 14.5391 6.05516 14.7548 6.47852C14.8554 6.67604 14.9245 6.9368 14.9616 7.39068C14.9764 7.57123 14.9855 7.77183 14.991 8H5.00895C5.01455 7.77183 5.02363 7.57123 5.03838 7.39068C5.07547 6.9368 5.1446 6.67604 5.24524 6.47852C5.46095 6.05516 5.80516 5.71095 6.22852 5.49524ZM5 9.5V10.7C5 11.5525 5.00058 12.1467 5.03838 12.6093C5.07547 13.0632 5.1446 13.324 5.24524 13.5215C5.46095 13.9448 5.80516 14.289 6.22852 14.5048C6.42604 14.6054 6.68681 14.6745 7.14068 14.7116C7.60331 14.7494 8.19755 14.75 9.05 14.75H12.3557C12.7407 14.75 12.8759 14.749 12.9818 14.738C14.0411 14.6283 14.8783 13.7911 14.988 12.7318C14.999 12.6259 15 12.4907 15 12.1057V9.5H5Z" />
                                    </svg>
                                    <?php echo $event['date']; ?>
                                </div>
                            </div>
                            <div class="card-event_address d-flex justify-content-between gap-1">
                                <div class="flex-fill text-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" >
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 11C11.3807 11 12.5 9.88071 12.5 8.5C12.5 7.11929 11.3807 6 10 6C8.61929 6 7.5 7.11929 7.5 8.5C7.5 9.88071 8.61929 11 10 11ZM10 9.5C10.5523 9.5 11 9.05228 11 8.5C11 7.94772 10.5523 7.5 10 7.5C9.44772 7.5 9 7.94772 9 8.5C9 9.05228 9.44772 9.5 10 9.5Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82655 16H5.75C5.33579 16 5 16.3358 5 16.75C5 17.1642 5.33579 17.5 5.75 17.5H14.25C14.6642 17.5 15 17.1642 15 16.75C15 16.3358 14.6642 16 14.25 16H11.1734C11.196 15.98 11.219 15.9596 11.2424 15.9387C11.707 15.5229 12.3273 14.9219 12.9495 14.1805C14.1737 12.7217 15.5 10.6071 15.5 8.2267C15.5 5.06038 13.1721 2.75 10 2.75C6.82792 2.75 4.5 5.06038 4.5 8.2267C4.5 10.6071 5.82627 12.7217 7.0505 14.1805C7.6727 14.9219 8.29304 15.5229 8.75765 15.9387C8.781 15.9596 8.80398 15.98 8.82655 16ZM10 4.25C7.64924 4.25 6 5.8959 6 8.2267C6 10.073 7.04873 11.845 8.1995 13.2162C8.7648 13.8898 9.33196 14.4397 9.75798 14.8209C9.84521 14.899 9.9263 14.9698 10 15.033C10.0737 14.9698 10.1548 14.899 10.242 14.8209C10.668 14.4397 11.2352 13.8898 11.8005 13.2162C12.9513 11.845 14 10.073 14 8.2267C14 5.8959 12.3508 4.25 10 4.25Z" />
                                    </svg>
                                    <?php echo $event['location']; ?>
                                </div>
                                
                            </div>
                            <a href="/su-kien/" class="post-card-readmore">ĐỌC THÊM →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="event-image">
            <img src="https://viod.1994.cloud/wp-content/uploads/2025/05/image_Rectangle-1_afLn.webp" alt="Event Image">
        </div>
    </div>
</div>