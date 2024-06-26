<div class="container" style="padding: 128px 0;">
  <h2 style="text-align: center; margin-bottom: 32px; font-weight: 600;">Order History</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Total</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($order_history as $order) { ?>
        <tr>
          <td><?= $order['id']; ?></td>
          <td><?= $order['name']; ?></td>
          <td><?= $order['email']; ?></td>
          <td><?= $order['address']; ?></td>
          <td><?= $order['phone']; ?></td>
          <td>Rp <?= number_format($order['total'], 2, ',', '.'); ?></td>
          <td><?php if (array_key_exists('created_at', $order)) {
                echo $order['created_at'];
              } ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>