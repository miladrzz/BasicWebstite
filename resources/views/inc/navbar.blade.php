<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/basicwebsite/public/home">!از من بخر</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="{{Request::is('home') ? 'active' : ''}}">
          <a class="nav-link active" aria-current="page" href="http://localhost/basicwebsite/public/home">خانه</a>
        </li>
        <li class="{{Request::is('transaction') ? 'active' : ''}}">
          <a class="nav-link" href="http://localhost/basicwebsite/public/transaction">خرید</a>
        </li>
        <li class="{{Request::is('buying') ? 'active' : ''}}">
          <a class="nav-link" href="http://localhost/basicwebsite/public/buying">شارژ حساب</a>
        </li>
        <li class="{{Request::is('contact') ? 'active' : ''}}">
          <a class="nav-link" href="http://localhost/basicwebsite/public/contact">انتقادات</a>
        </li>
        <li class="{{Request::is('about') ? 'active' : ''}}">
          <a class="nav-link" href="http://localhost/basicwebsite/public/about">درباره ما</a>
        </li>
        <li class="{{Request::is('registration') ? 'active' : ''}}">
          <a class="nav-link" href="http://localhost/basicwebsite/public/login">ورود</a>
        </li>
        <li class="{{Request::is('logout') ? 'active' : ''}}">
          <a class="nav-link" href="http://localhost/basicwebsite/public/logout">خروج</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
