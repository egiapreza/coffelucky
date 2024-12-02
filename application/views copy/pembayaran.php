<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h5>Total Belanja Anda: ".number_format($grand_total,0,',','.');
                }  ?>
            </div><br><br>
            <h3>Input Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?> dashboard/proses_pesanan">
            
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Pilih Bank</label>
                <select>
                    <option>BCA - XXXXXXXX</option>
                    <option>BRI - XXXXXXXX</option>
                    <option>Mandiri - XXXXXXXX</option>
                    <option>BNI - XXXXXXXX</option>
                    <option>BSI - XXXXXXXX</option>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>