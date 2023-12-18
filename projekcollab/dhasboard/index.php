<?php 
session_start();
  if(isset($_SESSION['login'])){

  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <!-- form -->

  <div id="liveAlertPlaceholder"></div>
  

  <form action="vendor/sistem.php" method="post" class="container rounded mt-3 p-2" style="width: 400px; border: solid black 2px; color:#A7727D;">
  <input type="hidden" name="form" value="form1">
  <h3 class="text-center">Input Data</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaweb">
  </div>
  <div class="mb-3" >
    <label for="exampleInputPassword1" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="kelasweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="jurusanweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">JK</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="alamatweb">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="jenisweb">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  <!-- Button trigger modal -->

<button type="submit" class="btn btn-outline-secondary" id="liveAlertBtn">simpan</button>
</form>


	<!-- form end -->
    
  <?php include "vendor/konek.php";  ?>


  <h4 class="text-center m-3">Tabel Siswa</h4>

 	<div class="container">
 		
 		<table class="table table-bordered table-warning text-center">
				<tr class="table table-dark">       
 				<td>NO</td>
 				<td>NAMA</td>
 				<td>KELAS</td>
				<td>JURUSAN</td>
 				<td>ALAMAT</td>
 				<td>JK</td>
        <td>ACTION</td>
 			</tr>

			<?php 
				$sql = "SELECT * FROM tb_siswa";
				$ambil = mysqli_query($kon,$sql);
        $nu = 0;

				foreach ($ambil as $key) {
          $nu ++;
					$id = $key['NO'];
					$nama = $key['NAMA'];
					$kategori = $key['KELAS'];
					$stok = $key['JURUSAN'];
					$harga = $key['ALAMAT'];
					$tanggal = $key['JK'];
  			?>
 			

			<tr>
				<td><?= $nu; ?></td>
				<td><?= $nama; ?></td>
				<td><?= $kategori; ?></td>
				<td><?= $stok; ?></td>
				<td><?= $harga; ?></td>
				<td><?= $tanggal; ?></td>
        <td><button type="submit" class="btn btn-outline-success" ><a href="edit.php?id=<?=$id;?>" style="text-decoration: none; color: black;">edit</button></a>


        <button type="submit" class="btn btn-outline-success" ><a href="vendor/delete.php?del=<?=$id?>" style="text-decoration: none; color: black;">delete</button></a>
      </td>
			</tr> 

			<?php  } ?>
 		</table>
 	</div> 

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}else{
  header("location: login.php");
  exit();

}