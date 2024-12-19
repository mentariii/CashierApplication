
<?php 
include "../config/session_member.php";
$produk = mysqli_query($koneksi, "SELECT * FROM produk");
    $jumlah_produk = mysqli_num_rows($produk);

	$kategori = mysqli_query($koneksi, "SELECT * FROM kategori_produk");
    $jumlah_kategori = mysqli_num_rows($kategori);

	$orders = mysqli_query($koneksi, "SELECT * FROM orders");
    $jumlah_orders = mysqli_num_rows($orders);

	$costumer = mysqli_query($koneksi, "SELECT * FROM costumer");
    $jumlah_costumer = mysqli_num_rows($costumer);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Nucleo Icons -->
  <link href="../mos-css/nucleo-icons.css" rel="stylesheet" />
  <link href="../mos-css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../mos-css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../mos-css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow">
	<meta name="author" content="phpmu.com">
	<meta http-equiv="imagetoolbar" content="no">
	<meta name="language" content="Indonesia">
	<meta name="revisit-after" content="7">
	<meta name="webcrawlers" content="all">
	<meta name="rating" content="general">
	<meta name="spiders" content="all">
	<link rel="shortcut icon" href="favicon.png" />
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../mos-css/mos-style.css"> <!--pemanggilan file css-->
    <link rel="stylesheet" href="autocomplete/jquery-ui.css" />
    <script src="autocomplete/jquery-1.8.3.js"></script>
    <script src="autocomplete/jquery-ui.js"></script>
	<script>
