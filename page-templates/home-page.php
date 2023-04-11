<?php

/**
 * Template Name: Template 8 Home
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wordpress-backend-theme
 */
get_header();
?>
<!-- hero banner -->
<main id="primary" class="site-main">
    <section id="herobanner">
        <div class="hero-banner center-items-col">
            <h1 class="hero-banner__text"><?php getAcfValue("home_hero_banner_text"); ?></h1>
            <a href="#" class="p-3 mb-5 btn btn-outline-light" role="button" aria-pressed="true"><?php getAcfValue("button_text"); ?></a>
        </div>
    </section>

    <section id="about">
        <div class="about-wrap col-center-items">
            <div class="about-container">
                <div class="about__img center-items-row "><img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/homeimg.png" class="about-img" /></div>
                <div class="heading flex-display-start flex-display-end">
                    <div class="heading-container">
                        <h2 class="about-heading"><?php getAcfValue("about_heading_text"); ?></h2>
                    </div>
                </div>
                <div class="about__desc">
                    <div class="about__desc-wrap">
                        <p><?php getAcfValue("about_description_text"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about mb center-items-col">
        <h2 class="about-heading mb-text"><?php getAcfValue("about_heading_text"); ?></h2>
        <img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/homeimg.png" class="list__icon-" />
        <p class="mb-text"><?php getAcfValue("about_description_text"); ?></p>
    </section>

    <section id="projects">
        <div class="projects-container">
            <div class="projects__img center-items-row"><img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/homeproject.png" class="projects-img" /></div>
            <div class="projects__head flex-display-end">
                <div class="head-wrap--pt">
                    <h2 class="projects__head-text"><?php getAcfValue("upcoming_events_head"); ?></h2>
                </div>
            </div>
            <div class="projects__desc">
                <div class="projects-container display-start-col">
                    <div class="desc-wrap">
                        <p><?php getAcfValue("upcoming_events_description"); ?></p>
                    </div>
                    <div class="list-wrap">
                        <ul class="project__list">
                            <li><?php getAcfValue("upcoming_events_list_1"); ?></p>
                            </li>
                            <li><?php getAcfValue("upcoming_events_list_2"); ?></p>
                            </li>
                            <li><?php getAcfValue("upcoming_events_list_3"); ?></p>
                            </li>
                            <li><?php getAcfValue("upcoming_events_list_4"); ?></p>
                            </li>
                            <li><?php getAcfValue("upcoming_events_list_5"); ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects mb center-items-col">
        <h2 class="projects__head-text"><?php getAcfValue("upcoming_events_head"); ?></h2>
        <img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/homeproject.png" class="projects-img" />
        <div class="desc-wrap">
            <p class="mb-text"><?php getAcfValue("upcoming_events_description"); ?></p>
        </div>
        <div class="list-wrap">
            <ul class="project__list">
                <li><?php getAcfValue("upcoming_events_list_1"); ?></p>
                </li>
                <li><?php getAcfValue("upcoming_events_list_2"); ?></p>
                </li>
                <li><?php getAcfValue("upcoming_events_list_3"); ?></p>
                </li>
                <li><?php getAcfValue("upcoming_events_list_4"); ?></p>
                </li>
                <li><?php getAcfValue("upcoming_events_list_5"); ?></p>
                </li>
            </ul>
        </div>
    </section>

    <section id="location">
        <img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/location.png" class="location__image" />
    </section>
    <?php get_footer() ?>
</main><!-- #main -->