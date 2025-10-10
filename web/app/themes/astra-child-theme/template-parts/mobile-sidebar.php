<div class="hamburger" id="hamburger">
  <i class="fas fa-bars"></i>
</div>

<aside class="sidebar" id="sidebar">
  <div class="sidebar-header">
    <h2>Sandbox</h2>
    <button class="close-btn" id="close-btn">&times;</button>
  </div>

  <nav class="sidebar-nav">
    <?php
      wp_nav_menu([
        'theme_location' => 'mobile-menu',
        'container' => false,
        'menu_class' => 'sidebar-nav-list',
        'fallback_cb' => false
      ]);
    ?>
  </nav>

  <div class="sidebar-contact">
    <p><a href="mailto:sales@neoshealth.com">sales@neoshealth.com</a></p>
    <p><a href="tel:3854255101">385-425-5101</a></p>
    <div class="sidebar-social">
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</aside>