function validasi(form){
		  if (form.id.value == ""){
			alert("Anda belum mengisikan Kode Barang.");
			form.id.focus();
			return (false);
		  }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<main class="main-content position-relative border-radius-lg ">
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white">Makan Nyaman </a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Kantong Aman</li>
          </ol>
        
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../logout.php" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<?php
if ($_GET['module'] == 'home') {
    echo '<div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
							<div class="numbers">
							<p class="text-sm mb-0 text-uppercase font-weight-bold">Total Menu</p>
							<h1 class="font-weight-bolder mt-3 ">' . $jumlah_produk . '</h1>
						</div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The rest of your HTML code goes here -->
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-3">
					<div class="row">
						<div class="col-8">
						<div class="numbers">
						<p class="text-sm mb-0 text-uppercase font-weight-bold">Kategori</p>
						<h1 class="font-weight-bolder mt-3 ">' . $jumlah_kategori . '</h1>
					</div>
						</div>
						<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
						<i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
					  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
							<div class="numbers">
							<p class="text-sm mb-0 text-uppercase font-weight-bold">Total Order</p>
							<h1 class="font-weight-bolder mt-3 ">' . $jumlah_orders . '</h1>
						</div>
                            </div>
                            <div class="col-4 text-end">
							<div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
							<i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
						  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-body p-3">
					<div class="row">
						<div class="col-8">
						<div class="numbers">
						<p class="text-sm mb-0 text-uppercase font-weight-bold"> Pelanggan</p>
						<h1 class="font-weight-bolder mt-3 ">' . $jumlah_costumer . '</h1>
					</div>
						</div>
						<div class="col-4 text-end">
						<div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
						<i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
					  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
        </div>
    </div>

	<div class="row  container-fluid ">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Grafik Bulanan</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
             
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300">
				<?php include "diagram.php"; ?>
				</canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active" style="background-image: url(\'../mos-css/img/1.jpeg\');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>
                    <h5 class="text-white mb-1">Jelajahi Dunia Lezat Ayam Geprek</h5>
                    <p>Nikmati kelezatan renyah dan cita rasa berani Ayam Geprek - pengalaman kuliner yang memikat seperti tak ada yang lain.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url(\'../mos-css/img/2.jpeg\');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-bulb-61 text-dark opacity-10"></i>
                    </div>
					<h5 class="text-white mb-1">Mulai dengan Mendoan</h5>
					<p>Tidak ada hal dalam hidup yang saya benar-benar ingin lakukan yang tidak bisa saya kuasai.</p>
                  </div>
                </div>
                <div class="carousel-item h-100" style="background-image: url(\'../mos-css/img/3.jpeg\');
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-trophy text-dark opacity-10"></i>
                    </div>
					<h5 class="text-white mb-1">Mulailah dengan Steak Ayam</h5>
					<p>Tidak ada hal dalam hidup yang benar-benar ingin saya lakukan yang tidak bisa saya kuasai.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
	
	';


	

	
}elseif ($_GET['module']=='edithome'){
  $sql=mysqli_query($koneksi, "SELECT * FROM statis WHERE halaman='home'");
  $r=mysqli_fetch_array($sql);
    echo "<h3>Edit Data Home Page</h3><br>
		  <table width=100%>
			<form action='' method='POST'>
			 <input type='text' name='judul' value='$r[judul]' style='width:70%'>
			 <textarea style='width:100%' height:400px' name='detail'>$r[detail]</textarea><br><br>
			 <input type='submit' name='submit' value='Update Data'>
			</form>
		  </table>"; 
		  
	if (isset($_POST['submit'])){
		mysqli_query($koneksi, "UPDATE statis SET judul='$_POST[judul]', detail='$_POST[detail]' where halaman='home'");
		header('location:home');
	}
}

elseif ($_GET['module']=='faktur'){
	$no_faktur = "FA1234";
  		echo '
		  <div class="container-fluid py-4">
		  <div class="row">
		  <div class="col-12">
		  <div class="card mb-4">
			  <div class="card-header pb-0">
				  <h6>Daftar Menu Waroeng Rembug</h6>
				  <div class="d-flex justify-content-between align-items-center">
				 <a href="media.php?module=tambahproduk&no=' . $no_faktur . '"><input type="button" value=" Lihat / Tambah Transaksi " class="btn btn-primary"></a>
				
				  
				  <form action="" method="POST" style="margin-right: 22px;">
                            <div class="input-group">
                                <span class="input-group-text text-body" style="height: 40px;"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Cari menu" name="kata" style="height: 40px;">
                                <input type="submit" class="btn btn-primary" name="cari" value="Cari">
                            </div>
                        </form>
			  </div>
			  </div>
			  <div class="h_line"></div>';


					   echo ' 
					 

					   <div class="card-body px-0 pt-0 pb-2">
					   <div class="table-responsive p-0">
						   <table class="table align-items-center mb-0">
								   <tr>
									   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No</th>
									   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>
									   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
									   <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
									   <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
									   <th class=" text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Action</th> 
								   </tr> ';


								   if ($_GET['menu'] == 'update') {
									$m = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM produk where id_produk='$_GET[id]'"));
									echo '<form action="" method="POST">
											<tr class="data">
												<th class="" style="background-color: rgba(94, 114, 227, 0.5);" width="30px"></th>
												<input type="hidden" value="' . $m['id_produk'] . '" name="id">
												<th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="a" value="' . $m['nama_produk'] . '" placeholder=" Nama"></th>
												<th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="b" value="' . $m['harga'] . '" placeholder="harga"></th>
												<th class="" style="background-color: rgba(94, 114, 227, 0.5);" colspan="2"><input type="text" name="c" value="' . $m['stock'] . '" placeholder="stok"></th>
												<th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input class="btn btn-primary mt-3" type="submit" name="me" value="Update"></th>
											</tr>
										  </form>';
								}
								
								if (isset($_POST['me'])) {
									$query = "UPDATE produk SET nama_produk = '$_POST[a]', harga = '$_POST[b]', stock = '$_POST[c]' where id_produk='$_POST[id]'";
									if (mysqli_query($koneksi, $query)) {
										$productId = $_POST['id'];
										echo '<script>window.alert("Data with ID ' . $productId . ' has been successfully updated."); window.location="faktur.html";</script>';
									} else {
										echo "Error updating record: " . mysqli_error($koneksi);
									}
								}
								
		

								   $p      = new Paging;
								   $batas  = 10;
								   $posisi = $p->cariPosisi($batas);
								   if (isset($_POST['cari'])){
									   $tampil = mysqli_query($koneksi, "SELECT * FROM produk where nama_produk LIKE '%$_POST[kata]%' OR kode_produk LIKE '%$_POST[kata]%'");
								   }else{
									   $tampil = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT $posisi,$batas");
								   }
								   $no = $posisi+1;
								   while($r=mysqli_fetch_array($tampil)){
								   $in = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.stock) as masuk FROM produk a where a.id_produk='$r[id_produk]'"));
								   $out = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as keluar FROM orders_detail a where a.id_produk='$r[id_produk]'"));
								   $ret = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as returnn FROM return_produk a where a.id_produk='$r[id_produk]'"));
								   $stok = ($in['masuk']-$out['keluar'])-$ret['returnn'];
							   
									 $tanggal=tgl_indo($r['tgl_masuk']);
									 $harga=format_rupiah($r['harga']);
									 $harga_grosir=format_rupiah($r['harga_grosir']);
									 if(($no % 2)==0){
										   $warna="#ffffff";
									 }else{
										   $warna="#E1E1E1";
									 }
									 echo "<tr>
									 <td>
										 <div class='d-flex px-2 py-1 ml-2' style='width: 30px;'>
											 <div class='d-flex flex-column justify-content-center'>
												 <h6 class='mb-0 text-sm'>$no</h6>
											 </div>
										 </div>
									 </td>
									 <td>
										 <div class='d-flex px-2 py-1'>
											 <div class='d-flex flex-column justify-content-center'>
												 <h6 class='mb-0 text-sm'>$r[kode_produk]</h6>
											 </div>
										 </div>
									 </td>
									 <td>
										 <p class='text-xs font-weight-bold mb-0'>$r[nama_produk]</p>
									 </td>
									 <td class=' text-sm'>
										 <span class='badge badge-sm bg-gradient-success'>Rp $harga</span>
									 </td>";
									 if ($stok <= 0) {
									   echo "<td style='background:red; color:#fff; width: 60px;' class='text-xs font-weight-bold mb-0' >Habis</td>";
								   } else {
									   echo "<td class='text-xs font-weight-bold mb-0' style='width: 60px;'>$stok $r[satuan]</td>";
								   }
								   
								   echo "
									 <td class='align-middle'>
									   <center>";
										 if ($_SESSION['leveluser']=='Admin'){
											echo "<a href='media.php?module=faktur&menu=update&id=$r[id_produk]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='warning' class='bi bi-pencil' viewBox='0 0 16 16'>
											<path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
										</svg>
										</a>&nbsp;";
										} 
										echo " <a href=media.php?module=hapusproduk&id=$r[kode_produk]>
											<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='red' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
												<path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
											</svg>
										 </a>&nbsp;
									   </center>
									 </td>
								 </tr>";
							   
							   $no++;
							   }
	$jmldata = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM faktur"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
    echo "</table>Halaman : $linkHalaman";

	
	

}elseif($_GET['module']=='hapusproduk'){
	mysqli_query($koneksi, "DELETE FROM produk WHERE kode_produk='$_GET[id]'");
}

elseif ($_GET['module']=='tambahfaktur'){
	$tanggal = date("Y-m-d H:i:s");
	if (isset($_POST['simpan'])){
		mysqli_query($koneksi, "INSERT INTO faktur (no_faktur, tanggal) VALUES ('$_POST[no]','$_POST[tgl]')");
		echo "<script>window.alert('Sukses Tambahkan Faktur Baru');
        window.location=('faktur.html')</script>";
	}
	echo "<h3>Tambah Produk Baru di Faktur : $_GET[no]</h3><br/>
          <form method=POST action='' enctype='multipart/form-data'>
          <table>
		  <tr><td width=130>No Faktur</td>     <td> : <input type=text name='no' size=15></td></tr>
		  <tr><td>Tanggal Transaksi</td>     <td> : <input type=text name='tgl' value='$tanggal' size=30></td></tr>
		  <tr><td colspan=2><br/><input style='float:right;' type=button value=Batal onclick=self.history.back()>
							<input style='float:right; margin-right:5px;' name='simpan' type=submit value=Simpan></td></tr>
          </table></form>";
}

elseif ($_GET['module']=='semuaproduk'){
    echo '<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                
			<div class="card mb-4">
			<div class="card-header pb-0">
				<h6>Daftar Menu Waroeng Rembug</h6>
		
				<form action="" method="POST" style="margin-right: 22px; text-align: right;">
					<div class="input-group" style="width: 180px; margin-left: auto;">
						<span class="input-group-text text-body" style="height: 40px;"><i class="fas fa-search" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Cari menu" name="kata" style="height: 40px; ">
						<input type="submit" class="btn btn-primary" name="cari" value="Cari">
					</div>
				</form>
			</div>
		
		
                
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                    <tr>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode</th>
										<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                        <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                                        <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Stok</th>
                                        <th class=" text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Action</th> 
                                    </tr> ';
    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);
	if (isset($_POST['cari'])){
		$tampil = mysqli_query($koneksi, "SELECT * FROM produk where nama_produk LIKE '%$_POST[kata]%' OR kode_produk LIKE '%$_POST[kata]%'");
	}else{
		$tampil = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT $posisi,$batas");
	}
    $no = $posisi+1;
    while($r=mysqli_fetch_array($tampil)){
	$in = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.stock) as masuk FROM `produk` a where a.id_produk='$r[id_produk]'"));
    $out = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as keluar FROM `orders_detail` a where a.id_produk='$r[id_produk]'"));
    $ret = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as returnn FROM `return_produk` a where a.id_produk='$r[id_produk]'"));
    $stok = ($in['masuk']-$out['keluar'])-$ret['returnn'];

	  $tanggal=tgl_indo($r['tgl_masuk']);
      $harga=format_rupiah($r['harga']);
	  $harga_grosir=format_rupiah($r['harga_grosir']);
	  if(($no % 2)==0){
			$warna="#ffffff";
	  }else{
			$warna="#E1E1E1";
	  }
	  echo "<tr>
	  <td>
		  <div class='d-flex px-2 py-1 ml-2' style='width: 30px;'>
			  <div class='d-flex flex-column justify-content-center'>
				  <h6 class='mb-0 text-sm'>$no</h6>
			  </div>
		  </div>
	  </td>
	  <td>
		  <div class='d-flex px-2 py-1'>
			  <div class='d-flex flex-column justify-content-center'>
				  <h6 class='mb-0 text-sm'>$r[kode_produk]</h6>
			  </div>
		  </div>
	  </td>
	  <td>
		  <p class='text-xs font-weight-bold mb-0'>$r[nama_produk]</p>
	  </td>
	  <td class=' text-sm'>
		  <span class='badge badge-sm bg-gradient-success'>Rp $harga</span>
	  </td>";
	  if ($stok <= 0) {
		echo "<td style='background:red; color:#fff; width: 60px;' class='text-xs font-weight-bold mb-0' >Habis</td>";
	} else {
		echo "<td class='text-xs font-weight-bold mb-0' style='width: 60px;'>$stok $r[satuan]</td>";
	}
	
	echo "
      <td class='align-middle'>
        <center>
            <a href='aksi.php?module=keranjang&act=tambah&id=$r[kode_produk]&stat=$_GET[stat]&cust=$_GET[cust]'>
			<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'>
			<path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
			<path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4'/>
		  </svg>
		  </a>&nbsp;
        </center>
      </td>
  </tr>";

$no++;
}
$jmldata = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
    echo "</table>Halaman : $linkHalaman";
}

