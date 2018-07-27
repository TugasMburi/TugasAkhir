<!DOCTYPE html>
  <html lang="en">
  <head>

    <title>Persewaan Baju</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleadmin.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="ajax.js"></script>

  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <style>
    .navbar {
      height: 75px;
      margin-bottom: 0;
      padding-right: 100px;
      padding-left: 100px;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity:0.9;
      text-transform: uppercase;
  }

  /* Add a gray color to all navbar links */
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
      margin-top: 12px;
  }

  /* On hover, the links will turn white */
  .navbar-nav li a:hover {
      color: #fff !important;
  }

  /* The active link */
  .navbar-nav li.active a {
      color: #fff !important;
      background-color:#29292c !important;
  }

  /* Remove border color from the collapsible button */
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }

  /* foto team */
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.8;
  }
  .person:hover {
      border-color: #dddddd;
      opacity: 0.9;
  }

  .dropdown-menu{
    background-color: #3c3c3d;
  }

</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo.png'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('index.php/admin') ?>">USER</a></li>
        <li><a href="<?php echo base_url('index.php/transaksi') ?>">TRANSAKSI</a></li>
        <li><a href="<?php echo base_url('index.php/barang') ?>">BARANG</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url('index.php/home') ?>">BACK TO HOME</a></li>
              <li><a href="<?php echo base_url('index.php/Login/logout') ?>">LOGOUT</a></li>
              <li style="height: 13px; visibility: hidden;">.</li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div id="home"></div>

<div class="container">
  <h2>Selamat Datang <?php echo $username; ?> di Halaman Barang</h2>
  <p>Berikut ini adalah data barang</p>     
  <hr>       
  <table class="table table-striped table-bordered" id="table_id">
    <thead>
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list_barang as $key => $value) {?>
              
            <tr>
              <td><?php echo $value['id_barang'] ?></td>
              <td><?php echo $value['nama_barang'] ?></td>
              <td>Rp. <?php echo number_format($value['harga']) ?></td>
              <td><?php echo $value['stok'] ?></td>

              <td>
                <a href="<?php echo base_url("index.php/barang/update/".$value['id_barang']) ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo base_url("index.php/barang/delete/".$value['id_barang']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?');"><span class="glyphicon glyphicon-trash"></span></a>
              </td>
     

            </tr>
            <?php } ?>
    </tbody>
  </table>
  <hr>
  <a href="<?php echo base_url("index.php/barang/register") ?>" class="btn"><span class="glyphicon glyphicon-plus"></span> Tambah Barang</a>
  <a href="<?php echo base_url('index.php/ReportBarang/cetakBarang')?>" class="btn pull-right"><span class="glyphicon glyphicon-save"></span> Report</a>

</div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Alwan GK | Fajar Lukman</p> 
</footer>


<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  if (this.hash !== "") {

    event.preventDefault();
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      window.location.hash = hash;
      });
    }
  });
})

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>

<style>
  .navbar {
    height: 75px;
    margin-bottom: 0;
    padding-right: 100px;
    padding-left: 100px;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.8;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
    margin-top: 12px;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}
</style>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>