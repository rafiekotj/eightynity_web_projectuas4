<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;"><?php echo $product['name']; ?></h2>
  <div class="row" style="margin-bottom: 16px">
    <div class="col-md-6">
      <img src="<?= base_url('assets/'); ?>/img/<?= $product['image']; ?>" class="img-fluid" />
    </div>
    <div class="col-md-6">
      <p class="card-text"><?php echo $product['description']; ?></p>
      <p class="card-text">Rp <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
    </div>
  </div>
</div>