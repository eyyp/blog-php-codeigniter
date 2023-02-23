<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
     <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(''); ?>">
        <div class="sidebar-brand-icon ">
                <img src="<?php echo base_url('assets/admin/');?>img/iconavatar.png" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">
            <?php $mod = $this->session->userdata('info'); 
                  echo $mod->nameSorname; ?>
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/AdminPanel/adminpanel'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/AdminPanel/posts');?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Posts</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/AdminPanel/categorys');?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Category</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/AdminPanel/navbar');?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Navbar</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/AdminPanel/messages');?>">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Messages</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>