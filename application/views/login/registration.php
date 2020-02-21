<!-- ########## container halaman ########## -->
<div class="container">
    <div class="card o-hidden border-0 shadow-lg col-sm-10 col-md-8 col-lg-6 col-xl-5 my-5 mx-auto">
        <div class="card-body p-0">
            <!-- ########## card ########## -->
            <div class="col-lg px-4">
                <div class="text-center">
                    <h1 class="h4 my-4 text-gray-900">Buat Akun!</h1>
                </div>
                <form class="user" action="<?= base_url('login/registration'); ?>" method="post">
                    <div class="form-group">
                        <!-- value untuk name yg diisikan tidak hilang -->
                        <input type="text" id="name" name="name" class="form-control form-control-user" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                        <!-- menampilkan alert bila nama belum terisi -->
                        <!-- tag dimasukkan dalam parameter -->
                        <?= form_error('name', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <!-- value untuk email yg diisikan tidak hilang -->
                        <input type="text" id="email" name="email" class="form-control form-control-user" placeholder="Email" value="<?= set_value('email') ?>">
                        <!-- menampilkan alert bila email belum terisi -->
                        <?= form_error('email', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                    </div>
                    <!-- bagian password -->
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" id="password1" name="password1" class="form-control form-control-user" placeholder="Password">
                            <!-- menampilkan alert bila password tidak sama -->
                            <?= form_error('password1', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                        </div>
                        <div class="col-sm-6">
                            <input type="password" id="password2" name="password2" class="form-control form-control-user" placeholder="Ulang Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Registrasi Akun
                    </button>
                    <hr>
                    <a href="#" class="btn btn-google btn-user btn-block">
                        <i class="fab fa-fw fa-google"></i> Registrasi pakai Google
                    </a>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?= base_url('login/lupapassword'); ?>">Lupa Password?</a>
                </div>
                <div class="text-center">
                    <a class="small" href="<?= base_url('login'); ?>">Sudah punya Akun? LOGIN aja!</a>
                </div>
                <div class="mb-4 text-center">
                    <a class="small" href="<?= base_url('aula'); ?>"><i class="fas fa-fw fa-chair"></i> Aula</a>
                </div>
            </div>
            <!-- ### akhir card ### -->
        </div>
    </div>
</div>
<!-- ### akhir container halaman ### -->