    <!-- Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- judul sidebar -->
        <a href="<?= base_url('aula') ?>" class="ml-3 brand-link">
            <i class="fas fa-fw fa-chair"></i>
            <span class="brand-text font-weight-light"> Aula</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- user yang login -->
            <div class="user-panel mt-3 pb-3 mb-2 d-flex">
                <div class="image">
                    <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- tanya -->
                    <li class="nav-item">
                        <a href="<?= base_url('aula/tanya') ?>" class="nav-link">
                            <i class="far fa-fw fa-question-circle"></i>
                            <p>Tanya</p>
                        </a>
                    </li>
                    <!-- projek -->
                    <li class="nav-item">
                        <a href="<?= base_url('aula/projek') ?>" class="nav-link">
                            <i class="fas fa-fw fa-project-diagram"></i>
                            <p>Projek</p>
                        </a>
                    </li>
                    <!-- grup -->
                    <li class="nav-item">
                        <a href="<?= base_url('aula/grup_coding') ?>" class="nav-link">
                            <i class="fas fa-fw fa-users"></i>
                            <p>Grup Coding</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('aula/pustaka') ?>" class="nav-link">
                            <i class="fas fa-fw fa-campus"></i>
                            <p>Pustaka</p>
                        </a>
                    </li>
                    <!-- yangkumau -->
                    <li class="nav-item">
                        <a href="<?= base_url('yangkumau/website') ?>" class="nav-link">
                            <i class="far fa-fw fa-grin-hearts"></i>
                            <p>Yangkumau</p>
                        </a>
                    </li>
                    <!-- Arsip -->
                    <li class="nav-item">
                        <a href="<?= base_url('arsip/website') ?>" class="nav-link">
                            <i class="fas fa-fw fa-archive"></i>
                            <p>Arsip</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>