    <!-- sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- judul sidebar -->
        <a href="" class="ml-3 brand-link">
            <i class="fas fa-fw fa-archive"></i>
            <span class="brand-text font-weight-light"> Arsip</span>
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
                    <!-- ilustrasi -->
                    <li class="nav-item">
                        <a href="<?= base_url('arsip/website') ?>" class="nav-link">
                            <i class="fas fa-fw fa-archive"></i>
                            <p>Website</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- akhir sidebar arsip -->