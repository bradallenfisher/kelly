<div class="l-page">

<div class="head-wrapper">
<header id="header title">
	<img src="/sites/all/themes/kelly/images/logo.svg" />
</header>

<div class="menu-expander"><i class="fa fa-bars"></i></div>
</div>
<nav id="navigation">
	<ul>
		<li><a href="#intro">Intro</a></li>
		<li><a href="#one">What I Do</a></li>
		<li><a href="#two">Who I Am</a></li>
		<li><a href="#work">My Work</a></li>
		<li><a href="#contact">Contact</a></li>
	</ul>
</nav>

<?php print render($page['header']); ?>
<?php print render($page['navigation']); ?>


  <div class="l-main">

    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>

      <a id="main-content"></a>

      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
