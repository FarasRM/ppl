<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Barang</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Kode</th>
                    <td><?php echo $barang['kode']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Nama Barang</th>
                    <td><?php echo $barang['nama_barang']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Harga</th>
                    <td><?php echo $barang['harga']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
