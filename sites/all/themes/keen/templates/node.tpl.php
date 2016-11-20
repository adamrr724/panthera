<div id="node-<?php print $node->nid; ?>" class="post-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="post-image">
          <?php print render($content['field_image']); ?>
        </div>
        <div class="blog-text">
          <h2><?php print $title; ?></h2>
          <?php print render($content['body']); ?>
        </div>
      </div>
    </div>
  </div>
</div>