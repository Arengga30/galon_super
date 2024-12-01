<?php
  include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Galon</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
        <a href="data_galon.php" class="">Kembali Ke Home</a>
        <form action="add.php" method="post">
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" required>

            <label for="nim">Nama </label>
            <input type="text" id="nama" name="nama" class="form-control" required>

            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-select">
                <option >Pilih Jurusan</option>
                <option value="Informatika">Teknik Informatika</option>
                <option value="arsitek">Teknik arsitek</option>
                <option value="sipil">Teknik sipil</option>
                <option value="mesin">Teknik mesin</option>
                <option value="elektro">Teknik elektro</option>
            </select>

            <label for="nim">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>

            <label for="nim">Telepon</label>
            <input type="text" id="telp" name="telp" class="form-control" required>

            <button class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">Tambah</button>

        </form>
    </div>
   
    <?php
        if (isset($_POST['tambah'])){
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];

            $jurusanSelect = $_POST['jurusan'];
            if ($jurusanSelect== 'Informatika'){
               $jurusan = 'Teknik Informatika'; 
            }$jurusanSelect = $_POST['jurusan'];
            if ($jurusan == 'arsitek'){
               $jurusan = 'Teknik arsitek'; 
            }$jurusanSelect = $_POST['jurusan'];
            if ($jurusan == 'sipil'){
               $jurusan = 'Teknik sipil'; 
            }$jurusanSelect = $_POST['jurusan'];
            if ($jurusan == 'mesin'){
               $jurusan = 'Teknik mesin'; 
            }$jurusanSelect = $_POST['jurusan'];
            if ($jurusan == 'elektro'){
               $jurusan = 'Teknik elektro'; 
            }

            $sqlGet ="SELECT * FROM data_galon";
            $queryGet = mysqli_query($conn, $sqlGet);
            $cek = mysqli_num_rows($queryGet);

            $sqlInsert = "INSERT INTO data_galon (nim,nama,jurusan,alamat,telp)
                          VALUES ('$nim','$nama','$jurusan','$alamat','$telp')";
            
            $queryInsert = mysqli_query($conn, $sqlInsert);



            header("location: data_galon.php");
        } 
    ?>
</body>
</html>