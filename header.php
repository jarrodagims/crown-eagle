<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
</head>

<body <?php body_class(); ?>>

    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">
        <div class="container">
            <div class="v-align">
                <div class="col-xs-12 navbar-button text-center">
                    <div class="navbar-left">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="menu-item directions"><a href="<?php echo get_site_url() ?>/contact-us/"><span>6455
                                        Hiller Suite 10, El Paso, Texas 79925</span></a></a></li>
                            <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><span>Call
                                        Us Today!
                                        <?php printPhone(); ?></span></a></li>
                            <li class="menu-item">
                                <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                            </li>
                        </ul>
                        <a href="https://www.ubereats.com/en-US/el-paso/food-delivery/crown-%26-eagle-bar-and-grill/oU2EF0vtR96l6iExoAApCQ/"
                            target="_blank"><img src="<?=IMGURL?>uber-eats-btn.svg" alt="Uber Eats" height="22" /></a>

                    </div>
                    <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                </div>
            </div>
        </div>
    </div>

    <?php if(!is_front_page()) : ?>
    <div class="banner-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="<?=SITEURL?>" class="navbar-brand"><img src="<?=IMGURL?>logo-lg.png" class="navbar-brand"
                            alt="<?php bloginfo( 'name' ); ?>" /></a>
                </div>
            </div>
        </div>
    </div>
    <section class="home-module-2">
        <section class="icon-row">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php echo get_template_part('template-parts/icon', 'row'); ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <?php endif; ?>