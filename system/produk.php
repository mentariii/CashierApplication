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
<?php
if ($_GET['module']=='produk'){
	    echo "
		
		
		<h3>Semua Produk no Faktur : $_GET[kode]<span style='float:right'><a style='float:right;' target='_BALNK' href='print-produk.php?kode=$_GET[kode]'>Cetak Laporan Produk</a></span></h3><br/>
          <input type=button value='Tambah Master dan Pembelian Produk' onclick=\"window.location.href='media.php?module=tambahproduk&no=$_GET[kode]';\">
          <span style='float:right;'>
			<form action='media.php' method='GET' style='margin-right:22px'>
							  <input type='hidden' name='module' value='editproduk' style='width:200px; margin-bottom:3px;'/>
				<input type='text' name='kdp' autofocus style='width:200px; margin-bottom:3px;' placeholder='Input Kode Produk...'/>
							  <input type='hidden' name='no' value='$_GET[kode]' style='width:200px; margin-bottom:3px;'/>
				<input type='submit' name='cari' value='Tambahkan'>
				<a href='all-produk-faktur-$_GET[kode].html'>All Produk</a>
			</form>
		  </span><br/>
		  
			 <div class='h_line'></div>
		<table id='twitter-table' class='data'>
			<tr class='data'>
				<th class='data'>No</th>
				<th class='data'>Kode Produk</th>
				<th class='data'>Nama Produk</th>
				<th class='data'>Harga Ecer</th>
				<th class='data'>Harga Grosir</th>
				<th class='data'>Harga Pokok</th>
				<th class='data'>Jumlah</th>
				<th  class='data' align='center' width='70px;'>Action</th>
			</tr>";
	$ifa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM faktur where no_faktur='$_GET[kode]'"));

	if (isset($_POST['cari']) OR isset($_REQUEST['kata'])){
		$tampil = mysqli_query($koneksi, "SELECT c.nama_supplier, a.id_produk_pembelian, a.id_faktur, a.id_produk, a.id_supplier, a.jumlah, a.tanggal_masuk, a.username, b.kode_produk, b.nama_produk, b.harga, b.harga_grosir, b.harga_pokok, b.satuan  
					FROM `produk_pembelian`a JOIN produk b ON a.id_produk=b.id_produk JOIN supplier c ON a.id_supplier=c.id_supplier where a.id_faktur='$ifa[id_faktur]' AND b.kode_produk='$_POST[kata]' ORDER BY a.id_produk_pembelian");
	}else{
		$per_page = 10;
		$page_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM produk_pembelian where id_faktur='$ifa[id_faktur]'");
		$pages = ceil(mysqli_result($page_query, 0) / $per_page);
		$page = (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
		$start = ($page - 1) * $per_page;
		
		$tampil = mysqli_query($koneksi, "SELECT c.nama_supplier, a.id_produk_pembelian, a.id_faktur, a.id_produk, a.id_supplier, a.jumlah, a.tanggal_masuk, a.username, b.kode_produk, b.nama_produk, b.harga, b.harga_grosir, b.harga_pokok, b.satuan  
					FROM `produk_pembelian`a JOIN produk b ON a.id_produk=b.id_produk JOIN supplier c ON a.id_supplier=c.id_supplier where a.id_faktur='$ifa[id_faktur]' ORDER BY a.id_produk_pembelian ASC LIMIT $start, $per_page");
    }
	$no = $start+1;
    while($r=mysqli_fetch_array($tampil)){
      $tanggal=tgl_indo($r['tgl_masuk']);
      $harga=format_rupiah($r['harga']);
	  $harga_pokok=format_rupiah($r['harga_pokok']);
	  $harga_grosir=format_rupiah($r['harga_grosir']);

	  $in = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as masuk FROM `produk_pembelian` a where a.id_produk='$r[id_produk]'"));
      $out = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as keluar FROM `orders_detail` a where a.id_produk='$r[id_produk]'"));
      $stock = $in['masuk']-$out['keluar'];

	  if(($no % 2)==0){
			$warna="#ffffff";
		  }
		  else{
			$warna="#E1E1E1";
		  }
      echo "<tr class='data'><td class='data'>$no</td>
				<td class='data'>$r[kode_produk]</td>
                <td class='data'><a href='#' title='Pemasok : $r[nama_supplier]'>$r[nama_produk]</td>
                <td class='data'>Rp $harga</td>
				<td class='data'>Rp $harga_grosir</td>
				<td class='data'>Rp $harga_pokok</td>
				<td class='data' align=center>$r[jumlah] $r[satuan]</td>
				<td class='data' align='center'><a href=media.php?module=hapusproduk&id=$r[id_produk]&no=$_GET[kode]&idf=$r[id_faktur]>Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";
			echo "<div style='clear:both'></div>Halaman : ";
			if($pages >= 1 && $page <= $pages){
				for($x=1; $x<=$pages; $x++){
					echo ($x == $page) ? '
						<a href="halaman-detail-produk-'.$_GET['kode'].'-'.$x.'.html">'.$x.'</a> | ' : '
						<a href="halaman-detail-produk-'.$_GET['kode'].'-'.$x.'.html">'.$x.'</a>';
				}
			}
	
}elseif ($_GET['module']=='tambahproduk'){
	$newValue = "FA1234";

echo '  <div class="card shadow-lg mx-4 card-profile-bottom mt-4">
<div class="card-body p-3">
	<div class="row gx-4">
		<div class="col-auto">
			<div class="avatar avatar-xl position-relative">
				<img src="../mos-css/img/loo.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
			</div>
		</div>
		<div class="col-auto my-auto">
			<div class="h-100">
				<h5 class="mb-1">
					Tambah Menu
				</h5>
				<p class="mb-0 font-weight-bold text-sm">
					' . $newValue . '
				</p>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container-fluid py-4">
<div class="row">
  <div class="col-md-8">
	<div class="card">
	 
	  <div class="card-body">
	  <form method=POST action="media.php?module=aksitambahproduk" enctype="multipart/form-data">
		<div class="row">
		  <div class="col-md-6">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">No Faktur</label>
			  <input class="form-control" type="text" name="no" value="' . $newValue . '" readonly="on">
			</div>
		  </div>
		  <div class="col-md-6">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Kode Produk	</label>
			  <input class="form-control" type="text" name="kode_produk">
			</div>
		  </div>
		
		  <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nama Produk</label>
                    <input class="form-control" type="text" name="nama_produk">
                  </div>
                </div>
				<div class="col-md-6">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Kategori</label>
			  <select name="kategori" class="form-select" aria-label="Default select example">
            <option value=0 selected>- Pilih Kategori -</option>';

            $tampil=mysqli_query($koneksi, "SELECT * FROM kategori_produk ORDER BY nama_kategori");
            while($r=mysqli_fetch_array($tampil)){

              echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
            }
			echo "</select> 
     
			<input type='hidden' name='id_supplier' value='Pt Persada Nusantara tbk'>
			
		";



		echo '	</div>
		  </div>
		  <div class="col-md-6">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Harga</label>
			  <input class="form-control" type="text" name="harga">
			</div>
		  </div>
		</div>
		<input type=hidden name="harga_grosir" size=20 value="1000">
		<input type=hidden name="harga_pokok" size=20 value="1000">
		<div class="row">
		  <div class="col-md-4">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Satuan</label>
			  <input class="form-control" type="text" name="satuan">
			</div>
		  </div>
		  <div class="col-md-4">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Stok</label>
			  <input class="form-control" type="text" name="stock">
			</div>
		  </div>
		  <input type=hidden name="berat" size=20 value="0">
		  <div class="col-md-4">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Diskon</label>
			  <input class="form-control" type="text" name="diskon">
			</div>
		  </div>
		</div>

		<div class="row">
		  <div class="col-md-12">
			<div class="form-group">
			  <label for="example-text-input" class="form-control-label">Deskripsi</label>
			  <input class="form-control" type="text" name="deskripsi">
			</div>
			<div class="col-md-6">
			<div class="float-right">
				<input class="btn btn-secondary" type="button" value="Batal" onclick="self.history.back()">
				<input class="btn btn-primary" style="margin-left:5px;" type="submit" value="Simpan dan Tambahkan">
			</div>
		</div>
		</div>
		  </form>
		  </div>
	  </div>
	</div>
  </div>
  <div class="col-md-4">
  <div class="card card-carousel overflow-hidden h-100 p-0">
  <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
	<div class="carousel-inner border-radius-lg h-100">
	  <div class="carousel-item h-100 active" style="background-image: url(\'../mos-css/img/new1.jpeg\');
background-size: cover;">
		<div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
		  <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
			<i class="ni ni-camera-compact text-dark opacity-10"></i>
		  </div>
		  <h5 class="text-white mb-1">Jelajahi Dunia Lezat Ayam Geprek</h5>
		  <p>Nikmati kelezatan renyah dan cita rasa berani Ayam Geprek - pengalaman kuliner yang memikat seperti tak ada yang lain.</p>
		</div>
	  </div>
	  <div class="carousel-item h-100" style="background-image: url(\'../mos-css/img/new2.jpeg\');
background-size: cover;">
		<div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
		  <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
			<i class="ni ni-bulb-61 text-dark opacity-10"></i>
		  </div>
		  <h5 class="text-white mb-1">Mulai dengan Mendoan</h5>
		  <p>Tidak ada hal dalam hidup yang saya benar-benar ingin lakukan yang tidak bisa saya kuasai.</p>
		</div>
	  </div>
	  <div class="carousel-item h-100" style="background-image: url(\'../mos-css/img/new3.jpeg\');
background-size: cover;">
  </div>
</div>

</div>



  
          ';
		  
}elseif ($_GET['module']=='aksitambahproduk'){
	$ifa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM faktur where no_faktur='$_POST[no]'"));
	$hitung = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM produk where kode_produk='$_POST[kode_produk]'"));
	if ($hitung >= 1){
		echo "<script>window.alert('Maaf, Kode Produk Sudah ada di system.');
				window.location=('faktur.html')</script>"; 
	}else{
		mysqli_query($koneksi, "INSERT INTO produk(kode_produk,
										nama_produk,
										id_kategori,
										harga,
										harga_grosir,
										harga_pokok,
										satuan,
										berat,
										stock,
										diskon,
										deskripsi,
										tgl_masuk) 
								VALUES('$_POST[kode_produk]',
									   '$_POST[nama_produk]',
									   '$_POST[kategori]',
									   '$_POST[harga]',
									   '$_POST[harga_grosir]',
									   '$_POST[harga_pokok]',
									   '$_POST[satuan]',
									   '$_POST[berat]',
									   '$_POST[stock]',
									   '$_POST[diskon]',
									   '$_POST[deskripsi]',
									   '$tgl_sekarang')");
		$idp = mysqli_insert_id();
		$tglbeli = date("Y-m-d H:i:s");
		mysqli_query($koneksi, "INSERT INTO produk_pembelian(id_faktur,
										id_produk,
										id_supplier,
										jumlah,
										tanggal_masuk,
										username) 
								VALUES('$_POST[id_faktur]',
									   '$idp',
									   '$_POST[id_supplier]',
									   '$_POST[stok]',
									   '$tglbeli',
									   '$_SESSION[namauser]')");

	header('location:faktur.html');
	exit;
	}
}elseif ($_GET['module']=='editproduk'){
    $edit = mysqli_query($koneksi, "SELECT * FROM produk WHERE kode_produk='$_GET[kdp]'");
    $r    = mysqli_fetch_array($edit);
    $temukan    = mysqli_num_rows($edit);

	    echo "<h3>Tambah Data Pembelian Produk Faktur $_GET[no].</h3><br/>";

    if ($temukan <= 0){
    	echo "<center style='margin-top:10%'>Maaf, Produk Dengan Kode <b>$_GET[kdp]</b> Tidak Ditemukan !!!<br>
    				   Tambahkan Master Produk dan Pembelian untuk Faktur <b>$_GET[no]</b>
    				   <br> <button><a href='media.php?module=tambahproduk&no=$_GET[no]'>Tambah Master dan Pembelian</a></button></center>";
    }else{

	    echo "<form method=POST enctype='multipart/form-data' action=media.php?module=aksieditproduk>
	          <input type=hidden name=id value=$r[id_produk]>
	          <table>
			  <tr><td width=100>No Faktur</td>     <td> : <input type=text name='idf' value='$_GET[no]' size=10 readonly='on' style='background:#e3e3e3'></td></tr>
			  <tr><td width=100>Kode Produk</td>     <td> : <input type=text name='kode_produk' value='$r[kode_produk]' size=10 readonly='on' style='background:#e3e3e3'></td></tr>
	          <tr><td width=100>Nama Produk</td>     <td> : <input type=text name='judul' size=60 value='$r[nama_produk]' readonly='on' style='background:#e3e3e3'></td></tr>
	          <tr><td>Satuan</td>     <td> : <input type=text name='satuan' value='$r[satuan]' size=20 readonly='on' style='background:#e3e3e3'></td></tr>
			  <tr><td>Supplier</td>  <td> : <select style='background:#fff' name='id_supplier'>";
	 
	          $tampil=mysqli_query($koneksi, "SELECT * FROM supplier ORDER BY nama_supplier");
	          if ($r['id_supplier']==0){
	            echo "<option value=0 selected>- Pilih Supplier -</option>";
	          }   

	          while($w=mysqli_fetch_array($tampil)){
	            if ($r['id_supplier']==$w['id_supplier']){
	              echo "<option value=$w[id_supplier] selected>$w[nama_supplier]</option>";
	            }
	            else{
	              echo "<option value=$w[id_supplier]>$w[nama_supplier]</option>";
	            }
	          }
	    $in = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as masuk FROM `produk_pembelian` a where a.id_produk='$r[id_produk]'"));
	    $out = mysqli_fetch_array(mysqli_query($koneksi, "SELECT a.id_produk, sum(a.jumlah) as keluar FROM `orders_detail` a where a.id_produk='$r[id_produk]'"));
	    $stock = $in['masuk']-$out['keluar'];

	    echo "</select></td></tr>
			  <tr><td>Stok dan Jumlah</td>     <td> : <input type=text value='$stock' size=10 disabled  style='background:#e3e3e3'> + <input type=text name='stokmasuk' size=15 placeholder='Jumlah Masuk'></td></tr>
			  <input type=hidden name='berat' size=20 value='0'>
	          <tr><td colspan=2><br/><input style='float:right;' type=button value=Batal onclick=self.history.back()>
								<input style='float:right;margin-right:5px' type=submit value=Tambahkan></td></tr>
	         </table></form>";
    }
		 
}elseif ($_GET['module']=='aksieditproduk'){
		$tglbeli = date("Y-m-d H:i:s");
		$ifa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM faktur where no_faktur='$_POST[idf]'"));
		mysqli_query($koneksi, "INSERT INTO produk_pembelian(id_faktur,
										id_produk,
										id_supplier,
										jumlah,
										tanggal_masuk,
										username) 
								VALUES('$ifa[id_faktur]',
									   '$_POST[id]',
									   '$_POST[id_supplier]',
									   '$_POST[stokmasuk]',
									   '$tglbeli',
									   '$_SESSION[namauser]')");
 
  header('location:detail-produk-'.$_POST['idf'].'.html');
  
}elseif ($_GET['module']=='hapusproduk'){
  mysqli_query($koneksi, "DELETE FROM produk_pembelian WHERE id_produk='$_GET[id]' AND id_faktur='$_GET[idf]'");

  header('location:detail-produk-'.$_GET['no'].'.html');
}
?>







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


