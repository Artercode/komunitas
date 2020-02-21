<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="fas fw fa-globe ml-1"></i></i> Web Responsive</h3>
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
Web responsive adalah website bila dibuka dengan handphone akan tetap tersusun dengan rapi.
Hal ini bisa dilakuan sengan adanya sistem GRID pada halaman web,
pada umumnya semua framework untuk CSS semuanya sudah mengunakan sistem ini,
Kita disini menggunakan bootstrap tentu saja sudah memiliki sistem GRID didalamnya.
kalian bisa mempelajari dari website Bootstrap:
<a href="https://getbootstrap.com/docs/4.3/layout/grid/" target="_blank">https://getbootstrap.com/docs/4.3/layout/grid/</a>

Pada intinya kolom pada website dibagi-bagi menjadi 12 kolom, 
dan untuk layar tampilan dibagi menjadi 4 layar monitor: layar computer ada 2 layar, tablet dan handphon (xl,lg,md,dan sm), 
atau kita dapat melihatnya dengan jelas jika kita mengecilkan kolom browser.
akan terjadi perubahan struktur website bila ukurannya sesuai ketentuan 4 layar monitor itu.
Yang perlu diingat berapapun kolom yang kita gunakan selalu dibagi menjadi 12 grid.
meskipun lebar kolom hasil pembagian juga dihitung 12 grid.
Contoh:
1. Kita sudah membagi kolom dengan 6 grid dan 6 grid, kolom A dan kolom B 
2. Bila kita mau membagi lagi kolom A menjadi kolom C dan kolom D 
    maka grid dari kolom A akan dihitung 12 grid,
    begitu cara pembagiannya, berapapun lebar kolomnya kalau mau dibagi grid tetap 12.
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