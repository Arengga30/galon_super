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
<div class="container mt-3">
    <a href="add.php" class="btn btn-primary btn-md mb-3">Tambah Data</a>
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <th>nim</th>
            <th>nama mahasiswa</th>
            <th>jurusan</th>
            <th>alamat</th>
            <th>telepon</th>
            <th>aksi</th>
        </thead>

        <?php
            $sqlGet = "SELECT * FROM data_galon";
            $query = mysqli_query($conn, $sqlGet);

            while($data = mysqli_fetch_array($query)){
                 echo "
                    <tbody>
                     <tr>
                        <td>$data[nim]</td>
                        <td>$data[nama]</td>
                        <td>$data[jurusan]</td>
                        <td>$data[alamat]</td>
                        <td>$data[telp]</td>
                        <td>
                            <div class='row'>
                                <div class='col d-flex justify-content-center'>
                                <a href='update.php?nim=$data[nim]' class='btn btn-sm btn-warning'>Update</a>
                                </div>
                                <div class='col d-flex justify-content-center'>
                                <a href='delete.php?nim=$data[nim]' class='btn btn-sm btn-danger'>Delete</a>
                                </div>
                            
                            </div>
                        </td>
        
                      </tr>
                    </tbody>
                ";
            }
        ?>
    </table>
</div>  
</body>
</html>