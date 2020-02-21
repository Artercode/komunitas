            <!-- ########## container role ########## -->
            <div class="container-fluid">
                <div class="row col-sm-10 col-lg-6 justify-content-between">
                    <h1 class="h3 text-gray-800"><?= $title; ?></h1>
                    <!-- tombol + role-->
                    <a href="" class="mb-3 mt-n2 btn btn-primary" data-toggle="modal" data-target="#roleModal"><i class="fas fa-fw fa-plus-circle"></i> Role</a>
                </div>
                <!-- tabel -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- alert validasi salah -->
                        <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <!-- alent -->
                        <?= $this->session->flashdata('tambahRole'); ?>
                        <?= $this->session->flashdata('hapusRole'); ?>
                        <?= $this->session->flashdata('editRole'); ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- membuat nomer urut -->
                                <?php $nomor = 1; ?>
                                <!-- mengambil data dari database -->
                                <?php foreach ($role as $r) : ?>
                                    <tr>
                                        <th scope="row"><?= $nomor; ?></th>
                                        <th><?= $r['role']; ?></th>
                                        <th>
                                            <a href="<?= base_url('ceo/roleAccess/') . $r['id']; ?>" class="badge badge-warning">akses</a>
                                            <a href="<?= base_url() ?>ceo/editRole/<?= $r['id']; ?>" class="badge badge-success" data-toggle="modal" data-target="#editRoleModal">edit</a>
                                            <a href="<?= base_url() ?>ceo/hapusRole/<?= $r['id']; ?>" class="badge badge-danger" onclick=" return confirm('yakin dihapus ?');">hapus</a>
                                        </th>
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
            <!-- ### container akhir role ### -->

            <!-- bagian awal div ada di topbar.php - karena sidebar full di sebelah kanan -->
            </div>

            <!-- ########## modal tambah role ########## -->
            <div class="modal fade" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="roleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="roleModalLabel"><i class="fas fa-fw fa-plus-circle"></i> Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('ceo/role'); ?>" method="post">
                            <!-- isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role">
                                </div>
                            </div>
                            <!-- akhir isi modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i> Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ### akhir modal tambah role ### -->
            <!-- ########## modal edit role ########## -->
            <div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editRoleModalLabel"><i class="fas fa-fw fa-pen-nib"></i> Edit Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('ceo/role'); ?>" method="post">
                            <!-- isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="role" name="role" value="<?= $r['role']; ?>">
                                </div>
                            </div>
                            <!-- akhir isi modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-pen-nib"></i> Edit Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ### akhir modal edit role ### -->