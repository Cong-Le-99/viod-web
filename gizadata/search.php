<?php
/*
Template Name: Tìm kiếm
*/
get_header();

// Get the current category object
$category = get_queried_object();
$banner_image = get_term_meta($category->term_id, 'category_image', true);
$default_image = get_template_directory_uri() . '/images/default-banner.jpg';
$banner_image = $banner_image ? $banner_image : $default_image;
$description = category_description($category->term_id);
?>

<div class="member-certificate post-archive bg-post-archive custom-banner-bg">
    <h1 class="d-none"><?php echo single_cat_title('', false); ?></h1>
    <div class="banner">
        <!-- Breadcrumb chỉ hiện trên desktop -->
        <nav class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="d-none d-md-block" href="<?php echo home_url(); ?>">Home</a>
                    <a class="d-block d-md-none" href="<?php echo home_url(); ?>" style="width: 20px; height: 20px;">
                        <img class="w-1 h-1" src="<?php echo get_template_directory_uri(); ?>/images/home.svg" alt="">
                    </a>
                </li>
                <li class="breadcrumb-item active">Tìm kiếm</li>
            </ol>
        </nav>
        <div class="banner-content px-4">
            <h2 class="title light">Tìm kiếm</h2>
           
        </div>
    </div>
</div>
<section class="post-archive-home post-search-page mb-5">
    <div class="container">
        <?php
        $keyword = '';
        if ( isset($_GET['search']) ) {
            $keyword = sanitize_text_field( wp_unslash( $_GET['search'] ) );
        } 
        if ( $keyword === '' ) {
            $permalink_path = rtrim( parse_url( get_permalink(), PHP_URL_PATH ), '/' );
            $request_path   = rtrim( parse_url( ( isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '' ), PHP_URL_PATH ), '/' );
            if ( $permalink_path && $request_path && strpos( $request_path, $permalink_path ) === 0 ) {
                $rest = trim( substr( $request_path, strlen( $permalink_path ) ), '/' );
                if ( $rest !== '' ) {
                    $keyword = sanitize_text_field( urldecode( $rest ) );
                }
            }
        }
        ?>
        <form class="mobile-search-form" action="<?php echo esc_url( get_permalink() ); ?>" method="get">
            <div class="search-input-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.097 13.5112C10.8663 14.4456 9.3313 15.0002 7.66683 15.0002C3.61674 15.0002 0.333496 11.7169 0.333496 7.66683C0.333496 3.61674 3.61674 0.333496 7.66683 0.333496C11.7169 0.333496 15.0002 3.61674 15.0002 7.66683C15.0002 9.3313 14.4456 10.8663 13.5112 12.097L17.3739 15.9597C17.7645 16.3502 17.7645 16.9834 17.3739 17.3739C16.9834 17.7645 16.3502 17.7645 15.9597 17.3739L12.097 13.5112ZM13.0002 7.66683C13.0002 10.6123 10.6123 13.0002 7.66683 13.0002C4.72131 13.0002 2.3335 10.6123 2.3335 7.66683C2.3335 4.72131 4.72131 2.3335 7.66683 2.3335C10.6123 2.3335 13.0002 4.72131 13.0002 7.66683Z" fill="#082136" />
                </svg>
                <input type="search" name="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm" value="<?php echo esc_attr( $keyword ); ?>">
            </div>
        </form>

            <?php if ( $keyword !== '' ) : ?>
                <?php
                $search_query = new WP_Query([
                    'post_type'      => 'post',
                    's'              => $keyword,
                    'posts_per_page' => 10,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ]);
                ?>
                <?php if ( $search_query->have_posts() ) : ?>
                    <div class="search-summary mb-3 mt-3"><?php printf( 'Tìm thấy %d kết quả cho "%s"', (int) $search_query->found_posts, esc_html( $keyword ) ); ?></div>
                    <div class="post-archive-grid post-archive-home-grid">
                    <?php while ( $search_query->have_posts() ) : $search_query->the_post();
                        $image_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( ! $image_url ) {
                            $image_url = get_template_directory_uri() . '/images/default.png';
                        }
                        $categories = get_the_category();
                    ?>
                    <article class="post-card large">
                        <div class="post-card-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            </a>
                        </div>
                        <div class="post-card-content">
                            <?php if ( ! empty( $categories ) ) : ?>
                            <div class="post-card-tags">
                                <?php foreach ( $categories as $cat ) : ?>
                                    <a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="post-card-tag"><?php echo esc_html( $cat->name ); ?></a>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>
                            <div class="post-card-meta"><?php echo esc_html( get_the_date('d M Y') ); ?> | By <?php the_author(); ?></div>
                            <h2 class="post-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-card-excerpt">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="post-card-readmore">ĐỌC THÊM →</a>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <div class="d-flex post-search-page  justify-content-center align-items-center flex-column">
                        <p class="search-no-results">Không tìm thấy kết quả phù hợp.</p>
                      
                    </div>
                <?php endif; ?>
            <?php endif; ?>
  
    </div>
</section>

<script>
(function() {
  // Chỉ dùng tham số `search`. Không can thiệp `s` nữa.
})();
</script>


<?php get_footer(); ?>