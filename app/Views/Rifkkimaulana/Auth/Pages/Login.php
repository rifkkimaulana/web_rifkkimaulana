<?= $this->extend('Rifkkimaulana/Auth/Template/Layout'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                <?php
                if (session()->getFlashdata('error')) {
                    echo '<div class="alert alert-danger">' . session()->getFlashdata('error') . '</div>';
                }
                if (session()->getFlashdata('warning')) {
                    echo '<div class="alert alert-warning">' . session()->getFlashdata('warning') . '</div>';
                }
                if (session()->getFlashdata('success')) {
                    echo '<div class="alert alert-success">' . session()->getFlashdata('success') . '</div>';
                }
                ?>
            </div>

            <form class="user" method="post" action="login">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="usernameOrEmail" id="usernameOrEmail" placeholder="Enter Username Or Email Address..." required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="Password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                        <label class="custom-control-label" for="customCheck">Remember
                            Me</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
                <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
            </form>

            <hr>
            <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="register.html">Create an Account!</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>