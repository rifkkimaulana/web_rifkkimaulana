<?php
$current_uri = uri_string();
$segments = explode('/', $current_uri);

$segment1 = isset($segments[0]) ? $segments[0] : '';
$segment2 = isset($segments[1]) ? $segments[1] : '';
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= $segment1 === 'dashboard' ? 'javascript:void(0);' : base_url('dashboard'); ?>" class="brand-link text-center">
        <span class="brand-text font-weight-light"><b>PANEL ADMIN</b></span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php if (!empty($user['user_foto'])) { ?>
                    <img src="<?= base_url('assets/image/Users/' . $user['user_foto']); ?>" class="img-circle elevation-2" alt="<?= $user['user_name'] ?>">
                <?php } else { ?>
                    <img src="<?= base_url('assets/image/avatar5.png'); ?>" class="img-circle elevation-2" alt="<?= $user['user_name'] ?>">
                <?php } ?>
            </div>
            <div class="info">
                <a class="d-block"><?= $user['user_name']; ?></a>
            </div>
        </div>

        <nav class="mt-1">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">DASHBOARD</li>
                <li class="nav-item">
                    <a href="<?= $segment1 === 'dashboard' ? 'javascript:void(0);' : base_url('dashboard'); ?>" class="nav-link <?= $segment1 === 'dashboard' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">ARTIKEL</li>
                <li class="nav-item <?= $segment1 === 'artikel' ? 'menu-open' : ''; ?>">
                    <a href="javascript:void(0);" class="nav-link <?= $segment1 === 'artikel' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Artikel
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artikel'); ?>" class="nav-link <?= $segment1 === 'artikel' ? 'active' : ''; ?>">
                                <i class="fas fa-newspaper nav-icon"></i>
                                <p>Semua</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artikel/new'); ?>" class="nav-link <?= $segment2 === 'new' ? 'active' : ''; ?>">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Tambah Baru</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artikel/kategori'); ?>" class="nav-link <?= $segment2 === 'kategori' ? 'active' : ''; ?>">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('artikel/tag'); ?>" class="nav-link <?= $segment2 === 'tag' ? 'active' : ''; ?>">
                                <i class="fas fa-tags nav-icon"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $segment1 === 'komentar' ? 'menu-open' : ''; ?>">
                    <a href="javascript:void(0);" class="nav-link <?= $segment1 === 'komentar' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>
                            Komentar
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('komentar'); ?>" class="nav-link <?= $segment2 === 'komentar' ? 'active' : ''; ?>">
                                <i class="fas fa-comment-alt nav-icon"></i>
                                <p>Semua Komentar</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('komentar/pending'); ?>" class="nav-link <?= $segment2 === 'pending' ? 'active' : ''; ?>">
                                <i class="fas fa-clock nav-icon"></i>
                                <p>Komentar Pending</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-header">TOOL SYSTEM</li>
                <li class="nav-item <?= $segment1 === 'im-settings' ? 'menu-open' : ''; ?>">
                    <a href="javascript:void(0);" class="nav-link <?= $segment1 === 'im-settings' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Pengaturan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $segment2 === 'profile' ? 'javascript:void(0)' : base_url('r-settings/profile'); ?>" class="nav-link <?= $segment2 === 'profile' ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= $segment2 === 'users' ? 'javascript:void(0)' : base_url('r-settings/users'); ?>" class="nav-link <?= $segment2 === 'users' ? 'active' : ''; ?>"> <i class="far fa-circle nav-icon"></i>
                                <p>Manajemen Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= $segment1 === 'r_log' ? 'javascript:void(0)' : base_url('r_log'); ?>" class="nav-link <?= $segment1 === 'r_log' ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-history"></i>
                        <p>Riwayat Aktifitas</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

<!-- Modal Logout All Session -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('logout'); ?>" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </div>
</div>