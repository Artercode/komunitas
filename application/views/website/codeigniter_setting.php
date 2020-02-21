<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mx-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="far fa-fw fa-window-maximize"></i> Codeigniter - Setting</h3>
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
1. Buka application/config/routers.php
    - [52] $route['default_controller'] = 'welcome'; rubah dengan home anda 
2. Buka application/config/config.php
    - [26] $config['base_url'] = 'http://localhost/nama-file-projek/'; isi localhost projek 
3. Buka application/config/autoload.php
    - [61] $autoload['libraries'] = array('database', 'email', 'session', 'form_validation');
    - [92] $autoload['helper'] = array('url', 'form', 'file', 'security');
4. Buka application/config/database.php
    - [79] 'username' => 'root',
    - [80] 'password' => '',
    - [81] 'database' => 'nama-folder-database', yang di buat di phpMyAdmin
    - Untuk window username 'root' dan password ''
    - Untuk OS username 'root' dan password 'root'
5. Menghilangkan penulisan index.php di url:
    dengan membuat file .htaccess di folder website , sejajar dengan forlder application dll
    <a href="https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess"  target="_blank">https://codeigniter.com/user_guide/general/urls.html?highlight=htaccess</a>
    atau :
    
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php/$1 [L]

    &ltifmodule mod_headers.c=""&gt
        SetEnvIf Origin "^(.*\.<kbd>nama-domain</kbd>\.com)$" ORIGIN_SUB_DOMAIN=$1
        Header set Access-Control-Allow-Origin "%{ORIGIN_SUB_DOMAIN}e" env=ORIGIN_SUB_DOMAIN
        Header set Access-Control-Allow-Methods: "*"
        Header set Access-Control-Allow-Headers: "Origin, X-Requested-With, Content-Type, Accept, Authorization"
    &lt/ifmodule&gt

        </pre>

        <!-- icon sroll atas -->
        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- ### akhir container card ### -->
</div>
</div>
<!-- ### akhir container halaman ### -->