<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
        <!-- css -->
            <link rel="stylesheet" href="<?= base_url('assets/css/tampilmahasiswa.css') ?>">
        <!-- Fonts Google -->
            <!-- Roboto Regular 400 --> <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <h2 class="judul">Data Mahasiswa</h2>

    <p class="container-btn-tambah">
        <button type="button" class="btn-tambah" onclick="window.location = '../tambah'">
            Tambah Data
        </button>

    </p>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tgl. Lahir</th>
                <th>Alamat</th>
                <th>Telp.</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $nomor = 0;
                foreach($tampildata as $row):
                    $nomor++;
            ?>

            <tr>
                <th> <?php echo $nomor ?> </th>
                <td> <?php echo $row->mhsnim ?> </td>
                <td> <?php echo $row->mhsnama ?> </td>
                <td> <?php echo $row->mhsjenkel ?> </td>
                <td> <?php echo $row->mhstmplahir .', '.$row->mhstgllahir  ?> </td>
                <td> <?php echo $row->mhsalamat ?> </td>
                <td> <?php echo $row->mhstelp ?> </td>
                <td>
                    <a href="<?= site_url('mahasiswa/'.$row->mhsnim) ?>">Edit</a>

                    <?= form_open('/hapus/'.$row->mhsnim) ?>
                        <button type="submit">Hapus</button>
                    <?= form_close(); ?>
                </td>
            </tr>

            <?php 
                endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>