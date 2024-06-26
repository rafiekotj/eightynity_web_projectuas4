<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 48px; font-weight: 600;">Our Products</h2>
  <div class="row" style="margin-bottom: 16px">
    <?php foreach ($products as $product) { ?>
      <div class="col-md-4">
        <a href="<?php echo base_url('products/detail/' . $product['id']); ?>" style="text-decoration: none; color: black;">
          <div class="card" style="margin-bottom: 24px;">
            <img src="<?= base_url('assets/'); ?>/img/<?= $product['image']; ?>" class="card-img-top" style="height: 320px; object-fit: contain; margin: 8px" />
            <div class="card-body">
              <h3 class="card-title"><?php echo $product['name']; ?></h3>
              <p class="card-text"><?php echo $product['description']; ?></p>
              <p class="card-text">Rp <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</div>