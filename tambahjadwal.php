<?php
require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
            alert('tiket berhasil dipesan!');
            document.location.href = 'tampilan.php';
            </script>
        ";
    } else {
        echo " <script>
        alert('tiket gagal dipesan!');
        document.location.href = 'tampilan.php';
        </script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Tambah Jadwal</title>
</head>

<body>

    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00CED1;">
        <a class="navbar-brand" href="#">
            <img src="img/logoo.jpg" width="55" height="35" class="d-inline-block align-top" alt="">
            Kereta Kapal Api
        </a>
        <div class="row w-25 mx-auto"><B>TAMBAH JADWAL KERETA</B></div>
        <?php
        echo date('l ,j-M-Y');
        echo "<br/>";
        ?>
    </nav>
    <!--akhir navbar-->


<form class="container mt-3" action=" " method="post" class="needs-validation" novalidate>
    <input type="hidden" name="id" >
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Statiun1">Statiun1</label>
      <input type="text" naclass="form-control" name="statiun1" id="Statiun1" >
    </div>
    <div class="form-group col-md-6">
      <label for="Statiun2">Statiun2</label>
      <input type="text" class="form-control" name="statiun2" id="Statiun2" >
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Berangkat">Berangkat</label>
      <input type="text" class="form-control" name="berangkat" id="Berangkat" >
    </div>
    <div class="form-group col-md-6">
      <label for="Sampai">Sampai</label>
      <input type="text" class="form-control" name="sampai" id="Sampai" >
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="Harga">Harga</label>
      <input type="text" class="form-control" name="harga" id="Harga" >
  </div>
     <button class="btn btn-primary col-md-12 " type="submit" name="tambah"><a href="prosesjadwal.php">Tambahkan?</a></button>

 </div>    
</div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html