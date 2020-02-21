    <!-- Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- judul sidebar -->
        <a href="" class="ml-3 brand-link">
            <i class="fas fa-fw fa-child"></i>
            <span class="brand-text font-weight-light"> Selamat Datang</span>
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
                    <!-- selamat datang -->
                    <li class="nav-item">
                        <a href="<?= base_url('selamat_datang') ?>" class="nav-link">
                            <i class="fas fa-fw fa-child"></i>
                            <p>Selamat Datang</p>
                        </a>
                    </li>
                    <!-- Sekedar Tau -->
                    <li class="nav-item">
                        <a href="<?= base_url('selamat_datang/sekedar_tau') ?>" class="nav-link">
                            <i class="fas fa-fw fa-feather"></i>
                            <p>Sekedar Tau</p>
                        </a>
                    </li>
                    <!-- Aula -->
                    <li class="nav-item">
                        <a href="<?= base_url('aula') ?>" class="nav-link">
                            <i class="fas fa-fw fa-chair"></i>
                            <p>Aula</p>
                        </a>
                    </li>
                    <!-- note -->
                    <li class="nav-item">
                        <a href="<?= base_url('note/ilustrasi') ?>" class="nav-link">
                            <i class="far fa-fw fa-sticky-note"></i>
                            <p>Note</p>
                        </a>
                    </li>
                    <!-- camp -->
                    <li class="nav-item">
                        <a href="<?= base_url('Selamat_datang/camp') ?>" class="nav-link">
                            <i class="fas fa-fw fa-campground"></i>
                            <p>Camp</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>