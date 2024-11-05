<?php
/*
Template Name: Our Service
*/

get_header();
?>


    <main class="main">

        <div class="hero">
            <div class="hero__box our-service__hero">
                <?php
                $our_service_image = get_field('our_service_image');
                if ($our_service_image) : ?>
                    <div class="hero__bg">
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image($our_service_image, $size, '', [
                            'loading' => 'lazy'
                        ]);
                        ?>
                    </div>
                <?php endif; ?>
                <div class="hero__title-inner">
                    <h1 class="hero__title">
                        <?php the_title() ?>
                    </h1>
                </div>
            </div>
        </div>

        <section class="process our-service__process">
            <div class="container">
                <?php
                $our_service_category = get_field('our_service_category');
                if ($our_service_category) : ?>
                    <p class="name-category">
                        <?php echo esc_html($our_service_category) ; ?>
                    </p>
                <?php endif; ?>

                <?php
                $our_service_title = get_field('our_service_title');

                if ($our_service_title) : ?>
                    <h2 class="main-title">
                        <?php echo esc_html($our_service_title); ?>
                    </h2>
                <?php endif; ?>

                <ul class="process__list">
                    <?php
                    $car_washing_title = get_field('car_washing_title');
                    $car_washing_text = get_field('car_washing_text');
                    $car_washing_price = get_field('car_washing_price');
                    if ($car_washing_title) : ?>
                        <li class="process__item">
                            <p class="process__image">

                            </p>
                            <p class="process__subtitle">
                                <?php echo esc_html($car_washing_title); ?>
                            </p>
                            <div class="process__text">
                                <?php echo $car_washing_text; ?>
                            </div>
                            <p class="process__price">
                                <?php echo esc_html($car_washing_price); ?>
                            </p>
                        </li>
                    <?php endif; ?>

                    <?php
                    $crystal_clear_title = get_field('crystal_clear_title');
                    $crystal_clear_text = get_field('crystal_clear_text');
                    $crystal_clear_price = get_field('crystal_clear_price');
                    if ($crystal_clear_title) : ?>
                        <li class="process__item">
                            <p class="process__image">
                            </p>
                            <p class="process__subtitle">
                                <?php echo esc_html($crystal_clear_title); ?>
                            </p>
                            <div class="process__text">
                                <?php echo $crystal_clear_text; ?>
                            </div>
                            <p class="process__price">
                                <?php echo esc_html($crystal_clear_price); ?>
                            </p>
                        </li>
                    <?php endif; ?>

                    <?php
                    $engine_cleaning_title = get_field('engine_cleaning_title');
                    $engine_cleaning_text = get_field('engine_cleaning_text');
                    $engine_cleaning_price = get_field('engine_cleaning_price');
                    if ($engine_cleaning_title) : ?>
                        <li class="process__item">
                            <p class="process__image">
                            </p>
                            <p class="process__subtitle">
                                <?php echo esc_html($engine_cleaning_title); ?>
                            </p>
                            <div class="process__text">
                                <?php echo $engine_cleaning_text; ?>
                            </div>
                            <p class="process__price">
                                <?php echo esc_html($engine_cleaning_price); ?>
                            </p>
                        </li>
                    <?php endif; ?>

                    <?php
                    $convertible_cleaning_title = get_field('convertible_cleaning_title');
                    $convertible_cleaning_text = get_field('convertible_cleaning_text');
                    $convertible_cleaning_price = get_field('convertible_cleaning_price');
                    if ($convertible_cleaning_title) : ?>
                        <li class="process__item">
                            <p class="process__image">
                            </p>
                            <p class="process__subtitle">
                                <?php echo esc_html($convertible_cleaning_title); ?>
                            </p>
                            <div class="process__text">
                                <?php echo $convertible_cleaning_text; ?>
                            </div>
                            <p class="process__price">
                                <?php echo esc_html($convertible_cleaning_price); ?>
                            </p>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </section>


    </main>



<?php get_footer(); ?>