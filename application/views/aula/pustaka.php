<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Pustaka</h3>
                    </div>
                    <!-- info -->
                    <div class="h2 col-sm-6">
                        <a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
                            <i class="fas fa-fw fa-exclamation-circle"></i>
                        </a>
                        <!-- Dropdown info -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                            <pre class="mt-1 mb-n2 mx-3">
1. Bila ada yang salah ketik atau kurang lengkap 
    sampaikan ke admin untuk diperbaiki
2. Apabila ada cara yang lebih mudah dan cepat, 
    tolong informasikan ke admin. <a href="<?= base_url('selamat_datang') ?>"><kbd>Kontak</kbd></a></h5>
3. Bantuan koreksi anda sangat kami harapkan 
4. semoga bermanfaat buat kita semua.
                            </pre>
                        </div>
                    </div>
                    <!-- akhir info -->
                </div>
            </div>
        </section>
        <!-- ### akhir judul ### -->

        <!-- ########## container card ########## -->
        <h3>Kami akan mendambahkan sesuai kebutuhan kita</h3>
        <!-- daftar pustaka -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- website -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <p>Tutorial</p>
                        <h3>Website</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <a href="<?= base_url('website') ?>" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
                <!-- small card -->
                <div class="small-box bg-danger">
                    <div class="inner text-center">
                        <img src="<?= base_url() ?>assets/img/CI.png" alt="" class="img-size-55 mx-auto img-rounded">
                    </div>
                    <a href="#" class="small-box-footer">
                        CodeIgniter <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>


            <!-- ./col -->
        </div>
        <!-- akhir daftar pustaka -->

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->
    <!-- ### akhir container card ### -->
</div>
</div>
<!-- ### akhir container halaman ### -->