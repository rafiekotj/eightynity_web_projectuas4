<body class="d-flex align-items-center min-vh-100 bg-gradient-secondary">
  <div class="container">
    <div class="row justify-content-center">

      <div class="card o-hidden border-0 col-lg-7 shadow-lg">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg">
              <div class="p-5">

                <div class="text-center">
                  <h1 class="h4 font-weight-bold text-gray-900 mb-4">
                    Login
                  </h1>
                </div>

                <!-- Status message -->
                <?php
                if (!empty($success_msg)) {
                  echo '<p class="status-msg success">' . $success_msg . '</p>';
                } elseif (!empty($error_msg)) {
                  echo '<p class="status-msg error">' . $error_msg . '</p>';
                }
                ?>

                <!-- Login form -->
                <form action="" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="EMAIL" required="">
                    <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="PASSWORD" required="">
                    <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
                  </div>
                  <div class="send-button">
                    <input type="submit" class="form-control form-control-user" name="loginSubmit" value="LOGIN">
                  </div>
                </form>

                <hr />
                <div class="text-center">
                  <a class="small" href="">Lupa Password?</a>
                </div>
                <div class="text-center small">
                  Don't have an account? <a href="<?php echo base_url('users/registration'); ?>">Register</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>