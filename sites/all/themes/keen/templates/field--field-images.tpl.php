<?php foreach ($items as $delta => $item): ?>
  <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="item ccn-nrg-blast-out">
    <a itemprop="contentUrl">
      <?php print render($item); ?>
    </a>
  </figure>
<?php endforeach; ?>
