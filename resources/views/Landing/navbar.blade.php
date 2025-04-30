<!-- Navbar -->
<nav class="main-header navbar navbar-expand-lg border-bottom-0" style="background-color: #FFF6E0;">
    <div class="container">
      <a href="{{asset('AdminLTE')}}/index3.html" class="navbar-brand">
        <img src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold" style="color: #D43C50;">Home</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#About" class="nav-link" style="color:rgb(0, 0, 0);">About</a>
          </li>
          <li class="nav-item">
            <a href="#Projects" class="nav-link" style="color: rgb(0, 0, 0);">Projects</a>
          </li>
          <li class="nav-item">
            <a href="#Contact" class="nav-link" style="color: rgb(0, 0, 0);">Contact</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-0 ml-md-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->