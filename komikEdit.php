<?php

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM komik WHERE kd_komik='$id'");
$data = mysqli_fetch_array($query);

$kodeKomik = $judulKomik = $pengarang = $penerbit = $hargaKomik = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $kodeKomik = mysqli_real_escape_string($conn, $_POST["kodeKomik"]);
    $judulKomik = mysqli_real_escape_string($conn, $_POST["judulKomik"]);
    $pengarang = mysqli_real_escape_string($conn, $_POST["pengarang"]);
    $penerbit = mysqli_real_escape_string($conn, $_POST["penerbit"]);
    $hargaKomik = mysqli_real_escape_string($conn, $_POST["hargaKomik"]);


    $id = $_POST['id'];


    $update = mysqli_query($conn, "UPDATE komik SET kd_komik='$kodeKomik', judul=' $judulKomik', pengarang='$pengarang', penerbit='$penerbit', harga='$hargaKomik' WHERE kd_komik='$id'");

    if ($update) {
        echo "<script>window.alert('Data berhasil diupdate!'); window.location='?page=komik';</script>";
    } else {
        echo "<script>window.alert('Gagal update data!'); window.location='?page=komik';</script>";
    }

}


?>


<div class="p-4">

    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="fw-bold text-center">Update Komik</h5>
                </div>
                <div class="card-body">

                    <form method="post" action="">

                        <!-- menampung nilai id yang akan di edit -->
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

                        <div class="row">

                            <div class="container mb-2 mt-2">
                                <label>Kode Komik</label>
                                <input type="text" class="form-control" placeholder="" name="kodeKomik"
                                    value="<?= $data['kd_komik'] ?>">
                            </div>
                            <div class="container mb-3 mt-4">
                                <label>Judul Komik</label>
                                <input type="text" class="form-control" placeholder="" name="judulKomik"
                                    value="<?= $data['judul'] ?>">
                            </div>
                            <div class="container mb-3 mt-4">
                                <label>Pengarang</label>
                                <input type="text" class="form-control" placeholder="" name="pengarang"
                                    value="<?= $data['pengarang'] ?>">
                            </div>
                            <div class="container mb-3 mt-4">
                                <label>Penerbit</label>
                                <input type="text" class="form-control" placeholder="" name="penerbit"
                                    value="<?= $data['penerbit'] ?>">
                            </div>
                            <div class="container mb-3 mt-4">
                                <label>Harga Komik</label>
                                <input type="text" class="form-control" placeholder="" name="hargaKomik"
                                    value="<?= $data['harga'] ?>">
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" name="update"
                                    class="btn btn-success waves-effect waves-light mx-2 mb-3"
                                    style="width: 6em; height:2.4em">Update </button>

                                <a class="btn btn-primary" href="?page=komik" role="button"
                                    style="width: 6em; height:2.4em">Cancel</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>