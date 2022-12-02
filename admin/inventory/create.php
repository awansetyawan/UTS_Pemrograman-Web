<?php require_once('../../layouts/admin/header.php') ?>


<?php 
  $guitars = all("gitar");
?>

<?php
  if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    $latest_inventory = query("SELECT total FROM inventaris WHERE id_gitar={$_POST['id_gitar']} ORDER BY id DESC");
    $total = empty($latest_inventory) ?  $_POST['stock_int'] : $latest_inventory[0]['total'] + $_POST['stock_int'];
    store("inventaris", [
      "id_gitar" => $_POST['id_gitar'],
      "stock_in" => $_POST['stock_in'],
      "stock_out" => 0,
      "total" => $total,
      "tanggal" => $_POST['tanggal'],
    ]);
    flash("Berhasil menambah inventaris!", "success");
    header("Location: ./index.php");
  }
?>
<div id="main" class="min-vh-100 pt-4">
  <div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
      <div class="mb-3 mb-lg-0">
        <h1 class="h4">Tambah Gitar</h1>
      </div>
    </div>
  </div>
  <div class="card border-0 shadow components-section">
    <div class="card-body">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="nama">Gitar</label>
          <select name="id_gitar" id="id_gitar" class="form-control">
            <?php foreach($guitars as $guitar): ?>
              <?php 
                $latest_guitar_invent = query("SELECT total FROM inventaris WHERE id_gitar={$guitar['id']} ORDER BY id DESC");
                $guitar_total = empty($latest_guitar_invent) ? 0 : $latest_guitar_invent[0]['total'];
              ?>
              <option value="<?= $guitar['id'] ?>"><?= $guitar['nama'] ?> (Stok: <?= $guitar_total ?>)</option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="stock_in">Stok Masuk</label>
          <input class="form-control" name="stock_in" id="stock_in" type="number" required>
        </div>
        <div class="mb-3">
          <label for="tanggal">Tanggal</label>
          <input class="form-control" name="tanggal" id="tanggal" type="date" required>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>