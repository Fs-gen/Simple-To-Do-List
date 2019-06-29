
<?php
//koneksi
include "koneksi.php";

$query = "SELECT * FROM list";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo "No Data Load List";
}
$no = 1;
while ($a = mysqli_fetch_array($result)) {
    ?>
<div class="col-12 bg-light mb-2 p-3 font-weight-light" >
    <div class="row">
        <div class="col-sm-2" id="listnya"><?php echo $no++ ?></div>
        <div class="col-sm-6 font-weight-bold" id="listnya"><?php echo $a['list']; ?></div>
        <div class="col-sm-2 font-weight-bold" id="listnya"><span class="badge badge-primary"><?php echo $a['waktu']; ?></span></div>
        <div class="col-sm-2 text-right" id="listnya"><a class="btn btn-outline-danger" href="hapus.php?id=<?php echo $a['id']; ?>">X</a></div>
    </div>
    </div>
    
    <?php
}

?>

