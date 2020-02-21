<!-- ########## container roleaccess ########## -->
<div class="container-fluid">
    <div class="row col-sm-10 col-lg-6 justify-content-between">
        <h1 class="h3 text-gray-800"><?= $title; ?></h1>
        <!-- role yang sedang active -->
        <h5>Role : <?= $role['role']; ?></h5>
    </div>
    <!-- tabel -->
    <div class="row">
        <div class="col-lg-6">
            <!-- valisasi suksess -->
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Akses</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- membuat nomer urut -->
                    <?php $nomor = 1; ?>
                    <!-- mengambil data dari database -->
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $nomor; ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <div class="form-check">
                                    <!-- buat check_access di app../controllers/helper -->
                                    <!-- mengirimkan data untuk diolah dengan jquery di footer -->
                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                    <!-- jquery mengambil data merubah database user_access_menu -->
                                    <!-- jquery ada di footer -->
                                </div>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php endforeach; ?>
                    <!-- akhir mengambil data dari database -->
                </tbody>
            </table>
        </div>

    </div>
    <!-- akhir tabel -->
</div>
<!-- ### akhir container roleaccses ###  -->

<!-- bagian awal div ada di topbar.php - karena sidebar full di sebelah kanan -->
</div>