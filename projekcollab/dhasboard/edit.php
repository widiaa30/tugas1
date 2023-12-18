<?php
  include ('vendor/konek.php');
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php

    $data_siswa = mysqli_query($kon,"SELECT * FROM tb_siswa where NO =".$_GET['id']);
    foreach ($data_siswa as $key) {
      $id = $key ['NO'];
      $nama = $key['NAMA'];
      $kelas = $key['KELAS'];
      $jurusan =  $key['JURUSAN'];
      $jk =  $key['JK'];
      $alamat =  $key['ALAMAT'];
    }
    ?>
    <h1>
      <?= $nama;?>
      <?= $kelas;?>
      <?= $jurusan;?>
      <?= $jk;?>
      <?= $alamat;?>
    </h1>

    <!-- form -->
    <form action="vendor/sistem.php?id=<?=$id;?>" method="post" class="container rounded mt-3 p-2" style="width: 400px; border: solid black 2px; color:#A7727D;">
    <input type="hidden" name="form" value="form2">
  <h3 class="text-center">Input Data</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" value ="<?= $nama;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="anamaweb">
  </div>
  <div class="mb-3" >
    <label for="exampleInputPassword1" class="form-label">Kelas</label>
    <input type="text" value ="<?= $kelas;?>" class="form-control" id="exampleInputPassword1" name="akelasweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
    <input type="text" value ="<?= $jurusan;?>" class="form-control" id="exampleInputPassword1" name="ajurusanweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">JK</label>
    <input type="text"  value ="<?= $jk;?>" class="form-control" id="exampleInputPassword1" name="aalamatweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" value ="<?= $alamat;?>" class="form-control" id="exampleInputPassword1" name="ajenisweb">
  </div>
  

<button type="submit" class="btn btn-outline-secondary" id="liveAlertBtn"  ><a href="/index.php"></a> simpan</button>
</form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      
</body>
</html> 