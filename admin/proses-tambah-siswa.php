<?php
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];
$id_spp = $_POST['id_spp'];


include '../koneksi.php';
$sql = "INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_tlp,id_spp) VALUES('$nisn','$nis','$nama','$id_kelas','$alamat','$no_tlp','$id_spp')";
$query = mysqli_query($koneksi, $sql);
if($query){
    header("Location:?url=siswa");
}else{
    echo "<script>alert('Maaf Data Tidak tersimpan'); window.location,assign('?url=siswa');</script>";
}
?>