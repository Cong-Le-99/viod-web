<div class="tintuctrangchu">
    <div class="main">
        <div class="tit">
            <h3>TIN TỨC MỚI NHẤT về qtct</h3>
        </div>
        <div class="mota">
            Trusted partner of Board of Directors, business leaders and experts in the journey to improve governance capacity.
        </div>

        <div class="dsbv">
            <?php
            $args = array(
                'numberposts' => 3,
                'post_status' => 'publish',
            );
            $recent_posts = wp_get_recent_posts($args);
            $counter = 1;
            foreach ($recent_posts as $post) :
                $title = $post['post_title'];
                $content = wp_trim_words($post['post_content'], 10, '...');
                $date = get_the_date('d M Y', $post['ID']);
                $author = get_the_author_meta('display_name', $post['post_author']);
                $thumb = get_the_post_thumbnail_url($post['ID'], 'large');
                $permalink = get_permalink($post['ID']);
                $class = ($counter % 2 == 0) ? 'bvtt chan' : 'bvtt';
            ?>
            <div class="<?php echo $class; ?>">
                <div class="anh">
                    <a href="<?php echo $permalink; ?>">
                        <img src="<?php echo $thumb; ?>" alt="<?php echo $title; ?>">
                    </a>
                </div>
                <div class="ttbv">
                    <div class="tag">
                        <span>Event</span>
                        <span>Networking</span>
                    </div>
                    <div class="meta"><?php echo $date; ?> | By <?php echo $author; ?></div>
                    <div class="tieude">
                        <a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
                    </div>
                    <div class="ttt"><?php echo $content; ?></div>
                    <a href="" class="nutxemthem">ĐỌC THÊM →</a>
                </div>
            </div>
            <?php $counter++; endforeach; ?>
        </div>
    </div>
</div>

