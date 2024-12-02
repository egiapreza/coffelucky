<style>
    .card-body {
    margin-top: 10px;
    }

    .h4 {
        font-weight: bold;
    }

    .btn-custom {
        background-color: #FF9800;
        color: white;
        border: none;
        transition: transform 0.3s;
    }

    .btn-custom:hover {
        background-color: #FF9800;
        color: white;
        transform: scale(1.1);
    }

    .small {
        color: #FF9800;
        border: none;
        text-decoration: none;
    }

    .small:hover {
        color: #E36414;
        border: none;
        text-decoration: none;
    }

    .input-group-text.toggle-password {
        background-color: transparent;
        padding: 0;
        border-radius: 20px;
    }

    .input-group-text.toggle-password i {
        background-color: #ffffff;
        padding: 6px;
    }
</style>


<body class="bg" style="background-color: #FF9800;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center d-flex justify-content-center align-items-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">FORM LOGIN</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan')?>
                                    <form method="post" action="<?php echo base_url('auth/login')?>" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Masukan Username" name="username">
                                            <?php echo form_error('username', '<div class="text-danger small ml-2">','<div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password" name="password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text toggle-password" onclick="togglePasswordVisibility()"><i class="fas fa-eye"></i></span>
                                                </div>
                                            </div>
                                            <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-custom btn-user btn-block">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index'); ?>">Belum Punya Akun? Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("exampleInputPassword");
        var passwordToggle = document.getElementsByClassName("toggle-password")[0];

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            passwordToggle.innerHTML = '<i class="fas fa-eye"></i>';
        }
    }
    </script>

</body>
</html>