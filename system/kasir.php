<?php
if ($_GET['module'] == 'kasir') {
    $tampil = mysqli_query($koneksi, "SELECT * FROM users ORDER BY username");
    echo '<div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h2>Manajemen User / Kasir</h2>
                        </div>
                        <a style="float:right;" target="_BLANK" href="print-members.php">Cetak laporan Kasir</a>
                        <div style="display: flex; justify-content: space-between; align-items: center; padding-left: 10px; padding-right: 12px;">
                            <div>
                                <a></a>
                            </div>

                            <form action="" method="POST" style="margin-right: 22px; text-align: right;">
                                <div class="input-group" style="width: 200px; margin-left: auto;">
                                    <span class="input-group-text text-body" style="height: 40px;"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Cari Kasir" name="kata" style="height: 40px; ">
                                    <input type="submit" class="btn btn-primary" name="cari" value="Cari">
                                </div>
                            </form>
                        </div>


                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Telephone</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>';

    $no = 1;

    while ($r = mysqli_fetch_array($tampil)) {
        if (($no % 2) == 0) {
            $warna = "#ffffff";
        } else {
            $warna = "#E1E1E1";
        }
        if ($r['level'] == 'admin') {
            echo '<tr class="">';
        } else {
            echo '<tr class="">';
        }
        echo "<td class='text-center'>$no</td>
            <td class=''>$r[username]</td>
            <td class=''>$r[nama_lengkap]</td>
            <td class=''>$r[email]</td>
            <td class=''>$r[no_telp]</td>
          
        </tr>";
        $no++;
    }

    echo '</table></div></div></div></div>';
  } elseif ($_GET['module'] == 'tambahkasir') {
    echo '
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <h3>Tambahkan Kasir Baru</h3>
                    <div class="h_line"></div>
                    <form method="POST" action="media.php?module=aksitambahkasir">
                        <table class="table">
                            <tr>
                                <th style="background-color: rgba(94, 114, 227, 0.5);" width="30px"></th>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"><label for="username">Username</label></th>
                                <td style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" class="form-control" name="username" id="username"></td>
                            </tr>
                            <tr>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"></th>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"><label for="nama_lengkap">Nama Lengkap</label></th>
                                <td style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"></td>
                            </tr>
                            <tr>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"></th>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"><label for="email">E-mail</label></th>
                                <td style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" class="form-control" name="email" id="email"></td>
                            </tr>
                            <tr>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"></th>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"><label for="no_telp">No.Telp/HP</label></th>
                                <td style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" class="form-control" name="no_telp" id="no_telp"></td>
                            </tr>
                            <tr>
                                <th style="background-color: rgba(94, 114, 227, 0.5);"></th>
                                <td colspan="2">
                                    <input class="btn btn-primary mt-3" type="submit" value="Submit">
                                    <input class="btn btn-secondary mt-3" type="button" value="Batal" onclick="self.history.back()">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>';

       if ($_GET['module'] == 'tambah') {
echo '<form action="" method="POST"><tr class="">
      <th class="" style="background-color: rgba(94, 114, 227, 0.5);" width="30px"></th>
<th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="a" placeholder="Input Username"></th>
      <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="b" placeholder="Input Nama Lengkap"></th>
      <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="c" placeholder="Input Email"></th>
      <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="d" placeholder="Input No Telp"></th>
      <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input class="btn btn-primary mt-3" type="submit" name="e" value="simpan"></th>
    </tr></form>';
      }
      
      if ($_GET['module'] == 'update') {
          $m = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users where username='$_GET[id]'"));
          echo '<form action="" method="POST"><tr class="data">
                  <th class="" style="background-color: rgba(94, 114, 227, 0.5);" width="30px"></th>
                  <input type="hidden" value="' . $m['id_costumer'] . '" name="id">
                  <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="a" value="' . $m['username'] . '" placeholder="Input Username"></th>
                  <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="b" value="' . $m['nama_lengkap'] . '" placeholder="Input Nama lengkap"></th>
                  <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="c" value="' . $m['email'] . '" placeholder="Input Email"></th>
                  <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input type="text" name="d" value="' . $m['no_telp'] . '" placeholder="Input No Telp"></th>
                  <th class="" style="background-color: rgba(94, 114, 227, 0.5);"><input class="btn btn-primary mt-3" type="submit" name="da" value="Update"></th>
                </tr></form>';
      }
      
      if (isset($_POST['e'])) {
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
?>