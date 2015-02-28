<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Devalan Train Show
 */
?>

	</div><!-- #content -->
    </div><!-- #content-wrapper -->
	<div id="footer-container">
      <footer id="colophon" class="site-footer" role="contentinfo">
          <div class="site-info">
              <span>Copyright &copy; 2015 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>. All Rights Reserved.</span>
          </div><!-- .site-info -->
      </footer><!-- #colophon -->
    </div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
