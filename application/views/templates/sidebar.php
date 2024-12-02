<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-start" href="<?php echo base_url('welcome')?>">
                <div class="sidebar-brand-icon" style="margin-right: 8px; font-size: 0.2em;">
                <i class="fas fa-coffee" style="color : #FFFFFF; margin-left: 24px; font-size: 25px;"></i>
                </div>
                <div class="sidebar-brand-text" style="font-size: 12px;">HokiCoffeLuck</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome')?>">
                    <i class="fas fa-fw fa-tachometer-alt" style="color : #FFFFFF;"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="color : #FFFFFF;">
                Kategori
            </div>


            <!-- Nav Item - Tables 1 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/arabika')?>">
                    <i class="fas fa-coffee" style="color : #FFFFFF;"></i>
                    <span>Arabika</span></a>
            </li>

            <!-- Nav Item - Tables 2 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/robusta')?>">
                    <i class="fas fa-coffee" style="color : #FFFFFF;"></i>
                    <span>Robusta</span></a>
            </li>

            <!-- Nav Item - Tables 3 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/v60')?>">
                    <i class="fas fa-coffee" style="color : #FFFFFF;"></i>
                    <span>V60</span></a>
            </li>

            <!-- Nav Item - Tables 4 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/latte')?>">
                    <i class="fas fa-coffee" style="color : #FFFFFF;"></i>
                    <span>Latte</span></a>
            </li>

            <!-- Nav Item - Tables 5 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/cold_brew')?>">
                    <i class="fas fa-coffee" style="color : #FFFFFF;"></i>
                    <span>Cold Brew</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars" style="color : #FF9800;"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <?php 
                            $keranjang = '<i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>'.$this->cart->total_items();
                            echo anchor('dashboard/detail_keranjang', $keranjang, 'class="nav-link cart-icon" style="border-radius: 10px;padding: 4px 5px; weight: 10px; height: 30px; margin-top: 5px; margin-right:10px; background-color: #FF9800; border: none;color : white;transition: transform 0.3s;"');
                            ?>
                        </li>
                        <?php if($this->session->userdata('username')) {?>
                            <li class="nav-item">
                                <div class="nav-link" style="border-radius: 10px;padding: 4px 5px;weight: 10px;height: 30px; margin-top: 5px; background-color: #FF9800; border: none;color : white;transition: transform 0.3s;">Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                            </li>
                            <li class="nav-item ml-2">
                                <?php echo anchor('auth/logout', 'Logout', 'class="nav-link" style="border-radius: 10px;padding: 4px 5px; weight: 10px; height: 30px; margin-top: 5px; margin-right:10px; background-color: #FF0000; border: none;color : white;transition: transform 0.3s;"') ?>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <?php echo anchor('auth/login', 'Login', 'class="nav-link" style="border-radius: 10px;padding: 4px 5px; weight: 10px; height: 30px; margin-top: 5px; margin-right:10px; background-color: #FF0000; border: none;color : white;transition: transform 0.3s;"') ?>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <script>
                    $(document).ready(function() {
                    
                    $('#sidebarToggle, #sidebarToggleTop').on('click', function() {
                    
                    $('#wrapper').toggleClass('toggled');
                    });
                });

                $(document).ready(function() {
                  $('.nav-link').hover(function() {
                    $(this).css('transform', 'scale(1.1)');
                  }, function() {
                    $(this).css('transform', 'scale(1)');
                  });
                });
                </script>