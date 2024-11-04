
    <footer class="footer">
        <div class="container">
            <div class="footer__wrap">
                <?php
                $header_image = get_field('header_image', 'option');
                if ($header_image) : ?>
                    <div class="footer__logo">
                        <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image($header_image, $size, '', [
                            'loading' => 'lazy'
                        ]);
                        ?>
                    </div>
                <?php endif; ?>

                <div class="footer__content">
                    <p class="footer__title">
                        WELCOME TO CAR WASH AND SERVICE
                    </p>

                    <ul class="footer__list">
                        <li class="footer__item">
                            <p class="footer__subtitle">
                                CONTECT INFO
                            </p>
                            <?php
                                $footer_address = get_field('footer_address', 'option');
                            if ($footer_address) : ?>
                                <div class="footer__box">
                                    <p class="footer__text-name">
                                        Address:
                                    </p>
                                    <p class="footer__text-info">
                                        <?php echo esc_html($footer_address); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php
                            $footer_email = get_field('footer_email', 'option');
                            if ($footer_email) : ?>
                                <div class="footer__box">
                                    <p class="footer__text-name">
                                        Email:
                                    </p>
                                    <a class="footer__text-info footer__text-info-link" href="mailto:<?php echo esc_html__($footer_email); ?>">
                                        <?php echo esc_html($footer_email); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </li>

                        <li class="footer__item">
                            <p class="footer__subtitle">
                                OPENING HOURS
                            </p>
                            <?php
                            $monday__friday = get_field('monday__friday', 'option');
                            if ($monday__friday) : ?>
                                <div class="footer__box">
                                    <p class="footer__text-name">
                                        Monday - Friday
                                    </p>
                                    <p class="footer__text-info">
                                        <?php echo esc_html($monday__friday); ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <?php
                            $saturday = get_field('saturday', 'option');
                            if ($saturday) : ?>
                                <div class="footer__box">
                                    <p class="footer__text-name">
                                        Saturday
                                    </p>
                                    <p class="footer__text-info">
                                        <?php echo esc_html($saturday); ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
