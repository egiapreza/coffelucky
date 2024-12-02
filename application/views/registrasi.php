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
        cursor: pointer;
    }

    .input-group-text.toggle-password i {
        background-color: #ffffff;
        padding: 6px;
    }
</style>

<body class="bg" style="background-color: #FF9800;">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Form Registrasi Akun</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
                                <div class="form-group">
                                    <input type="nama" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Kamu" name="nama">
                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>')?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username Kamu" name="username">
                                    <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>')?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password_1">
                                            <span class="input-group-text toggle-password"
                                                onclick="togglePasswordVisibility('exampleInputPassword')"><i
                                                    class="fas fa-eye"></i></span>
                                        </div>
                                        <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>')?>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Ulangi Password"
                                                name="password_2">
                                            <span class="input-group-text toggle-password"
                                                onclick="togglePasswordVisibility('exampleRepeatPassword')"><i
                                                    class="fas fa-eye"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-custom btn-user btn-block">Daftar</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">Sudah punya akun??Silahkan
                                    Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId) {
            var passwordInput = document.getElementById(inputId);
            var passwordToggle = passwordInput.nextElementSibling;

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