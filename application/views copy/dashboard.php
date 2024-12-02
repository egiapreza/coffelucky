<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="row text-center mt-4">

        <?php foreach ($kopi as $kpi) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$kpi->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title mb-2"><?php echo $kpi->nama_kopi ?></h5>
                <small><?php echo $kpi->keterangan ?></small><br>
                <span class="badge badge-sm badge-pill badge-warning mb-3">Rp. <?php echo number_format($kpi->harga, 0,',','.') ?></span><br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$kpi
                    ->id_kopi,'<div class="btn btn-sm 
                    btn-primary">Add to Cart</div>') ?>
                <a href="#" class="btn btn-sm btn-success">Detail</a>    
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>