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
    <div class="card">
        <h5 class="card-header">Detail Kopi</h5>
        <div class="card-body">
            <?php foreach($kopi as $kpi): ?>
                <div class="row">
                    <div class="col-md-4">  
                        <img src="<?php echo base_url().'/uploads/'.$kpi->gambar ?>" class="card-img-top img-thumbnail w-75 align-self-start">
                    </div>
                    <div class="col-md-8">  
                        <table class="table">
                            <tr>
                                <td>Nama Kopi</td>
                                <td><strong><?php echo $kpi->nama_kopi ?></strong></td>
                            </tr>

                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $kpi->keterangan ?></strong></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $kpi->kategori ?></strong></td>
                            </tr>

                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $kpi->stok ?></strong></td>
                            </tr>

                            <tr>
                                <td>Harga</td>
                                <td><strong><div class="btn btn-sm btn-warning">Rp. <?php echo number_format($kpi->harga, 0,',','.') ?></div></strong></td>
                            </tr>

                            <tr>
                                <td>Jumlah</td>
                                <td>
                                    <div class="input-group">
                                        <button class="btn btn-sm btn-danger" onclick="decreaseQuantity()">-</button>
                                        <input type="number" id="quantity" value="1" min="1" style="width: 50px; text-align: center;"/>
                                        <button class="btn btn-sm btn-danger" onclick="increaseQuantity()">+</button>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <?php echo anchor('dashboard/tambah_ke_keranjang/'.$kpi->id_kopi.'/'.$kpi->harga.'/'.$kpi->stok,'<div class="btn btn-sm btn-primary" style="background-color: #FF9800;">Add to Cart</div>', ['data-quantity' => 'quantity']) ?>

                        <?php echo anchor('welcome','<div class="btn btn-sm btn-danger" style="background-color: #65B741;">Kembali</div>') ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    function increaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }

    function decreaseQuantity() {
        var quantityInput = document.getElementById('quantity');
        if (quantityInput.value > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    }
</script>