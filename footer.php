<div id="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27142.53913410327!2d-106.31983605273021!3d31.748184996926778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e744943a05e675%3A0x2141452b410c938!2sCrown+and+Eagle+Bar+%26+Grill!5e0!3m2!1sen!2sus!4v1544733236184"
        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">

                <div class="row align-items-center">

                    <div class="col logo-footer">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
                    </div>
                    <div class="col">
                        <span class="title">Contact</span>
                        <p>Hit us up on the east side of town!<br />El Paso’s best patio bar.
                            <br />Crown and Eagle bar and grill at our <br />convenient location.</p>
                    </div>
                    <div class="col phone-footer">
                        <div>
                            <span class="title">&nbsp;</span>
                            <p>1731 Lee Trevino<br />
                                El Paso, Texas 79936<br />
                                <strong>Call Us Today!</strong>&nbsp;<span class="br-md"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>">
                                        <?php printPhone(); ?></span></a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col col-md-2 address-footer">
                <div><span class="title">OFFICE HOURS</span>
                    <p>Monday - Sunday:<br />
                        <strong>11:00am - 2:00am</strong></p>
                    <img src="<?=IMGURL?>uber-eats-btn.svg" alt="Uber Eats" height="32" />
                </div>
            </div>
            <!-- <div class="d-md-none d-xs-block d-sm-block">
                <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
            </div> -->
        </div>

        <div class="row flex-row">
            <div class="col d-lg-block d-none">
                <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
            </div>
            <div class="col col-lg-2"><a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-primary">
                        Contact us today
                    </button></a>
            </div>
        </div>
    </div>
</section>
<section class="footer-nav d-flex d-md-none">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
            </div>
        </div>
    </div>

</section>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-none d-md-block">
                    <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                </div>
                <p class="small">
                    &copy;
                    <?php echo date('Y'); ?> Crown And Eagle Bar And Grill | All Rights Reserved
                </p>

            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
</body>

</html>