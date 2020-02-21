<!-- ########## container halaman ########## -->
<div class="container">
    <div class="card o-hidden border-0 shadow-lg col-sm-10 col-md-8 col-lg-6 col-xl-5 my-5 mx-auto">
        <div class="card-body p-0">
            <!-- ########## card ########## -->
            <div class="col-lg px-4">
                <div class="text-center">
                    <h1 class="h4 my-4 text-gray-900 mb-4">Lupa Password ?</h1>
                </div>
                <!-- menampilkan alert berhasil mengkirimkan email untuk reset password -->
                <?= $this->session->flashdata('message') ?>

                <form class="user" action="<?= base_url('login/lupapassword') ?>" method="post">
                    <div class="form-group">
                        <!-- value email yg diisikan tidak hilang -->
                        <input type="text" id="email" name="email" class="form-control form-control-user" placeholder="Masukan Email..." value="<?= set_value('email'); ?>">
                        <!-- menampilkan alert bila email tidak terdaftar -->
                        <?= form_error('email', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Reset Password
                    </button>
                </form>
                <hr>
                <div class="mb-4 text-center">
                    <a class="small" href="<?= base_url('login'); ?>">Kembali ke Login!</a>
                </div>
            </div>
            <!-- ### akhir card ### -->
        </div>
    </div>
</div>
<!-- ### akhir container halaman ### -->