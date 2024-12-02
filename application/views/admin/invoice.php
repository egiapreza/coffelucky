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
        background-color: #65B741;
        border: none;
    }

    .btn-danger:hover {
        background-color: #65B741;
        border: none;
        transform: scale(1.1);
        transition: transform 0.6s;
    }

</style>

<div class="container-fluid">
    <h4>Invoice Pemesanan Kopi</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Id User</th>
            <th>Nama Pemesanan</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <tr>
        
        <?php foreach ($invoice as $inv): ?>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->id_user ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary" style="background-color: #FF9800;">Detail</div>') ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>