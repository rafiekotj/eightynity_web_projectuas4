<!-- cart.php -->
<div class="container" style="padding: 128px 0;">
  <h2 class="text-center mb-4">Cart</h2>
  <table class="table table-striped">
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
      <?php foreach ($cart as $id => $item) { ?>
        <tr>
          <td><?= $item['name']; ?></td>
          <td>
            <input type="number" name="<?= $id; ?>" value="<?= $item['quantity']; ?>" class="form-control quantity" data-price="<?= $item['price']; ?>" />
            <button class="btn btn-sm btn-primary apply-btn" style="margin-top: 16px">Apply</button>
          </td>
          <td>Rp <?= number_format($item['price'], 0, ',', '.'); ?></td>
          <td id="subtotal-<?= $id; ?>">Rp <?= number_format($item['price'] * $item['quantity'], 0, ',', '.'); ?></td>
          <td>
            <a href="<?= site_url('cart/remove/' . $id); ?>" class="btn btn-danger">Remove</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="3">Total</th>
        <th id="total">Rp <?= number_format($this->cart_model->get_total_cost($cart), 0, ',', '.'); ?></th>
        <th>
          <a href="<?= site_url('checkout'); ?>" class="btn btn-success">Checkout</a>
        </th>
      </tr>
    </tfoot>
  </table>
</div>