<?php include('svg-sprite.php'); ?>

<?php if ($page['navigation']): ?>
<nav class="pushy pushy-left">
    <?php print render($page['navigation']); ?>
</nav>
<?php endif; ?>

<div class="site-overlay"></div>

<header class="ehl-header" role="banner">

    <div class="topbar push clearfix">

        <a href="/"><img class="site-logo" src="/<?php print $directory; ?>/images/logo-right.svg"></a>
        <h1 class="site-name">Enhedslisten</h1>

        <button class="icon-wrapper-topbar menu-btn">
            <svg class="icon icon-bars" viewBox="0 0 32 32"><use xlink:href="#icon-bars"></use></svg>
            <div class="icon-text">Menu</div>
        </button>   
        <button class="icon-wrapper-topbar" id="btn-contact">
            <svg class="icon icon-phone" viewBox="0 0 30 32"><use xlink:href="#icon-phone"></use></svg>
            <div class="icon-text">Kontakt</div>
        </button>
        <button class="icon-wrapper-topbar" id="btn-search">
            <svg class="icon icon-search" viewBox="0 0 30 32"><use xlink:href="#icon-search"></use></svg>
            <div class="icon-text icon-text-search">Søg</div>
        </button>
        <div class="container-form-search">
            <?php print render(module_invoke('search', 'block_view', 'form')); ?> 
        </div>

    </div>
    <?php print render($page['header']); ?>
</header>
<div class="clearfix">
    <?php if (!$node && !$is_front): ?>
    <div class="ehl-page-container">
        <?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title && !$node): ?>
        <h1 class="page-title page-title-simple"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        
        <?php if (!$node && !$is_front): ?>
    </div>
    <?php endif; ?>
</div>

<?php if ($page['contact']): ?>
<div id="container-contact" class="hide">
    <?php print render($page['contact']); ?>
</div>
<?php endif; ?>

<footer class="l-footer clearfix push">
    <?php print render($page['footer']); ?>
    <div class="wrapper-blivmedlem clearfix">
            <div class="ehl-page-container ehl-page-container-narrow">
                <h2>Gør en forskel</h2>
                <blockquote>Enhedslisten arbejder hver dag på at trække dansk politik i en mere solidarisk retning. Til det har vi brug for din hjælp.
                    <div class="byline-quote"><strong>Stine</strong> Brix<br>Gruppeformand</div>
                </blockquote>

                <div class="rise-btn">
                    <a href="http://enhedslisten.dk/blivmedlem" class="btn btn-medlem">Bliv medlem</a>
                </div>

            </div>

            <div class="svg-container">
        <img src="/<?php print $directory; ?>/images/svung-roed.svg" class="svg-content">
    </div>

        </div>

    
    <div class="site-logo-footer clearfix">
        <a href="/"><img class="site-logo-footer" src="/<?php print $directory; ?>/images/logo-right-negative.svg"></a>
    </div>
</footer>
