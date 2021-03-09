<?php 
session_start();
$pages = "developer";
include("header.php");
?>

<!-- NAV BAR -->
<?php include('nav_bar.php'); ?>
<!-- BODY -->
<div style="height:calc(100vh - 244px)" align="center">
  <div class="row  container justify-content-center" style="padding-top:20px">
    <div style="padding:10px">
      <div class="card" style="width: 18rem;">
        <img style="height:280px" src="img/img1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">พลอยไพลินทร์ ตั้งประภาพร</h5>
          <p class="card-text">ตำแหน่ง : ออกแบบ UX / UI</p>
        </div>
      </div>
    </div>

    <div style="padding:10px">
      <div class="card" style="width: 18rem;">
        <img style="height:280px" src="img/img2.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">พลอยไพลินทร์ ตั้งประภาพร</h5>
          <p class="card-text">ตำแหน่ง : พัฒนาส่วน Admin</p>
        </div>
      </div>
    </div>


  </div>


</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>
</body>

</html>