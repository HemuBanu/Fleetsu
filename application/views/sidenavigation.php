
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashborad') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="<?= base_url('template/logo.png') ?>" class="img-fluid" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-3"> Tasty Food </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($this->uri->segment(1)=="dashboard") {echo "active";} ?> ">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Meals -->
      <li class="nav-item <?php if($this->uri->segment(1)=="meal") {echo "active";}?> ">
        <a class="nav-link " href="<?= base_url('meal') ?>">
          <i class="fas fa-utensils"></i>
          <span> Meals </span></a>
      </li>

      <!-- Nav Item - Country -->
      <li class="nav-item <?php if($this->uri->segment(1)=="country") {echo "active";} ?> ">
        <a class="nav-link" href="<?= base_url('country') ?>">
          <i class="fas fa-globe-asia"></i>
          <span> Country </span></a>
      </li>

      <!-- Nav Item - Ingredients -->
      <li class="nav-item <?php if($this->uri->segment(1)=="ingredient") {echo "active";} ?> ">
        <a class="nav-link" href="<?= base_url('ingredient') ?>">
          <i class="fas fa-balance-scale"></i>
          <span> Ingredient </span></a>
      </li>

      <!-- Nav Item - Category -->
      <li class="nav-item <?php if($this->uri->segment(1)=="category") {echo "active";} ?> ">
        <a class="nav-link" href="<?= base_url('category') ?>">
          <i class="fas fa-list-ol"></i>
          <span> Category </span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
