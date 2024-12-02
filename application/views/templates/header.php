<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HokiCoffeLuck</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>
    <!-- Tambahkan Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar a {
        color: #FFFFFF;
        }
        
        .navbar li.nav{
            background-color: #FF9800;
            border-radius: 10px; 
            padding: 5px 10px; 
            display: inline-block;
        }

        .nav-link:hover {
          transform: scale(1.1);
          transition: transform 0.3s;
        }

        @media (max-width: 767.98px) {
            .nav-item {
                display: flex;
                align-items: center;
            }
        
            .nav-link {
                padding: 0.3rem 0.6rem;
            }
        
            .nav-link i {
                margin-right: 0.25rem;
            }
        
            .navbar-nav {
                flex-direction: column;
                align-items: flex-start;
            }
        
            .navbar-nav .nav-item {
                margin-bottom: 0.1rem;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-bottom: 0;
            }
        }


        .navbar-nav.navbar-right li a {
        border-radius: 5px;
        padding: 5px 10px;
        color: #FFFFFF;
        }

        .navbar-nav.navbar-right li a:hover {
        text-decoration: none;
        border-bottom: none;
        }

        .sidebar {
        background-color: #FF9800;
        color: #FFFFFF;
        }

        .sidebar-brand-text,
        .sidebar .nav-link span {
            color: #FFFFFF;
        }

        .sidebar-divider {
            border-color: #FF9800;
        }

        .navbar-nav.sidebar li.nav-item a.nav-link {
            transition: transform 0.3s ease;
            transform-origin: center;
        }

        .navbar-nav.sidebar li.nav-item a.nav-link:hover {
            transform: scale(1.1);
        }

        

        .sidebar-brand {
            transition: transform 0.3s ease;
        }

        .sidebar-brand:hover {
            transform: scale(1.1);
        }

        .sidebar .nav-link i {
            transition: transform 0.3s ease;
            transform-origin: center;
        }

        .sidebar .nav-link i:hover {
            transform: scale(1.1);
        }

        #sidebarToggle {
            transition: transform 0.3s ease;
        }

        #sidebarToggle:hover {
            transform: scale(1.4);
        }

        #sidebarToggleTop {
            transition: transform 0.3s ease;
        }

        #sidebarToggleTop:hover {
            transform: scale(1.4);
        }
        
        #wrapper {
            transition: all 1s ease;
        }

        #wrapper.toggled {
            margin-left: -5px;
        }
    </style>
</head>