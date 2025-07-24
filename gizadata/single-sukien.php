<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        // Lấy ảnh bìa của bài viết sự kiện
        $banner_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if (!$banner_image) {
            $banner_image = get_template_directory_uri() . '/images/default-banner.jpg';
        }

        ?>
        <div class="noidungbaiviet">
            <div class="single-banner" style="background-image: url('<?php echo esc_url($banner_image); ?>');">
                <div class="overlay"></div>
                <div class="banner-content">
                    <div class="breadcrumb-wrapper">
                        <?php viod_breadcrumb(); ?>
                    </div>
                    
                        <!-- <span class="post-date"><?php echo get_the_date(); ?> | By <?php the_author(); ?></span> -->
                        <!-- <h1 class="post-title"><?php the_title(); ?></h1> -->

                    <div class="ttsk">
                        <div class="a">
                            <div class="td1">
                                <?php echo get_field('tieudephu'); ?>
                            </div>
                            <div class="td2">
                                <?php echo get_field('tieudechinh'); ?>
                            </div>
                        </div>
                        <div class="b">
                            <div class="tit">
                                Date and time
                            </div>
                            <div class="bb">
                                <div class="ic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 3.5C7.75 3.08579 7.41421 2.75 7 2.75C6.58579 2.75 6.25 3.08579 6.25 3.5V3.90665C6.00413 3.96421 5.77128 4.04472 5.54754 4.15873C4.84193 4.51825 4.26825 5.09193 3.90873 5.79754C3.68239 6.24175 3.58803 6.7219 3.54336 7.26853C3.49999 7.79944 3.49999 8.45505 3.5 9.26789V10.7321C3.49999 11.5449 3.49999 12.2006 3.54336 12.7315C3.58803 13.2781 3.68239 13.7582 3.90873 14.2025C4.26825 14.9081 4.84193 15.4817 5.54754 15.8413C5.99175 16.0676 6.4719 16.162 7.01853 16.2066C7.54944 16.25 8.20505 16.25 9.01788 16.25L12.4013 16.25C12.7236 16.25 12.943 16.2501 13.1364 16.23C14.9018 16.0472 16.2972 14.6518 16.48 12.8864C16.5001 12.693 16.5 12.4736 16.5 12.1514L16.5 9.26788C16.5 8.45505 16.5 7.79944 16.4566 7.26853C16.412 6.7219 16.3176 6.24175 16.0913 5.79754C15.7317 5.09193 15.1581 4.51825 14.4525 4.15873C14.2287 4.04472 13.9959 3.96421 13.75 3.90665V3.5C13.75 3.08579 13.4142 2.75 13 2.75C12.5858 2.75 12.25 3.08579 12.25 3.5V3.75859C11.8765 3.74999 11.456 3.75 10.9821 3.75H9.0179C8.54396 3.75 8.12348 3.74999 7.75 3.75859V3.5ZM6.22852 5.49524C6.42604 5.3946 6.68681 5.32547 7.14068 5.28838C7.60331 5.25058 8.19755 5.25 9.05 5.25H10.95C11.8025 5.25 12.3967 5.25058 12.8593 5.28838C13.3132 5.32547 13.574 5.3946 13.7715 5.49524C14.1948 5.71095 14.5391 6.05516 14.7548 6.47852C14.8554 6.67604 14.9245 6.9368 14.9616 7.39068C14.9764 7.57123 14.9855 7.77183 14.991 8H5.00895C5.01455 7.77183 5.02363 7.57123 5.03838 7.39068C5.07547 6.9368 5.1446 6.67604 5.24524 6.47852C5.46095 6.05516 5.80516 5.71095 6.22852 5.49524ZM5 9.5V10.7C5 11.5525 5.00058 12.1467 5.03838 12.6093C5.07547 13.0632 5.1446 13.324 5.24524 13.5215C5.46095 13.9448 5.80516 14.289 6.22852 14.5048C6.42604 14.6054 6.68681 14.6745 7.14068 14.7116C7.60331 14.7494 8.19755 14.75 9.05 14.75H12.3557C12.7407 14.75 12.8759 14.749 12.9818 14.738C14.0411 14.6283 14.8783 13.7911 14.988 12.7318C14.999 12.6259 15 12.4907 15 12.1057V9.5H5Z" fill="#082136"/>
                                    </svg>
                                </div>
                                <div class="tt">
                                    <?php echo get_field('ngay'); ?> | <?php echo get_field('gio'); ?>
                                </div>
                            </div>
                            <div class="bb">
                                <div class="ic">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 11C11.3807 11 12.5 9.88071 12.5 8.5C12.5 7.11929 11.3807 6 10 6C8.61929 6 7.5 7.11929 7.5 8.5C7.5 9.88071 8.61929 11 10 11ZM10 9.5C10.5523 9.5 11 9.05228 11 8.5C11 7.94772 10.5523 7.5 10 7.5C9.44772 7.5 9 7.94772 9 8.5C9 9.05228 9.44772 9.5 10 9.5Z" fill="#082136"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82655 16H5.75C5.33579 16 5 16.3358 5 16.75C5 17.1642 5.33579 17.5 5.75 17.5H14.25C14.6642 17.5 15 17.1642 15 16.75C15 16.3358 14.6642 16 14.25 16H11.1734C11.196 15.98 11.219 15.9596 11.2424 15.9387C11.707 15.5229 12.3273 14.9219 12.9495 14.1805C14.1737 12.7217 15.5 10.6071 15.5 8.2267C15.5 5.06038 13.1721 2.75 10 2.75C6.82792 2.75 4.5 5.06038 4.5 8.2267C4.5 10.6071 5.82627 12.7217 7.0505 14.1805C7.6727 14.9219 8.29304 15.5229 8.75765 15.9387C8.781 15.9596 8.80398 15.98 8.82655 16ZM10 4.25C7.64924 4.25 6 5.8959 6 8.2267C6 10.073 7.04873 11.845 8.1995 13.2162C8.7648 13.8898 9.33196 14.4397 9.75798 14.8209C9.84521 14.899 9.9263 14.9698 10 15.033C10.0737 14.9698 10.1548 14.899 10.242 14.8209C10.668 14.4397 11.2352 13.8898 11.8005 13.2162C12.9513 11.845 14 10.073 14 8.2267C14 5.8959 12.3508 4.25 10 4.25Z" fill="#082136"/>
                                    </svg>
                                </div>
                                <div class="tt">
                                    <?php echo get_field('vitri'); ?>
                                </div>
                            </div>

                            <div class="tit2">
                                Event location
                            </div>
                            <div class="map">
                                <?php echo get_field('googlemap'); ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="post-content-wrapper">
                <div class="post-content">

                    <div class="anhbiabaiviet">
                        <img src="<?php echo get_field('bannersk'); ?>" alt="">
                    </div>


                    <div class="ttdiengia">
                        <div class="tit">
                            GÓP MẶT CÙNG
                        </div>

                        <div class="dsdiengia">
                            <?php if( have_rows('diengia') ):
                                while( have_rows('diengia') ): the_row();
                                ?>
                                <div class="boxdiengia">
                                    <div class="hinhdiengia">
                                        <img src="<?php echo get_sub_field('anh'); ?>" alt="">
                                    </div>
                                    <div class="vitri">
                                        <?php echo get_sub_field('vitri'); ?>
                                    </div>
                                    <div class="ten">
                                        <?php echo get_sub_field('ten'); ?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>



                    <div class="ndbaiviet">
                        <?php the_content(); ?>
                    </div>

                    <?php if (has_tag()) { ?>
                        <div class="tukhoa">
                            <h3>Tags</h3>
                            <div class="dstukhoa">
                                <?php the_tags('<span class="tag">', '</span><span class="tag">', '</span>'); ?>
                            </div>
                        </div>
                    <?php } ?>


                    <div class="nutchiasebaiviet">
                        <h3>Chia sẻ bài viết</h3>
                        <div class="mxh">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="dangkysukien">
                <div class="boxdangkysk">
                    <div class="tit">
                        Đăng ký tham gia sự kiện
                    </div>
                    <div class="mota">
                        <a href="/dang-ky">Trở thành thành viên</a> VIOD để có được các ưu đãi !!!
                    </div>

                    <div class="box">
                        <?php echo apply_shortcodes( '[contact-form-7 id="0347dc1" title="đăng ký sự kiện"]' ); ?>  
                    </div>
                </div>
            </div>



            <div class="thongtinlienhe">
                <div class="main">

                    <div class="tit">
                        NHỮNG SỰ KIỆN KHÁC
                    </div>

                    
                    <div class="nhungsukienkhac">
                        <div class="sukien-grid">
                            <?php
                            $related_events = new WP_Query(array(
                                'post_type' => 'sukien',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                                'post__not_in' => array(get_the_ID()),
                                'orderby' => 'rand'
                            ));

                            if ($related_events->have_posts()) :
                                while ($related_events->have_posts()) : $related_events->the_post();
                                    ?>
                                    <div class="sukien-card">
                                        <a href="<?php the_permalink(); ?>">
                                        <div class="sukien-thumb 2">
                                        <?php 
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium_large');
                                            } else {
                                                $image_url = get_template_directory_uri() . '/images/default.png';
                                                echo '<img src="' . $image_url . '" alt="' . esc_attr(get_the_title()) . '" style="width: 100%; height: auto; display: block;">';
                                            }
                                        ?>
                                </div>
                                        </a>

                                        <div class="sukien-tags">
                                            <?php
                                            $tags = get_the_terms(get_the_ID(), 'the_loai_sukien');
                                            if ($tags) {
                                                foreach ($tags as $tag) {
                                                    echo '<span class="tag">' . esc_html($tag->name) . '</span> ';
                                                }
                                            }
                                            ?>
                                        </div>

                                        <h3 class="sukien-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>

                                        <div class="sukien-info">
                                            <div class="bb">
                                                <div class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.75 3.5C7.75 3.08579 7.41421 2.75 7 2.75C6.58579 2.75 6.25 3.08579 6.25 3.5V3.90665C6.00413 3.96421 5.77128 4.04472 5.54754 4.15873C4.84193 4.51825 4.26825 5.09193 3.90873 5.79754C3.68239 6.24175 3.58803 6.7219 3.54336 7.26853C3.49999 7.79944 3.49999 8.45505 3.5 9.26789V10.7321C3.49999 11.5449 3.49999 12.2006 3.54336 12.7315C3.58803 13.2781 3.68239 13.7582 3.90873 14.2025C4.26825 14.9081 4.84193 15.4817 5.54754 15.8413C5.99175 16.0676 6.4719 16.162 7.01853 16.2066C7.54944 16.25 8.20505 16.25 9.01788 16.25L12.4013 16.25C12.7236 16.25 12.943 16.2501 13.1364 16.23C14.9018 16.0472 16.2972 14.6518 16.48 12.8864C16.5001 12.693 16.5 12.4736 16.5 12.1514L16.5 9.26788C16.5 8.45505 16.5 7.79944 16.4566 7.26853C16.412 6.7219 16.3176 6.24175 16.0913 5.79754C15.7317 5.09193 15.1581 4.51825 14.4525 4.15873C14.2287 4.04472 13.9959 3.96421 13.75 3.90665V3.5C13.75 3.08579 13.4142 2.75 13 2.75C12.5858 2.75 12.25 3.08579 12.25 3.5V3.75859C11.8765 3.74999 11.456 3.75 10.9821 3.75H9.0179C8.54396 3.75 8.12348 3.74999 7.75 3.75859V3.5ZM6.22852 5.49524C6.42604 5.3946 6.68681 5.32547 7.14068 5.28838C7.60331 5.25058 8.19755 5.25 9.05 5.25H10.95C11.8025 5.25 12.3967 5.25058 12.8593 5.28838C13.3132 5.32547 13.574 5.3946 13.7715 5.49524C14.1948 5.71095 14.5391 6.05516 14.7548 6.47852C14.8554 6.67604 14.9245 6.9368 14.9616 7.39068C14.9764 7.57123 14.9855 7.77183 14.991 8H5.00895C5.01455 7.77183 5.02363 7.57123 5.03838 7.39068C5.07547 6.9368 5.1446 6.67604 5.24524 6.47852C5.46095 6.05516 5.80516 5.71095 6.22852 5.49524ZM5 9.5V10.7C5 11.5525 5.00058 12.1467 5.03838 12.6093C5.07547 13.0632 5.1446 13.324 5.24524 13.5215C5.46095 13.9448 5.80516 14.289 6.22852 14.5048C6.42604 14.6054 6.68681 14.6745 7.14068 14.7116C7.60331 14.7494 8.19755 14.75 9.05 14.75H12.3557C12.7407 14.75 12.8759 14.749 12.9818 14.738C14.0411 14.6283 14.8783 13.7911 14.988 12.7318C14.999 12.6259 15 12.4907 15 12.1057V9.5H5Z" fill="#082136"/>
                                                    </svg>
                                                </div>
                                                <div class="tt">
                                                    <?php echo get_field('ngay'); ?> | <?php echo get_field('gio'); ?>
                                                </div>
                                            </div>
                                            <div class="bb">
                                                <div class="ic">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 11C11.3807 11 12.5 9.88071 12.5 8.5C12.5 7.11929 11.3807 6 10 6C8.61929 6 7.5 7.11929 7.5 8.5C7.5 9.88071 8.61929 11 10 11ZM10 9.5C10.5523 9.5 11 9.05228 11 8.5C11 7.94772 10.5523 7.5 10 7.5C9.44772 7.5 9 7.94772 9 8.5C9 9.05228 9.44772 9.5 10 9.5Z" fill="#082136"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82655 16H5.75C5.33579 16 5 16.3358 5 16.75C5 17.1642 5.33579 17.5 5.75 17.5H14.25C14.6642 17.5 15 17.1642 15 16.75C15 16.3358 14.6642 16 14.25 16H11.1734C11.196 15.98 11.219 15.9596 11.2424 15.9387C11.707 15.5229 12.3273 14.9219 12.9495 14.1805C14.1737 12.7217 15.5 10.6071 15.5 8.2267C15.5 5.06038 13.1721 2.75 10 2.75C6.82792 2.75 4.5 5.06038 4.5 8.2267C4.5 10.6071 5.82627 12.7217 7.0505 14.1805C7.6727 14.9219 8.29304 15.5229 8.75765 15.9387C8.781 15.9596 8.80398 15.98 8.82655 16ZM10 4.25C7.64924 4.25 6 5.8959 6 8.2267C6 10.073 7.04873 11.845 8.1995 13.2162C8.7648 13.8898 9.33196 14.4397 9.75798 14.8209C9.84521 14.899 9.9263 14.9698 10 15.033C10.0737 14.9698 10.1548 14.899 10.242 14.8209C10.668 14.4397 11.2352 13.8898 11.8005 13.2162C12.9513 11.845 14 10.073 14 8.2267C14 5.8959 12.3508 4.25 10 4.25Z" fill="#082136"/>
                                                    </svg>
                                                </div>
                                                <div class="tt">
                                                    <?php echo get_field('vitri'); ?>
                                                </div>
                                            </div>        
                                        </div>

                                        <div class="sukien-btn">
                                            <a href="<?php the_permalink(); ?>">ĐĂNG KÝ NGAY</a>
                                        </div>
                                    </div>
                                    
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>Không có sự kiện khác.</p>';
                            endif;
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php
    endwhile;
else :
    echo '<p>No content found.</p>';
endif;

get_footer();
?>
