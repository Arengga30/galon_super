<!--// <?php
  include 'config.php';

  $id = $_GET['id'];
  $sqlGet = "SELECT * FROM user WHERE id= '$id'";
  $queryGet = mysqli_query($conn, $sqlGet);
  $data = mysqli_fetch_array($queryGet);

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
        <a href="settings.php" class="">Kembali Ke Home</a>
        <form action="update_settings.php" method="post">
            <label for="id">id</label>
            <input type="text" id="id" name="id" value="<?php echo "$data[id]";?>" class="form-control" readonly>

            <label for="id">username </label>
            <input type="text" id="username" name="username" value="<?php echo "$data[username]";?>" class="form-control" required>

            <label for="email">email</label>
            <select name="email" id="email" class="form-select">
                <option ><?php echo "$data[email]";?></option>
                <option value="galon_aqua">Galon Aqua</option>
                <option value="galon_lemineral">Galon Lemineral</option>
                <option value="gas_3kg">Gas 3kg</option>
                <option value="gas_5kg">Gas 5kg</option>
                <option value="gas_10kg">Gas 10kg</option>
            </select>

            <label for="id">password</label>
            <input type="text" id="password" name="password" value="<?php echo "$data[password]";?>" class="form-control" required>

            <label for="id">Telepon</label>
            <input type="text" id="name" name="name" value="<?php echo "$data[name]";?>" class="form-control" required>

            <button class="btn btn-success mt-3" type="submit" name="tambah" value="Tambah Data">Tambah</button>

        </form>
    </div>
   
    <?php
        if (isset($_POST['tambah'])){
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];

            // echo "id: $id";

            // $emailSelect = $_POST['email'];
            // if ($emailSelect== 'galon_aqua'){
            //    $email = 'Galon Aqua'; 
            // }$emailSelect = $_POST['email'];
            // if ($email == 'galon_lemineral'){
            //    $email = 'Galon Lemineral'; 
            // }$emailSelect = $_POST['email'];
            // if ($email == 'gas_3kg'){
            //    $email = 'Gas 3kg'; 
            // }$emailSelect = $_POST['email'];
            // if ($email == 'gas_5kg'){
            //    $email = 'Gas 5kg'; 
            // }$emailSelect = $_POST['email'];
            // if ($email == 'gas_10kg'){
            //    $email = 'Gas 10kg'; 
            // }

            $sqlupdate = "UPDATE user 
                          SET username= '$username',email='$email', password='$password', name='$name'
                          WHERE id='$id'";
            $queryupdate = mysqli_query($conn, $sqlupdate);

            header("location: settings.php");
          }
    ?>
</body>
</html> -->