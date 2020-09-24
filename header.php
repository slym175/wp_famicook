<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>

    <header>
        <div class="header-pc">
            <div class="header-top">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="top">
                            <div class="col-md-6 col-sm-6 f-left img-header">
                                <div class="left-top">
                                    <img src="<?= THEME_URL_URI ?>/assets/images/bg.png" title="Header Image">
                                    <p><?= __('Fami Cook - Ngân hàng niềm vui', TEXTDOMAIN ) ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 right-top">
                                <div class="icon-header-right">
                                    <?php get_template_part('template_parts/menu/menu', 'social'); ?>
                                    <div id="weglot_here"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="col-md-6 col-sm-6 f-left icon-header">
                                <div class="left-bottom">
                                    <span> <img src="<?= THEME_URL_URI ?>/assets/images/hotline.png" alt="Image"> </span>
                                    <span>
                                        <p><strong><?= __('Hotline:', TEXTDOMAIN) ?> </strong>0916 617 687</p>
                                        <p><strong><?= __('Email:', TEXTDOMAIN) ?></strong> cskh.famiedu@gmail.com</p>
                                    </span>
                                </div>
                            </div>
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('template_parts/menu/menu', 'primary'); ?>
        </div>
    </header>