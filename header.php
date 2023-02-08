<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#ffb600">
    <meta name="msapplication-TileColor" content="#ffb600">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/app.css">
</head>
    <header class="header">
        <nav class="header__nav-bar">
            <div class="header__nav-row">
                <div class="header__menu-toggle">
                    <button class="header__btn" type="button" data-toggle="" aria-controls="NavCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        Our Venues
                    </button>
                </div>

                <div class="header__logo">
                    <a href="<?php echo home_url() ?>" class="header__logo-wrapper">
                        <img class="logo logo--light" src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/logo-salt-light.svg" alt="Salt Oakwood" width="196" height="123">
                        <img class="logo logo--dark" src="<?php echo get_bloginfo( 'template_directory' ); ?>/public/images/logo-salt-dark.svg" alt="Salt Oakwood" width="196" height="123">
                    </a>
                </div>

                <div class="header__book">
                    <a href="https://www.saltbeerfactory.co.uk/" class="header__btn">SALT Beer Factory</a>
                </div>
            </div>

            <div class="header__nav-collapse" id="NavCollapse">
                <div class="ball__wrapper">
                    <span class="ball"></span>

                    <ul class="header__nav">
                        <li>
                            <a href="/bar-kitchen" class="header__nav-link" data-image="salt-bar-kitchen">
                                <span>SALT BAR + KITCHEN</span>
                            </a>
                        </li>
                        <li>
                            <a href="/leeds-city" class="header__nav-link" data-image="salt-leeds-city">
                                <span>SALT LEEDS CITY</span>
                            </a>
                        </li>
                        <li>
                            <a href="/sheffield" class="header__nav-link" data-image="salt-sheffield">
                                <span>SHEFFIELD</span>
                            </a>
                        </li>
                        <li>
                            <a href="/deptford" class="header__nav-link" data-image="salt-deptford">
                                <span>SALT DEPTFORD</span>
                            </a>
                        </li>
                        <li>
                            <a href="/woolwich" class="header__nav-link" data-image="salt-woolwich">
                                <span>SALT WOOLWICH</span>
                            </a>
                        </li>
                        <li>
                            <a href="/granary-wharf" class="header__nav-link" data-image="salt-boston-spa">
                                <span>SALT GRANARY WHARF</span>
                            </a>
                        </li>
                        <li>
                            <a href="/boston-spa" class="header__nav-link" data-image="salt-deptford">
                                <span>SALT BOSTON SPA</span>
                            </a>
                        </li>
                        <li>
                            <a href="/oakwood" class="header__nav-link" data-image="salt-woolwich">
                                <span>SALT OAKWOOD</span>
                            </a>
                        </li>
                        <li>
                            <a href="/calls-landing" class="header__nav-link" data-image="salt-boston-spa">
                                <span>SALT CALLS LANDING</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="overflow-hidden">