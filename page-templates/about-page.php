<?php

/**
 * Template Name: Template 8 About 
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
            <h1 class="hero-banner__text"><?php getAcfValue("hero_banner_main_head"); ?></h1>
            <a href="#" class="p-3 mb-5 btn btn-outline-light" role="button" aria-pressed="true"><?php getAcfValue("button_text"); ?></a>
        </div>
    </section>

    <section id="about">
        <div class="col-sec">
            <h2 class="about__head-text"><?php getAcfValue("we_live_together_as_one_head"); ?></h2>
            <div class="col-container flex">
                <div class="col">
                    <h4 class="col__heading"><?php getAcfValue("first_column_head_list"); ?></h4>
                    <p class="col_list"><?php getAcfValue("first_column_list"); ?></p>
                    <p class="col_list"><?php getAcfValue("second_column_list"); ?></p>
                    <p class="col_list"><?php getAcfValue("third_column_list"); ?></p>
                </div>
                <div class="col">
                    <h4 class="col__heading "><?php getAcfValue("second_column_head"); ?></h4>
                    <p class="col__para"><?php getAcfValue("second_column_first_description"); ?></p>
                    <p class="col__para"><?php getAcfValue("second_column_second_description"); ?></p>
                </div>
                <div class="col center-items">
                    <?php $aboutimg = get_field('third_column_img'); ?>
                    <img src="<?php echo $aboutimg; ?>" class="hero__about-img">
                </div>
            </div>
        </div>
    </section>

    <section class="projects">
        <h4 class="projects__head"><?php getAcfValue("our_projects_heading_text"); ?></h4>
        <div class="cards-wrapper center-items-row">
            <div class="f-cards">
                <div class="head__wrap">
                    <h4 class="card__heading "><?php getAcfValue("first_card_head"); ?></h4>
                </div>
                <div class="subhead__wrap">
                    <h4 class="card__subhead "><?php getAcfValue("first_card_subtext"); ?></h4>
                </div>
            </div>
            <div class="s-cards">
                <div class="head__wrap">
                    <h4 class="card__heading "><?php getAcfValue("second_card_head"); ?></h4>
                </div>
                <div class="subhead__wrap">
                    <h4 class="card__subhead "><?php getAcfValue("second_card_subtext"); ?></h4>
                </div>
            </div>
            <div class="t-cards">
                <div class="head__wrap">
                    <h4 class="card__heading "><?php getAcfValue("third_card_head"); ?></h4>
                </div>
                <div class="subhead__wrap">
                    <h4 class="card__subhead "><?php getAcfValue("third_card_subtext"); ?></h4>
                </div>
            </div>
            <div class="ft-cards">
                <div class="head__wrap">
                    <h4 class="card__heading "><?php getAcfValue("fourth_card_head"); ?></h4>
                </div>
                <div class="subhead__wrap">
                    <h4 class="card__subhead "><?php getAcfValue("fourth_card_subtext"); ?></h4>
                </div>
            </div>
        </div>
    </section>

    <section class="info">
        <div class="head-wrap center-items-col">
            <h4 class="info__head"><?php getAcfValue("why_choose_us_heading"); ?></h4>
            <div class="subhead-wrap center-items-row">
                <p class="info__desc"><?php getAcfValue("why_choose_us_description"); ?></p>
            </div>
            <div class="col-sec flex">
                <div class="row-wrap">
                    <h5 class="info__subhead"><?php getAcfValue("why_choose_us_subheading"); ?></h5>
                    <p class="info__subdesc"><?php getAcfValue("why_choose_us_subhead_desc"); ?></p>
                    <div class="list-wrap flex">
                        <div class="list-icon"><img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/icon_list.png" class="list__icon-" /></div>
                        <div class="info-list">
                            <p><?php getAcfValue("list_1"); ?></p>
                        </div>
                    </div>
                    <div class="list-wrap flex">
                        <div class="list-icon"><img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/icon_list.png" class="list__icon-" /></div>
                        <div class="info-list">
                            <p><?php getAcfValue("list_2"); ?></p>
                        </div>
                    </div>
                    <div class="list-wrap flex">
                        <div class="list-icon"><img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/icon_list.png" class="list__icon-" /></div>
                        <div class="info-list">
                            <p><?php getAcfValue("list_3"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row-wrap center-items-row">
                    <?php $infoimg = get_field('why_choose_us_img'); ?><img src="<?php echo $infoimg ?>" class="info__img">
                </div>
                <div>
                </div>
    </section>

    <section class="team">
        <div class="team-wrap center-items-col">
            <h4 class="team__head"><?php getAcfValue("team_heading_text"); ?></h4>
            <p class="team_desc"><?php getAcfValue("team_heading_subtext"); ?></p>
        </div>
        <div class="gallery-wrap center-items-row">
            <div class="img-container"><?php $firstimg = get_field('team_img_1'); ?><img src="<?php echo $firstimg ?>" class="team__img"></div>
            <div class="img-container"><?php $secimg = get_field('team_img_2'); ?><img src="<?php echo $secimg ?>" class="team__img"></div>
            <div class="img-container"><?php $thirdimg = get_field('team_img_3'); ?><img src="<?php echo $thirdimg ?>" class="team__img"></div>
            <div class="img-container"><?php $fourthimg = get_field('team_img_4'); ?><img src="<?php echo $fourthimg ?>" class="team__img"></div>
            <div class="img-container"><?php $fifthimg = get_field('team_img_5'); ?><img src="<?php echo $fifthimg ?>" class="team__img"></div>
        </div>
    </section>

    <section class="contact">
        <div class="contact-wrap center-items-row">
            <div class="cards display-start-col pd-cards ">
                <img src="<?= get_stylesheet_directory_uri(); ?>../assets/images/Map.png" class="map__icon" />
                <h5><?php getAcfValue("location_head"); ?></h5>
                <p><?php getAcfValue("location_subhead"); ?></p>
            </div>
            <div class="cards pd-cards ">
                <h6 class="cards__city"><?php getAcfValue("city_1"); ?></h6>
                <p class="cards__address"><?php getAcfValue("address_1"); ?></p>
                <h6 class="cards__city"><?php getAcfValue("city_2"); ?></h6>
                <p class="cards__address"><?php getAcfValue("address_2"); ?></p>
                <h6 class="cards__city"><?php getAcfValue("city_3"); ?></h6>
                <p class="cards__address"><?php getAcfValue("address_3"); ?></p>
            </div>
            <div class="cards pd-cards ">
                <h6 class="cards__city"><?php getAcfValue("city_4"); ?></h6>
                <p class="cards__address"><?php getAcfValue("address_4"); ?></p>
                <h6 class="cards__city"><?php getAcfValue("city_5"); ?></h6>
                <p class="cards__address"><?php getAcfValue("address_5"); ?></p>
                <h6 class="cards__city"><?php getAcfValue("city_6"); ?></h6>
                <p class="cards__address"><?php getAcfValue("address_6"); ?></p>
            </div>
        </div>
    </section>
    <?php get_footer() ?>
</main><!-- #main -->