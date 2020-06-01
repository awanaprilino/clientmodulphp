<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Makanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Implementasi Modul PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="https://awanpc2.000webhostapp.com/makanan.php">Daftar Makanan<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="https://awanpc2.000webhostapp.com/tambah_makanan.php">Tambah Makanan</a>
    </div>
  </div>
</nav>
    <h1>Tambah Makanan</h1>
    <div class="container">
    <form method="POST" action="http://tugas.ngekampus.my.id/modul/Makanan/makanan.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Makanan</label>
    <input type="text" class="form-control" name="nama_makanan" placeholder="Masukkan Nama Makanan">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Asal Makanan</label>
    <input type="text" class="form-control" name="asal_makanan"  placeholder="Masukkan Asal Makanan">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Harga Makanan</label>
    <input type="text" class="form-control" name="harga_makanan"  placeholder="Masukkan Harga Makanan">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Tambahkan</button>
</form>
    </div>
</body>
</html>