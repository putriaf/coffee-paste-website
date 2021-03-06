<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi Restoran</title>
    <link rel="stylesheet" type="text/css" media="all" href="/assets/styles/style_form.css">
</head>
<body>
    <h1>FORM EDIT DATA RESERVASI COFFEE PASTE</h1>
    <div class="container">
        <form action=<?= base_url("/reservasi/update") ?> method="POST">
        <table class="left">
            <tr>
                <th colspan="2"><h2>Data Pemesan</h2></th>
            </tr>
            <tr>
                <th><label for="nama">Nama</label></th>
                <td>: <input type="text" name="nama" id="nama" value="<?= $reservasi->nama; ?>"></td>
            </tr>
            <tr>
                <th><label for="jk">Jenis Kelamin</label></th>
                <td><input type="radio" name="jk" id="jk" value="L">
                    <label for="jk">Laki-laki</label>
                    <input type="radio" name="jk" id="jk" value="P">
                    <label for="jk">Perempuan</label>
                </td>
            </tr>
            <tr>
                <th><label for="alamat">Alamat Lengkap</label></th>
                <td>: <textarea  name="alamat" id="alamat" cols="20" rows="8" value="<?= $reservasi->alamat; ?>"></textarea></td>
            </tr>
            <tr>
                <th><label for="telp">Nomor Telepon</label></th>
                <td>: <input type="text" name="telp" id="telp" value="<?= $reservasi->telp; ?>"></td>
            </tr>
            <tr>
                <th><label for="email">Email</label></th>
                <td>: <input type="email" name="email" id="email" value="<?= $reservasi->email; ?>"></td>
            </tr>
        </table>
        <aside>
            <table>
                <tr>
                    <th colspan="2"><h2>Data Reservasi</h2></th>
                </tr>
                <tr>
                    <th><label for="jam">Pilihan Jam</label></th>
                    <td>: <input type="time" name="jam" id="jam"></td>
                </tr>
                <tr>
                    <th><label for="jml_org">Jumlah Orang</label></th>
                    <td>: <input type="number" name="jml_org" id="jml_org" value="<?= $reservasi->jml_org; ?>"></td>
                </tr>
                <tr>
                    <th><label for="kode_resto">Pilihan Lokasi</label></th>
                    <td>: <select name="kode_resto" id="kode_resto">
                        <option value="-">Pilih Lokasi</option>
                        <option value="B001">Sayang</option>
                        <option value="B002">Hegarmanah</option>
                        <option value="B003">Ciseke</option>
                        <option value="B004">Cikuda</option>
                    </select></td>
                </tr>
                <tr>
                    <th><label for="tgl_rsv">Tanggal Reservasi</label></th>
                    <td>: <input type="date" name="tgl_rsv" id="tgl_rsv"></td>
                </tr>
                </tr>
                    <input type="hidden" name="id_pemesanan" value="<?= $reservasi->id_pemesanan; ?>">
                <tr>
            </table>
            <button name="submit" id="submit">UPDATE</button>
        </aside>
        </form>
    </div>
</body>
</html>