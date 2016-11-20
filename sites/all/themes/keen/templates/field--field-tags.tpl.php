<div class="blog-tags">
  <?php if (!$label_hidden): ?>
    <span><?php print $label ?>:</span>
  <?php endif; ?>
  <?php foreach ($items as $delta => $item): ?>
    <span><?php print render($item); ?></span>
  <?php endforeach; ?>
</div>