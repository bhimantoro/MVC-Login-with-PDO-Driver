<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale=1.0>
  <title>Facebook Login</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
  <header>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>selamat datang di halaman login</h1>
            <p>aplikasi yang dapat mendekatkan yang jauh</p>
          </div>
          <div class="col-md-4">
            <form action="<?php echo base_url() ?>login/aksi_login" method="POST">
              <div class="col-md">
                <label for="email">Email</label><br>
                <input class="form-control" type="email" name="email" placeholder="email anda"><br>
              </div>
              <div class="col-md">
                <label for="password">Kata Sandi</label><br>
                <input class="form-control" type="password" name="password" placeholder="kata sandi"><br>
              </div>
              <div class="col-md">
                <button type="submit" class="btn btn-success btn-block" name="login">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <img src="<?php echo base_url() ?>assets/img/hub.png" alt="Hub Imange" class="img img-responsive" width="80%">
        </div>
        <div class="col-md-4">
        </div>
      </div>
    </div>
  </section>
</body>

</html>