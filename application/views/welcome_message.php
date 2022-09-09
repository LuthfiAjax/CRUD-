<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahbarang">Tambah
                Barang</a>
            <a class="btn btn-sm btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#tambahlokasi">Tambah
                Lokasi</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stok Barang</th>
                        <th scope="col">Lokasi Simpan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($gudangs as $gudang) :?>
                    <tr>
                        <td><?= $gudang->nama_brg; ?></td>
                        <td><?= $gudang->stok; ?></td>
                        <td><?= $gudang->lokasi; ?></td>
                        <td>
                            <a onclick="return confirm ('Konfirmasi Hapus, yakin Hapus <?= $gudang->nama_brg;?>.?');"
                                class="btn btn-sm btn-danger"
                                href="<?= base_url('Welcome/Hapus/'.$gudang->id_gudang); ?>">Hapus</a>
                            <a class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                data-bs-target="#edit<?= $gudang->id_gudang; ?>">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>