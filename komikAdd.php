<?php
// include "koneksi.php";

$kodeKomik = $judulKomik = $pengarang = $penerbit = $hargaKomik = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kodeKomik = mysqli_real_escape_string($conn, $_POST["kodeKomik"]);
    $judulKomik = mysqli_real_escape_string($conn, $_POST["judulKomik"]);
    $pengarang = mysqli_real_escape_string($conn, $_POST["pengarang"]);
    $penerbit = mysqli_real_escape_string($conn, $_POST["penerbit"]);
    $hargaKomik = mysqli_real_escape_string($conn, $_POST["hargaKomik"]);


    $query = mysqli_query($conn, "INSERT INTO komik (kd_komik, judul, pengarang, penerbit, harga) VALUES ('$kodeKomik', '$judulKomik', '$pengarang', '$penerbit', '$hargaKomik')");

    if ($query) {
        echo " <script>window.alert('Data berhasil ditambah!');window.location = '?page=komik';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!');window.location = '?page=komikAdd';</script>";
    }
}


?>


<div class="p-4">

    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">

                <div class="card-header">
                    <h5 class="m-0">Tambah Data Komik</h5>
                </div>
                <div class="card-body">

                    <form method="post" action="">
                        <div class="container mb-2 mt-2">
                            <label>Kode Komik</label>
                            <input type="text" class="form-control" placeholder="" name="kodeKomik">
                        </div>
                        <div class="container mb-3 mt-4">
                            <label>Judul Komik</label>
                            <input type="text" class="form-control" placeholder="" name="judulKomik">
                        </div>
                        <div class="container mb-3 mt-4">
                            <label>Pengarang</label>
                            <input type="text" class="form-control" placeholder="" name="pengarang">
                        </div>
                        <div class="container mb-3 mt-4">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" placeholder="" name="penerbit">
                        </div>
                        <div class="container mb-3 mt-4">
                            <label>Harga Komik</label>
                            <input type="text" class="form-control" placeholder="" name="hargaKomik">
                        </div>


                        <div class="row justify-content-center">
                            <button type="submit" name="submit" class="btn btn-success waves-effect waves-light mx-0"
                                style="width: 6em; height:2.4em">Submit</button>

                            <input class="btn btn-warning mx-2" type="reset" value="Reset"
                                style="width: 6em; height:2.4em">

                            <a class="btn btn-primary" href="?page=komik" role="button"
                                style="width: 6em; height:2.4em">Cancel</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>