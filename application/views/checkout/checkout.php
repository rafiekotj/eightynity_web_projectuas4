<div class="container" style="padding: 128px 0;">
  <h2 class="text-center mb-4">Checkout</h2>
  <form action="<?= site_url('checkout/process'); ?>" method="post">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cart as $id => $item) { ?>
          <tr>
            <td><?= $item['name']; ?></td>
            <td><?= $item['quantity']; ?></td>
            <td>Rp <?= number_format($item['price'], 0, ',', '.'); ?></td>
            <td>Rp <?= number_format($item['price'] * $item['quantity'], 0, ',', '.'); ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3">Total</th>
          <th>Rp <?= number_format($this->cart_model->get_total_cost($cart), 0, ',', '.'); ?></th>
        </tr>
      </tfoot>
    </table>
    <button type="submit" class="btn btn-success">Pay Now</button>
  </form>
</div>