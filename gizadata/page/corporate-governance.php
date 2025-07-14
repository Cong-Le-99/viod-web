<?php
/*
Template Name: Tài liệu về quản trị công ty
*/
get_header();
?>
<div class="member-certificate ">
    <section class="corporate-governance">
        <h1 class="d-none"><?php the_title(); ?></h1>
        <div class="banner bg-corporate-governance">
            <!-- Breadcrumb chỉ hiện trên desktop -->
            <nav class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="d-none d-md-block" href="<?php echo home_url(); ?>">Home</a>
                        <a class="d-block d-md-none" href="<?php echo home_url(); ?>" style="width: 20px; height: 20px;">
                            <img class="w-1 h-1" src="<?php echo get_template_directory_uri(); ?>/images/home.svg" alt="">
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Tài liệu về qtct</li>
                </ol>
            </nav>
            <div class="banner-content">
                <h2 class="title light">tài liệu về quản trị công ty</h2>
                <p class="text-base light text-center">Quản trị Công ty tốt là nền tảng vững chắc cho sự thành công cho doanh nghiệp. <br class="d-none d-md-block"> Chương trình Chứng nhận Thành viên Hội đồng Quản trị (DCP) </p>
            </div>
        </div>
    </section>
</div>
<?php get_template_part('components/library-governance-ipreport'); ?>
<?php get_template_part('components/viod-directors-bulletin'); ?>
<?php get_template_part('components/legal-docs'); ?>
<?php get_template_part('components/linked-websites-slider'); ?>
<?php        
get_footer();
?>

