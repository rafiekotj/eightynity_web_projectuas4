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
                    Signin
                  </h1>
                </div>

                <form class="user" method="post" action="<?= base_url('autentifikasi/signin'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>" />
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>" />
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" />
                      <?= form_error(
                        'password1',
                        '<small class="text-danger pl-3">',
                        '</small>'
                      ); ?>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password" />
                      <?= form_error(
                        'password2',
                        '<small class="text-danger pl-3">',
                        '</small>'
                      ); ?>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-secondary btn-user btn-block">
                    Daftar
                  </button>
                </form>

                <hr />
                <div class="text-center small">
                  Sudah memiliki akun?
                  <a href="<?= base_url('autentifikasi'); ?>">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>