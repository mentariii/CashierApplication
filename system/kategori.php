<?php
if ($_GET['module'] == 'kategori') {
  echo '<div class="container-fluid py-4">
  <div class="row">
      <div class="col-12">
          <div class="card mb-4">
              <div class="card-header pb-0">
                  <h2>Manajemen Kategori Produk</h2>
              </div>
              <a style="float:right;" target="_BLANK" href="print-kategori.php">Cetak Laporan Kategori</a>
              <div style="display: flex; justify-content: space-between; align-items: center; padding-left: 10px; padding-right: 12px;">
                  <div>
                      <input type="button" class="btn btn-primary" value="Tambah Kategori" onclick="window.location.href=\'media.php?module=tambahkategori\';">
                  </div>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                  <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                          <thead>
                          
                              <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ml-3" style="width: 30px;">No</th>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kategori</th>
                                  <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7" width="80px;">Action</th>
                              </tr>
                          </thead>
                          <tbody>';


    $tampil = mysqli_query($koneksi, "SELECT * FROM kategori_produk ORDER BY id_kategori DESC");
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
        $warna = ($no % 2 == 0) ? "#ffffff" : "#E1E1E1";
        echo "<tr class='data' bgcolor=$warna>
                <td class='data'>$no</td>
                <td class='data'>$r[nama_kategori]</td>
                <td class='data'>
                    <a href='media.php?module=editkategori&id=$r[id_kategori]'>Edit</a> | 
                    <a href='media.php?module=hapuskategori&id=$r[id_kategori]'>Hapus</a>
                </td>
            </tr>";
        $no++;
    }

    echo '</table>
            </div>
        </div>
    </div>';
} elseif ($_GET['module'] == 'tambahkategori') {
    echo "<div class='container-fluid py-4'>
            <div class='row'>
                <div class='col-12'>
                    <div class='card mb-4'>
                        <div class='card-header pb-0'>
                            <h2>Tambah Kategori Produk</h2>
                        </div>
                        <form method='POST' action='media.php?module=aksitambahkategori'>
                            <div class='mb-3'>
                                <label for='nama_kategori' class='form-label'>Nama Kategori</label>
                                <input type='text' class='form-control' name='nama_kategori' required>
                            </div>
                            <div class='mb-3'>
                                <input type='submit' class='btn btn-primary' name='submit' value='Simpan'>
                                <input type='button' class='btn btn-secondary' value='Batal' onclick='self.history.back()'>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>";
} elseif ($_GET['module'] == 'aksitambahkategori') {
    $testing = addslashes($_POST['nama_kategori']);
    mysqli_query($koneksi, "INSERT INTO kategori_produk(nama_kategori) VALUES('$testing')");
    header('location:kategori.html');
}


 elseif ($_GET['module'] == 'editkategori') {
  $id_kategori = $_GET['id'];
  $edit_kategori = mysqli_query($koneksi, "SELECT * FROM kategori_produk WHERE id_kategori='$id_kategori'");
  $data_kategori = mysqli_fetch_array($edit_kategori);

  echo "<div class='container-fluid py-4'>
          <div class='row'>
              <div class='col-12'>
                  <div class='card mb-4'>
                      <div class='card-header pb-0'>
                          <h2>Edit Kategori Produk</h2>
                      </div>
                      <form method='POST' action='media.php?module=aksieditkategori'>
                          <input type='hidden' name='id_kategori' value='$data_kategori[id_kategori]'>
                          <div class='mb-3'>
                              <label for='nama_kategori' class='form-label'>Nama Kategori</label>
                              <input type='text' class='form-control' name='nama_kategori' value='$data_kategori[nama_kategori]' required>
                          </div>
                          <div class='mb-3'>
                              <input type='submit' class='btn btn-primary' name='submit' value='Update'>
                              <input type='button' class='btn btn-secondary' value='Batal' onclick='self.history.back()'>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>";

} elseif ($_GET['module'] == 'aksieditkategori') {
  $id_kategori = $_POST['id_kategori'];
  $nama_kategori = addslashes($_POST['nama_kategori']);

  mysqli_query($koneksi, "UPDATE kategori_produk SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");
  header('location:kategori.html');

} elseif ($_GET['module'] == 'hapuskategori') {
  $id_kategori = $_GET['id'];
  mysqli_query($koneksi, "DELETE FROM kategori_produk WHERE id_kategori='$id_kategori'");
  header('location:kategori.html');
}

?>