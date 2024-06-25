<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;">Our Products</h2>
  <?php foreach ($products as $product) { ?>
    <div class="row" style="margin-bottom: 16px">
      <div class="col-md-4">
        <a href="<?= site_url('products/detail/' . $product['id']); ?>">
          <div class="card">
            <img src="<?= base_url('assets/'); ?>/img/<?= $product['image']; ?>" class="card-img-top" />
            <div class="card-body">
              <h3 class="card-title"><?= $product['name']; ?></h3>
              <p class="card-text"><?= $product['description']; ?></p>
              <p class="card-text">Rp <?= number_format($product['price'], 0, ',', '.'); ?></p>
            </div>
          </div>
        </a>
      </div>
    </div>
  <?php } ?>
</div>