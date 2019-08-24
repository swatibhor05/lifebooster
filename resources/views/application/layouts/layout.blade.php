<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuesax - Bootstrap HTML admin template</title>
    @include('application.layouts.styles')

  </head>
  <!-- END: Head-->
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    @include('application.layouts.left_sidebar')
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <!-- BEGIN: Header-->
      <div class="content-overlay"></div>
      @include('application.layouts.header')
      
      <!-- END: Header-->
      <div class="content-wrapper">
          @section('content')
          @show
      </div>
    </div>
    <!-- END: Content-->
   
    <!-- Buynow Button-->
   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
   
    <!-- END: Footer-->
    
    @include('application.layouts.scripts')
  <center><font size="2"></font></center></body>
  <!-- END: Body-->
</html>