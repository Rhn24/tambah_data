<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url('profile/action_update_data') ?>">
        <table>
            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="id" value="<?= $profile['id'] ?>">
                    <input type="text" name="nama_depan" class="form-control" value="<?= $profile['nama_depan'] ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_belakang" class="form-control" value="<?= $profile['nama_belakang'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $profile['tempat_lahir'] ?>">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $profile['tanggal_lahir'] ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea type="text" name="alamat" class="form-control"><?= $profile['alamat'] ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Jenjang Pendidikan</td>
                <td>:</td>
                <td>
                    <select name="jenjang_pendidikan" id="" class="form-control" value="<?= $profile['jenjang_pendidikan'] ?>">
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK/SMA">SMK/SMA</option>
                    <option value="KULIAH">KULIAH</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td colspan="3" class="text-center">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="submit" class="btn btn-primary">Batal</button>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>