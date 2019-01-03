<div id="sidebar" class="sidebar">
    <?php if (is_page('contact-us')) : ?>
    <div id="contact-form">
        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            }
            ?>
    </div>
</div>
<?php endif; ?>
<?php if (!is_page('contact-us')) : ?>
<?php if (!is_page('weekly-events')) : ?>
<div class="sidebar-top">
    <img src="<?=IMGURL?>our-grill.svg" alt="Our Grill" />
</div>
<div class="sidebar-bottom">
    <img src="<?=IMGURL?>uber-eats-logo.png" alt="Uber Eats" />
    <a href=""><img src="<?=IMGURL?>uber-eats-btn.svg" alt="Uber Eats" height="20" /></a>
</div>
<?php endif; ?>
<?php if (!is_page('happy-hour-el-paso')) : ?>
<div class="sidebar-table">
    <div class="icon-calendar"><span>Daily Schedule</span></div>
    <?php echo do_shortcode('[table id=1 /]'); ?>
</div>
<?php endif; ?>
<?php if (!is_front_page()) : ?>
<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="saloon-banner">
                    <div>
                        <div class="saloon-logo">
                            <img src="<?=IMGURL ?>/saloon-logo.png" alt="Crown & Eagle" />
                        </div>
                        <h2>happy hour specials and drink specials</h2>
                        <h3>11 a.m. to 7 p.m.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>
</div>