<?php foreach ($products as $product) : ?>
    <div class="kart">
        <div class="nazvanie">
            <?= $product['title'] ?>
        </div>
        <img class="pic" src="<?= $product['img_product'] ?>">
        <div class="podpis">
            <div class="podpis_text"><?= $product['opis'] ?>
            </div>
        </div>
        <div class="cost"><?= $product['cost'] ?></div>
        <div class="sale">ДОБАВИТЬ К ЗАКАЗУ</div>
    </div>
<?php endforeach ?>