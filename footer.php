<footer>
    <div class="container container-sp">
      <!-- <ul class="footer-nav">
        <li><a href="#top" class="footer-nav-list"><i class="fas fa-angle-right 2x"></i>HOME</a></li>
        <li><a href="#about" class="footer-nav-list"><i class="fas fa-angle-right 2x"></i>ABOUT</a></li>
        <li><a href="#slills" class="footer-nav-list"><i class="fas fa-angle-right 2x"></i>SKILLS</a></li>
        <li><a href="#works" class="footer-nav-list"><i class="fas fa-angle-right 2x"></i>WORKS</a></li>
      </ul> -->
      <!-- footer-nav -->

      <?php wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'items_wrap'     => '<ul class="footer-nav">%3$s</ul>'
                ) );  ?>

    </div><!-- container -->
    <div class="copywriter-area">
      <p class="copywriter-text">©2020/Rika Oishi/All Right Reserved</p>
    </div>
  </footer>

  <!-- <script src="js/sqript.js"></script> -->
  <?php wp_footer(); ?>
</body>
</html>