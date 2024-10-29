<?php
/*
Template Name: Front Page
*/

get_header();
?>


<main class="main">

    <div class="about">
        <div class="container">
            <p class="name-category">
                <?php echo esc_html_e('About Us', 'lucare') ; ?>
            </p>

            <div class="about__content-inner">
                <div class="about__content">
                    <p class="about__text">
                        Learn The Exact Steps To Set up,
                        GROW AND SCALE A HIGHLY SUCCESSFUL
                        BUSINESS IDEAS
                    </p>
                    <p class="about__author">
                        Thomas Stinson, CEO
                    </p>
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
                } ?>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <p class="name-category">
                <?php echo esc_html_e('Our Service', 'lucare') ; ?>
            </p>
            <div class="service__box">
                <h2 class="service__title main-title">
                    Offering Quality Services
                </h2>

                <a class="main-button service__btn" href="#">
                    View More
                </a>
            </div>

            <div class="service__wrap">
                <ul class="service__images">
                    <li class="service__images-item">

                    </li>
                </ul>

                <ul class="service__content">
                    <li class="service__content-item">

                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>