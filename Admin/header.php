<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>  </title>
  <link rel = "icon" href = 
  https://www.davbathinda.com/wp-content/uploads/2018/03/cropped-logo_white.png
        type = "image/x-icon">
 <!-- icons  -->
 <style>
   @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css");
 </style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            
            <!-- Message End -->
        
            <!-- Message End -->
          </a>
         
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-decoration-none">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DAV Public School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-decoration-none">Abinash Mekap</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <a href="#" class="nav-link active">
               <i class="bi bi-person-circle"></i>
              <p>
                Admin
               
              </p>
            </a>
                  
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="insert_student.php" class="nav-link">  
                  <i class="bi bi-person-plus-fill"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Student</p> 
                  </a>

                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="fetch_student.php" class="nav-link">  
                  <i class="bi bi-eye-fill"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Student</p> 
                  </a>

                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="insert_faculty.php" class="nav-link">  
                  <i class="bi bi-people"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Faculty</p> 
                  </a>

                   
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="fetch_faculty.php" class="nav-link">  
                  <i class="bi bi-eye-fill"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Faculty</p> 
                  </a>

                   
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="insert_staff.php" class="nav-link">  
                  <i class="bi bi-people-fill"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Staff</p> 
                  </a>

                   
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="fetch_staff.php" class="nav-link">  
                  <i class="bi bi-eye-fill"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Staff</p> 
                  </a>

                   
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="insert_class.php" class="nav-link">  
                  <i class="bi bi-person-video3"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Class</p> 
                  </a>

                   
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="fetch_class.php" class="nav-link">  
                  <i class="bi bi-eye-fill"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View class</p> 
                  </a>
                  <li class="nav-item menu-open">
                 <li class="nav-item">
                  <a href="../login.php" class="nav-link">  
                  <i class="bi bi-box-arrow-left"></i>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p> 
                  </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
      
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

 