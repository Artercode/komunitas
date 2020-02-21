<!-- ########## judul ########## -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mt-n2">
            <div class="col-sm-6">
                <h3 class="font-weight-bold"><i class="far fa-fw fa-question-circle"></i> Tanya</h3>
            </div>
            <!-- info -->
            <div class="h2 col-sm-6">
                <a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
                    <i class="fas fa-fw fa-exclamation-circle"></i>
                </a>
                <!-- Dropdown info -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                    <pre class="mt-1 mb-n2 mx-3">
1. Form Tanya tempat untuk mengajukan pertanyaan.
    harus diisi semua dengan lengkap.
2. Tabel Tanya merupakan list dari semua pertanyaan anda.
    - pertanyaan di Tabel Tanya otomatis hilang selama 1 bulan, 
    bila belum mendapakan jawaban anda harus buat lagi.
    - Untuk memposting ke Aula cek di checkbox nya 
    - pertanyaan di aula otomatis hilang selama 1 minggu,
    bila belum mendapatkan jawaban anda bisa cek lagi.
    - Untuk pertanyaan yang sering ditanyakan,
    tolong hubungi admin untuk dibuat jawapannya di pustaka kita.
                </pre>
                </div>
            </div>
            <!-- akhir info -->
        </div>
    </div>
</section>
<!-- ### akhir judul ### -->

<!-- ########## form tanya ########## -->
<section class="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <!-- judul form -->
            <a href="#collapseCard" class="card-header py-3 d-block" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard">
                <h6 class="m-0 font-weight-bold text-primary">Form Tanya</h6>
            </a>
            <!-- bagian form -->
            <div class="collapse show" id="collapseCard">
                <div class="card-body">
                    <div class="row">
                        <!-- data form -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    Data pertanyaan
                                </div>
                                <div class="card-body mb-n3">
                                    <!-- judul pertanyaan -->
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Judul</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Judul pertanyaan maks 40 karakter">
                                        </div>
                                    </div>
                                    <!-- coding -->
                                    <div class="form-group row">
                                        <label for="coding" class="col-sm-4 col-form-label">Coding</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="coding">
                                                <option selected>Harus diisi, Pilih... </option>
                                                <option>HTML</option>
                                                <option>CSS</option>
                                                <option>Java Script</option>
                                                <option>php</option>
                                                <option>Codeigniter</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- nama lengkap -->
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" readonly>
                                            <?= form_error('name', '<small class="font-italic text-danger pl-4">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ulasan form tanya -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    Pertanyaannya
                                </div>
                                <div class="card-body mt-n4 mb-n1">
                                    <div class="form-group">
                                        <label for="pertanyan"></label>
                                        <textarea class="form-control" id="pertanyaan" rows="5" placeholder="maks 5000 karakter atau tulis link github aja"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ### akhir form tanya ### -->


<br><br><br>
<pre>
posting (check box) untuk menampilkan di aula
sisa waktu postingan di aula
coding
judul pertanyaan
sisa waktu postingan di tabel tanya
notifikasi apabila ada balasan.

edit
delete
</pre>