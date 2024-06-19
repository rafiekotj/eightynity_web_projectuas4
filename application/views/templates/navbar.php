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
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>home">Home</a>
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
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" id="dark_icon">
          <i class="fa-regular fa-sun fa-lg" style="color: #333"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: #333">
          <i class="fa-solid fa-basket-shopping fa-lg"></i>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>autentifikasi">Login</a>
      </li>
      <li>
        <a class="nav-link" href="<?= base_url(); ?>autentifikasi/signin">Signin</a>
      </li>
    </ul>
  </div>
</nav>