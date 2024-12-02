<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/data_kopi')?>">
            <div class="sidebar-brand-icon" style="margin-right: 8px; font-size: 0.2em;">
                <i class="fas fa-coffee" style="color : #FFFFFF; margin-left: 18px; font-size: 25px;"></i>
                </div>
                <div class="sidebar-brand-text" style="font-size: 12px;">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tables 1 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_kopi') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Kopi</span></a>
            </li>

            <!-- Nav Item - Tables 2 -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoice</span></a>
            </li>

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

                        <ul class="navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) {?>
                                <li>
                                    <div class="nav-link" style="border-radius: 10px;padding: 4px 5px;weight: 10px;height: 30px; margin-top: 5px; background-color: #FF9800; border: none;color : white;transition: transform 0.3s;">Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                </li>
                                <li class="ml-2">
                                    <?php echo anchor('auth/logout', 'Logout', 'class="nav-link" style="border-radius: 10px;padding: 4px 5px; weight: 10px; height: 30px; margin-top: 5px; margin-right:10px; background-color: #FF0000; border: none;color : white;transition: transform 0.3s;"')  ?>
                                </li>
                                <?php } else { ?>
                                <li>
                                    <?php echo anchor('aut/login', 'Login', 'class="nav-link" style="border-radius: 10px;padding: 4px 5px; weight: 10px; height: 30px; margin-top: 5px; margin-right:10px; background-color: #FF0000; border: none;color : white;transition: transform 0.3s;"'); ?>
                                </li>

                                <?php } ?>
                            </ul>

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