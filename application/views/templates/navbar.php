<nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
  <!-- Logo -->
  <a class="navbar-brand" href=""><span class="brandlogo">Eightynity</span></a>

  <!-- Drawer -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar Item -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>aboutus">About Us</a>
      </li>
    </ul>

    <!-- Navbar Kanan -->
    <ul class="navbar-nav ml-auto">
      <?php if (!$this->session->userdata('isUserLoggedIn')) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>autentifikasi">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>autentifikasi/signin">Signin</a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <a href="<?php echo base_url('users/logout'); ?>" class="nav-link logout">Logout</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>