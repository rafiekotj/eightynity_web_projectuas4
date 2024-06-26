<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 48px; font-weight: 600;">
    <?php echo $product['name']; ?>
  </h2>
  <div class="row" style="margin-bottom: 16px">
    <div class="col-md-6">
      <img src="<?= base_url('assets/'); ?>/img/<?= $product['image']; ?>" class="img-fluid" />
    </div>
    <div class="col-md-6">
      <p class="card-text"><?php echo $product['description']; ?></p>
      <p class="card-text">Rp <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
      <form action="<?= base_url('cart/add'); ?>" method="post">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <input type="number" name="quantity" value="1" min="1" style="width: 112px; padding: 6px; border: 1px solid #ccc; border-radius: 5px; margin-right: 16px;">
        <button type="submit" class="btn btn-secondary">
          Add to Cart
        </button>
      </form>
    </div>
  </div>
</div>