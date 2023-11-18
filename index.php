<?php
include "database.php";

$sql = "select * from `crud`";
$result = mysqli_query($connect, $sql);

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

        <button type="submit" class="btn btn-primary"><a class="text-light" href="user.php">Add New User</a></button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result) :
                    while ($data = mysqli_fetch_assoc($result)) :
                ?>
                        <tr>
                            <th scope="row"><?php echo $data['id'] ?></th>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['mobile'] ?></td>
                            <td><?php echo $data['password'] ?></td>
                            <td>
                                <button type="submit" class="btn btn-primary" name="update"><a class="text-light" href="update.php?updateid='<?php echo $data['id'] ?>'">Update</a></button>
                                <button type="submit" class="btn btn-danger" name="delete"><a class="text-light" href="delete.php?deleteid='<?php echo $data['id'] ?>'">Delete</a></button>
                            </td>
                        </tr>
                <?php endwhile;
                endif;  ?>
            </tbody>
        </table>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>