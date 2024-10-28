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

<header class="header p-4">
    <div class="container">
        <div class="header__wrap flex justify-between">
            <a href="">
                LOGO
            </a>

            <nav class="header__nav">
                <!--                <ul class="">-->
                <!--                    <li class="font-bold">LINK</li>-->
                <!--                    <li class="">LINK</li>-->
                <!--                    <li class="">LINK</li>-->
                <!--                    <li class="">LINK</li>-->
                <!--                    <li class="">LINK</li>-->
                <!--                </ul>-->

                <button class="header__btn" type="button">
                    <?php echo esc_html_e('CONTACT US', 'lucare') ; ?>
                </button>
            </nav>
        </div>
    </div>
</header>

<?php //get_template_part('template-parts/header') ?>
