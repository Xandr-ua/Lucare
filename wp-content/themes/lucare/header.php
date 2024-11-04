<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="container">
        <div class="header__wrap">
            <?php
                $header_image = get_field('header_image', 'option');
            if ($header_image) : ?>
                <a class="header__logo" href="/">
                    <?php $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    echo wp_get_attachment_image($header_image, $size, '', [
                        'loading' => 'lazy'
                    ]);
                    ?>
                </a>
            <?php endif; ?>

            <a class="header__btn main-button" type="button" href="#contact">
                <?php echo esc_html_e('CONTACT US', 'lucare') ; ?>
            </a>
        </div>
    </div>
</header>

<?php //get_template_part('template-parts/header') ?>
