<?php
include "database.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud`(name,email,mobile,password) values ('$name','$email','$mobile','$password')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        // echo "Data inserted succesfully";
        header('location:index.php');
    } else {
        die(mysqli_error($connect));
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Project</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label mb-2">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label mb-2">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label mb-2">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter your mobile number">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label mb-2">Password</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Enter your password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Save data</button>
        </form>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>