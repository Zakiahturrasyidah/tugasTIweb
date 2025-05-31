<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <h1>Form Edit Mahasiswa</h1>
        <?php 
          include 'koneksi.php';
          $id = $_GET['id'];
          $mahasiswa = $koneksi->query("SELECT * FROM tabel_mahasiswa WHERE id= '$id'");
          $row = $mahasiswa->fetch_assoc();
        ?>
  <form action="proses-mahasiswa.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input value="<?=$row['nim'] ?>" type="number" class="form-control" id="nim" name="nim">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">NAMA</label>
    <input value="<?=$row['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">EMAIL</label>
    <input value="<?=$row['email'] ?>" type="email" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">ALAMAT</label>
    <textarea class="form-control" id="alamat" name="alamat" row="3"><?=$row['alamat'] ?></textarea>
  </div>

  <input type="submit" class="btn btn-danger" name="update" value="Simpan"></button>
  <a href="data-mahasiswa.php" class="btn btn-success">Kembali</a>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>