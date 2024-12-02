<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kopi"><i class="fas fa-plus fa-sm"></i>Tambah Kopi</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA KOPI</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        $no=1;
        foreach($kopi as $kpi) :?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $kpi->nama_kopi?></td>
            <td><?php echo $kpi->keterangan?></td>
            <td><?php echo $kpi->kategori?></td>
            <td><?php echo $kpi->harga?></td>
            <td><?php echo $kpi->stok?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><?php echo anchor ('admin/data_kopi/edit/' .$kpi->id_kopi, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor ('admin/data_kopi/hapus/' .$kpi->id_kopi, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_kopi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT PRODUK</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_kopi/tambah_aksi';?>" method="post" enctype="multipart/form-data">
            
        <div class="form-group">
            <label>Nama Kopi</label>
            <input type="text" name="nama_kopi" class="form-control">
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control">
        </div>

        <div class="form-group">
            <label>Gambar</label><br>
            <input type="file" name="gambar" class="form-control">
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>