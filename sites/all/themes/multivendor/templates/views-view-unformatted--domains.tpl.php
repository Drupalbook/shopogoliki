
<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>

<?php if (!empty($nav)): ?>
<div id="glossary_nav">
  <?php print $nav; ?>
</div>
<?php endif; ?>

<?php foreach ($letters as $letter=>$rows): ?>
<div class="domain-letter">
<a name="<?php print $letter ?>"></a>
<h4 class="letter">
  <?php print strtoupper($letter); ?>
</h4>
<?php foreach ($rows as $id=>$row): ?>
  <div class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
  <?php endforeach;?>
</div>
<?php endforeach; ?>