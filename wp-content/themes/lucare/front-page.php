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
        <div class="container">
            <div class="washing-services__wrap">
                <div class="washing-services__content">
                    <h2 class="washing-services__title">
                        Professional washing Services
                    </h2>

                    <ul class="washing-services__list">
                        <li class="washing-services__item">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking
                        </li>

                        <li class="washing-services__item">
                            Entrust your vehicle to our team of skilled professionals who take pride in delivering unparalleled cleaning excellence
                        </li>

                        <li class="washing-services__item">
                            Our meticulous approach ensures that every nook and cranny of your car receivesed the attention it deserves.
                        </li>
                    </ul>
                </div>

                <div class="washing-services__image">

                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>