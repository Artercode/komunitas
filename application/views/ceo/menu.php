            <!-- ########## container menu ########## -->
            <div class="container-fluid">
                <div class="row col-sm-10 col-lg-6 justify-content-between">
                    <h1 class="h3 text-gray-800"><?= $title; ?></h1>
                    <!-- tombol + menu -->
                    <a href="" class="mb-3 mt-n2 btn btn-primary" data-toggle="modal" data-target="#menuModal"><i class="fas fa-fw fa-plus-circle"></i> Menu</a>
                </div>
                <!-- tabel -->
                <div class="row">
                    <div class="col-sm-10 col-lg-6">
                        <!-- alert validasi salah -->
                        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <!-- alert -->
                        <?= $this->session->flashdata('tambahMenu'); ?>
                        <?= $this->session->flashdata('hapusMenu'); ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Aksi</th>
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
                                            <a href="<?= base_url() ?>ceo/hapusMenu/<?= $m['id']; ?>" class="badge badge-success" data-toggle="modal" data-target="#editmenuModal">edit</a>
                                            <a href="<?= base_url() ?>ceo/hapusMenu/<?= $m['id']; ?>" class="badge badge-danger" onclick=" return confirm('yakin dihapus ?');">hapus</a>
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
            <!-- ### akhir container menu ### -->

            <!-- bagian awal div ada di topbar.php - karena sidebar full di sebelah kanan -->
            </div>

            <!-- ########## modal menu ########## -->
            <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="menuModalLabel"><i class="fas fa-fw fa-plus-circle"></i> Menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('ceo/menu'); ?>" method="post">
                            <!-- isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
                                </div>
                            </div>
                            <!-- akhir isi modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i> Menu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ### akhir modal menu ### -->
            <!-- ########## modal edit menu ########## -->
            <div class="modal fade" id="editmenuModal" tabindex="-1" role="dialog" aria-labelledby="editmenuModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editmenuModalLabel"><i class="fas fa-fw fa-pen-nib"></i> Edit menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?= base_url('ceo/editmenu'); ?>" method="post">
                            <!-- isi Modal -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $m['menu']; ?>">
                                </div>
                            </div>
                            <!-- akhir isi modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" onclick=" return confirm('yakin dihapus ?');"><i class="fas fa-fw fa-pen-nib"></i> Edit menu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ### akhir modal edit menu -->