elseif ($_GET['module']=='semuaprodukfaktur'){
  		echo "<h3>Semua Produk / Barang</h3>
		<span style='float:right;'>
			<form action='' method='POST' style='margin-right:22px'>
			Cari Nama Produk : <input type='text' name='kata' style='width:200px; margin-bottom:3px;'/>
			<input type='submit' name='cari' value='cari'>
			</form>
		</span><br/>
			 <div class='h_line'></div>";
		
	echo "<table class='data'>
			<tr class='data'>
				<th class='data' width='30px'>No</th>
				<th class='data'>Kode Produk</th>
				<th class='data'>Nama Produk</th>
				<th class='data'>Harga Ecer</th>
				<th class='data'>Harga Grosir</th>
				<th class='data'>Stok</th>
				<th class='data'>Action</th>
			</tr>";

    $p      = new PagingFaktur;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);
	if (isset($_POST['cari'])){
		$tampil = mysqli_query($koneksi, "SELECT * FROM produk where nama_produk LIKE '%$_POST[kata]%' OR kode_produk LIKE '%$_POST[kata]%'");
	}else{
		$tampil = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT $posisi,$batas");
	}
    $no = $posisi+1;
    while($r=mysqli_fetch_array($tampil)){
	$in = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.stock) as masuk FROM `produk` a where a.id_produk='$r[id_produk]'"));
    $out = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as keluar FROM `orders_detail` a where a.id_produk='$r[id_produk]'"));
    $ret = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as returnn FROM `return_produk` a where a.id_produk='$r[id_produk]'"));
    $stok = ($in['masuk']-$out['keluar'])-$ret['returnn'];

	  $tanggal=tgl_indo($r['tgl_masuk']);
      $harga=format_rupiah($r['harga']);
	  $harga_grosir=format_rupiah($r['harga_grosir']);
	  if(($no % 2)==0){
			$warna="#ffffff";
	  }else{
			$warna="#E1E1E1";
	  }
      echo "<tr bgcolor=$warna class='data'>
				<td class='data' width='30px'>$no</td>
				<td class='data'>$r[kode_produk]</td>
				<td class='data'>$r[nama_produk]</td>
				<td class='data'>Rp $harga</td>
				<td class='data'>Rp $harga_grosir</td>";
				if ($stok <= 0){
					echo "<td style='background:red; color:#fff' class='data' align=center>Habis</td>";
				}else{
					echo "<td class='data' align=center>$stok $r[satuan]</td>";
				}
		  echo "<td class='data' width='35px'>
				<center>
				<a href='media.php?module=editproduk&kdp=$r[kode_produk]&no=$_GET[faktur]&cari=cari'><img src='../mos-css/img/oke.png'></a>&nbsp;
				</center>
				</td>
			</tr>";
      $no++;
    }
	$jmldata = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
    echo "</table>Halaman : $linkHalaman";
}

