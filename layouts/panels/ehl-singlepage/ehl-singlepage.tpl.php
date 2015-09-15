   <article role="main">
    <?php if ($content['header']): ?>
    <section class="highlight-top" role="banner">
        <?php print $content['header']; ?>
    </section>
    <?php endif; ?>
    
    <?php if ($content['content']): ?>
    <section class="wrapper-first-content">
        <div class="ehl-page-container">
            <?php print $content['content']; ?>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if ($content['content-no-container']): ?>
    <section class="no-container">
            <?php print $content['content-no-container']; ?>
    </section>
    <?php endif; ?>
    
    <?php if ($content['content-red']): ?>
    <section class="wrapper wrapper-padding bg-green">
        <div class="ehl-page-container ehl-page-container-narrow">
            <?php print $content['content-red']; ?>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if ($content['content-egg']): ?>
    <section class="wrapper wrapper-padding bg-egg">
        <div class="ehl-page-container ehl-page-container-narrow">
            <?php print $content['content-egg']; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php print $content['footer']; ?>
</article>