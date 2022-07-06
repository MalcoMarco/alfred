<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="fas fa-bars"></i>
        </button>
        <a class="header-brand d-md-none" href="#">
            <x-application-logo style="width: 118px; height: 46px"></x-application-logo>
        </a>
        {{-- <ul class="header-nav d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul> --}}
        <nav class="header-nav ms-auto me-4">
            <div class="btn-group d-none" role="group" aria-label="Basic checkbox toggle button group">
                <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch" autocomplete="off"
                    value="light" onchange="handleThemeChange(this)" />
                <label class="btn btn-primary" for="btn-light-theme">
                    <i class="fas fa-sun"></i>
                </label>
                <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off"
                    value="dark" onchange="handleThemeChange(this)" />
                <label class="btn btn-primary" for="btn-dark-theme">
                    <i class="fas fa-moon"></i>
                </label>
            </div>
        </nav>
        <ul class="header-nav me-4">
            <li class="nav-item dropdown d-flex align-items-center">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img"
                            src="https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png" alt="." />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item mt-1">
                            <i class="fas fa-sign-out-alt icon me-2"></i>
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </li>
        </ul>
        {{-- discomment if required aside
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()"></button>
        --}}
    </div>
    {{-- breadcrumb
        <div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <span>Home</span>
                </li>
                <li class="breadcrumb-item active">
                    <span>Dashboard</span>
                </li>
            </ol>
        </nav>
    </div> --}}
</header>