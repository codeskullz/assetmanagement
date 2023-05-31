<!-- 
<div class="report-widget">
<h3><?= e($this->property('title')) ?></h3>

    <?php if (!isset($error)): ?>
        <p>This is the default partial content.</p>
    <?php else: ?>
        <p class="flash-message static warning"><?= e($error) ?></p>
    <?php endif ?>
</div>
    -->

<div class="widget-container">
    <h2>Totaal aantal assets</h2>
    <p>{{ assetCount }}</p>
</div>

