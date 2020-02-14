<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale=1.0>
  <title>Facebook Edit Biodata</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
  <header>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h1>selamat datang di halaman edit biodata</h1>
            <p>lengkapi biodata dan temukan teman anda</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="<?php echo base_url() ?>admin/editBio" method="POST">
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Nama Anda">
            </div>
            <!-- <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Email Anda">
            </div> -->
            <div class="form-group">
              <label for="phone_number">Nomor Handphone</label>
              <input type="tel" name="phone_number" id="phone_number" class="form-control" placeholder="Nomor Handphone Anda">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="tel" name="alamat" id="alamat" class="form-control" placeholder="Alamat Anda">
            </div>
            <button class="btn btn-success" name="save" type="submit">
              Simpan Data
            </button>
            <a href="<?php echo base_url() ?>login/logout" class="btn btn-danger" name="logout" type="submit">
              Logout
            </a>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>