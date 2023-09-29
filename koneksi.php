<?php
$koneksi = mysqli_connect('localhost','root','','dp_spp_ukk');

if(!$koneksi){
    echo "Koneksi Anda Gagal";
}