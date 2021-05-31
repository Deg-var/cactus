<?php foreach ($products as $product) : ?>
  <span class="dot" onclick="currentSlide(<?= $product['ssil'] ?>)"></span>
<?php endforeach ?>