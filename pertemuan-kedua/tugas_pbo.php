<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tugas PBO</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Seluruh Data Pegawai</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, 'SELECT * FROM user');
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai Berjenis Kelamin Laki-laki</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, 'SELECT * FROM user WHERE jenis_kelamin = "L" ');
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai Berstatus Menikah</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, 'SELECT * FROM user WHERE status = "M" ');
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai Berstatus Belum Menikah</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, 'SELECT * FROM user WHERE status = "B" ');
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai yang Usianya diantara 20-30</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM user  WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) BETWEEN 20 AND 30");
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai yang Usianya diantara 31-45</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM user  WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) BETWEEN 31 AND 45");
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai yang Masa Kerjanya diantara 1-5</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS umur FROM user  WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 1 AND 5");
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai yang Masa Kerjanya diantara 6-10</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS umur FROM user  WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 6 AND 10");
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2 class= "bg-success text-white mt-3 text-center">Menampilkan Data Pegawai yang Masa Kerjanya diantara 11-25</h2>
          <table class="table">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
                <th scope="col">Mulai Kerja</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($kon, "SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS umur FROM user  WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) BETWEEN 11 AND 25");
                    $no = 1;
                    while($pegawai = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $pegawai['nip'] ?></td>
                    <td><?= $pegawai['nama'] ?></td>
                    <td><?= $pegawai['jenis_kelamin'] ?></td>
                    <td><?= $pegawai['tgl_lahir'] ?></td>
                    <td><?= $pegawai['status'] ?></td>
                    <td><?= $pegawai['mulai_kerja'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
