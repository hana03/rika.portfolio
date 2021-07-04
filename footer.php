<footer>
    <div class="container container-sp">

      <?php wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'items_wrap'     => '<ul class="footer-nav">%3$s</ul>'
                ) );  ?>

    </div><!-- container -->
    <div class="copywriter-area">
      <p class="copywriter-text">©2020/Rika Oishi/All Right Reserved</p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>