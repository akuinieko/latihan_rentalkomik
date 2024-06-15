<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
</head>

<body>

    <div class="container">
        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Daftar Transaksi</h5>
                    <div class="float-end mt-2">
                        <a title="Tambah data" href="?page=transaksiAdd" class="btn btn-sm btn-success"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tambah Data"> Tambah
                            Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <table id="tabel" class="table table-bordered table-hover" style="width:100%">
                        <br>
                        <thead class="bg-primary text-white align-middle">
                            <tr>
                                <th class="text-center" width="30px">No</th>
                                <th class="text-center" width="70px">Nomor Transaksi</th>
                                <th class="text-center">ID Member</th>
                                <th class="text-center">Kode Komik</th>
                                <th class="text-center">Tanggal Beli</th>
                                <th class="text-center">Jumlah Beli</th>
                                <th class="text-center" width="130px">Aksi</th>
                            </tr>
                        </thead>

                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY notrans DESC");
                        $nomor = 1;
                        foreach ($result as $val) {
                        ?>

                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['notrans']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['id_member']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['kd_komik']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['tgl_beli']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['jml_beli']; ?>
                            </td>

                            <td class="text-center">

                                <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Info"
                                    href="?page=transaksiDetail&id=<?= $val['notrans']; ?>"
                                    class="btn btn-sm btn-info">Detail</a>
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