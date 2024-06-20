<div class="container">
  <div class="row">
    <div class="card col-12">
      <div class="cart">
        <h1>Shopping Cart</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="cart-items">
            <!-- <?php foreach ($cart_items as $item) { ?>
        <div class="cart-item">
          <div class="cart-item-image">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
          </div>
          <div class="cart-item-details">
            <h3><?php echo $item['name']; ?></h3>
            <p>Quantity: <input type="number" name="quantity[<?php echo $item['id']; ?>]" value="<?php echo $item['quantity']; ?>" min="1" max="<?php echo $item['stock']; ?>"></p>
            <p>Price: $<?php echo $item['price']; ?></p>
          </div>
          <div class="cart-item-actions">
            <button type="submit" name="update_quantity" value="<?php echo $item['id']; ?>">Update</button>
            <button type="submit" name="remove_item" value="<?php echo $item['id']; ?>">Remove</button>
          </div>
        </div>
      <?php } ?> -->
            <div class="cart-item">
              <div class="cart-item-image col-4">
                <img src="<?= base_url('assets/'); ?>/img/poloPutih.png" alt="" style="height: 108px;" />
              </div>
              <div class=" cart-item-details col-6">
                <h3>Nama BAJU</h3>
                <p>Quantity: <input type="number" name="quantity" value="1" min="1" max=""></p>
                <p>Price: $20</p>
              </div>
              <div class="cart-item-actions col-2">
                <button type="submit" name="update_quantity" value="">Update</button>
                <button type="submit" name="remove_item" value="">Remove</button>
              </div>
            </div>
          </div>
          <div class="cart-checkout">
            <button type="submit" name="checkout">Checkout</button>
          </div>
        </form>
      </div>
    </div>
    <div class="card col-12">
      <div class="cart">
        <h1>Shopping Cart</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="cart-item">
            <div class="cart-item-image">
              <img src="<?= base_url('assets/'); ?>/img/poloPutih.png" alt="" style="height: 108px" />
            </div>
            <div class="cart-item-details">
              <h3>Nama BAJU</h3>
              <p>Quantity: <input type="number" name="quantity" value="1" min="1" max=""></p>
              <p>Price: $20</p>
            </div>
            <div class="cart-item-actions">
              <button type="submit" name="update_quantity" value="">Update</button>
              <button type="submit" name="remove_item" value="">Remove</button>
            </div>
          </div>
      </div>
      <div class="cart-checkout">
        <button type="submit" name="checkout">Checkout</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>