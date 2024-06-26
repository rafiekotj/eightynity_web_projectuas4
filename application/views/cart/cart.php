<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;">Your Cart</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($cart_items as $item) { ?>
        <tr>
          <td><?= $item['product_name']; ?></td>
          <td>
            <form action="<?= base_url('cart/update/' . $item['id']); ?>" method="post">
              <input type="number" name="quantity" value="<?= $item['quantity']; ?>" />
              <button type="submit">Update</button>
            </form>
          </td>
          <td>Rp <?= number_format($item['price'], 2, ',', '.'); ?></td>
          <td>Rp <?= number_format($item['subtotal'], 2, ',', '.'); ?></td>
          <td>
            <a href="<?= base_url('cart/remove/' . $item['id']); ?>" class="btn btn-danger">Remove</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <p style="text-align: right; margin-top: 16px;">Total: Rp <?= number_format($total, 2, ',', '.'); ?></p>
</div>