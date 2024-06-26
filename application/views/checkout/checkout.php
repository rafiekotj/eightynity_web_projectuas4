<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;">Checkout</h2>
  <form action="<?php echo base_url('checkout/process'); ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <label for="name" style="font-weight: 600;">Name:</label>
        <input type="text" name="name" required style="width: 100%; height: 40px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 16px;">
      </div>
      <div class="col-md-6">
        <label for="email" style="font-weight: 600;">Email:</label>
        <input type="email" name="email" required style="width: 100%; height: 40px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 16px;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="address" style="font-weight: 600;">Address:</label>
        <textarea name="address" required style="width: 100%; height: 100px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 16px;"></textarea>
      </div>
      <div class="col-md-6">
        <label for="phone" style="font-weight: 600;">Phone:</label>
        <input type="tel" name="phone" required style="width: 100%; height: 40px; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 16px;">
      </div>
    </div>
    <h4 style="font-weight: 600">Order Summary</h4>
    <table class="table">
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cart_items as $item) { ?>
          <tr>
            <td><?= $item['product_name']; ?></td>
            <td><?= $item['quantity']; ?></td>
            <td>Rp <?= number_format($item['price'], 2, ',', '.'); ?></td>
            <td>Rp <?= number_format($item['subtotal'], 2, ',', '.'); ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3">Total:</th>
          <td>Rp <?= number_format($total, 2, ',', '.'); ?></td>
        </tr>
      </tfoot>
    </table>
    <div style="display: flex; justify-content: flex-end;">
      <button type="submit" class="btn btn-secondary">Place Order</button>
    </div>
  </form>
</div>