elseif ($_GET['module']=='keranjangbelanja'){
	if ($_GET['stat']=='1'){
		$status = 'Eceran';
		$sql = mysqli_query($koneksi, "SELECT orders_temp.*, produk.harga as harga, produk.kode_produk, produk.nama_produk, produk.id_produk, produk.satuan FROM orders_temp, produk 
			                WHERE id_session='$_SESSION[namauser]' AND orders_temp.id_produk=produk.id_produk");
	}else{
		$status = 'Grosir';
		$sql = mysqli_query($koneksi, "SELECT orders_temp.*, produk.harga_grosir as harga, produk.kode_produk, produk.nama_produk, produk.id_produk, produk.satuan FROM orders_temp, produk 
			                WHERE id_session='$_SESSION[namauser]' AND orders_temp.id_produk=produk.id_produk");
	}
	if ($_GET['cust']==''){ $custumer = 0; }else{ $custumer = $_GET['cust']; }
	echo "
	<div class='container-fluid py-4'>
	  <div class='row'>
		<div class='col-12'>
		  <div class='card mb-4'>
			<div class='card-header pb-0'>
			  <h6>Table Menu</h6>
			</div>
			<div class='card-body px-0 pt-0 pb-2'>
			  <div class='table-responsive p-0'>
				<div class='h_line'></div>
				<div class='row justify-content-end'>
				<div class='col-md-6'>
				<form method='GET' action='aksi.php' onSubmit='return validasi(this)' class='d-flex align-items-center '>
		  <input type='hidden' name='module' value='keranjang'>
		  <input type='hidden' name='act' value='tambah'>
		  <input type='hidden' name='stat' value='" . $_GET["stat"] . "'>
		  <input type='hidden' name='cust' value='" . $custumer . "'>
  
		  <div class='mr-2' style='margin-right:2px'>
			  <div class='input-group'>
				  <input id='kodeproduk' style='width:170px' type='text' name='id' placeholder='Barcode / Kode' autofocus class='form-control'>
			  </div>
		  </div>
  
		  <input type='submit' value='Ok' style='margin-right:2px' class='btn btn-primary mt-3'>
  
		  <input type='button' class='btn btn-secondary mt-3 ' style='margin-right:2px' value='Cari Produk' onclick='window.location.href=\"media.php?module=semuaproduk&stat=" . $_GET["stat"] . "&cust=" . $custumer . "\"' >
  
		  <input type='button' class='btn btn-secondary mt-3 ' style='margin-right:2px'  value='Cari Customer' onclick='window.location.href=\"semua-customer.html\"' class='btn btn-secondary'>
	  </form>
				</div>
				</div>
				";	


				$ketemu=mysqli_num_rows($sql);
				if ($_GET['cust']!='' AND $_GET['cust']>='1'){
					$cs = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM costumer where id_costumer='$_GET[cust]'"));
					echo "<div class='card-body  p-3' style='width: 50%;'>
				  <ul class='list-group'>
					  <li class='list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg'>
						  <div class='d-flex flex-column'>
							  <h6 class='mb-3 text-sm'>Detail Customer</h6>
							  <table>
							  <tr><td class='mb-2 text-xs'>Nama Customer </td> <td> : </td> <td class='text-dark font-weight-bold'>$cs[nama_costumer]</td></tr>
							  <tr><td class='mb-2 text-xs'>Nomor Telephon </td> <td> : </td> <td class='text-dark font-weight-bold'>$cs[no_telpon]</td></tr>
							  <tr><td class='text-xs'>Alamat</td><td> : </td> <td class='text-dark font-weight-bold'>$cs[alamat_lengkap]</td></tr>
							  </table>
							 
							  
						  </div>
						  <div class='ms-auto text-end'>
							  <a class='btn btn-link text-danger text-gradient px-3 mb-0' href='media.php?module=keranjangbelanja&stat=$_GET[stat]&cust=0'><i class='far fa-trash-alt me-2'></i>Hapus</a>
						  </div>
					  </li>
				  </ul>
			  </div>";
		  
				}

    echo "<form method=post action=media.php?module=simpantransaksi&stat=$_GET[stat]&cust=$_GET[cust]>
<table id='myTable' border='1' class='table align-items-center mb-0'>
  <thead>
  <tr class=''>
  <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3' style='width: 30px;'>No</th>
  <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Kode</th>
  <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Nama Produk</th>
  <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Jumlah</th>
  <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Harga</th>
  <th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Sub Total</th>
  <th class='text-uppercase  text-secondary text-xxs font-weight-bolder opacity-7'>Action</th> 
  
</tr> 
  </thead>";
$no=1;
  while($r=mysqli_fetch_array($sql)){
    $subtotal    = $r['harga'] * $r['jumlah'];
	$subtotaldiskon = $subtotal * $r['diskon']/100;
	$diskontotal = $subtotal - $subtotaldiskon;
    $total       = $total + $subtotal - $subtotaldiskon;  
    $subtotal_rp = format_rupiah($diskontotal);
    $total_rp    = format_rupiah($total);
    $harga       = format_rupiah($r['harga']);
    if(($no % 2)==0){ $warna="#E1E1E1"; }
	else{ $warna="#ffffff"; }

	$in = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.stock) as masuk FROM `produk` a where a.id_produk='$r[id_produk]'"));
    $out = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as keluar FROM `orders_detail` a where a.id_produk='$r[id_produk]'"));
    $stok = $in['masuk']-$out['keluar'];

	echo "<tr>
	<input type=hidden name=id[$no] value=$r[id_orders_temp]>

	<input type=hidden name='stok[$no]' value='$stok' size=4>
	<input type=hidden name='id_produk[$no]' value='$r[id_produk]' size=4>
	<td>
		<div class='d-flex px-2 py-1 ml-2' style='width: 30px;'>
			<div class='d-flex flex-column justify-content-center'>
				<h6 class='mb-0 text-sm'>$no</h6>
			</div>
		</div>
	</td>
	<td>
		<div class='d-flex px-2 py-1'>
			<div class='d-flex flex-column justify-content-center'>
				<h6 class='mb-0 text-sm'>$r[kode_produk]</h6>
			</div>
		</div>
	</td>
	<td>
		<p class='text-xs font-weight-bold mb-0'>$r[nama_produk]</p>
	</td>
  <td><input style='margin-top:-5px; padding-top:2px; width:50px' type='number' data-id='$r[id_produk]' name='jml[$no]' value='$r[jumlah]' class='quant'/> $r[satuan]</td>

	<td class=' text-sm'>
		<span class='badge badge-sm bg-gradient-success price' data-price='$r[harga]'>Rp $harga</span>
	</td>

  <td class='amount'>$subtotal_rp</td>
  <td>
  <a class='btn btn-link text-danger text-gradient px-3 mb-0' href='aksi.php?module=keranjang&act=hapus&id=$r[id_orders_temp]&stat=$_GET[stat]&cust=$_GET[cust]'><i class='far fa-trash-alt me-2'></i>Hapus</a>
  </td>
</tr>";
 $no++; 
} 

echo "<tfoot class='mt-4'>
  <div class='col-md-12 mb-lg-0 mb-4 '>
  <div class='card mt-4'>

    <tr>
      <td colspan='6' style='text-align:right;'><b style='font-size:24px; color:#000000;'>Total Belanja :</b></td>
      <td colspan='6'><input style='width:150px; font-weight:bold; padding:2px; font-size:24px; color:blue; background:#E1E1E1' class='total' type='text' id='type1' onkeyup=\'kalkulatorTambah(this.value,getElementById('type2').value);\' readonly=on></td>
    </tr>
    <tr>
      <td colspan='6' style='text-align:right;'><b style='font-size:24px; color:#000000;'>Bayar :</b></td>
      <td colspan='6'><input type='text' name='bayar' style='width:150px; font-weight:bold; padding:2px; font-size:24px; color:blue;' autocomplete='off' id='type2' onkeyup=\"kalkulatorTambah(getElementById('type1').value,this.value);\">
      	  <input type='hidden' value='$_GET[stat]' name='status'>																</td>
    </tr>
    <tr>
      <td colspan='6' style='text-align:right;'><b style='font-size:24px; color:#000000;'>Kembali :</b></td>
      <td colspan='6'><input type='text' style='width:150px; font-weight:bold; padding:2px; font-size:24px; color:#000; background:#E1E1E1' id='result' readonly=on></td>
    </tr>
    <tr>
      <td colspan='4'></td>
      <td colspan='4'><input class='belanja btn btn-primary mt-3 text-center' type='submit' value=' Simpan / Transaksi Baru	' style=' float:right'></td>
    </tr>
	</div>
	</div>
  </tfoot>
  	
</form>
</table>";

}elseif ($_GET['module']=='semuacostumer'){
	echo '<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>Table Customer</h2>
                    </div>
                    <a style="float:right;" target="_BLANK" href="print-customer.php">Cetak Laporan Customer</a>
                    <div style="display: flex; justify-content: space-between; align-items: center; padding-left: 10px; padding-right: 12px;">
						<div>
							<input type="button" class="btn btn-primary" value="Tambahkan Customer" onclick="window.location.href=\'media.php?module=semuacostumer&custt=tambah\';">
						</div>

						<form action="" method="POST" style="margin-right: 22px; text-align: right;">
					<div class="input-group" style="width: 200px; margin-left: auto;">
						<span class="input-group-text text-body" style="height: 40px;"><i class="fas fa-search" aria-hidden="true"></i></span>
						<input type="text" class="form-control" placeholder="Cari Customer" name="kata" style="height: 40px; ">
						<input type="submit" class="btn btn-primary" name="cari" value="Cari">
					</div>
				</form>
					
					</div>

					<div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 mt-2 data">';
  
if ($_GET['custt'] == 'tambah') {
    echo '<form action="" method="POST"><tr class="">
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);" width="30px"></th>
			<th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="a" placeholder="Input Nama"></th>
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="b" placeholder="Input No Telp"></th>
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);" colspan="2"><input type="text" name="c" placeholder="Input Alamat"></th>
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input class="btn btn-primary mt-3" type="submit" name="d" value="simpan"></th>
          </tr></form>';
}

