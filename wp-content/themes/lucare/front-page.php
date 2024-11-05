<?php
/*
Template Name: Front Page
*/

get_header();
?>


<main class="main">

    <div class="hero">
        <div class="swiper hero__slider">
            <!-- Additional required wrapper -->
            <?php
                $hero_image_one = get_field('hero_image_one');
                $hero_image_two = get_field('hero_image_two');
                $hero_image_three = get_field('hero_image_three');

                $hero_title_one = get_field('hero_title_one');
                $hero_title_two = get_field('hero_title_two');
                $hero_title_three = get_field('hero_title_three');
            ?>
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php if ($hero_image_one) : ?>
                        <div class="swiper-slide">
                            <div class="hero__box">
                                <div class="hero__bg">
                                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    echo wp_get_attachment_image($hero_image_one, $size, '', [
                                        'loading' => 'lazy'
                                    ]);
                                    ?>
                                </div>
                                <div class="hero__title-inner">
                                    <p class="hero__text">
                                        welcome to best car wash
                                    </p>
                                    <?php if ($hero_title_one) : ?>
                                        <h1 class="hero__title">
                                            <?php echo esc_html($hero_title_one) ; ?>
                                        </h1>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($hero_image_two) : ?>
                        <div class="swiper-slide">
                            <div class="hero__box">
                                <div class="hero__bg">
                                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    echo wp_get_attachment_image($hero_image_two, $size, '', [
                                        'loading' => 'lazy'
                                    ]);
                                    ?>
                                </div>
                                <div class="hero__title-inner">
                                    <p class="hero__text">
                                        welcome to best car wash
                                    </p>
                                    <?php if ($hero_title_two) : ?>
                                        <p class="hero__title">
                                            <?php echo esc_html($hero_title_two) ; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($hero_image_three) : ?>
                        <div class="swiper-slide">
                            <div class="hero__box">
                                <div class="hero__bg">
                                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    echo wp_get_attachment_image($hero_image_three, $size, '', [
                                        'loading' => 'lazy'
                                    ]);
                                    ?>
                                </div>
                                <div class="hero__title-inner">
                                    <p class="hero__text">
                                        welcome to best car wash
                                    </p>
                                    <?php if ($hero_title_three) : ?>
                                        <p class="hero__title">
                                            <?php echo esc_html($hero_title_three) ; ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php ?>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <?php
            $about_us_category = get_field('about_us_category');
            if ($about_us_category) : ?>
                <p class="name-category">
                    <?php echo esc_html($about_us_category) ; ?>
                </p>
            <?php endif; ?>

            <div class="about__content-inner">
                <div class="about__content">
                    <?php
                    $about_us_text = get_field('about_us_text');
                    if ($about_us_text) : ?>
                        <div class="about__text">
                            <?php echo $about_us_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $about_us_author = get_field('about_us_author');
                    if ($about_us_author) : ?>
                        <p class="about__author">
                            <?php echo $about_us_author; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <section class="washing-services">
        <div class="washing-services__wrap">
            <div class="washing-services__content">

                <?php
                $about_us_title = get_field('about_us_title');
                $about_us_items = get_field('about_us_items');
                $about_us_image = get_field('about_us_image');
                ?>



                <?php if ($about_us_title) : ?>
                    <h2 class="washing-services__title">
                        <?php echo esc_html($about_us_title); ?>
                    </h2>
                <?php endif; ?>

                <ul class="washing-services__list">
                    <?php foreach ($about_us_items as $item) :
                        $about_us_text = $item['about_us_text'];
                        if ($about_us_text) : ?>
                            <li class="washing-services__item">
                                <?php echo esc_html($about_us_text) ; ?>
                            </li>
                        <?php endif; endforeach; ?>
                </ul>
            </div>

            <div class="washing-services__image">
                <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if ($about_us_image) {
                        echo wp_get_attachment_image($about_us_image, $size, '', [
                            'loading' => 'lazy'
                        ]);
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <?php
            $our_service_category = get_field('our_service_category');
            if ($our_service_category) : ?>
                <p class="name-category">
                    <?php echo esc_html($our_service_category) ; ?>
                </p>
            <?php endif; ?>
            <div class="service__box">
                <?php $our_service_title = get_field('our_service_title');
                    if ($our_service_title) :
                ?>
                    <h2 class="service__title main-title">
                        <?php echo esc_html($our_service_title); ?>
                    </h2>
                    <?php endif; ?>

                <a class="main-button service__btn" href="#">
                    View More
                </a>
            </div>

            <div class="service__wrap">
                <?php
                    $our_service_items = get_field('our_service_items');
                ?>

                <div class="service__images-inner">
                    <ul class="service__images">
                        <?php
                        $countImg = 1;
                        foreach ($our_service_items as $image) :
                            $our_service_image = $image['our_service_image'];
                            if ($our_service_image) : ?>
                                <li class="service__images-item <?php echo $countImg === 1 ? 'active' : ''; ?>" data-images="images-<?php echo $countImg; ?>">
                                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                    if ($our_service_image) {
                                        echo wp_get_attachment_image($our_service_image, $size, '', [
                                            'loading' => 'lazy'
                                        ]);
                                    }
                                    ?>
                                </li>
                            <?php endif; endforeach; ?>
                    </ul>
                </div>

                <ul class="service__content">
                    <?php
                        $count = 1;
                        foreach ($our_service_items as $text) :
                            $our_service_text = $text['our_service_text'];
                            if ($our_service_text) :
                    ?>
                                <li class="service__content-item <?php echo $count === 1 ? 'active' : ''; ?>" data-content="title-<?php echo $count; ?>">
                                  <span>0<?php echo $count; ?></span>  <?php echo esc_html($our_service_text); ?>
                                </li>
                    <?php
                                $count++;
                        endif;
                        endforeach;
                    ?>
                </ul>
            </div>
        </div>

        <div class="gallery__inner">
            <?php
            $gallery = get_field('gallery');
            if ($gallery) : ?>
                <ul class="gallery">
                    <?php foreach ($gallery as $image) : ?>
                        <li class="gallery__item">
                            <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            echo wp_get_attachment_image($image, $size, '', [
                                'loading' => 'lazy'
                            ]);
                            ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>

    <section class="process">
        <div class="container">
            <?php
            $our_process_category = get_field('our_process_category');
            if ($our_process_category) : ?>
                <p class="name-category process__category">
                    <?php echo esc_html($our_process_category) ; ?>
                </p>
            <?php endif; ?>

            <?php
            $our_process_title = get_field('our_process_title');

            if ($our_process_title) : ?>
                <h2 class="process__title main-title">
                    <?php echo esc_html($our_process_title); ?>
                </h2>
            <?php endif; ?>

            <ul class="process__list">
                <?php
                    $our_process_items = get_field('our_process_items');
                    foreach ($our_process_items as $item) :
                        $our_process_num = $item['our_process_num'];
                        $our_process_subtitle = $item['our_process_subtitle'];
                        $our_process_text = $item['our_process_text'];
                        if ($item) :
                ?>
                    <li class="process__item">
                        <p class="process__num">
                            <?php echo esc_html($our_process_num); ?>
                        </p>
                        <p class="process__subtitle">
                            <?php echo esc_html($our_process_subtitle); ?>
                        </p>
                        <div class="process__text">
                            <?php echo $our_process_text; ?>
                        </div>
                    </li>
                <?php endif; endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="carwash">
        <div class="container">
            <?php
            $before_after_category = get_field('before_after_category');
            if ($before_after_category) : ?>
                <p class="name-category">
                    <?php echo esc_html($before_after_category) ; ?>
                </p>
            <?php endif; ?>

            <?php $before_after_title = get_field('before_after_title');
            if ($before_after_title) :
                ?>
                <h2 class="carwash__title main-title">
                    <?php echo esc_html($before_after_title); ?>
                </h2>
            <?php endif; ?>

            <div class="carwash__container" id="before-after-slider">
                <?php
                    $before_image = get_field('before_image');
                    $after_image = get_field('after_image');
                ?>

                <?php if ($before_image) : ?>
                    <div class="carwash__before-image" id="before-image">
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image($before_image, $size, '', [
                            'loading' => 'lazy'
                        ]);
                        ?>
                    </div>
                <?php endif; ?>

                <?php if ($after_image) : ?>
                    <div class="carwash__after-image" id="after-image">
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image($after_image, $size, '', [
                            'loading' => 'lazy'
                        ]);
                        ?>
                    </div>
                <?php endif; ?>

                <div class="carwash__slider" id="resizer">
                    <div class="carwash__slider-button"></div>
                </div>

            </div>
        </div>
    </section>
    
    <div class="reviews">
        <?php
        $reviews_image = get_field('reviews_image');
        if ($reviews_image) : ?>
            <div class="reviews__bg">
                <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                echo wp_get_attachment_image($reviews_image, $size, '', [
                    'loading' => 'lazy'
                ]);
                ?>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="reviews__wrap">
                <?php
                $args = array(
                    'post_type' => 'reviews',
                    'posts_per_page' => -1,
                );

                $reviews_query = new WP_Query($args);
                if ($reviews_query->have_posts()) :
                    ?>

                <div class="reviews__slider-inner">
                    <div class="swiper reviews__slider">
                        <div class="swiper-wrapper">
                            <?php
                            while ($reviews_query->have_posts()) : $reviews_query->the_post();
                                $reviews_author = get_field('reviews_author');
                                $reviews_author_position = get_field('reviews_author_position');
                                ?>
                                <div class="swiper-slide">
                                    <div class="reviews__slide-box">
                                        <p class="reviews__post-title">
                                            <?php the_title(); ?>
                                        </p>
                                        <div class="reviews__content">
                                            <?php the_content(); ?>
                                        </div>

                                        <div class="reviews__inner">
                                            <div class="reviews__box">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <div class="reviews__img">
                                                        <?php the_post_thumbnail(); ?>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="reviews__name-inner">
                                                    <?php if ($reviews_author) : ?>
                                                        <p class="reviews__name">
                                                            <?php echo esc_html($reviews_author); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                    <?php if ($reviews_author_position) : ?>
                                                        <p class="reviews__post">
                                                            <?php echo esc_html($reviews_author_position); ?>
                                                        </p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <p class="reviews__quote">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11" fill="none">
                                                    <path d="M9 10.031L10.969 6H7.969V0H13.969V6L12 10.031H9ZM0.984 10.031L3 6H0V0H6V6L3.984 10.031H0.984Z" fill="#02b01c"/>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>


                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

                    <?php
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>

    <section class="contact" id="contact">
        <div class="container">
            <?php
            $contact_us_category = get_field('contact_us_category');
            if ($contact_us_category) : ?>
                <p class="name-category">
                    <?php echo esc_html($contact_us_category) ; ?>
                </p>
            <?php endif; ?>

            <?php
            $contact_title = get_field('contact_us_title');
            $contact_subtitle = get_field('contact_us_subtitle');
            $contact_text = get_field('contact_us_text');
            $contact_phone = get_field('contact_us_num');
            if ($contact_title) :
                ?>
                <h2 class="contact__title main-title">
                    <?php echo esc_html($contact_title); ?>
                </h2>
            <?php endif; ?>

            <div class="contact__wrap">
                <div class="contact__content">
                    <?php if ($contact_subtitle) : ?>
                        <p class="contact__subtitle">
                            <?php echo esc_html($contact_subtitle); ?>
                        </p>
                    <?php endif; ?>
                    <?php if ($contact_text) : ?>
                        <div class="contact__text">
                            <?php echo $contact_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($contact_phone) :
                        $clean_phone = preg_replace('/[^\d+]/', '', $contact_phone);
                        ?>
                        <a class="contact__phone" href="tel:<?php echo esc_url($clean_phone); ?>">
                            <?php echo esc_html($contact_phone); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="contact__form">
                    <?php echo do_shortcode('[contact-form-7 id="e594716" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>