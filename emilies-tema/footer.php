<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emilies-tema
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <!--
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'emilies-tema' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'emilies-tema' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'emilies-tema' ), 'emilies-tema', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
                -->
        <ul class="footer-list">
            <li class="footer-link">
                &copy; 2020 Brain Traffic
            </li>
            <li>
                <a href="#" class="footer-link">
                    Confab Conference
                </a>
            </li>
            <li>
                <a href="#" class="footer-link">
                    Button Conference
                </a>
            </li>
            <li>
                <a href="#" class="footer-link">
                    Content Strategy Podcast
                </a>
            </li>
            <li>
                <a href="#" class="footer-link">
                    Contact Us
                </a>
            </li>
            <li>
                <a href="#" class="footer-link">
                    Newsletter
                </a>
            </li>
            <li>
                <a href="#" class="footer-link">
                    Twitter
                </a>
            </li>
            <li>
                <a href="#" class="footer-link">
                    LinkedIn
                </a>
            </li>
        </ul>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>