if ($_GET['custt'] == 'update') {
    $m = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM costumer where id_costumer='$_GET[id]'"));
    echo '<form action="" method="POST"><tr class="data">
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);" width="30px"></th>
            <input type="hidden" value="' . $m['id_costumer'] . '" name="id">
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="a" value="' . $m['nama_costumer'] . '" placeholder="Input Nama"></th>
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="b" value="' . $m['no_telpon'] . '" placeholder="Input No Telp"></th>
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);" colspan="2"><input type="text" name="c" value="' . $m['alamat_lengkap'] . '" placeholder="Input Alamat"></th>
            <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input class="btn btn-primary mt-3" type="submit" name="da" value="Update"></th>
          </tr></form>';
}

if (isset($_POST['d'])) {
    mysqli_query($koneksi, "INSERT INTO costumer (nama_costumer, no_telpon, alamat_lengkap) VALUES ('$_POST[a]','$_POST[b]','$_POST[c]')");
    echo '<script>window.alert("Data Berhasil Ditambah"); window.location="semua-customer.html";</script>';
}

if (isset($_POST['da'])) {
    mysqli_query($koneksi, "UPDATE costumer SET nama_costumer = '$_POST[a]',
                                        no_telpon 	   = '$_POST[b]',
                                        alamat_lengkap = '$_POST[c]' where id_costumer='$_POST[id]'");
    echo '<script>window.alert("Data Berhasil Diupdate"); window.location="semua-customer.html";</script>';
}

if (isset($_GET['delete'])) {
    mysqli_query($koneksi, "DELETE FROM costumer where id_costumer='$_GET[delete]'");
    echo '<script>window.alert("Data Berhasil Dihapus"); window.location="semua-customer.html";</script>';
}

echo ' <div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive p-0">
	<table class="table align-items-center mb-0">
			
<tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telepon</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Transaksi</th>
        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
    </tr>';
 // Closing the string for the HTML block

$p = new Paging;
$batas = 10;
$posisi = $p->cariPosisi($batas);
if (isset($_POST['cari'])) {
    $tampil = mysqli_query($koneksi, "SELECT * FROM costumer where nama_costumer LIKE '%$_POST[kata]%' OR no_telpon LIKE '%$_POST[kata]%'");
} else {
    $tampil = mysqli_query($koneksi, "SELECT * FROM costumer ORDER BY id_costumer ASC LIMIT $posisi,$batas");
}
$no = $posisi + 1;
while ($r = mysqli_fetch_array($tampil)) {
    $tanggal = tgl_indo($r['tgl_masuk']);
    $harga = format_rupiah($r['harga']);
    $harga_grosir = format_rupiah($r['harga_grosir']);
    if (($no % 2) == 0) {
        $warna = "#ffffff";
    } else {
        $warna = "#E1E1E1";
    }
    $cek = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) as total FROM orders where id_costumer='$r[id_costumer]'"));
	echo "<tr>
	<td>
	<div class='d-flex px-2 py-1 ml-2' style='width: 30px;'>
		<div class='d-flex flex-column justify-content-center'>
			<h6 class='mb-0 text-sm'>$no</h6>
		</div>
	</div>
</td>
<td>
	<div class='d-flex px-2 py-1'>
		<div class='d-flex flex-column justify-content-center'>
			<h6 class='mb-0 text-sm'>$r[nama_costumer]</h6>
		</div>
	</div>
</td>
<td>
	<p class='text-xs font-weight-bold mb-0'>$r[no_telpon]</p>
</td>
<td>
<p class='text-xs font-weight-bold mb-0'>$r[alamat_lengkap]</p>
</td>
<td>
<p class='text-xs font-weight-bold mb-0'>$cek[total] Kali</p>
</td>
            <td valign=top><center>
                <a href='media.php?module=keranjangbelanja&stat=1&cust=$r[id_costumer]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'>
				<path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
				<path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4'/>
			  </svg>
			  </a>&nbsp;";
                if ($_SESSION['leveluser']=='Admin'){
                    echo "<a href='media.php?module=semuacostumer&custt=update&id=$r[id_costumer]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='warning' class='bi bi-pencil' viewBox='0 0 16 16'>
					<path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
				</svg>
				</a>&nbsp; 
                          <a href='media.php?module=semuacostumer&delete=$r[id_costumer]' style='color:red; font-weight:bold; '><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
						  <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
						</svg></a>&nbsp; ";
                } 
                echo "</center></td>
        </tr>";
    $no++;
}

$jmldata = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM costumer"));
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);
$linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
echo "</table>Halaman : $linkHalaman
                        </div> 
                    </div>
                </div>
            </div>
        </div> "; // Closing the string for the HTML block

}

