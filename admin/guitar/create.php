<?php require_once('../../layouts/admin/header.php') ?>


<?php
  if(isset($_POST['submit'])) {
    unset($_POST['submit']);

    store("gitar");
    flash("Berhasil menambah gitar!", "success");
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
          <label for="nama">Nama</label>
          <input class="form-control" name="nama" id="nama" type="text" required>
        </div>
        <div class="mb-3">
          <label for="gambar">Link Gambar</label>
          <input class="form-control" name="gambar" id="gambar" type="text" required>
        </div>
        <div class="mb-3">
          <label for="tipe">Tipe</label>
          <input class="form-control" name="tipe" id="tipe" type="text" required>
        </div>
        <div class="mb-3">
          <label for="harga">Harga</label>
          <input class="form-control" name="harga" id="harga" type="number" required>
        </div>
        <div class="mb-3">
          <label for="deskripsi">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>