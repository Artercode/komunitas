<!-- ########## container halaman ########## -->
<div class="content-wrapper">
    <div class="container mx-1">
        <!-- ########## judul ########## -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mt-1">
                    <div class="col-sm-6">
                        <h3 class="font-weight-bold text-gray"><i class="fas fa-fw fa-chair"></i> Aula</h3>
                    </div>
                    <!-- info -->
                    <div class="h2 col-sm-6">
                        <a class="float-sm-right" href="#" id="dropdown" data-toggle="dropdown">
                            <i class="fas fa-fw fa-exclamation-circle"></i>
                        </a>
                        <!-- Dropdown info -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdown">
                            <pre class="mt-1 mb-n2 mx-3">
Tempat nongkrong bareng, tu dah kami sediain kursinya
                            </pre>
                        </div>
                    </div>
                    <!-- akhir info -->
                </div>
            </div>
        </section>
        <!-- ### akhir judul ### -->

        <!-- alert untuk LOGOUT -->
        <div class="col-12">
            <?= $this->session->flashdata('message') ?>
        </div>
        <div>
            <h4>Tempat nongkrong bareng, tu dah kami sediain kursinya</h4>
        </div>
    </div>
</div>
<!-- ### akhir container halaman ### -->