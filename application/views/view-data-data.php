<html>
<head>
    <title>Tampil Data Riwayat Hidup</title>
</head>
<body>
        <center>
        <table>
            <tr>
                <th colspan="3">
                Tampil Data Riwayat hidup
                </th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
             <tr>
                <th>NIM</th>
                <th>:</th>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
             <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                  <?= $nama; ?>
                 </td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <?= $tanggal_lahir; ?>
            </td>
            </tr>
            <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
                <?= $tempat_lahir; ?>
            </td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <?= $alamat; ?>
            </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                <a href="<?= base_url('Daftar'); 
                ?>">Kembali</a>
                </td>
            </tr>
 </table>
</body>
</html>