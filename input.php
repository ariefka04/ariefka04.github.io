<!DOCTYPE html>
<html lang="en">

<head>
    <title>From registrasi</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>


<body>
    <div class="wrap">
        <div class="container">
            <!--Bootstrap CSS-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                crossorigin="anonymous">

            <form method="post" action="hasil.php">
                <h1>Input Dong..</h1>
                <table border="4" rows="5">
                    <!-- name -->
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="name" placeholder="Nama Lengkap" style="width:100%;" </td>
                    </tr>

                    <!-- tanggal lahir -->
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <select name="tgl">
                                <?php 
                        for ($i=1;$i<=31;$i++)
                        {
                            echo "<option value=".$i.">".$i."</option>";
                        } 
                        ?>
                            </select>
                            <select name="bln">
                                <?php 
                        $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        for ($i=1;$i<=12;$i++)
                        {
                            echo "<option value".$bulan[$i].">".$bulan[$i]."</option>";
                        }
                         ?>
                            </select>

                            <select name="thn">
                                <?php 
                    for ($i=1980;$i<=2023;$i++)
                    {
                        echo "<option value=".$i.">".$i."</option>";
                    }
                    ?>
                            </select>
                        </td>
                    </tr>
                    <!-- alamat -->
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" placeholder="Alamat Domisili" style="width:100%;"></textarea></td>
                    </tr>
                    <!-- kota -->
                    <tr>
                        <td>Kota / Kabupaten</td>
                        <td><input type="text" name="kota" placeholder="Asal Kota Domisili" style="width:100%;" </td>
                    </tr>
                    <!-- status -->
                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="status" style="width:100%;">
                                <option>--pilih--</option>
                                <option>Jomblo</option>
                                <option>Mahasiswa</option>
                                <option>Pekerja</option>
                                <option>Pekerja dan Mahasiswa</option>
                            </select>
                        </td>
                    </tr>
                    <!-- jenis kelamin -->
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="gender" value="laki-laki">laki-laki
                            <input type="radio" name="gender" value="perempuan">perempuan
                        </td>
                    </tr>
                    <!-- hoby -->
                    <td>Hobby</td>
                    <td><input type="text" name="hobby" placeholder="Kebiasaan Anda" style="width:100%;" </td>
                </table>
                <div class="conta">
                    <a class="btn btn-primary btn-lg" href="index.html" target="" role="button">Home</a>
                    <button class="btn btn-primary btn-lg" type="reset">Reset</button>
                    <button class="btn btn-primary btn-lg" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>