elseif ($_GET['module']=='statuspembelian'){
	if (strlen($_POST['bulan']) == 1 ){
		$bulann = '0'.$_POST['bulan'];
	}else{
		$bulann = $_POST['bulan'];
	}
	
	if (strlen($_POST['bulanx']) == 1 ){
		$bulannx = '0'.$_POST['bulanx'];
	}else{
		$bulannx = $_POST['bulanx'];
	}
	
	if (strlen($_POST['tanggal']) == 1 ){
		$tanggall = '0'.$_POST['tanggal'];
	}else{
		$tanggall = $_POST['tanggal'];
	}
	if (strlen($_POST['tanggalx']) == 1 ){
		$tanggallx = '0'.$_POST['tanggalx'];
	}else{
		$tanggallx = $_POST['tanggalx'];
	}
	
	$mulai = $_POST['tahun'].'-'.$bulann.'-'.$tanggall;
	$selesai = $_POST['tahunx'].'-'.$bulannx.'-'.$tanggallx;
	echo '<div class="container-fluid py-4">
	<div class="row">
		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<h2>Laporan</h2>
				</div>';
	echo "<form style='float:right; margin-right:20px' method='POST' action='status-pembelian.html'> Filter 
													<select name='tanggal' class='select'>";
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tanggal]' selected>$_POST[tanggal]</option>";
													}else{
														echo "<option value='' selected> Tanggal </option>";
													}
													for($n=1; $n<=31; $n++){
															echo "<option value='$n'>$n</option>";
														}
															echo "</select>
															
														<select name='bulan' class='select'>"; 
													$bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
													
													if (isset($_POST['lihat'])){
														$bl = $_POST['bulan'];
														echo "<option value='$_POST[bulan]' selected>$bln[$bl]</option>";
													}else{
														echo "<option value='' selected> Bulan </option>";
													}

														for($n=1; $n<=12; $n++){
															echo "<option value='$n'>$bln[$n]</option>";
														}
															echo "</select>
														
														<select name='tahun' class='select'>"; 
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tahun]' selected> $_POST[tahun] </option>";
													}else{
														echo "<option value='' selected> Tahun </option>";
													}
														
														$tah = date("Y");
														for($n=2014; $n<=$tah; $n++){ 
															echo "<option value='$n'>$n</option>";
														} 
														
													  echo "</select>
													  
													  &nbsp sampai &nbsp <select name='tanggalx' class='select'>";
													  
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tanggalx]' selected>$_POST[tanggalx]</option>";
													}else{
														echo "<option value='' selected> Tanggal </option>";
													}
													
													for($n=1; $n<=31; $n++){
															echo "<option value='$n'>$n</option>";
														}
															echo "</select>
															
														<select name='bulanx' class='select'>"; 
														
													$bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
													
													if (isset($_POST['lihat'])){
														$blx = $_POST['bulanx'];
														echo "<option value='$_POST[bulanx]' selected>$bln[$blx]</option>";
													}else{
														echo "<option value='' selected> Bulan </option>";
													}
														
													for($n=1; $n<=12; $n++){
															echo "<option value='$n'>$bln[$n]</option>";
														}
															echo "</select> 
														<select name='tahunx' class='select'>"; 
														
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tahunx]' selected> $_POST[tahunx] </option>";
													}else{
														echo "<option value='' selected> Tahun </option>";
													}
													
														$tah = date("Y");
														for($n=2014; $n<=$tah; $n++){ 
															echo "<option value='$n'>$n</option>";
														} 
														
													  echo "</select>";
	echo " <input type='submit' class='btn btn-primary name='lihat' value='Lihat'></form>";
	echo '<div class="card-body px-0 pt-0 pb-2">
	<div class="table-responsive p-0">
		<table class="table align-items-center mb-0">
	<tr>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No Faktur</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Customer</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Belanja</th>';
