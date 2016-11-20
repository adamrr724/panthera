<div class="comments">
  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <?php print render($title_prefix); ?>
    <h3><?php print 'Comments (' . $node->comment_count . ')'; ?></h3>
    <?php print render($title_suffix); ?>
  <?php endif; ?>


  <div id="comments"><?php print render($content['comments']); ?></div>
</div>


  <?php if ($content['comment_form']): ?>
  <div class="blog-form contact-form">
    <h3><?php print t('Leave a comment'); ?></h3>
    <?php print render($content['comment_form']); ?>
  <?php endif; ?>
  </div>