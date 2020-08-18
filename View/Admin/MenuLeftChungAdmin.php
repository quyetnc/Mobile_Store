
      <!-- Heading -->
      <div class="sidebar-heading">
        Sản Phẩm
      </div>

      <!-- product -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php?mod=Product&act=Them" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Thêm Sản Phẩm Mới</span>
        </a>
     

<?php  
  	foreach($cate as $rowCate)
	{
        $muon= str_repeat( 'Hello', $rowCate['MaLoai'] );
        echo "<li class=\"nav-item\">
          <a class=\"nav-link collapsed\" href=\"admin.php?mod=Product&act=QuanLy&idCate=".$rowCate['MaLoai']."\" data-toggle=\"collapse\" data-target=\"#".$muon."\"
            aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
            <i class=\"fas fa-fw fa-wrench\"></i>";


		echo "</span>&nbsp;&nbsp;".$rowCate['TenLoai']."</span>"; 
  
    echo "</a>
    <div id=\"".$muon."\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">Hãng : ".$rowCate['TenLoai']."</h6>
    ";
    echo " <a class=\"collapse-item\" href=\"admin.php?mod=Product&act=QuanLy&idCate=".$rowCate['MaLoai']."\"> Tất Cả Hãng </a>"	;
		foreach($nsx as $rowNSX)
		{
			echo " <a class=\"collapse-item\" href=\"admin.php?mod=Product&act=QuanLy&idCate=".$rowCate['MaLoai']."&idNSX=".$rowNSX['MaNSX']."\">".$rowNSX['TenNSX']." </a>"	;
		}
		echo "  </div>
    </div>
    </li>";		
	}
  ?>
 <!---------------------------------------------------Order-------------------------------------------------->

   <!-- Divider -->
   <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Hóa Đơn
</div>

  
      <!-- Nav Item - Bảng -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php?mod=Order&act=QuanLy">
          <i class="fas fa-fw fa-table"></i>
          <span>Quản Lý Hóa Đơn (FULL)</span></a>
      </li>

<!-- Nav Item - Trang Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
    aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Phân Loại Hóa Đơn</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
     
      <a class="collapse-item" href="admin.php?mod=Order&act=QuanLy&id=1">Đã giao</a>
      <a class="collapse-item" href="admin.php?mod=Order&act=QuanLy&id=2">Chưa giao</a>
      <a class="collapse-item" href="admin.php?mod=Order&act=QuanLy&id=3">Đang giao</a>
      <a class="collapse-item" href="admin.php?mod=Order&act=QuanLy&id=4">Đã hủy</a>
    </div>
  </div>
</li>

 <!---------------------------------------------------User-------------------------------------------------->

   <!-- Divider -->
   <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  User
</div>

<!-- Nav Item - Trang Collapse Menu -->
<li class="nav-item">
        <a class="nav-link" href="admin.php?mod=User&act=QuanLy" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Danh Sách User</span>
        </a>
<!---------------------------------------------------Loại SP - NSX-------------------------------------------------->

   <!-- Divider -->
   <hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Loại SP - NSX
  </div>

<!-- Nav Item - Loại -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#loainha" aria-expanded="true"
    aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Loại Sản Phẩm</span>
  </a>
  <div id="loainha" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
     
      <a class="collapse-item" href="admin.php?mod=Category&act=Them">Thêm Loại Sản Phẩm</a>
      <a class="collapse-item" href="admin.php?mod=Category&act=QuanLy">Danh Sách Loại Sản Phẩm</a>
    </div>
  </div>
</li>

<!-- Nav Item - NSX -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#nsxnha" aria-expanded="true"
    aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Nhà Sản Xuất</span>
  </a>
  <div id="nsxnha" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
       <a class="collapse-item" href="admin.php?mod=NSX&act=Them">Thêm Nhà Sản Xuất</a>
      <a class="collapse-item" href="admin.php?mod=NSX&act=QuanLy">Danh Sách Các NSX</a>
    </div>
  </div>
</li>
<!---------------------------------------------------Loại SP-------------------------------------------------->
