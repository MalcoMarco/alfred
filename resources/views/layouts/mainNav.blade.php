<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid w-90">
    <a class="navbar-brand" href="#home">
      <x-application-logo style="width: 136px;height: 24px;" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-custom me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <x-nav-link class="nav-link" :href="route('home')">
            {{ __('Home') }}
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link class="nav-link" href="/#whyAlfred">
            {{ __('Why alfred') }}
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link class="nav-link" href="/#solutions">
            {{ __('Solutions') }}
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link class="nav-link" href="/#contact">
            {{ __('Contact') }}
          </x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link class="nav-link" href="{{ route('send') }}" :active="request()->routeIs('send')">
            {{ __('Send') }}
          </x-nav-link>
        </li>
        <li class="nav-item">
          <button class="btn btn-light" href="/#download">
            {{ __('Download App') }}
          </button>
        </li>
        </li>
      </ul>
      <div class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <x-nav-link class="nav-link" href="{{ route('login') }}" :active="request()->routeIs('login')">
              {{ __('Login') }}
            </x-nav-link>
          </li>
          <li class="nav-item">
            <x-nav-link class="nav-link" href="{{ route('register') }}" :active="request()->routeIs('register')">
              {{ __('Register') }}
            </x-nav-link>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownlang" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="/images/flags/Ingles.png" class="nav-flag" alt="">
              <span>En</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><img src="/images/flags/Ingles.png" class="nav-flag" alt=""> {{ __('English') }}</a></li>
              <li><a class="dropdown-item" href="#"> <img src="/images/flags/spain.png" class="nav-flag" alt=""> {{ __('Espanish') }}</a></li>
              <li><a class="dropdown-item" href="#"> <img src="/images/flags/france.png" class="nav-flag" alt=""> {{ __('French') }}</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>