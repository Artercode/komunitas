    <!-- Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- judul sidebar -->
        <a href="" class="ml-3 brand-link">
            <i class="far fa-fw fa-grin-hearts"></i>
            <span class="brand-text font-weight-light"> Yangkumau</span>
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
                    <!-- website -->
                    <li class="nav-item">
                        <a href="<?= base_url('yangkumau/website') ?>" class="nav-link">
                            <i class="far fa-fw fa-window-maximize"></i>
                            <p>Wabsite</p>
                        </a>
                    </li>
                    <!-- android app -->
                    <li class="nav-item">
                        <a href="<?= base_url('yangkumau/android_app') ?>" class="nav-link">
                            <i class="fab fa-fw fa-android"></i>
                            <p>Android App & Game</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>