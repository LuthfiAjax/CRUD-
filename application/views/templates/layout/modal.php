<!-- Modal  Barang-->
<div class="modal fade" id="tambahbarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="<?= base_url('Welcome'); ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="nama_brg">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="stok">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Lokasi Simpan</label>
                        <select class="form-select" aria-label="Default select example" name="id_rak">
                            <option selected disabled>Lokasi Yang tersedia</option>
                            <?php foreach($lokasi as $lok) :?>
                            <option value="<?= $lok->id; ?>"><?= $lok->lokasi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Modal  Lokasi-->
<div class="modal fade" id="tambahlokasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Lokasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="<?= base_url('Welcome/lokasi'); ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lokasi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="lokasi">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Barang-->
<?php foreach($gudangs as $gudang) :?>
<div class="modal fade" id="edit<?= $gudang->id_gudang; ?>" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="POST" action="<?= base_url('Welcome/edit'); ?>">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="id_gudang" value="<?= $gudang->id_gudang; ?>">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="nama_brg" value="<?= $gudang->nama_brg; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="stok" value="<?= $gudang->stok; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pilih Lokasi Simpan</label>
                        <select class="form-select" aria-label="Default select example" name="id_rak">
                            <option value="<?= $gudang->id_rak; ?>"><?= $gudang->lokasi; ?></option>
                            <?php foreach($lokasi as $lok) :?>
                            <option value="<?= $lok->id; ?>"><?= $lok->lokasi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>