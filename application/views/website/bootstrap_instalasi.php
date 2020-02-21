<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Bootstrap - Instalasi</h3>
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
        <pre>
Download template Bootstrap yang kita pilih,
untuk bootstap isi file akan berbeda sesuai dengan template yang kita gunakan, 
isi forder akan tegantung dari si pembuat template.
Dari sini kalian sudah dapat membuat website.
1. Ganti nama folder dengan nama website yang akan kita gunakan. 
2. Simpan di xampp/htdocs. 
3. Bootstrap sudah siap digunakan untuk membuat website. 
4. Bootstrap adalah framework untuk CSS (mengatur tampilan website).

Bila kita mengunakan Codeigniter, kita bisa menggabungkannya:
karena Codeigniter merupakan framework untuk php.
1. Download template bootstrap yang kita sukai, sebagai contoh:
    - <a href="https://startbootstrap.com/templates/sb-admin-angular/" target="_black">https://startbootstrap.com/templates/sb-admin-angular/</a> atau 
    - <a href="https://adminlte.io/" target="_black">https://adminlte.io/</a>
    untuk yang AdminLTE karena berupa github, dibagian paling bawah assets, 
    pilih salah satu saja sesuai extrak yang kita punya. 
    File template AdminLTE sangat besar karena fiture nya yang lengkap.
2. Extrak zip filenya. 
3. Kita buat folder assets tempatkan di htdocs/website_kita/asset
4. Copy semua folder yang ada si bootstrap dan paste di dalam folder assets,
    karena yang kita butuhkan hanya yang berupa folder saja. 
5. Untuk bootstrap yang aslinya nanti akan kita butuhkan untuk contekannya
6. Untuk memudahkan melihat contekan tempatkan bootstrap aslinya dalam xampp/htdocs juga,
    supaya kita bisa melihat tampilan web nya di browser kita.
7. Yang terakir kita masih membutuhkan setting untuk link yang ada di bagian head dan footernya. 
    - bisa dilihat di bagian <a href="<?= base_url('website/bootstrap_setting') ?>">Bootstrap - Setting</a>

</pre>


        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- /.content-wrapper -->
    <!-- ### akhir container card ### -->
</div>
</div>
<!-- ### akhir container halaman ### -->