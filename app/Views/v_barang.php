<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 users List Example - Tutsmake.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>

<div class="container mt-5">
    <?php if(isset($_SESSION['msg'])): ?>
        <div class="alert alert-success"><?php echo $_SESSION['msg']; ?></div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col">
            <div class="mb-3">
                <a href="/barang/create" class="btn btn-primary">Tambah Barang</a>
            </div>
            <table id="barang" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>KODE</th>
                    <th>NAMA BARANG</th>
                    <th>HARGA</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                <?php if($barang): ?>
                    <?php foreach($barang as $bara): ?>
                        <tr>
                            <td><?php echo $bara['kode']; ?></td>
                            <td><?php echo $bara['nama_barang']; ?></td>
                            <td><?php echo $bara['harga']; ?></td>
                            <td>
                                <a href="/barang/view/<?php echo $bara['kode']; ?>" class="btn btn-info">View</a>
                                <a href="/barang/delete/<?php echo $bara['kode']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script>
    $(document).ready( function () {
        $('#barang').DataTable({
            "order": [[0, 'asc']] // Mengatur pengurutan berdasarkan kolom pertama (Nomor)
        });
    } );
</script>
</body>
</html>
