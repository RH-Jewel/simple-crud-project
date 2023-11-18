<?php
include "database.php";
$id = $_GET['updateid'];

$sql = "select * from `crud` where id=$id";
$result = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        // echo "Data Updated succesfully";
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
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="<?php echo $data['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label mb-2">E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="<?php echo $data['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label mb-2">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter your mobile number" value="<?php echo $data['mobile'] ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label mb-2">Password</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Enter your password" value="<?php echo $data['password'] ?>" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update data</button>
        </form>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>