<?php require_once('../../layouts/admin/header.php') ?>
<?php
$inventories = query("SELECT inventaris.*, gitar.nama as nama_gitar FROM inventaris JOIN gitar ON inventaris.id_gitar = gitar.id");
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Inventaris</h1>
            </div>
            <a href="./create.php" class="btn btn-primary">Tambah Data Masuk</a>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Gitar</th>
                        <th>Stock In</th>
                        <th>Stock Out</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($inventories as $inventory) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $inventory['nama_gitar'] ?></td>
                            <td><?= $inventory['stock_in'] ?></td>
                            <td><?= $inventory['stock_out'] ?></td>
                            <td><?= $inventory['tanggal'] ?></td>
                            <td><?= $inventory['total'] ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>