if ($_SESSION['leveluser'] == 'Admin') {
    echo '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kasir</th>';
}
echo '<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jam</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
</tr>';

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);	
	
	if (isset($_POST['lihat'])){
		$tampil = mysqli_query($koneksi, "SELECT a.*, b.nama_costumer FROM orders a LEFT JOIN costumer b ON a.id_costumer=b.id_costumer where nama_kasir='$_SESSION[namalengkap]' AND tgl_order BETWEEN '$mulai' AND '$selesai'  ORDER BY id_orders DESC LIMIT $posisi,$batas");
	}else{
		$tampil = mysqli_query($koneksi, "SELECT a.*, b.nama_costumer FROM orders a LEFT JOIN costumer b ON a.id_costumer=b.id_costumer where nama_kasir='$_SESSION[namalengkap]' ORDER BY id_orders DESC LIMIT $posisi,$batas");
    }
	while($r=mysqli_fetch_array($tampil)){
      $tanggal=tgl_indo($r['tgl_order']);
	  if(($no % 2)==0){
    $warna="#ffffff";
  }
  else{
    $warna="#E1E1E1";
  }

  if ($r['id_costumer']=='0'){ $nama_costumer = "<i style='color:red'>Tidak ada,..</i>"; }else{ $nama_costumer = $r['nama_costumer']; }
  if ($r['status']=='1'){ $status = "<i style='color:orange'>Eceran,..</i>"; }else{ $status = "<i style='color:purple'>Grosir</i>"; }
  $tot = mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(z.harga_belanja) as total_belanja, sum(z.harga_modal) as total_pokok, (sum(z.harga_belanja)-sum(z.harga_modal)) as untung FROM (SELECT a.*, b.harga, b.harga_grosir, b.harga_pokok, c.status, IF(c.status=1, a.jumlah*b.harga, a.jumlah*b.harga_grosir) as harga_belanja, (a.jumlah*b.harga_pokok) as harga_modal FROM orders_detail a JOIN produk b ON a.id_produk=b.id_produk JOIN orders c On a.id_orders=c.id_orders) as z where z.id_orders='$r[id_orders]'"));

      echo "<tr bgcolor=$warna>
				<td class='' align=center>$r[no_orders]</td>
				<td class=''>$nama_costumer</td>
				<td class=''>Rp ".format_rupiah($tot['total_belanja'])."</td>";
                if ($_SESSION['leveluser']=='Admin'){ echo "<td class='data'>$r[nama_kasir]</td>"; }
                echo "<td class='data'>$tanggal</td>
                <td class=''>$r[jam_order]</td>
                <td class=''>$status</td>
				<td class=''><center><a target='_BLANK' href='faktur.php?id=$r[id_orders]&stat=$r[status]&page=report'>Cetak Struk</a></td>
			</tr>";
      $no++;
    }
	$jmldata = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM orders where nama_kustomer='$_SESSION[namalengkap]'"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);

    echo "</table>";
    echo "<br/>Halaman: $linkHalaman<br>";

}
elseif ($_GET['module']=='diagram'){
	echo "<div class='container-fluid py-4'>
        <div class='row'>
            <div class='col-12'>
                <div class='card mt-4'>
					<div class='mt-4 style='float: left; text-align: left; margin-right: 15px;'>
                    <form style='float: right;  margin-right: 15px;' method='POST' action='diagram.html'>
                        Filter : 
                        <select name='bulan' >
                            <option value='0' selected>- Pilih Bulan -</option>";
                            $tampil = mysqli_query($koneksi, "SELECT substring(tgl_order,6,2) as bulan FROM orders GROUP BY substring(tgl_order,6,2)");
                            while ($r = mysqli_fetch_array($tampil)) {
                                $bulan = Bulan($r['bulan']);
                                echo "<option value='{$r['bulan']}'>$bulan</option>";
                            }	
                        echo "</select>
                        <select name='tahun' >
                            <option value='0' selected>- Pilih Tahun -</option>";
                            $tampil = mysqli_query($koneksi, "SELECT substring(tgl_order,1,4) as tahun FROM orders GROUP BY substring(tgl_order,1,4)");
                            while ($r = mysqli_fetch_array($tampil)) {
                                echo "<option value='{$r['tahun']}'>{$r['tahun']}</option>";
                            }
                        echo "</select>
                        <input type='submit' name='submit' class='submitt' value='View'>
                    </form>
                    <br>
				</div>";

include "diagram.php";

echo "</div>
    </div>
</div>
</div>";
}
elseif ($_GET['module']=='diagramtahun'){
	echo "
	<div class='container-fluid py-4'>
        <div class='row'>
            <div class='col-12'>
                <div class='card mt-4'>
					<div class='mt-4 style='float: left; text-align: left; margin-left: 15px;'>
						<form style='float:right; margin-right:15px' method=POST action='tahun-diagram.html'>
								Filter : 
								<select name='tahun'>
									<option value=0 selected>- Pilih Tahun -</option>";
									$tampil=mysqli_query($koneksi, "SELECT substring(tgl_order,1,4) as tahun FROM orders GROUP BY substring(tgl_order,1,4)");
									while($r=mysqli_fetch_array($tampil)){
									  echo "<option value=$r[tahun]>$r[tahun]</option>";
									}
							echo "</select>
							<input type='submit' name='submit' class='submitt' value='View'>
						</form><br>
					</div>";
	include "diagram-tahun.php";
			echo "</div>
			</div>
		</div>
</div>";
}
elseif ($_GET['module']=='diagramkategori'){
	echo "<div class='container-fluid py-4'>
	<div class='row'>
		<div class='col-12'>
			<div class='card mt-4'>";
	include "diagram-kategori.php";
	echo "</div>
			</div>
		</div>
</div>";
}
elseif ($_GET['module']=='simpantransaksi'){
$cekkeranjang = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM orders_temp where id_session='$_SESSION[namauser]'"));
	if ($cekkeranjang == 0){
		echo "<script>window.alert('Maaf Transaksi Tidak Dapat Di Proses !!!');
	        window.location=('transaksi-belanja-$_GET[stat].html')</script>";  
	}else{
		$tgl_skrg = date("Ymd");
		$jam_skrg = date("H:i:s");

		$c = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) as total FROM orders"));
		$no_orders = 'S'.date("ymd").'-'.sprintf("%04d", $c['total']+1);

		$totbayar = str_replace(".","",$_POST['bayar']);
		mysqli_query($koneksi, "INSERT INTO orders(no_orders, id_costumer, nama_kasir, tgl_order, jam_order, bayar, status) 
		             VALUES('$no_orders','$_GET[cust]','$_SESSION[namalengkap]','$tgl_skrg','$jam_skrg','$totbayar','$_POST[status]')");
		  
		$id_orders=mysqli_insert_id($koneksi);
	  	$id       = $_POST['id'];
	  	$id_produk       = $_POST['id_produk'];
	  	$jml_data = count($id);
	  	$stok   = $_POST['stok']; 
	  	$jumlah   = $_POST['jml']; // quantity

		for ($i=1; $i <= 2; $i++){
			mysqli_query($koneksi, "INSERT INTO orders_detail(id_orders, id_produk, jumlah) 
		               VALUES('$id_orders',".$id_produk[$i].",".$jumlah[$i].")");
		}

	  mysqli_query($koneksi, "DELETE FROM orders_temp
		  	         WHERE id_session = '$_SESSION[namauser]'");
	?>
	<script>
	    if (confirm("Ingin Cetak Faktur?") == true) {
	        document.location.href = "faktur.php?id=<?php echo $id_orders; ?>&stat=<?php echo $_GET[stat]; ?>";
	    } else {
	        document.location.href = "transaksi-belanja-<?php echo $_GET[stat]; ?>.html";
	    }
	</script>

	<?php 
	}
}

include "kasir.php";
include "produk.php";
include "return.php";
include "kategori.php";
include "suppliers.php"; 

if ($_GET['module'] == 'laporan') {
    echo '<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>Laporan</h2>
                    </div>';
    echo '<form target="_BLANK" style="margin-bottom:3px; margin-right:22px" method="POST" action="print.php">
                    Mulai&nbsp; &nbsp;  : <select name="tanggal" class="select" style="margin-left:2px">';
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tanggal]' selected>$_POST[tanggal]</option>";
													}else{
														echo "<option value='' selected> Tanggal </option>";
													}
													for($n=1; $n<=31; $n++){
															echo "<option value='$n'>$n</option>";
														}
															echo "</select>
															
														<select name='bulan' class='select'>"; 
													$bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
													
													if (isset($_POST['lihat'])){
														$bl = $_POST['bulan'];
														echo "<option value='$_POST[bulan]' selected>$bln[$bl]</option>";
													}else{
														echo "<option value='' selected> Bulan </option>";
													}

														for($n=1; $n<=12; $n++){
															echo "<option value='$n'>$bln[$n]</option>";
														}
															echo "</select>
														
														<select name='tahun' class='select'>"; 
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tahun]' selected> $_POST[tahun] </option>";
													}else{
														echo "<option value='' selected> Tahun </option>";
													}
														
														$tah = date("Y");
														for($n=2014; $n<=$tah; $n++){ 
															echo "<option value='$n'>$n</option>";
														} 
														
													  echo "</select>
													  
													  <br> 

													  Sampai : <select name='tanggalx' class='select'>";
													  
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tanggalx]' selected>$_POST[tanggalx]</option>";
													}else{
														echo "<option value='' selected> Tanggal </option>";
													}
													
													for($n=1; $n<=31; $n++){
															echo "<option value='$n'>$n</option>";
														}
															echo "</select>
															
														<select name='bulanx' class='select'>"; 
														
													$bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
													
													if (isset($_POST['lihat'])){
														$blx = $_POST['bulanx'];
														echo "<option value='$_POST[bulanx]' selected>$bln[$blx]</option>";
													}else{
														echo "<option value='' selected> Bulan </option>";
													}
														
													for($n=1; $n<=12; $n++){
															echo "<option value='$n'>$bln[$n]</option>";
														}
															echo "</select> 
														<select name='tahunx' class='select'>"; 
														
													if (isset($_POST['lihat'])){
														echo "<option value='$_POST[tahunx]' selected> $_POST[tahunx] </option>";
													}else{
														echo "<option value='' selected> Tahun </option>";
													}
													
														$tah = date("Y");
														for($n=2014; $n<=$tah; $n++){ 
															echo "<option value='$n'>$n</option>";
														} 
														
													  echo "</select>
							<select name='status'>";
							$data = array('0','1','2');
							$nama_data = array('Semua','Eceran','Grosir');
							for ($i=0; $i < count($data) ; $i++) { 
								echo "<option value='".$data[$i]."'>".$nama_data[$i]."</option>";
							}
							echo '</select>
    <input type="submit" class="submitt" name="submit" value="Cetak Laporan">
</form>';

