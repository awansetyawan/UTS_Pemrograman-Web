<?php require_once('../../layouts/admin/header.php') ?>

<?php 
    $users = query("SELECT * FROM pengguna WHERE role = 2");
    $guitars = all("gitar");
?>

<?php
  if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    $latest_inventory = query("SELECT total FROM inventaris WHERE id_gitar={$_POST['id_gitar']} ORDER BY id DESC");
    $total = $latest_inventory[0]['total'] - $_POST['jumlah'] < 0 ? 0 : $latest_inventory[0]['total'] - $_POST['jumlah'];
    store("pembelian");

    store("inventaris", [
        "id_gitar" => $_POST['id_gitar'],
        "stock_in" => 0,
        "stock_out" => $_POST['jumlah'],
        "total" => $total,
        "tanggal" => $_POST['tanggal'],
    ]);
    flash("Berhasil menambah pembelian!", "success");
    header("Location: ./index.php");
  }
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Pembelian</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                <div class="col-md-12 col-12 mb-3">
                        <label for="birthday">Pengguna</label>
                        <select class="form-select select2" id="id_pengguna" name="id_pengguna" aria-label="Default select example">
                            <?php foreach($users as $user): ?>
                                <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="tanggal">Tanggal Pembelian</label>
                        <input class="form-control" id="tanggal" type="date" required name="tanggal">
                    </div>
                    <div class="col-md-12 col-12 mb-3">
                        <label for="birthday">Gitar</label>
                        <select class="form-select select2" id="id_gitar" name="id_gitar" aria-label="Default select example">
                            <?php foreach($guitars as $guitar): ?>
                                <?php 
                                    $latest_guitar_invent = query("SELECT total FROM inventaris WHERE id_gitar={$guitar['id']} ORDER BY id DESC");
                                    $guitar_total = empty($latest_guitar_invent) ? 0 : $latest_guitar_invent[0]['total'];
                                ?>
                                <?php if($guitar_total > 0): ?>
                                    <option value="<?= $guitar['id'] ?>"><?= $guitar['nama'] ?> - <?= $guitar['tipe'] ?> (Rp. <?= number_format($guitar['harga']) ?>) (Stock: <?= $guitar_total ?>)</option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="jumlah">Jumlah Gitar</label>
                        <input class="form-control" id="jumlah" name="jumlah" type="number" required>   
                    </div>
                    <div class="col-12 mb-3">
                        <label for="total">Total Pembelian</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp. </span>
                            <input class="form-control" id="total" type="number" required name="total">                                               
                        </div>
                    </div>
                </div>
                
                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>