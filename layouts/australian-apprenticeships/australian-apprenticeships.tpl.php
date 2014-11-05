<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="l-branding-wrapper">
      <div class="l-branding">
        <div class="l-logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
            <img src="<?php print drupal_get_path('theme', $GLOBALS['theme']) . '/images/logo.png'; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
        <div class="l-utility">
          <div class="links">
            <ul class="menu">
              <li><a href="#main-content">Skip to content</a></li>
              <li><a href="site-map">Site map</a></li>
            <ul>
          </div>
          <div class="search">
            <?php print render($page['search']); ?>
          </div>
        </div>
        <div class="l-title">
          <h1 class="hidden">Australian Apprenticeships</h1>
        </div>
        <?php print render($page['branding']); ?>
      </div>
    </div>
    <div class="l-top-menu-wrapper">
      <div class="l-top-menu">
        <?php print render($page['top_menu']); ?>
      </div>
    </div>
  </header>
  <div class="l-main">
    <div class="l-content" role="main">
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div>
  </div>
  <div class="l-secondary">
    <div class="l-social">
      <?php print render($page['social']); ?>
    </div>
    <div class="l-links">
      <?php print render($page['links']); ?>
    </div>
  </div>
  <div class="l-footer-wrapper">
    <footer class="l-footer" role="contentinfo">
      <?php print render($page['footer']); ?>
    </footer>
  </div>
</div>