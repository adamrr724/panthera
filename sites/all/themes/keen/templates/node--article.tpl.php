<?php
  $node = $variables['node'];
  $author = user_load($node->uid);
  $bio = field_get_items('user', $author, 'field_bio'); 
  $variables['bio'] = !empty($bio[0]['value']) ? check_plain($bio[0]['value']) : '';
?>
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
        <?php print render($content['field_tags']); ?>
        <?php if ($display_submitted): ?>
        <div class="big-comments">
          <h3>About the Author</h3>
          <div class="comm-img-big">
            <?php $user = user_load($uid);
              print theme('user_picture', array('account' =>$user));
            ?>
          </div>
          <div class="comm-text-big">
            <h4><?php print $node->name; ?></h4>
            <span><?php print format_date($node->created, 'custom', 'd M Y'); ?></span>
            <?php if (!empty($bio[0]['value'])): ?><p><?php print render($bio[0]['value']);?></p><?php endif; ?>
          </div>
        </div>
        <?php endif; ?>
        <?php print render($content['comments']); ?>
      </div>
    </div>
  </div>	   	      
</div>