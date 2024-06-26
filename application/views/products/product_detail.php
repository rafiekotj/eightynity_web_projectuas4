<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;">Product Detail</h2>
  <div class="row">
    <div class="col-md-6">
      <img src="<?= base_url('assets/'); ?>/img/<?= $product['image']; ?>" class="img-fluid" />
    </div>
    <div class="col-md-6">
      <h3 class="card-title"><?= $product['name']; ?></h3>
      <p class="card-text"><?= $product['description']; ?></p>
      <p class="card-text">Rp <?= number_format($product['price'], 0, ',', '.'); ?></p>
      <?php if ($this->session->userdata('logged_in')) { ?>
        <a href="<?= site_url('cart/add/' . $product['id']); ?>" class="btn btn-primary">Add to Cart</a>
      <?php } else { ?>
        <a href="<?= site_url('login'); ?>" class="btn btn-primary">Login to Add to Cart</a>
      <?php } ?>
    </div>
  </div>
</div>