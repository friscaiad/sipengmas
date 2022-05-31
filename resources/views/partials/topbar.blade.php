<header>
    <nav class="navbar navbar-expand-sm sticky-top" style="position: fixed; width: 100%; z-index: 100 margin-left: 3px; margin-right: 3px">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('images/siabdilogo.png') }}" alt="SIABDI">
                </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-kanan">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-nowrap">Data Pengmas</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-nowrap">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="bi bi-box-arrow-right mr-2 text-gray"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
