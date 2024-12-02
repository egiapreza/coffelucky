<style>
  .btn {
        border-radius: 20px;
    }

    .btn-warning {
        background-color: #FF9800;
        border: none;
    }

    .btn-warning:hover {
        background-color: #FF9800;
        border: none;
        transform: scale(1.1);
        transition: transform 0.6s;
    }

    .btn-primary {
        background-color: #FF9800;
        border: none;
    }

    .btn-primary:hover {
        background-color: #FF9800;
        border: none;
        transform: scale(1.1);
        transition: transform 0.6s;
    }

    .btn-danger {
        background-color: red;
        border: none;
    }

    .btn-danger:hover {
        background-color: red;
        border: none;
        transform: scale(1.1);
        transition: transform 0.6s;
    }

</style>

<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kopi" style="background-color: #FF9800;"><i class="fas fa-plus fa-sm"></i> Tambah Kopi</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Kopi</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
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
            <td><?php echo anchor ('admin/data_kopi/edit/' .$kpi->id_kopi, '<div class="btn btn-primary btn-sm" style="background-color: #FF9800;"><i class="fas fa-edit"></i></div>') ?></td>
            <td><?php echo anchor ('admin/data_kopi/hapus/' .$kpi->id_kopi, '<div class="btn btn-danger btn-sm" style="background-color: red;"><i class="fas fa-trash"></i></div>')?></td>
        </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_kopi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT KOPI</h1>
        <?php echo anchor('admin/data_kopi/','<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>') ?>
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
            <select class="form-control" name="kategori">
              <option>Arabika</option>
              <option>Robusta</option>
              <option>V60</option>
              <option>Latte</option>
              <option>Cold Brew</option>
            </select>
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
        <?php echo anchor('admin/data_kopi/','<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>') ?>
        <button type="submit" class="btn btn-primary" style="background-color: #FF9800;">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>