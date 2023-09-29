<h5> Halaman data Siswa.</h5>
<a href="?url=tambah-siswa" class="btn btn-primary"> Tambah siswa</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nisn</td>
        <td>Nis</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Alamat</td>
        <td>No Tlp</td>
        <td>Spp</td>
        <td>Edit</td>
        <td>Hapus</td>
</tr>
<?php
include'../koneksi.php';
$no = 1;
$sql = "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER By nama ASC";
$query = mysqli_query($koneksi,$sql);
foreach($query as $data){ ?>
<tr>
<td><?= $no++; ?></td>
<td><?= $data['nisn'] ?></td>
<td><?= $data['nis'] ?></td>
<td><?= $data['nama'] ?></td>
<td><?= $data['nama_kelas'] ?></td>
<td><?= $data['alamat'] ?></td>
<td><?= $data['no_tlp'] ?></td>
<td><?= $data['tahun'] ?> - <?= number_format($data['nominal'],2,',','.'); ?></td>
<td>
    <a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>"class='btn btn-warning'>EDIT</a>
</td>
<td>
<a onclick="return confirm('Apakah anda yakin ingin menghapus data')">
 <a href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>"class='btn btn-danger'>HAPUS</a>
</td>
</tr>
<?php } ?>
</table>