<?php
include "conn.php";
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password =$_POST['password'];
    $q = "INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username','$password')";
    $query = mysqli_query($conn,$q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form action="" method="POST">
            <div class="card">
               <br> <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Opertaion</h1>
                </div>
                <label for="username">Username</label>
            <input type="text" name="username" class="form-control"><br>
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control"><br><br>
            <button type="submit" class="btn btn-success" name="done">Submit</button><br>
            </div>
          
        </form>

    </div>
</body>
</html>