echo '<div class="card-body px-0 pt-0 pb-2">
    <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No Faktur</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Customer</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Belanja</th>
                
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Waktu Penjualan</th>
                
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
            </tr>';

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysqli_query($koneksi, "SELECT a.*, b.nama_costumer FROM orders a LEFT JOIN costumer b ON a.id_costumer=b.id_costumer ORDER BY a.id_orders DESC LIMIT $posisi,$batas");
  
    while($r=mysqli_fetch_array($tampil)){
      $tanggal=tgl_indoo($r['tgl_order']);
	  if(($no % 2)==0){
			$warna="#ffffff";
		  }
		  else{
			$warna="#E1E1E1";
		  }

	  if ($r['id_costumer']=='0'){ $nama_costumer = "<i style='color:red'>Tidak ada,..</i>"; }else{ $nama_costumer = $r['nama_costumer']; }
	  if ($r['status']=='1'){ $status = "<i style='color:orange'>Eceran</i>"; }else{ $status = "<i style='color:purple'>Grosir</i>"; }
	  $tot = mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(z.harga_belanja) as total_belanja, sum(z.harga_modal) as total_pokok, (sum(z.harga_belanja)-sum(z.harga_modal)) as untung FROM (SELECT a.*, b.harga, b.harga_grosir, b.harga_pokok, c.status, IF(c.status=1, a.jumlah*b.harga, a.jumlah*b.harga_grosir) as harga_belanja, (a.jumlah*b.harga_pokok) as harga_modal FROM orders_detail a JOIN produk b ON a.id_produk=b.id_produk JOIN orders c On a.id_orders=c.id_orders) as z where z.id_orders='$r[id_orders]'"));





	  
      echo "<tr class=''><td class=''><a href='#' title='$r[nama_kasir]'>$r[no_orders]</a></td>
      			<td class=''>$nama_costumer</td>
				<td class=''>".format_rupiah($tot['total_belanja'])."</td>
			
				<td class=''>$tanggal, $r[jam_order]</td>
              
		        <td class=''><a href=media.php?module=detailorder&id=$r[id_orders]&stat=$r[status]>Detail</a> | 
					<a target='_BLANK' href='faktur.php?id=$r[id_orders]&stat=$r[status]&page=report'>Cetak</a>
				</td>
			</tr>";
      $no++;
    }

    $tot_all = mysqli_fetch_array(mysqli_query($koneksi, "SELECT sum(z.harga_belanja) as total_belanja, sum(z.harga_modal) as total_pokok, (sum(z.harga_belanja)-sum(z.harga_modal)) as untung FROM (SELECT a.*, b.harga, b.harga_grosir, b.harga_pokok, c.status, IF(c.status=1, a.jumlah*b.harga, a.jumlah*b.harga_grosir) as harga_belanja, (a.jumlah*b.harga_pokok) as harga_modal FROM orders_detail a JOIN produk b ON a.id_produk=b.id_produk JOIN orders c On a.id_orders=c.id_orders) as z"));

    echo "<tr>
    		<td colspan='2'><b>Total</b></td>
    		<td>".format_rupiah($tot_all['total_belanja'])."</td>
    		<td>".format_rupiah($tot_all['total_pokok'])."</td>
    		<td>".format_rupiah($tot_all['untung'])."</td>
    		<td colspan='3'></td>
    	  </tr>";
	 $jmldata = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM orders"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET['halaman'], $jmlhalaman);
    echo "</table><br/>Halaman : $linkHalaman";
	

	
}elseif ($_GET['module']=='detailorder'){
  if ($_GET['stat']=='1'){
    $status = 'Eceran';
    $sql2=mysqli_query($koneksi, "SELECT orders_detail.*, produk.harga as harga, produk.kode_produk, produk.nama_produk, produk.id_produk, produk.satuan FROM orders_detail, produk 
                          WHERE orders_detail.id_produk=produk.id_produk AND orders_detail.id_orders='$_GET[id]'");
  }else{
    $status = 'Grosir';
    $sql2=mysqli_query($koneksi, "SELECT orders_detail.*, produk.harga_grosir as harga, produk.kode_produk, produk.nama_produk, produk.id_produk, produk.satuan FROM orders_detail, produk 
                          WHERE orders_detail.id_produk=produk.id_produk AND orders_detail.id_orders='$_GET[id]'");
  } 

$edit = mysqli_query($koneksi, "SELECT * FROM orders WHERE id_orders='$_GET[id]'");
    $r    = mysqli_fetch_array($edit);
    $tanggal=tgl_indo($r['tgl_order']);

    echo '<div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h2>Detail Data Pesanan</h2>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <table>
                            <tr><td width="110px">No. Faktur</td><td>: ' . $r['no_orders'] . '</td></tr>
                            <tr><td>Tgl. & Jam Order</td><td>: ' . $tanggal . ' ' . $r['jam_order'] . '</td></tr>
                            <tr><td>Kasir Melayani</td><td>: ' . $r['nama_kasir'] . '</td></tr>
                        </table>';

echo '<div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">Kode Produk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga ' . $status . '</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sub Total</th>
            </tr>';
  
  while($s=mysqli_fetch_array($sql2)){
     // rumus untuk menghitung subtotal dan total	
	$subtotal1    = ($s['harga'] * $s['jumlah'])* $s['diskon']/100 ;
    $subtotal2    = $s['harga'] * $s['jumlah'] ;
	$subtotal    = $subtotal2 - $subtotal1 ;
    $total       = $total + $subtotal;
    $subtotal_rp = format_rupiah($subtotal);    
    $total_rp    = format_rupiah($total);    
    $harga       = format_rupiah($s['harga']);


    echo "<tr class=''>
			<td class=''>$s[kode_produk]</td>
			<td class=''>$s[nama_produk]</td>
			<td class=''>$s[jumlah] $s[satuan]</td>
			<td class=''>Rp. $harga</td>
			<td class=''>Rp. $subtotal_rp</td>
		</tr>";
  } 
		$by = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM orders where id_orders='$_GET[id]'")); 
    	$kembali = $by['bayar'] - $total;

echo "
		<tr bgcolor='#e3e3e3'>
			<td class='data' colspan='4'>Total</td>
			<td class='data' colspan='5'> Rp. <b>$total_rp</b></td>
		</tr>
		<tr bgcolor='#e3e3e3'>
			<td class='data' colspan='4'>Bayar</td>
			<td class='data' colspan='5'> Rp. <b>".format_rupiah($by['bayar'])."</b></td>
		</tr>
		<tr bgcolor='#e3e3e3'>
			<td class='data' colspan='4'>Kembali</td>
			<td class='data' colspan='5'> Rp. <b>".format_rupiah($kembali)."</b></td>
		</tr>
      </table>";
}
?>
</main>









	 <!--   Core JS Files   -->
	 <script src="..js/core/popper.min.js"></script>
  <script src="../js/core/bootstrap.min.js"></script>
  <script src="../js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
</html>

