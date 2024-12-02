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

    .invoice-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }
</style>

<div class="container-fluid">
    <h4>Detail Pesanan</h4>
    <div class="invoice-actions">
        <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div>
    </div>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id</th>
            <th>Nama Kopi</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>

        <tr>
            <td><?php echo $psn->id_kopi ?></td>
            <td><?php echo $psn->nama_kopi ?></td>
            <td><?php echo $psn->jumlah ?></td>
            <td><?php echo number_format($psn->harga, 0,',','.') ?></td>
            <td><?php echo number_format($subtotal, 0,',','.') ?></td>
        </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Jumlah Total</td>
            <td align="right">Rp. <?php echo number_format($total, 0,',','.') ?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>
</div>
