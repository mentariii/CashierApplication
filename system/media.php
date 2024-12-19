
<?php 

  error_reporting(0);
  include "../config/koneksi.php";
  include "../config/fungsi_indotgl.php";
  include "../config/class_paging.php";
  include "../config/library.php";
  include "../config/fungsi_rupiah.php";
  include "../config/session_member.php";
?>

<html>
<head>
<title>Waroeng Rembug</title>
<link rel="shortcut icon" href="../mos-css/img/ic.png">
 <!--     Fonts and icons     -->
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
    $(function() {  
        $( "#kodeproduk" ).autocomplete({
         source: "sourcedata.php",  
           minLength:2, 
        });
    });
    </script>

<script src="js/highcharts.js" type="text/javascript"></script>
<script src="js/format_rp.js" type="text/javascript"></script>
<script type="text/javascript">
		$(document).ready(function(){
			$('#angka1').maskMoney();
			$('#angka2').maskMoney({prefix:'US$'});
			$('#type2').maskMoney({prefix:'', thousands:'.', decimal:',', precision:0});
			$('#result').maskMoney({prefix:'', thousands:'.', decimal:',', precision:0});
			$('#angka4').maskMoney();
		});
</script>
<script>
	function kalkulatorTambah(type1,type2){
	var res = type2.replace(".", "");
	var hasil = eval(res) - eval(type1);
	document.getElementById('result').value = hasil;
		if (isNaN(hasil)) 
			return 0;
		else
			return hasil;
		}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0">
        <img src="../mos-css/img/loo.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Waroeng Rembug</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link " href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
		<?php
			if ($_SESSION['leveluser'] == 'Admin') {
				echo '<li class="nav-item">
						<a class="nav-link" href="kasir.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-user-tie mb-1 text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Kasir</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="faktur.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-utensils text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Menu</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kategori.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-list mb-1 text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Kategori</span>
						</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link" href="semua-customer.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-user text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Data Customer</span>
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="laporan.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-file-alt text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Laporan</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="diagram.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-chart-bar text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Graf. Bulan</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tahun-diagram.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-chart-line text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Graf. Tahun</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="data-kategori-diagram.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-chart-pie text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Graf. Kategori</span>
						</a>
					</li>';
			} else {
				echo '
			<li class="nav-item">
						<a class="nav-link " href="semua-produk.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-utensils text-primary  text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Menu</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="transaksi-belanja-1.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-wallet text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Transaksi </span>
						</a>
					</li>
			
					<li class="nav-item">
						<a class="nav-link" href="semua-customer.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-user text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Data Customer</span>
						</a>
					</li>
			
					<li class="nav-item">
						<a class="nav-link" href="status-pembelian.html">
							<div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
								<i class="fas fa-file-alt text-primary text-sm opacity-10"></i>
							</div>
							<span class="nav-link-text ms-1">Laporan</span>
						</a>
					</li>'; // Or any other code you want to execute when the condition is not met
			}
			?>

           </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="../mos-css/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Butuh bantuan?</h6>
            <p class="text-xs font-weight-bold mb-0">Cek Sosial Media kami</p>
          </div>
        </div>
      </div>
      <a href="https://www.instagram.com/waroeng_rembug/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Instagram</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.tiktok.com/@waroeng_rembug?is_from_webapp=1&sender_device=pc" type="button">TikTok</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">

	<!-- <div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo,<br>
		<a target='_BLANK' href="http://phpmu.com/">Help</a> | <a href="../logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div> -->

<div id="">

	<div id="">
		<?php include "kiri.php"; ?>
	</div>
<div class="clear"></div>
<!-- <div id="footer">
	Copyright &copy; 2015 <a href="#">Point of Sale</a> | Design <a href="www.phpmu.com" target="_blank">Robby Prihandaya</a><br>
</div> -->
</div>
<script type="text/javascript">
$(document).ready(function() {
  update();
  $(".quant").change(function() {
    //this: context of the input that was changed
    $.get(
      '/minimarket/media.php?module=keranjangbelanja&stat=1&AddTocart', {
        id: $(this).attr('data-id'),
        returnUrl: '',
        quantity: $(this).val()
      });
    update();
  });

  function update() {
    var sum = 0.0;
    var quantity;
    $('#myTable > tbody  > tr').each(function() {
      quantity = $(this).find('.quant').val();
      var price = parseFloat($(this).find('.price').attr('data-price').replace(',', '.'));
      var amount = (quantity * price);

      sum += amount;
      $(this).find('.amount').text('' + amount);
    });
    $('.total').val(sum);
  }
});
</script>
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