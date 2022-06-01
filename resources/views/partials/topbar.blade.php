<style>
    .navcol {
        background-color: rgba(121, 121, 121, 1);
    }

    .dropdown-menu.show {
        position: absolute;
        left: -125px;
    }
</style>

<header>
    <nav class="navbar navbar-expand-sm sticky-top navcol" style="position: fixed; width: 100%; z-index: 100 margin-left: 3px; margin-right: 3px;">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('images/siabdilogo.png') }}" alt="SIABDI">
            </a>
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
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <button 
                            class="btn dropdown-toggle" 
                            type="button" 
                            id="dropdownMenu2" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                                <i class="bi bi-person-circle"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li>
                                    <form action="{{ url('/logout') }}" method="post">
                                        
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
