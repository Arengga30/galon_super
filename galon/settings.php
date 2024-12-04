<?php
  include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="css/style2.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
</head>
<body>
<div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li>
          <a href="timeline.php">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="pengeluaran.php">
            <i class="fas fa-chart-bar"></i>
            <span>Pengeluaran</span>
          </a>
        </li>
        <li>
        <a href="data_galon.php">
            <i class="fas fa-briefcase"></i>
            <span>Data Galon</span>
          </a> 
        </li>
          
        <li
          class="active">
          <a href="settings.php">
            <i class="fas fa-cog"></i>
            <span>Settings</span>
          </a>
          </li>
        <li>
          <a href="index.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main--content">
      <div class="header--wrapper">
        <div class="header--title">
          <span>Admin!</span>
          <h3><b>Settings</b></h3>
        </div>
        <div class="user--info">
          <div class="search--box">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Search" />
          </div>
          <img src="admin.png" alt="" />
        </div>
      </div>
      <div class="card--container">
        <div class="card--wrapper"></div>


        <div class="container mt-3">
    <a href="add.php" class="btn btn-primary btn-md mb-3">Tambah Data</a>
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>password</th>
                <th>name</th>
                <th>photo</th>
                <th>actions</th> <!-- Tambahkan kolom untuk aksi -->
            </tr>
        </thead>
        <tbody>
        <?php
            $sqlGet = "SELECT * FROM user";
            $query = mysqli_query($conn, $sqlGet);

            while($data = mysqli_fetch_array($query)){
                echo "
                <tr>
                    <td>{$data['id']}</td>
                    <td>{$data['username']}</td>
                    <td>{$data['email']}</td>
                    <td>{$data['password']}</td>
                    <td>{$data['name']}</td>
                    <td>{$data['photo']}</td>
                    <td>
                        <div class='row'>
                            <div class='col d-flex justify-content-center'>
                                <a href='update.php?id={$data['id']}' class='btn btn-sm btn-warning'>Update</a>
                            </div>
                            <div class='col d-flex justify-content-center'>
                                <a href='delete.php?id={$data['id']}' class='btn btn-sm btn-danger'>Delete</a>
                            </div>
                        </div> 
                    </td>
                </tr>
                ";
            }
        ?>
        </tbody>
    </table>
</div>
</div>
</div>  
</body>
</html>