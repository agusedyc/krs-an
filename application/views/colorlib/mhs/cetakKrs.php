<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php $title; $no=0; ?>
    </title>
</head>

<body>
    <div id="page1">
        <div id="watermark">
            <img id="logo" src="assets/general/usm.jpg">
        </div>
        <div id="container">
            <br>
            <table align="center" style="width: 87%; text-align: center; font-size: 19px; ">
                <tr>
                    <td valign="bottom">KARTU RENCANA STUDI</td>
                </tr>
                <tr>
                    <td valign="top">UNIVERSITAS SEMARANG</td>
                </tr>
            </table>
            <hr>
            <p></p>
            <br>
            <br>
            <br>
            <table border="" align="center" cellspacing="1px" style="width: 87%; text-align: center; font-size: 15px">
                <tr>
                    <td style="width:14%; text-align: left;">NIM</td>
                    <td style="width:1%; text-align: left;">:</td>
                    <td style="width:30%; text-align: left;">
                        <?= $nim; ?>
                    </td>
                    <td style="width:14%; text-align: left;">Progdi</td>
                    <td style="width:1%; text-align: left;">:</td>
                    <td style="width:30%; text-align: left;">S1 TEKNIK INFORMATIKA</td>
                </tr>
                <tr>
                    <td style="width:14%; text-align: left;">Nama</td>
                    <td style="width:1%; text-align: left;">:</td>
                    <td style="width:30%; text-align: left;">
                        <?= $nama; ?>
                    </td>
                    <td style="width:14%; text-align: left;">Dosen Wali</td>
                    <td style="width:1%; text-align: left;">:</td>
                    <td style="width:30%; text-align: left;"></td>
                </tr>
            </table>
            <br>
            <br>
            <table align="center" cellspacing="1px" style="width:20%; text-align: center; font-size: 13px; border: 1px solid black; border-collapse: collapse;">
                <tr style="border: 1px solid black; border-collapse: collapse;">
                    <td style="text-align: center;  border: 1px solid black; border-collapse: collapse;">No</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Kode MK</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Nama MK</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Smt.</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">SKS</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Nama Dosen</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Kelas</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Ruangan</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Hari</td>
                    <td style="text-align: center; border: 1px solid black; border-collapse: collapse;">Waktu</td>
                </tr>
                <?php foreach ($rows as $row): $no++?>
                <tr style="border: 1px solid black; border-collapse: collapse;">
                    <td style="text-align: center; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $no; ?>
                    </td>
                    <td style="text-align: left; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['kode_mk']; ?>
                    </td>
                    <td style="text-align: left; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['nama_mk']; ?>
                    </td>
                    <td style="text-align: center; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['semester']; ?>
                    </td>
                    <td style="text-align: center; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['sks']; ?>
                    </td>
                    <td style="text-align: left; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['nama_dosen']; ?>
                    </td>
                    <td style="text-align: center; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['kelas']; ?>
                    </td>
                    <td style="text-align: center; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['ruangan']; ?>
                    </td>
                    <td style="text-align: left; vertical-align:middle; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['hari']; ?>
                    </td>
                    <td  style="text-align: left; vertical-align:middle; height: 30px; border: 1px solid black; border-collapse: collapse;">
                        <?php echo $row['waktu']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                	<td colspan="10" style="height: 50px;"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="4" style="height: 50px;">Semarang,<?php echo date("d-m-Y"); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="width:35%; height: 90px; text-align: center;" >
                        Mahasiswa</td>
                    <td colspan="5" style="width:35%; height: 90px; text-align: center; ">Dosen Wali</td>
                </tr>
                <tr>
                    <td colspan="5" style="width:35%; height: 70px; text-align: center;" valign="bottom">
                        <?= $nama; ?> </td>
                    <td colspan="5" style="width:35%; height: 70px; text-align: center; " valign="bottom">( ___________________________ )</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
            </table>
        </div>
    </div>
</body>
<style type="text/css">
table {
    font-size: 17px;
}

#container {
    /*width:700px; */
    position: relative;
    display: block;
    z-index: 0 !important;
    margin: 15px auto;
}

#watermark {
    top: 220px;
    left: 220px;
    display: block;
    position: absolute;
    z-index: -1 !important;
    opacity: 0.5;
}


img#logo {
    width: 310px;
    /* image size */
    height: 310px;
}


}
#page2 {
    margin-top: 30px;
}
</style>

</html>
