<!-- menampilkan alert editprofile -->
<div class="row">
    <div class="col mt-2 ml-4 mr-1">
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>

<!-- ########## halaman user ########### -->
<div class="row ml-1 mt-n2">
    <div class="col-lg-6">
        <!-- profil -->
        <div class="card-header h3"><i class="fas fa-fw fa-user"></i> <?= $title; ?></div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-3">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['name'] ?></h5>
                            <p class="card-text"><?= $user['email'] ?></p>
                            <p class="card-text"><small class="text-muted">Bergabung : <?= date('d F Y', $user['date_created']); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir profil -->

        <!-- ubah password -->
        <div class="card-header h3"><i class="fas fa-fw fa-key"></i> Ubah Password</div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row col-lg-12 no-gutters d-inline-block">
                    <form action="<?= base_url('user/ubahpassword'); ?>" method="post">
                        <div class="form-group">
                            <label for="password_lama">Password Lama</label>
                            <input type="password" class="form-control" id="password_lama" name="password_lama">
                            <?= form_error('password_lama', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password_baru1">Password Baru</label>
                            <input type="password" class="form-control" id="password_baru1" name="password_baru1">
                            <?= form_error('password_baru1', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="password_baru2">Ulangi Password</label>
                            <input type="password" class="form-control" id="password_baru2" name="password_baru2">
                            <?= form_error('password_baru2', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary float-right">
                                Ubah Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- akhir ubah password -->
    </div>

    <!-- edit profil -->
    <div class="col-lg-6">
        <div class="card-header h3"><i class="fas fa-fw fa-user-edit"></i> Edit Profil</div>
        <div class="card mb-4">
            <div class="card-body">

                <!-- diarahkan ke function editprofile -->
                <?= form_open_multipart('user/editprofile'); ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-4">Foto</div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-12 col-md-8 mt-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group justify-content-end">
                    <div class="col-sm-8">
                        <button type="submit" class="btn btn-primary float-right">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir edit profil -->

</div>
<!-- ### akhir halaman user ### -->
<br><br><br><br><br>

<!-- bagian awal div ada di topbar.php -->
</div>