<?php

$id = $_GET["id"];

$delete = mysqli_query($conn, "DELETE FROM komik WHERE kd_komik = '$id'");

if ($delete) {
    echo "<script>alert('Data berhasil dihapus !'); window.location='?page=komik';</script>";
} else {
    echo "<script>alert('Data gagal dihapus !'); window.location='?page=komik';</script>";
}