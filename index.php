<?php

include('connection.php');







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
    <title> index.php </title>
</head>
<body>

<form action="index.php" class="form-group" method="post">
<label for="name"> Name </label>
<input type="text" name="name" class="form-control">
<br>
<label for="email"> Email </label>
<input type="email" name="email" class="form-control">
<br>
<label for="pass"> Password </label>
<input type="password" name="pass" class="form-control">
<br>
<label for="age"> Age </label>
<input type="number" name="age" class="form-control">
<br>
<label for="gender"> gender </label>
<input type="text" name="gender" class="form-control">
<br>
<input type="submit" name="submit" class="btn btn-primary">
</form>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO `register` (`name`,`email`, `password`, `age`, `gender`) VALUES ('$name','$email','$password', '$age', '$gender')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo  "query failed";
    
    
    }


    echo "<script> alert('Data inserted successfully')</script>";


}

mysqli_close($conn);



?>


</body>
</html>