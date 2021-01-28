<?= $this->extend('front/layout/home'); ?>
<?= $this->section('content'); ?>
<!-- Start Main Content -->
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2>My Account</h2>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-12 mb-2">
            <?php if (session()->getflashdata('pesan')) : ?>
                <div class="alert alert-danger" role="alert"><?= session()->getflashdata('pesan'); ?></div>
            <?php endif; ?>
            <form class="loginbox form-horizontal" action="<?= base_url(); ?>/login/auth" method="post">
                <p>Login</p>
                <div class="form-group">
                    <label class="control-label col-md-4" for="inputEmail">Username or email<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="username" value="<?= old('username'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="inputPassword">Password<span class="required">*</span></label>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-control" value="<?= old('password'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Login</button>
                        <!-- <button class="btn btn-primary" type="submit">Login</button> -->
                        <a href="<?= base_url(); ?>/daftar">
                            <p>Belum punya akun? daftar disini</p>
                        </a>
                    </div>
                </div>
            </form>
        </div>


    </div>

</div>

<!-- End Main Content -->
<?= $this->endSection(); ?>