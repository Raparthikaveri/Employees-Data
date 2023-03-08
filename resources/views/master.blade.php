<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Employee Data</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/color_skins.css')}}">
<!-- Styles -->
<style type="text/css">
  #leftsidebar {
    background:#00bcd4 !important;
  }
  .sidebar .menu .list .menu-toggle:before{
    display: none !important;
  }
  .sidebar .menu .list .menu-toggle:after{
    display: none !important;
  }
  .sidebar .menu .list a {
     color: #cacaca;
  }
  .sidebar .menu h4{
      color: #cacaca;
  }
  .bgcolor{
    color:white !important;
  }
  .sidebar .menu .list a {
      color: white !important;
  }
  .sidebar .menu .list .ml-menu li a{
    color:white ;
  }
  @font-face{
    font-family: Gotham Medium;
    src: url('');
  }
  h4{
    font-family: "Gotham Medium", Sans-serif;
    font_size: 24px!important;
  }
  strong{
    font-family: "Gotham Medium", Sans-serif;
    font-size: 15px;
  }
  a{
    font-family: "Gotham Medium", Sans-serif;
    font-size: 15px;
  }
  .menu_hover:hover{
    color:#d0b26c!important;
  }
  .nav_header{
    background-color: #2fc7d2;
  }
  .navbar_tags{
    text-align: center;
    width: 107%;
    background-color: #333333;
    margin-left: -16px;
  }
</style>
</head>
<body class="theme-cyan bg-white">
<div class="overlay"></div>
<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12 mobile_view_adjust">
        <div class="navbar-header mobile_view_header nav_header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand mobile_view_adjustlogo navbar_tags" href="index.html"></a>
        </div>
        <ul class="nav navbar-nav navbar-left">
        </ul>
        <ul class="nav navbar-nav navbar-right">
        </ul>
    </div>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="menu">
       <ul class="list">
          <li>
            <a href="{{ route('employees') }}" class="waves-effect waves-block menu-toggle">
              <i class="material-icons bgcolor">work</i>
              <span class="text-light employee_page">EMPLOYEES</span>
            </a>
          </li>
        </ul>
    </div>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  @yield('mainContent')
</div>
</body>
</html>
