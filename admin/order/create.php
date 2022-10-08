<?php require_once('../../layouts/admin/header.php') ?>


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
            <form action="">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"> <label class="form-check-label" for="flexSwitchCheckChecked">Pre-order</label></div>
                    </div>
                    <div class="col-md-8 col-12 mb-3">
                        <label for="birthday">Nama Pembeli</label>
                        <input class="form-control" id="birthday" type="text" required>   
                    </div>
                    <div class="col-md-4 col-12 mb-3 d-flex align-items-center pt-4">
                        <div class="form-check pt-3">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                            <label class="form-check-label" for="defaultCheck10">Buatkan Akun</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="birthday">Tanggal Pembelian</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                            <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                        </div>
                    </div>
                    <div class="col-md-12 col-12 mb-3">
                        <label for="birthday">Gitar</label>
                        <select class="form-select select2" id="country" aria-label="Default select example">
                            <option value="1">Gitar 1 - Bass</option>
                            <option value="2">Gitar 2 - Akustik</option>
                            <option value="3">Gitar 3 - Elektrik</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="birthday">Total Pembelian</label>
                        <input class="form-control" id="birthday" type="number" required>   
                    </div>
                    <div class="col-12">
                        <label for="birthday">Catatan</label>
                        <textarea class="form-control editor" placeholder="Catatan"></textarea>
                    </div>
                </div>
                
                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>