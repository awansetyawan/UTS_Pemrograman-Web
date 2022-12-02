
<ul class="nav flex-column pt-3 pt-md-0">
  <li class="nav-item">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link d-flex align-items-center justify-content-center">
      <span class="sidebar-icon text-center">
        <h3>Galeri</h3>
        <h3>Gitar</h3>
      </span>
    </a>
  </li>
  <li class="nav-item  active ">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link">
      <span class="sidebar-icon">
        <i class="fa-solid fa-gauge-high"></i>
      </span> 
      <span class="sidebar-text">Dashboard</span>
    </a>
  </li>
  <?php if($_SESSION['role'] == 'admin'): ?>
    <li class="nav-item">
    <a href="../../admin/order/create.php" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-plus"></i></span>
        <span class="sidebar-text">Tambah Pembelian</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/order" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-shopping-bag"></i></span>
        <span class="sidebar-text">Pembelian</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/inventory" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-box"></i></span>
        <span class="sidebar-text">Inventaris</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <span
      class="nav-link  collapsed  d-flex justify-content-between align-items-center"
      data-bs-toggle="collapse" data-bs-target="#submenu-components">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-database"></i></span> 
        <span class="sidebar-text">Data Master</span>
      </span>
      <span class="link-arrow"><i class="fa-solid fa-arrow-right"></i></span>
    </span>
    <div class="multi-level collapse " role="list"
      id="submenu-components" aria-expanded="false">
      <ul class="flex-column nav">
        <li class="nav-item">
          <a class="nav-link"
            href="../../admin/guitar">
            <span class="sidebar-text">Gitar</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../../admin/user">
            <span class="sidebar-text">Pengguna</span>
          </a>
        </li>
      </ul>
    </div>
  </li>
  <?php else: ?>
  <li class="nav-item">
    <a href="../../user/order" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-shopping-bag"></i></span>
        <span class="sidebar-text">Pembelian</span>
      </span>
    </a>
  </li>
  <?php endif ?>
  
</ul>