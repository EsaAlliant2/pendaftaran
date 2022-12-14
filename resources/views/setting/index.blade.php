<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Settings &mdash; Stisla</title>

  <!-- General CSS Files -->
<link rel="stylesheet" href="{{asset('assets3/setting/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets3/setting/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets3/setting/codemirror.css')}}">
  <link rel="stylesheet" href="{{asset('assets3/setting/duotone-dark.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assetz/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assetz/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
             
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          
          @include('template.navbar')
          <!-- <li class="dropdown"><a href="{{Auth()->user()->name}}" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div> -->
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li>
            </li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>profil</span></a>
              <ul class="dropdown-menu">
            <
                
                <li><a class="nav-link" href="{{ route('profile.index')}}">Profile</a></li>
              </ul>
            </li>

     </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>profil Settings</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Settings</a></div>
              <div class="breadcrumb-item">General Settings</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">profile Settings</h2>
            <p class="section-lead">
            </p>

            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-8">
                <form id="setting-form">
                  <div class="card" id="settings-card">
                    <div class="card-header">
                      <h4>General Settings</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted"></p>
                      <div class="form-group row align-items-center">
                        <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama</label>
                        <div class="col-sm-6 col-md-9">
                          <input type="text" name="site_title" class="form-control" id="site-title">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control-label col-sm-3 text-md-right">alamat</label>
                        <div class="col-sm-6 col-md-9">
                          <textarea class="form-control" name="site_description" id="site-description"></textarea>
                        </div>
                      </div>
                    <div class="card-footer bg-whitesmoke text-md-right">
                      <button class="btn btn-primary" id="save-btn">Save Changes</button>
                      <button class="btn btn-secondary" type="button">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
  		    </div>
      	</section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets3/setting/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets3/setting/js/popper.js')}}"></script>
  <script src="{{asset('assets3/setting/js/tooltip.js')}}"></script>
  <script src="{{asset('assets3/setting/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets3/setting/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets3/setting/js/moment.min.js')}}"></script>
  <script src="{{asset('assets3/setting/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assets3/setting/js/codemirror.js')}}"></script>
  <script src="{{asset('assets3/setting/js/javascript.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('assets3/setting/js/features-setting-detail.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('assets3/setting/js/scripts.js')}}"></script>
  <script src="{{asset('assets3/setting/js/custom.js')}}"></script>
</body>
</html>