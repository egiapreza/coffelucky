<style>
    .btn {
        border-radius: 20px; 
        padding: 5px 10px;
    }

    .btn-primary {
        background-color: #FF9800; 
        border: none;
    }

    .btn-primary:hover {
        background-color: #FF9800;
        border: none;
        transition: transform 0.7s; 
        transform: scale(1.05); 
    }

    .text-center {
        text-align: center;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5 class='text-center'>Total Pesanan Anda: ".number_format($grand_total,0,',','.')."</h5>";
                }
                else {
                    echo "<h5 class='text-center'>Keranjang Pesanan Anda Masih Kosong</h5>";
                }
                ?>
            </div><br><br>
            <h3>Input Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
            
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Pilih Bank</label>
                <select>
                    <option>BCA</option>
                    <option>BRI</option>
                    <option>Mandiri</option>
                    <option>BNI</option>
                    <option>BSI</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mb-3" style="background-color: #FF9800;">Pesan</button>

            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>