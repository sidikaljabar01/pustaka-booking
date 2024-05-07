<html>
<head>
    <title>Tampil Data Sepatu</title>
</head>
<body>
        <center>
        <table>
            <tr>
                <th colspan="3">
                Tampil Data Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                <hr>
                </td>
            </tr>
             <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $nama_pembeli; ?>
                </td>
            </tr>
             <tr>
                <td>No Hp</td>
                <td>:</td>
                <td>
                  <?= $no_hp; ?>
                 </td>
            </tr>
            <tr>
            <td>Merk</td>
            <td>:</td>
            <td>
                <?= $merk; ?>
               </td>
            </tr>
            <tr>
            <td>Ukuran</td>
            <td>:</td>
            <td>
                <?= $ukuran; ?>
              </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                <a href="<?= base_url('Sepatu'); 
                ?>">Kembali</a>
                </td>
            </tr>
 </table>
</body>
</html>