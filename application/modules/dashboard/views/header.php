<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css') ?>">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.sea.css') ?>" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/css/style.sea.css') ?>">
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="<?php echo base_url('Admin/admin')?>" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Halaman&nbsp;</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
          </div>
          <div class="right-menu list-inline no-margin-bottom">
            <!-- Log out               -->
            <div class="list-inline-item logout">
              <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Apa yang anda cari.." aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="glyphicon glyphicon-search"></i> Cari 
                      </button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="<?php echo base_url('gambar/user.png')?>" class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin Name</h1>
            <p>Web Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
          <li class="<?php if($this->uri->segment(2)=="admin"){echo("active");}?>"><a href="<?php echo base_url('Admin/admin')?>">Home </a></li>
          <li class="<?php if($this->uri->segment(2)=="upload"){echo("active");}?>"><a href="<?php echo base_url('Admin/upload')?>">Upload File </a></li>
          <li class="<?php if($this->uri->segment(2)=="customer"){echo("active");}?>"><a href="<?php echo base_url('Admin/customer')?>">Customer </a></li>
          <li class="<?php if($this->uri->segment(2)=="product"){echo("active");}?>"><a href="<?php echo base_url('Admin/product')?>">Product </a></li>
          <li class="<?php if($this->uri->segment(2)=="akustik" || $this->uri->segment(2)=="elektrik" || $this->uri->segment(2)=="bass"){echo("dropdown show active");}?>">
            <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">Category </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li class="<?php if($this->uri->segment(1)=="1"){echo("active");}?>"><a href="<?php echo base_url('Admin/akustik')?>">Akustik</a></li>
              <li class="<?php if($this->uri->segment(1)=="2"){echo("active");}?>"><a href="<?php echo base_url('Admin/elektrik')?>">Elektrik</a></li>
              <li class="<?php if($this->uri->segment(1)=="3"){echo("active");}?>"><a href="<?php echo base_url('Admin/bass')?>">Bass</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('Admin/login/logout')?>">Logout </a></li>
        </ul>
      </nav>