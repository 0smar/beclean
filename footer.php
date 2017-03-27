<div class="main-container">
  <div class="footer-box">
    <div class="announcements">
      <span class="posts-header">No te puedes perder</span>
      <div class="separator" style="height: 5px; margin-top: 0;"></div>
      <div class="footer-logo-cont">
        <div class="logo">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" />
          </a>
        </div>
        <div class="logo">
          <a href="http://anutricional.com">
            <img src="<?php bloginfo('template_url'); ?>/img/logoanh.svg" />
          </a>
        </div>
      </div>
    </div>
    <div class="favs">
      <span class="posts-header">Mis Favoritos</span>
      <div class="separator" style="height: 5px; margin-top: 0;"></div>
      <?php if ( ! dynamic_sidebar( 'Primary' ) ) : ?>   

        <?php endif; // end sidebar widget area ?>
    </div>
  </div>
</div>

<div class="footer">
		<div class="copyright">BeClean by ANutricional 2016</div>
		<div class="nuva"><a href="https://www.nuva.rocks"><img src="<?php bloginfo('template_url'); ?>/img/nuva.svg" /></a></div>
	</div>
</body>
<script>
/* Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>

<?php wp_footer(); ?>
  
</html>