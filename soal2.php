<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <div class="container">
        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Soal 2</h5>
                </div>

                <div class="card-body">

                    Tampilkan hanya field "notrans" (data diambil dari tabel transaksi), "nama_member" (data diambil
                    dari tabel member), "kd_komik" (data diambil dari tabel transaksi), "jml_beli" (diambil dari tabel
                    transaksi), serta buat alias dengan nama "subtotal" (harga*jml_beli). Gunakan relasi Inner Join
                    untuk menampilkan hasilnya.

                </div>
            </div>
        </div>


        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Jawaban 1</h5>
                </div>

                <div class="card-body">

                    <table id="tabel" class="table table-bordered table-hover" style="width:100%">
                        <br>
                        <thead class="bg-primary text-white align-middle">
                            <tr>
                                <th class="text-center" width="30px">No</th>
                                <th class="text-center" width="70px">Nomor Transaksi</th>
                                <th class="text-center">Nama Member</th>
                                <th class="text-center">Kode Komik</th>
                                <th class="text-center">Jumlah Beli</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Sub Total</th>
                            </tr>
                        </thead>

                        <?php

                        $result = mysqli_query($conn, "SELECT *, transaksi.jml_beli*komik.harga AS 'subtotal' FROM transaksi INNER JOIN member ON transaksi.id_member=member.id_member INNER JOIN komik ON transaksi.kd_komik=komik.kd_komik ");

                        $nomor = 1;
                        foreach ($result as $val) {
                            ?>

                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['notrans'] ?>
                            </td>
                            <td>
                                <?= $val['nama_member'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['kd_komik'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['jml_beli'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['harga'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['subtotal'] ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>




        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Jawaban 2</h5>
                </div>

                <div class="card-body">

                    <table id="tabel2" class="table table-bordered table-hover" style="width:100%">
                        <br>
                        <thead class="bg-primary text-white align-middle">
                            <tr>
                                <th class="text-center" width="30px">No</th>
                                <th class="text-center" width="70px">Nomor Transaksi</th>
                                <th class="text-center">Nama Member</th>
                                <th class="text-center">Kode Komik</th>
                                <th class="text-center">Jumlah Beli</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Sub Total</th>
                            </tr>
                        </thead>

                        <?php

                        $result = mysqli_query($conn, "SELECT A.notrans, A.id_member, A.kd_komik, A.jml_beli, B.id_member, B.nama_member, C.kd_komik, C.judul, C.harga FROM transaksi AS A INNER JOIN member AS B INNER JOIN komik AS C ON A.id_member=B.id_member AND A.kd_komik=C.kd_komik");

                        $nomor = 1;
                        foreach ($result as $val) {
                            ?>

                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['notrans'] ?>
                            </td>
                            <td>
                                <?= $val['nama_member'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['kd_komik'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['jml_beli'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['harga'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['jml_beli'] * $val['harga'] ?>
                            </td>
                        </tr>

                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>





    </div>
</body>

</html>