<?php require_once('../../layouts/admin/header.php') ?>

<?php
$orders = query("SELECT
        pembelian.*,
        pengguna.username,
        gitar.nama as nama_gitar
    FROM pembelian
    JOIN pengguna ON pembelian.id_pengguna = pengguna.id
    JOIN gitar ON pembelian.id_gitar = gitar.id
    ")
?>
<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Pembelian</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Tanggal</th>
                        <th>Pengguna</th>
                        <th>Gitar</th>
                        <th>Jumlah</th>
                        <th>Total Pembelian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $order['tanggal'] ?></td>
                            <td><?= $order['username'] ?></td>
                            <td><?= $order['nama_gitar'] ?></td>
                            <td><?= $order['jumlah'] ?></td>
                            <td>Rp. <?= number_format($order['total']) ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>