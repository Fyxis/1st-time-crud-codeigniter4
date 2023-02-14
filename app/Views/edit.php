<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
        <p>
            <button type="button" onclick="window.location='<?= base_url() ?>'">
                Kembali
            </button>
        </p>

        <p>
            <?= form_open('/updatedata') ?>
            <table>
                <tr>
                    <td>NIM :</td>
                    <td> 
                        <input type="text" name="nim" maxlength="7" readonly value="<?= $nim ?>"> 
                    </td>
                </tr>
                
                <tr>
                    <td>Nama Lengkap :</td>
                    <td> 
                        <input type="text" name="nama" size="50" value="<?= $nama ?>"> 
                    </td>
                </tr>
                <tr>
                    <td>Jenkel : </td>
                    <td> 
                        <input type="radio" name="jenkel" value="L" <?php if($jenkel=='L')echo'checked'; ?> >Laki laki
                        <input type="radio" name="jenkel" value="P" <?php if($jenkel=='P')echo'checked'; ?> >Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir :</td>
                    <td> 
                        <input type="text" name="tempat" size="30" value="<?= $tempat ?>"> , <input type="date" name="tanggal" value="<?= $tanggal ?>"> 
                    </td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td> 
                        <textarea name="alamat" cols="50" rows="5"><?= $alamat ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Telp :</td>
                    <td> 
                        <input type="text" name="telp" pattern="{0-9}+" value="<?= $telp ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                </tr>
            </table>
            <?= form_close() ?>
        </p>
</body>
</html>