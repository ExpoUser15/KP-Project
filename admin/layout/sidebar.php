<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php if(@$_GET['page'] == ''){echo 'active';}else{echo 'text-white';} ?>" aria-current="page" href="?">
                    <span data-feather="home"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if(@$_GET['page'] == 'tugas'){echo 'active';}else{echo 'text-white';} ?>" href="?page=tugas">
                    <span data-feather="briefcase"></span>
                    Tugas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if(@$_GET['page'] == 'tabel'){echo 'active';}else{echo 'text-white';} ?>" href="?page=tabel">
                    <span data-feather="file"></span>
                    Tabel
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if(@$_GET['page'] == 'admin'){echo 'active';}else{echo 'text-white';} ?>" href="?page=admin">
                    <span data-feather="user"></span>
                    Admin
                </a>
            </li>
        </ul>
    </div>
</nav>