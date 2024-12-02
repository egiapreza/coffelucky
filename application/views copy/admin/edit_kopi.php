<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA KOPI</h3>

    <?php foreach($kopi as $kpi) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_kopi/update'?>">

            <div class="group">
                <label>Nama Kopi</label>
                <input type="text" name="nama_kopi" class="form-control"
                value="<?php echo $kpi->nama_kopi ?>">
            </div>

            <div class="group">
                <label>Keterangan</label>
                <input type="hidden" name="id_kopi" class="form-control"
                value="<?php echo $kpi->id_kopi ?>">
                <input type="text" name="keterangan" class="form-control"
                value="<?php echo $kpi->keterangan ?>">
            </div>

            <div class="group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control"
                value="<?php echo $kpi->kategori ?>">
            </div>

            <div class="group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control"
                value="<?php echo $kpi->harga ?>">
            </div>

            <div class="group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control"
                value="<?php echo $kpi->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>

        </form>

    <?php endforeach; ?>
</div>