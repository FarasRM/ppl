<!-- app/Views/barang/create.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Barang - Tutsmake.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mb-4">Tambah Barang</h2>
            <?php if(isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="/barang/save" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="<?= old('kode') ?>">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= old('nama_barang') ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga') ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
