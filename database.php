<style>
  a {
    text-decoration: none !important;
  }
</style>
<?php

$connect = new mysqli('localhost', 'root', '', 'crud-operation');

if (!$connect) {
  die(mysqli_error($connect));
}
?>
