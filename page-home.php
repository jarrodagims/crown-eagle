<?php get_header();

/*
    Template Name: Home
*/ ?>

<section class="home-module-1 waypoint">
    <div class="jumbotron">
        <div class="jumbo-content">
            <div class="fade-down"><img src="<?=IMGURL?>logo-lg.png" class="navbar-brand" alt="<?php bloginfo( 'name' ); ?>" /></div>

            <a href="<?=SITEURL?>/contact-us/" class="header-button"><button class="btn btn-primary my-2 my-sm-0" type="submit">Contact
                    Us Today</button></a>
        </div>
    </div>
</section>
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

<section class="home-module-3">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12 col-lg-6">
                <div class="extra-padding">
                    <h1>Bar <img src="<?=IMGURL?>and.svg" alt="And" height="50" /> Grill
                        <span>Where Good Times Happen and Memories are Made</span>
                    </h1>

                    <h2 class="expander" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                        aria-controls="collapse">
                        <span>The best and biggest patio bar in the area!</span>
                        <ul class="collapse" id="collapse">
                            <li>The best and biggest patio bar in the area!</li>
                            <li>We are the top restaurant bar in El Paso where you can catch football games and other
                                major
                                sports.</li>
                            <li>Our bar & grill is highly-reviewed and talked about among local sports fans.</li>
                            <li>Looking for a local place to chill? Come to El Paso’s newest sports bar.</li>
                            <li>We are located on the east side of town.</li>
                            <li>Check out our new and improved <a href="<?=SITEURL?>/menu/">food menu</a>.</li>
                            <li>We value your reviews. Tell us what’s up!</li>
                            <li>We work hard to keep a top rating with our frequent guests.</li>
                            <li>If you’re a sports fan, this is the place to be!</li>
                            <li>Our quality restaurant menu truly sets us apart from other local bar & grills.</li>
                            <li>Our patio hosts a variety of live music, including musicians and DJ’s.</li>
                            <li>We are a local tavern with fine drinks and great people.</li>
                            <li>Don’t want to go home? Come hang out here — we’re open late!</li>
                            <li>We offer a quality food menu to satisfy any appetite.</li>

                        </ul>

                    </h2>




                    <h3>Welcome to Crown and Eagle — Where Everyone is Treated Like Royalty</h3>

                    <p>We have a saying around here: <em>Wear your crown like a King or Queen!</em></p>

                    <p>You work hard. You deserve to play hard by enjoying the good things in life. That’s where we
                        come in. We dig sports. We appreciate good food. And we love to laugh! We want to share those
                        enjoyments with everyone.
                    </p>

                    <p>As a local sports bar & grill with an awesome patio bar, we enjoy giving our customers the
                        opportunity to let loose, meet new people, enjoy a game, share a good joke, rock out to some
                        great jams, and engage in great conversation.
                    </p>
                </div>
            </div>
            <div class="col col-xs-12 col-lg-5 offset-lg-1">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 col-sm-12 col-xs-12">
                <h3>We’re Your Spot For a Great Time</h3>

                <p>We provide El Paso with a place to relax and enjoy time with friends and family. Live life to the
                    fullest, and enjoy an evening at Crown and Eagle Bar & Grill. Our friendly staff and bartenders are
                    ready to serve you!
                </p>
            </div>
            <div class="col d-xs-none d-sm-none d-lg-block col-xs-12">
            </div>
        </div>
    </div>
</section>

<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="saloon-banner waypoint">
                    <div>
                        <div class="saloon-logo">
                            <img src="<?=IMGURL ?>/saloon-logo.png" alt="Crown & Eagle" />
                        </div>
                        <h2>happy hour specials</h2>
                        <h3>and drink specials 11 a.m. to 7 p.m.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-6">
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
</section>

<section class="home-module-7">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="extra-padding">
                    <h3>We Offer a Variety of Entertainment</h3>

                    <p>We have a full bar and restaurant menu with quality food and drink specials. From burgers to
                        wings, tacos, tuna melts, and a variety of sandwiches. You can’t beat our $5 lunch menu. That’s
                        right, only $5! Come inside or chill outside in our patio bar.</p><br />

                    <p>There’s always something happening around here. We don't’ sit idle. Walk in and find Poker
                        tournaments one night, <a href="<?=SITEURL?>/weekly-events/comedy-nights-el-paso/">comedy</a>
                        another, <a href="<?=SITEURL?>/weekly-events/karaoke-bar-el-paso/">karaoke</a>, <a href="<?=SITEURL?>/weekly-events/live-music/">live
                            bands</a>, drink specials, impromptu dancing, one of our famous Raiders fan club parties,
                        and did we mention drink specials?</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-8">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <img src="<?=IMGURL?>bg-girls-mobile.jpg" alt="A Royally Good Time" class="d-xs-block d-sm-block d-md-none" />
            </div>
            <div class="col col-sm-12 col-xs-12 col-lg-5 offset-lg-1">
                <h3>A Royally Good Time</h3>
                <p>Many places call themselves a sports bar because they mount a television on the wall and broadcast
                    the occasional game or two. At Crown and Eagle, we believe in taking the experience to another
                    level—whether it’s the boxing match of the year, the Super Bowl, or the NFL playoffs.</p>

                <p>Sports is a great way to bring people together. And we provide the perfect atmosphere!</p>

            </div>
        </div>
    </div>
</section>

<section class="home-module-9">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-lg-6">
                <h3>We’re Family-Friendly</h3>

                <p>During the day, Crown and Eagle Bar & Grill has a lively family-friendly atmosphere. Bring the whole
                    fam and enjoy our food specials and spacious patio. El Paso has great weather. What better way to
                    enjoy it than with a good meal outdoors under the great desert sky.
                </p>

                <h3>We Offer Take Out!</h3>
                <p>Don’t have time to dine in? We are now taking phone orders for pick up. Call us at <a href="tel:9155943686">915-594-3686</a>
                    to place your order, and enjoy the greatest food specials in El Paso. </p>

                <h2>Your Next Adventure Awaits</h2>

                <p>Hit us up! We are El Paso’s best patio bar, located on the east side of town. Come visit us at our
                    convenient location at 1731 Lee Trevino.
                </p>
            </div>
            <div class="col col-xs-12 col-sm-12 col-lg-5 offset-lg-1">
                <img src="<?=IMGURL?>drinks-food.jpg" alt="Food and Drinks" class="d-md-block d-none" />
            </div>
        </div>
    </div>
    <img src="<?=IMGURL?>drinks-food-mobile.jpg" alt="Food and Drinks" class="d-xs-block d-sm-block d-md-none" />
</section>
<?php get_footer(); ?>