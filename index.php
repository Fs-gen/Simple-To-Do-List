<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="css/github.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-clockpicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <title>To Do List</title>
  </head>
  <style>
  #listnya {
      font-size:30px;
  }
  </style>
  <body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">To Do List</h1>
        <p class="lead">Input Agendamu Hari Ini</p>
    </div>
  </div>

  
<div class="container mt-5">
      <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>
      <div class="row">
        <div class="col-md-12">
          <input type="text" name="kegiatan" class="form-control" placeholder="Masukkan Aktivitas" required>
        </div>
      </div>
                <br>
  <div class="row">
                <div class="col-sm-3 mt-2">
                  <input id="input-a" name="waktu" class="form-control" placeholder="Masukkan Waktu" autocomplete="off" required>
                </div>
                <div class="col-sm-3 mt-2">
                  <select name="siangmalam" id="" class="form-control">
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                  </select>
                </div>
</div>
<div class="row">
  <div class="col-sm-3">
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </div>
</div>
            </form>
<hr>
    <div class="table-hover " id="screen">

    </div>
<?php
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['kegiatan']) || empty($_POST['waktu']) || empty($_POST['siangmalam'])) {
        echo "";
    } else {
      // value
$kegiatan = mysqli_real_escape_string($conn, $_POST['kegiatan']);
$waktu = mysqli_real_escape_string($conn, $_POST['waktu']);
$sm = mysqli_real_escape_string($conn, $_POST['siangmalam']);
$w = $waktu." ".$sm;

$query = "INSERT INTO list VALUES ('','$kegiatan','$w',NOW())";
$result = mysqli_query($conn, $query);
if (!$result) {
  ?>
<script>
Swal.fire({
  type: 'error',
  title: 'Adah yang salah nih gan!',
  text: 'List gagal ditambahkan :('
})
</script>
  <?php
} else {
    ?>
<script>
Swal.fire({
  type: 'success',
  title: 'List di Tambah!',
  text: 'Tetap Semangat :)'
})
</script>

    <?php
}

}
}
?>

    <script>
$(document).ready(function(){
setInterval(function(){
$("#screen").load('tampil.php')
}, 2000);
});
</script>

<script>
var input = $('#input-a');
input.clockpicker({
    autoclose: true
});

// Manual operations
$('#button-a').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
});
$('#button-b').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'hours');
});
	</script>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>