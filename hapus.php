<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery331.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/senna@2.7.7/build/globals/senna-debug.js" type="text/javascript"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <title>To Do List</title>
  </head>
<body>
    

<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM list WHERE id='$id'";
mysqli_query($conn, $query);

if ($query) {
    ?>

<script>
Swal.fire({
  type: 'success',
  title: 'List di hapus!',
  text: 'Lanjut ke aktifitas selanjutnya :)'
}).then((result) => {
    if (result.value) {   
    window.location.href = "index.php";
    }
});


</script>

    <?php
}
?>

</body>
</html>
