<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Makanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <?php
    $no=$_GET['no'];
    $json_string = 'http://tugas.ngekampus.my.id/modul/Makanan/get_makanan.php?no='.$no;
    $jsondata = file_get_contents($json_string);
    $obj = json_decode($jsondata,true);
    foreach($obj as $data){
        foreach($data as $d){
        $a = $d['nama_makanan'];
        $b = $d['asal_makanan'];
        $c = $d['harga_makanan'];
    }
}

    ?>
    <div class="container">
    <form method="POST" action="http://tugas.ngekampus.my.id/modul/Makanan/update_makanan.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Nama Makanan</label>
    <input type="hidden" class="form-control" name="no" placeholder="" value="<?php echo  $no?>">
    <input type="text" class="form-control" name="nama_makanan" placeholder="Masukkan Nama Makanan" value="<?php echo  $a?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Asal Makanan</label>
    <input type="text" class="form-control" name="asal_makanan"  placeholder="Masukkan Asal Makanan" value="<?php echo  $b?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Harga Makanan</label>
    <input type="text" class="form-control" name="harga_makanan"  placeholder="Masukkan Harga Makanan" value="<?php echo  $c?>">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Tambahkan</button>
</form>
    </div>
</body>
</html>