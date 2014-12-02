<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="l-branding-wrapper">
      <div class="l-branding">
        <div class="l-logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
            <img src="/<?php print drupal_get_path('theme', $GLOBALS['theme']) . '/images/logo.png'; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        </div>
        <div class="l-utility">
          <div class="search">
            <?php print render($page['search']); ?>
          </div>
          <div class="links">
            <ul class="menu">
              <li><a href="#main-content">Skip to content</a></li>
              <li><a href="site-map">Site map</a></li>
            </ul>
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
      <ul>
        <li><a class="icon publications"href="/publications">Publications</a></li>
        <li><a class="icon skills-list" href="/national-skills-needs-list">National Skills Needs List</a></li>
        <li><a class="icon useful-links" href="/useful-links">Useful links</a></li>
        <li><a class="icon starting-a-business" href="/starting-a-business">Starting a business?</a></li>
        <li><a class="icon ambassadors" href="/australian-apprenticeships-ambassadors-program">Success stories</a></li>
        <li><a class="icon reform" href="/australian-apprenticeships-reform">Apprenticeships Reform</a></li>
      </ul>
      <?php print render($page['links']); ?>
    </div>
    <div class="l-utility-blocks">
    <div class="utility-block find-aac">
      <div class="title-wrapper">
       <h2><a href="/find-my-aac/full-list">Find an Australian Apprenticeships Centre</a></h2>
     </div>
    </div>
    <div class="utility-block connect-with-us">
      <div class="title-wrapper">
        <h2>Connect with us</h2>
      </div>
      <div class="content">
          <p class="enquiries">All enquiries <span class="telephone">13 38 73</span></p>
      </div>
    </div>
  </div>
  </div>
  <div class="l-footer-wrapper">
    <footer class="l-footer" role="contentinfo">
      <div class="copyright">
        <p>Copyright &copy; <?php echo date("Y"); ?> Department of Industry</p>
      </div>
      <div class="footer-menu">
        <?php print render($page['footer']); ?>
      </div>
      <div class="footer-logo">
        <a href="http://industry.gov.au" title="industry.gov.au">
          <img src="/<?php print drupal_get_path('theme', $GLOBALS['theme']) . '/images/industry-black.png'; ?>" alt="industry.gov.au" />
        </a>
    </footer>
  </div>
</div>