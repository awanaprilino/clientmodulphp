<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Makanan</title>
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
    <div class="container">
    <div class="row">
    <div class="col">
        <h1>Daftar Makanan</h1>
    <table class="table table-bordered">
    <tr><th>NO</th><th>NAMA</th><th>OPSI</th></tr>
    <?php
    $json_string = 'http://tugas.ngekampus.my.id/modul/Makanan/get_all_makanan.php';
    $jsondata = file_get_contents($json_string);
    $obj = json_decode($jsondata,true);
    foreach($obj as $data){
        foreach($data as $d){
        echo "<tr>
              <td>$d[no]</td>
              <td>$d[nama_makanan]</td>
              <td>
              <a class='btn btn-info' href=detail_makanan.php?no=$d[no]>Detail</a>
              <a class='btn btn-primary' href=edit_makanan.php?no=$d[no]>Edit</a>
              <a class='btn btn-danger' href=http://tugas.ngekampus.my.id/modul/Makanan/delete_makanan.php?no=$d[no]>Hapus</a></td>
              </tr>";
    }
}
    ?>
</table>
    </div>
  </div>
    </div>
</body>
</html>