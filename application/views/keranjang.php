<style>
    .btn {
        border-radius: 20px; 
        padding: 5px 10px;
    }

    .btn-danger {
        background-color: red;
        border: none;
    }

    .btn-warning {
        background-color: #FF9800;
        border: none;
    }

    .btn-success {
        background-color: #65B741;
        border: none;
    }

    .btn:hover {
        transform: scale(1.05);
        transition: transform 0.7s;
    }
</style>

<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name']?></td>
                <td><?php echo $items['qty']?></td>
                <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
            </tr>

        <?php endforeach; ?>

                <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></td>
                </tr>

    </table>

    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>"><div class="btn btn-sm btn-danger" style="background-color: red;">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('welcome') ?>"><div class="btn btn-sm btn-warning" style="background-color: #FF9800;">Lanjutkan Memesan</div></a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>"><div class="btn btn-sm btn-success" style="background-color: #65B741;">Pembayaran</div></a>
    </div>

</div>