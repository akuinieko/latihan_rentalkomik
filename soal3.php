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
                    <h5 class="float-start mt-2 fw-bold">Soal 3</h5>
                </div>

                <div class="card-body">
                    Tampilkan daftar komik dengan nama penerbit = "Graha Komik"!
                </div>
            </div>
        </div>

        <div class="row-12 pb-5 mr-3 ml-3">

            <div class="card h-100">
                <div class="card-header">
                    <h5 class="float-start mt-2 fw-bold">Jawaban</h5>
                </div>

                <div class="card-body">

                    <table id="tabel" class="table table-bordered table-hover" style="width:100%">
                        <br>
                        <thead class="bg-primary text-white align-middle">
                            <tr>
                                <th class="text-center" width="30px">No</th>
                                <th class="text-center" width="70px">Kode Komik</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Pengarang</th>
                                <th class="text-center">Penerbit</th>
                                <th class="text-center">Harga</th>
                            </tr>
                        </thead>

                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM komik WHERE penerbit LIKE 'Graha Komik' ORDER BY kd_komik ASC");


                        $nomor = 1;
                        foreach ($result as $val) {
                            ?>

                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['kd_komik']; ?>
                            </td>
                            <td>
                                <?= $val['judul']; ?>
                            </td>
                            <td>
                                <?= $val['pengarang']; ?>
                            </td>
                            <td>
                                <?= $val['penerbit']; ?>
                            </td>
                            <td class="text-center">
                                <?= $val['harga']; ?>
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