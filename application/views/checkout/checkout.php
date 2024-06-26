<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;">Checkout</h2>
  <form action="<?php echo base_url('checkout/process'); ?>" method="post">
    <div class="row">
      <div class="col-md-6">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
      </div>
      <div class="col-md-6">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="address">Address:</label>
        <textarea name="address" required></textarea>
      </div>
      <div class="col-md-6">
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required>
      </div>
    </div>
    <h3>Order Summary</h3>
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
    <button type="submit" class="btn btn-primary">Place Order</button>
  </form>
</div>