<?php get_header() ?>

<section>
    <div class="hero paralax">
        <?php if( get_field('hero_video') ): ?>
            <div class="hero__video">
                <video autoplay loop muted>
                    <source src="<?php the_field('hero_video'); ?>" type="video/mp4">
                </video>
            </div>
        <?php else: ?>
            <div class="paralax-bg"></div>
        <?php endif; ?>
        
        <h1 class="sr-only">Salt Beer</h1>

        <?php if( get_field('hero_text') ): ?>
            <div class="container">
                <div class="hero__text gsap-hero">
                    <?php the_field('hero_text'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="hero__icons gsap-hero">
            <a href="#FoodAndDrink" class="">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-hero-food-drink.png" alt="Food and Drink" width="180" height="180">
            </a>
            <a href="#News" class="">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-hero-whats-on.png" alt="What's On" width="180" height="180">
            </a>
            <a href="#FindUs" class="">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-hero-find-us.png" alt="Find Us" width="180" height="180">
            </a>
            <a href="#Contact" class="">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-hero-opening.png" alt="Opening Hours" width="180" height="180">
            </a>
        </div>
    </div>
</section>

<section class="section drinks__section bg-teal" id="FoodAndDrink">
    <div class="container relative">
        <div class="drinks__bg-1"></div>

        <div class="row drinks__row">
            <div class="col drinks__col">
                <div class="text-center">
                    <?php if( get_field('about_title_1') ): ?>
                        <h2 class="drinks__title">
                            <?php the_field('about_title_1'); ?>
                        </h2>
                    <?php endif; ?>

                    <?php if( get_field('about_text_1') ): ?>
                        <div class="drinks__text">
                            <?php the_field('about_text_1'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row drinks__row craft__row">
            <div class="col craft__col">
                <div class="craft__container text-center relative">
                    <div class="drinks__bg-2"></div>

                    <?php if( get_field('about_title_2') ): ?>
                        <h3 class="craft__title">
                            <?php the_field('about_title_2'); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if( get_field('about_text_2') ): ?>
                        <div class="craft__text">
                            <?php the_field('about_text_2'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="splide splide__drinks drinks__carousel">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-drink-1.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-drink-2.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-drink-3.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-drink-4.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-drink-5.jpg" alt="" width="330" height="300">
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-drink-6.jpg" alt="" width="330" height="300">
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h2 class="drinks__title-sm">Where to find us</h2>

                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-map.png" alt="" class="drinks__map">
                </div>
            </div>
        </div>
    </div>

    <?php if( have_rows('venues') ): ?>
        <div class="splide splide__salt salt__carousel drinks__carousel">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while( have_rows('venues') ) : the_row(); ?>
                        <?php if( get_sub_field('venue_image') ): ?>
                            <li class="splide__slide">
                                <?php if( get_sub_field('venue_url') ): ?>
                                    <a href="<?php echo get_sub_field('venue_url') ?>">
                                <?php endif; ?>

                                    <img src="<?php echo get_sub_field('venue_image') ?>" alt="" width="230" height="208">
                                
                                <?php if( get_sub_field('venue_url') ): ?>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="people__container text-center">
            <h2 class="drinks__title-sm">Our People</h2>

            <?php if( have_rows('people') ): ?>
                <?php
                    $i = 0;
                    $posts = count(get_field('people'));
                ?>
                <?php while( have_rows('people') ) : the_row(); ?>
                    <?php if ($i == 0): ?>
                        <div class="people__row">
                    <?php endif; ?>
                    <div class="people__col">
                        <?php if( get_sub_field('people_image') ): ?>
                            <img src="<?php echo get_sub_field('people_image') ?>" alt="" class="people__image">
                        <?php else: ?>
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-people.svg" alt="" class="people__image">
                        <?php endif; ?>

                        <?php if( get_sub_field('people_name') ): ?>
                            <h3 class="people__title">
                                <?php echo get_sub_field('people_name') ?>
                            </h3>
                        <?php endif; ?>
                        
                        <?php if( get_sub_field('people_job') ): ?>
                            <p class="people__text">
                                <?php echo get_sub_field('people_job') ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <?php
                        $i++;
                        if ($posts == $i):
                    ?>
                        </div>
                    <?php elseif ( $i % 3 == 0 ): ?>
                        </div> <div class="people__row">
                    <?php endif; ?>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="craft__container testimonials__container text-center">
            <h2 class="craft__title">Staff Testimonials</h2>

            <?php if( have_rows('testimonials') ): ?>
                <div class="testimonials__row">
                    <?php while( have_rows('testimonials') ) : the_row(); ?>
                        <div class="testimonials__col">
                            <?php if( get_sub_field('testimonials_text') ): ?>
                                <?php echo get_sub_field('testimonials_text') ?>
                            <?php endif; ?>

                            <div class="testimonials__caption">
                                <?php if( get_sub_field('testimonials_name') ): ?>
                                    <p><?php echo get_sub_field('testimonials_name') ?></p>
                                <?php endif; ?>
                                
                                <?php if( get_sub_field('testimonials_venue') ): ?>
                                    <p><?php echo get_sub_field('testimonials_venue') ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="section news__section" id="News">
    <div class="container relative">
        <div class="news__bg"></div>

        <h2 class="news__heading">Latest News</h2>

        <?php 
           // the query
           $the_query = new WP_Query( array(
             'category_name' => 'news',
              'posts_per_page' => 3,
           )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
            <div class="row news__row">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col news__col">
                        <div class="news__item">
                            <?php if ( has_post_thumbnail() ): ?>
                                <a class="news__image" href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </a>
                            <?php endif; ?>

                            <h3 class="news__title"><?php the_title(); ?></h3>
                            <div class="news__text"><?php the_excerpt(); ?></div>
                            <div class="news__btn"><a href="<?php the_permalink(); ?>" class="btn btn-sm btn--pink">Read more</a></div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>

        <p class="text-center"><a href="#" class="btn btn-sm btn--pink">See all our news</a></p>
    </div>
</section>

<section class="section work__section" id="Work">
    <div class="container work__container relative">
        <h2 class="work__heading">Work with us</h2>

        <div class="row work__row">
            <div class="col work__col text-center">
                <h3 class="work__btn-title">OUR VALUES</h3>

                <ul class="work__list work__text">
                    <li>
                        <h4><span>UNPRETENTIOUS</span></h4>
                        <p>We have no taste for self-importance. We’re serious about beer, not ourselves.</p>
                    </li>
                    <li>
                        <h4><span>DIVERSE</span></h4>
                        <p>In our outlook, in our beer and in our team. We strive to be accessible and inclusive to all.</p>
                    </li>
                    <li>
                        <h4><span>HONEST</span></h4>
                        <p>We are happy to carve out our own lane and go with our gut.</p>
                    </li>
                    <li>
                        <h4><span>OPEN</span></h4>
                        <p>As a team we remain receptive to fresh thinking and new opportunities.</p>
                    </li>
                    <li>
                        <h4><span>OPPORTUNITIES</span></h4>
                        <p>We like to see where people want to go and help them on their journey. Lots of managers are promoted from within.</p>
                    </li>
                </ul>
            </div>

            <div class="col work__col">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-flag.png" alt="" class="work__image">
            </div>
        </div>
    </div>

    <div class="work__bg"></div>

    <div class="container">
        <div class="work__text text-center">
            <h3 class="work__title">We’re always looking for enthusiastic and passionate people to join the SALT Taps teams.</h3>

            <p>We love organised, focussed individuals who have a genuine passion for craft beer, cocktails and fantastic food.<br>Want to join SALT as a manager? These are the key skills we look for:</p>

            <div class="work__accordion">
                <button class="faqs__btn js-accordion"><span>What we're looking for</span></button>
                <div class="faqs__content">
                    <div class="faqs__text">
                        <p>If you are a self-motivated and organised individual working to the highest standards, have dynamic leadership skills, a genuine passion for all things drink related and a proven track record for delivering results, we look forward to hearing from you.</p>
                    </div>
                </div>
            </div>

            <div class="row news__row work-join__row">
                <div class="col news__col">
                    <div class="news__item work__item">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-join.png" alt="" class="news__image" width="180" height="210">
                        <h3 class="news__title">MANAGEMENT</h3>
                        <p class="news__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in</p>
                        <div class="news__btn"><a href="#" class="btn btn-sm btn--black">View openings</a></div>
                    </div>
                </div>

                <div class="col news__col">
                    <div class="news__item work__item">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-join.png" alt="" class="news__image" width="180" height="210">
                        <h3 class="news__title">BAR, FLOOr + kitchen</h3>
                        <p class="news__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in</p>
                        <div class="news__btn"><a href="#" class="btn btn-sm btn--black">View openings</a></div>
                    </div>
                </div>  

                <div class="col news__col">
                    <div class="news__item work__item">
                        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-join.png" alt="" class="news__image" width="180" height="210">
                        <h3 class="news__title">Support office</h3>
                        <p class="news__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in </p>
                        <div class="news__btn"><a href="#" class="btn btn-sm btn--black">View openings</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section contact" id="Contact">
    <div class="container">
        <h2 class="sr-only">Opening Hours</h2>

        <div class="row contact__row">
            <div class="col contact__col">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-opening.png" alt="" class="contact__image">
            </div>

            <div class="col contact__col">
                <h3 class="contact__title">Contact Us</h3>

                <ul class="social contact__contact">
                    <?php if( get_field('contact_email') ): ?>
                        <li>
                            <a href="mailto:<?php the_field('contact_email'); ?>"><span class="icon"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64z"/></svg></span><?php the_field('contact_email'); ?></a>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field('contact_phone') ): ?>
                        <li>
                            <?php $phone = str_replace(' ', '', get_field('contact_phone')); ?>
                            <a href="tel:<?php echo $phone; ?>"><span class="icon"><svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></span><?php the_field('contact_phone'); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section faqs" id="Faqs">
    <div class="container faqs__container">
        <h2 class="faqs__title">Faqs</h2>

        <?php if( have_rows('faqs') ): ?>
            <?php while( have_rows('faqs') ) : the_row(); ?>
                <?php if( get_sub_field('faqs_question') ): ?>
                    <button class="faqs__btn js-accordion">
                        <span><?php echo get_sub_field('faqs_question') ?></span>
                    </button>
                <?php endif; ?>

                <?php if( get_sub_field('faqs_answer') ): ?>
                    <div class="faqs__content">
                        <div class="faqs__text">
                            <?php echo get_sub_field('faqs_answer') ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="row newsletter__row">
            <div class="col newsletter__col">
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-newsletter.jpg" alt="" class="newsletter__image">
            </div>

            <div class="col newsletter__col">
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-071822.css" rel="stylesheet" type="text/css">
                <style>
                    #mc_embed_signup {
                        color: #fff;
                        clear: left;
                        font: 14px Helvetica, Arial, sans-serif;
                        max-width: 360px;
                        margin-left: auto;
                        margin-right: auto;
                        padding-left: 3rem;
                        padding-right: 3rem;
                    }
                    #mc_embed_signup form {
                        margin: 0;
                    }
                    #mc_embed_signup h2 {
                        font-size: 1.5rem;
                        color: var(--yellow);
                        margin: 0 0 1rem;
                        text-align: center;
                    }
                    #mc_embed_signup .helper_text {
                        background-color: transparent;
                    }
                    #mc_embed_signup .mc-field-group label:not(.checkbox) {
                        position: absolute;
                        width: 1px;
                        height: 1px;
                        padding: 0;
                        margin: -1px;
                        overflow: hidden;
                        clip: rect(0,0,0,0);
                        white-space: nowrap;
                        border: 0;
                    }
                    #mc_embed_signup .mc-field-group input {
                        border-radius: 0;
                        border: 0;
                        padding: 0.5rem;
                    }
                    #mc_embed_signup .datefield input, #mc_embed_signup .phonefield-us input {
                        width: 70px;
                    }
                    #mc_embed_signup .datefield .monthfield input,
                    #mc_embed_signup .datefield .dayfield input {
                        width: 50px;
                    }
                    #mc_embed_signup .mc-field-group {
                        width: 100%;
                        padding-bottom: 0.5rem;
                    }
                    #mc_embed_signup #mc-embedded-subscribe-form div.mce_inline_error {
                        margin: 2px 0 1em 0;
                        padding: 3px;
                        background-color: transparent;
                        border-radius: 0;
                        color: var(--yellow);
                    }
                    #mc-embedded-subscribe-form .mc_fieldset {
                        padding: 0;
                        margin: -0.25rem 0 0.5rem -3px;
                    }
                    #mc_embed_signup .button {
                        font-family: 'Rubik', sans-serif;
                        font-size: 1rem;
                        font-weight: 500;
                        line-height: 1.5;
                        height: auto;
                        background-color: var(--yellow);
                        border-radius: 3rem;
                        color: var(--black);
                        border: 0;
                        border-radius: 3rem;
                        padding: 0.375rem 1rem;
                        text-decoration: none;
                        text-align: center;
                        white-space: nowrap;
                        transition: color 0.2s, background-color 0.2s;
                    }
                    #mc_embed_signup .button:hover,
                    #mc_embed_signup .button:focus {
                        background-color: var(--white);
                    }
                    @media (min-width: 1200px) {
                        #mc_embed_signup h2 {
                            font-size: 2rem;
                        }
                    }
                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                
                    #mc-embedded-subscribe-form input[type=checkbox] {
                        display: inline;
                        width: auto;
                        margin-right: 10px;
                    }
                    #mergeRow-gdpr {
                        margin-top: 20px;
                    }
                    #mergeRow-gdpr fieldset label {
                        font-weight: normal;
                    }
                    #mc-embedded-subscribe-form .mc_fieldset {
                        border: none;
                        min-height: 0px;
                        padding-bottom: 0px;
                    }
                    #mc_embed_signup div#mce-responses {
                        margin: 0;
                        padding: 0;
                    }
                    #mc_embed_signup div.response {
                        margin-top: 0;
                        padding: 0;
                    }
                    #mc_embed_signup #mce-success-response {
                        color: #ffb600;
                    }
                </style>
                <div id="mc_embed_signup">
                    <form action="https://wearefyi.us11.list-manage.com/subscribe/post?u=4b70cb67ae8d64a4dfffa8ba5&amp;id=9d2fd3922c&amp;v_id=4382&amp;f_id=00e5b6e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <h2>Newsletter Sign Up</h2>
                            <div class="mc-field-group">
                                <label for="mce-FNAME">Name</label>
                                <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Name">
                                <span id="mce-FNAME-HELPERTEXT" class="helper_text"></span>
                            </div>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Email Address</label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required placeholder="Email">
                                <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
                            </div>
                            
                            <div class="mc-field-group size1of2">
                                <label for="mce-MMERGE8-month">Date of Birth </label>
                                <div class="datefield">
                                    <span class="subfield dayfield">
                                        <input class="datepart " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE8[day]" id="mce-MMERGE8-day">
                                    </span> / 
                                    <span class="subfield monthfield">
                                        <input class="datepart " type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE8[month]" id="mce-MMERGE8-month">
                                    </span> / 
                                    <span class="subfield yearfield">
                                        <input class="datepart " type="text" pattern="[0-9]*" value="" placeholder="YYYY" size="4" maxlength="4" name="MMERGE8[year]" id="mce-MMERGE8-year">
                                    </span>
                                    <span class="small-meta nowrap">( dd / mm / yyyy )</span>
                                </div>
                                <span id="mce-MMERGE8-HELPERTEXT" class="helper_text"></span>
                            </div>

                            <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                                <div class="content__gdpr">
                                    <label>Marketing Permissions</label>
                                    <p>Please select all the ways you would like to hear from We Are FYI:</p>
                                    <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                    <label class="checkbox subfield" for="gdpr_46522"><input type="checkbox" id="gdpr_46522" name="gdpr[46522]" value="Y" class="av-checkbox "><span>Email</span> </label>
                                    </fieldset>
                                    <p>You can unsubscribe at any time by clicking the link in the footer of our emails. For information about our privacy practices, please visit our website.</p>
                                </div>

                                <div class="content__gdprLegal">
                                    <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you acknowledge that your information will be transferred to Mailchimp for processing. <a href="https://mailchimp.com/legal/terms" target="_blank">Learn more about Mailchimp's privacy practices here.</a></p>
                                </div>
                            </div>
                            
                            <div id="mce-responses" class="clear foot">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4b70cb67ae8d64a4dfffa8ba5_9d2fd3922c" tabindex="-1" value=""></div>

                            <div class="optionalParent">
                                <div class="clear foot">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[8]='MMERGE8';ftypes[8]='date';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
            </div>
        </div>
    </div>

    <h2 class="faqs__title">Browse Our Online Shop</h2>

    <div class="splide splide__shop shop__carousel">
        <div class="splide__track">
            <ul class="splide__list text-center">
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-1.jpg" alt="" width="360" height="360">
                    <p>JUTE SESSION IPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-2.jpg" alt="" width="360" height="360">
                    <p>LOOM PALE</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-3.jpg" alt="" width="360" height="360">
                    <p>CITRA NEIPA JNR</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-4.jpg" alt="" width="360" height="360">
                    <p>HUCKABACK NEIPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-5.jpg" alt="" width="360" height="360">
                    <p>ALPACA DDH IPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-6.jpg" alt="" width="360" height="360">
                    <p>IKAT DDH DIPA</p>
                </li>
                <li class="splide__slide">
                    <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/img-can-7.jpg" alt="" width="360" height="360">
                    <p>TRAM DOUBLE NEIPA</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="container reviews__container">
        <div class="row reviews__row">
            <div class="col reviews__col">
                <p class="reviews__name">Adam Wylie</p>
                <p class="reviews__position">SALT Oakwood</p>
                <p class="reviews__text">Nice relaxed vibe. Good beers, dog friendly and the big buns food is outstanding. Small menu that they execute really well</p>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-start.svg" alt="" class="reviews__stars">
            </div>
            <div class="col reviews__col">
                <p class="reviews__name">Michael Howard</p>
                <p class="reviews__position">SALT Oakwood</p>
                <p class="reviews__text">Really loved our time here!! The cocktails on tap were AMAZING!! The food was great. But what made our time special; the staff. Great team. Looks forward to coming back in</p>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-start.svg" alt="" class="reviews__stars">
            </div>
            <div class="col reviews__col">
                <p class="reviews__name">Samantha Mutton</p>
                <p class="reviews__position">SALT Granary Wharf</p>
                <p class="reviews__text">We have just spent a long weekend in Leeds and the SALT bar in Granary Wharf is amazing! The beer, service and food was exceptional. We were all made to feel really welcome and visited every day! I cannot thank the team enough for looking after us! I cannot wait to visit again in 2023!</p>
                <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/icon-start.svg" alt="" class="reviews__stars">
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>