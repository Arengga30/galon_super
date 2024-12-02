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
        <a href="data_galon.php" class="btn btn-primary btn-md mb-3" class="">Kembali Ke Home</a>
        <form action="add.php" method="post">
            <label for="id">id</label>
            <input type="text" id="id" name="id" class="form-control" required>

            <label for="id">Nama </label>
            <input type="text" id="nama" name="nama" class="form-control" required>

            <label for="jenis">Jenis</label>
            <select name="jenis" id="jenis" class="form-select">
                <option >Pilih jenis</option>
                <option value="galon_aqua">Galon Aqua</option>
                <option value="galon_lemineral">Galon Lemineral</option>
                <option value="gas_3kg">Gas 3kg</option>
                <option value="gas_5kg">Gas 5kg</option>
                <option value="gas_10kg">Gas 10kg</option>
            </select>

            <label for="id">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required>

            <label for="id">Telepon</label>
            <input type="text" id="telp" name="telp" class="form-control" required>

            <button class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">Tambah</button>

        </form>
    </div>
   
    <?php
        if (isset($_POST['tambah'])){
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $jenis = $_POST['jenis'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];

            $jenisSelect = $_POST['jenis'];
            if ($jenisSelect== 'galon_aqua'){
               $jenis = 'Galon Aqua'; 
            }$jenisSelect = $_POST['jenis'];
            if ($jenis == 'galon_lemineral'){
               $jenis = 'Galon Lemineral'; 
            }$jenisSelect = $_POST['jenis'];
            if ($jenis == 'gas_3kg'){
               $jenis = 'Gas 3kg'; 
            }$jenisSelect = $_POST['jenis'];
            if ($jenis == 'gas_5kg'){
               $jenis = 'Gas 5kg'; 
            }$jenisSelect = $_POST['jenis'];
            if ($jenis == 'gas_10kg'){
               $jenis = 'Gas 10kg'; 
            }

            $sqlGet ="SELECT * FROM data_galon";
            $queryGet = mysqli_query($conn, $sqlGet);
            $cek = mysqli_num_rows($queryGet);

            $sqlInsert = "INSERT INTO data_galon (id,nama,jenis,alamat,telp)
                          VALUES ('$id','$nama','$jenis','$alamat','$telp')";
            
            $queryInsert = mysqli_query($conn, $sqlInsert);



            header("location: data_galon.php");
        } 
    ?>
</body>
</html>