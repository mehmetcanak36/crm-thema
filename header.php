<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CRM Admin Panel</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css">
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css">
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css">
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css">
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css">
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css">
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/kuvars-mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="assets/dist/img/kuvars.jpg" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search..">
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                     
                     <!-- Messages -->
                     
                     <!-- Notifications -->
                     
                     <!-- Tasks -->
                     
                     <!-- Help -->
                     
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu">
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-user"></i> Kullanıcı Profili</a>
                           </li>
                           <li><a href="login.html">
                              <i class="fa fa-sign-out"></i> Çıkış Yap</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>Müşteriler</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="add-customer.php">MÜŞTERİ EKLE</a></li>
                        <li><a href="clist.html">LİSTELE</a></li>
                        <li><a href="group.html">GRUPLANDIR</a></li>
                     </ul>
                  </li>
                  
   
                  
                  <li>
                     <a href="company.html">
                     <i class="fa fa-home"></i> <span>Kurumlar</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="user.html">
                     <i class="fa fa-user-circle"></i><span>Kullanıcılar</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li>
                     <a href="department.html">
                     <i class="fa fa-tree"></i><span>Departmanlar</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-list"></i> <span>Diğer Sayfalar</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="login.html">GİRİŞ</a></li>
                        <li><a href="register.html">KAYDOL</a></li>
                        <li><a href="profile.html">PROFİL</a></li>
                        <li><a href="forget_password.html">PAROLLAMI UNUTTUM</a></li>
 
                     </ul>
                  </li>
                  
                  
                  
       
                  
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         
         <!-- /.content-wrapper -->
  