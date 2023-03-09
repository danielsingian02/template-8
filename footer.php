<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress-backend-theme
 */

?>
<div class="footer-section">
	<div class="footer-wrap flex">
		<div class="footer-section__col1 display-start-col">
			<!-- <?php $footerlogo = get_field('footer_img') ;?><img src="<?php echo $footerlogo ?>" class="footer__logo"> -->
			<?php
			if ( function_exists('the_custom_logo') && (! empty(get_custom_logo())) ) :
				the_custom_logo(); ?>
			<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			endif;
			?>
			<nav id="site-navigation" class="footer__navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'map-menu',
					)
				);
				?>
			</nav>
			<p class="footer__credits">© Copyright 2023 HOA Management</p>
		</div>
		<div class="footer-section__col2">
		<?php
            /** 
             *  Google Map Link
             * 
             * @string Google Map Embed = google_map_embed
             
            * */      
            $googleMapLink = get_field('google_map_embed') ?: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1663169.1803332209!2d-80.55231773090945!3d35.494947564826745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541fc4fc381a81%3A0xad3f30f5e922ae19!2sNorth%20Carolina%2C%20USA!5e0!3m2!1sen!2sph!4v1670919995695!5m2!1sen!2sph';
            ?>
            <iframe src="<?php echo $googleMapLink ?>" 
                width="100%" 
                height="450"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="location__iframe">
            </iframe>
			<p class="footer__credits mb">© Copyright 2023 HOA Management</p>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
