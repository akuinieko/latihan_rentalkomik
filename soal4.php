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
                    <h5 class="float-start mt-2 fw-bold">Soal 4</h5>
                </div>

                <div class="card-body">

                    Buat alias untuk field "judul" dengan nama "Komik Tersedia". Tampilkan daftar komik hanya field
                    "pengarang", "penerbit", dan alias "Komik Tersedia".

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
                                <th class="text-center">Pengarang</th>
                                <th class="text-center">Penerbit</th>
                                <th class="text-center">Komik Tersedia</th>

                            </tr>
                        </thead>

                        <?php

                        $result = mysqli_query($conn, "SELECT *, judul AS 'Komik Tersedia' FROM komik ");

                        $nomor = 1;
                        foreach ($result as $val) {
                            ?>
                        <tr>
                            <td class="text-center">
                                <?= $nomor++; ?>
                            </td>
                            <td>
                                <?= $val['pengarang'] ?>
                            </td>
                            <td>
                                <?= $val['penerbit'] ?>
                            </td>
                            <td class="text-center">
                                <?= $val['Komik Tersedia'] ?>
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