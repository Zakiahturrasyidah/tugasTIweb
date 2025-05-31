
    <h1>Data Mahasiswa</h1>
    <a href="index.php?folder=mahasiswa&page=form-mahasiswa" class="btn btn-success btn-sm">Input Mahasiswa</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
    <tbody>
            <?php
                include 'koneksi.php';
                $mahasiswa = $koneksi->query("SELECT * FROM tabel_mahasiswa ORDER BY nim");
                $nomor =1;
                while($row = $mahasiswa->fetch_assoc()){
            ?>
            
                <th scope="row"><?= $nomor++ ?></th>
                <td><?= $row['nim']?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['alamat']?></td>
                <td class="text-nowrap">
                    <div class="d-flex gap-1">
                        <a href="update-mahasiswa.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="proses-mahasiswa.php" method="post">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input onclick="return confirm('apakah kamu yakin ingin menghapus data ini')" type="submit" name="delete" value="Hapus" class="btn btn-danger btn-sm"> 
                        </form>
                </div>
                </td>
            </tr>
            <?php } ?>
    </tbody>
</table>