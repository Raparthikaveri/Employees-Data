<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title></title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?php echo e(asset('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/color_skins.css')); ?>">

<!-- JQuery DataTable Css -->

<!-- Bootstrap Select Css -->

<!-- Dropzone Css -->

<!-- Morris Css -->

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
    @font-face
    {
      font-family: Gotham Medium;
      src: url('');
    }

   h4{
        font-family: "Gotham Medium", Sans-serif;
        font_size: 24px!important;
   }
   strong
   {
        font-family: "Gotham Medium", Sans-serif;
        font-size: 15px;
   }
   a{
       font-family: "Gotham Medium", Sans-serif;
        font-size: 15px;
   }
   .menu_hover:hover
   {
       color:#d0b26c!important;
   }
   @media only screen and (max-width: 1200px)
    {
        .mobile_view_adjustlogo
        {
           width:70%!important;
        }
        .ls-closed .bars
        {
            color:#d0b26c !important;
        }
        .mobile_view_header
       {
           width:40%!important;
           padding:0px!important;
           background-color:#333!important;
       }
    }

   @media only screen and (max-width: 600px)
    {
       .mobile_view_adjustlogo
       {
           text-align:right!important;
           margin:0px!important;
           width:99%!important;
       }
       .mobile_view_logoimg
       {
           background-color:#333!important;
           width:70%!important;
       }
       .mobile_view_header
       {
           width:40%!important;
           padding:0px!important;
       }
       .ls-closed .bars
       {
           color:#d0b26c !important;
       }
       .ls-closed .bars:after, .ls-closed .bars:before
       {
            top: 8px!important;
            left: 7px!important;
       }
    }


</style>


</head>
<body class="theme-cyan bg-white">
<!-- Page Loader -->


<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12 mobile_view_adjust">
        <div class="navbar-header mobile_view_header" style="    background-color: #2fc7d2;">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand mobile_view_adjustlogo" href="index.html" style="text-align: center;width: 107%;background-color: #333333;margin-left: -16px;"></a>
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
                          <a href="<?php echo e(route('employees')); ?>" class="waves-effect waves-block menu-toggle"><i class="material-icons bgcolor">work</i><!-- <i class="zmdi zmdi-apps"></i> --><span class="text-light employee_page">EMPLOYEES</span> </a>



                    </li>





        </ul>
    </div>
</aside>

<!-- Right Sidebar -->




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php echo $__env->yieldContent('mainContent'); ?>
    </div>




</body>
</html>
<?php /**PATH C:\xampp\htdocs\employee-data\resources\views/master.blade.php ENDPATH**/ ?>