            <!-- ########## container submenu ########## -->
            <div class="container-fluid">
                <div class="row col-sm-10 col-lg justify-content-between">
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <!-- tombol + submenu -->
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#submenuModal"><i class="fas fa-fw fa-plus-circle"></i> Submenu</a>
                </div>
                <!-- tabel -->
                <div class="row">
                    <div class="col">
                        <!-- alert modal -->
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <!-- alert  -->
                        <?= $this->session->flashdata('tambahSubmenu'); ?>
                        <?= $this->session->flashdata('hapusSubmenu'); ?>

                        <?= $this->session->flashdata('editSubmenu'); ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Aktif</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- membuat nomer urut -->
                                <?php $nomor = 1; ?>
                                <!-- mengambil data dari database -->
                                <?php foreach ($submenu as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $nomor; ?></th>
                                        <td><?= $sm['title']; ?></td>
                                        <!-- bagian menu mengambil dari database user_menu -->
                                        <td><?= $sm['menu']; ?></td>
                                        <td><?= $sm['url']; ?></td>
                                        <td><?= $sm['icon']; ?></td>
                                        <td><?= $sm['is_active']; ?></td>
                                        <td>
                                            <a href="<?= base_url() ?>ceo/editsubmenu/<?= $sm['id']; ?>" class="badge badge-success" data-toggle="modal" data-target="#editSubmenuModal">edit</a>
                                            <a href="<?= base_url() ?>ceo/hapusSubmenu/<?= $sm['id']; ?>" class="badge badge-danger" onclick=" return confirm('yakin dihapus ?');">hapus</a>
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
            <!-- ### akhir container submenu ### -->

            <!-- bagian awal div ada di topbar.php - karena sidebar full di sebelah kanan -->
            </div>

            <!-- ########## modal submenu ########## -->
            <div class="modal fade" id="submenuModal" tabindex="-1" role="dialog" aria-labelledby="submenuModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="submenuModalLabel"><i class="fas fa-fw fa-plus-circle"></i> Submenu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('ceo/submenu'); ?>" method="post">
                            <!-- isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="menu_id" name="menu_id">
                                        <option value="">Pilih Menu</option>
                                        <!-- daftar pilih yang diambil dari tabel user_menu -->
                                        <?php foreach ($menu as $m) : ?>
                                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Url">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <!-- value=1 bila di cek maka akan mengisikan angka 1 -->
                                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                        <label class="form-check-label" for="is_active">
                                            Aktif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir isi modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i> Submenu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ### akhir modal submenu ### -->

            <!-- ########## modal edit submenu ########## -->
            <div class="modal fade" id="editSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubmenuModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editSubmenuModalLabel"><i class="fas fa-fw fa-pen-nib"></i> Edit Submenu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('ceo/submenu'); ?>" method="post">

                            <!-- isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <!-- untuk memasukan data id  -->
                                    <input type="hidden" name="id" value="">
                                    <input type="text" class="form-control" id="title" name="title" value="">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="menu_id" name="menu_id">
                                        <!-- daftar pilih yang diambil dari tabel user_menu -->
                                        <?php foreach ($menu as $m) : ?>



                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="url" name="url">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="icon" name="icon">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <!-- value=1 bila di cek maka akan mengisikan angka 1 -->
                                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                        <label class="form-check-label" for="is_active">
                                            Aktif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir isi modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-pen-nib"></i> Edit Submenu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ### akhir modal edit submenu ### -->