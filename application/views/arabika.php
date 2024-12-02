<style>
    .price {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    }

    .card:hover {
        transform: scale(1.05);
    }
    
    .btn:hover {
        transform: scale(1.05);
    }
</style>

<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" class="d-block w-100" alt="...">
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
        <div class="col-12">
            <div class="row">
            <?php foreach ($arabika as $kpi) : ?>
                    <div class="col-md-3" style="margin-bottom: 50px;">
                            <div class="card" style="border-radius: 30px; transition: transform 0.3s; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                <img src="<?php echo base_url().'/uploads/'.$kpi->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                                <h5 class="card-title mb-2" style="height: 3rem; overflow: hidden;"><?php echo $kpi->nama_kopi ?></h5>
                                <p class="card-text d-none d-sm-block"><?php echo $kpi->keterangan ?></p>
                                <div class="mt-3">
                                    <div class="btn-group">
                                    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$kpi->id_kopi,'<div class="btn btn-sm" style="border-radius: 25px; margin-right: 10px; background-color: #FF9800; border: none;color : white; transition: transform 0.3s;">Add to Cart</div>') ?>
                                    <?php echo anchor('dashboard/detail/'.$kpi->id_kopi,'<div class="btn btn-sm btn-success" style="border-radius: 25px; background-color: #65B741; border: none;color : white; transition: transform 0.3s;">Detail</div>') ?>
                                    </div>
                                    <div class="price badge badge-sm badge-pill badge-warning" style="font-size: 1.2rem; background-color: #FF9800; border: none;color : white;">Rp. <?php echo number_format($kpi->harga, 0,',','.') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>