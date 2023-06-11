<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data registrasi</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<!--Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<body>
    <div class="warp">
        <div class="container">

            <h1>Kepastian</h1>
            <table border="5">
                <tr>
                    <td>Nama</td>
                    <td><?php echo $_POST ['name']; ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><?php echo $_POST ['tgl']; ?>
                        <?php echo $_POST ['bln']; ?>
                        <?php echo $_POST ['thn']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php echo $_POST ['alamat']; ?></td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td><?php echo $_POST ['kota']; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $_POST ['status']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $_POST ['gender']; ?></td>
                </tr>
                <tr>
                    <td>Hobby</td>
                    <td><?php echo $_POST ['hobby']; ?></td>
            </table>
            <font color="#FFFFFF" <br></font>
            <h1>
                <marquee width="27%">Sebaiknya Anda Jangan Gegabah !</marquee>
            </h1>
            <div class="conta">
                <a class="btn btn-primary btn-lg" href="input.php" target="" role="button">Kembali</a>
                <a class="btn btn-primary btn-lg" href="operator.php" target="_blank" role="button">Operator
                    PHP</a>
            </div>
        </div>
    </div>
</body>

</html>