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
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <p class="name-category">
                <?php echo esc_html_e('Our Service', 'lucare') ; ?>
            </p>
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
            <p class="name-category process__category">
                <?php echo esc_html_e('Our Process', 'lucare') ; ?>
            </p>

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
</main>


<?php get_footer(); ?>