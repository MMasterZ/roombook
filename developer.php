<?php 
session_start();
$pages = "developer";
include("header.php");
include("nav_bar.php");
?>

<div class="container" align="center">
  <div class="card" style="min-height:calc(100vh - 250px);border-radius:0px;">
    <div class="row justify-content-center py-5">
      <div class="col-12 pb-5 px-5">
        <h3 class="text-center text-info">ผู้จัดทำ</h3>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img style="height:280px" src="img/img1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">นางสาว อินทิรา แก้วธานี</h5>
            <hr>
            <p class="card-text">ผู้จัดทำ</p>
          </div>
        </div>
      </div>
      <!-- <div class="col-1 ">
        <div style="width:1px;height:100%;border:1px solid #eee;"></div>
      </div> -->
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img style="height:280px" src="img/img2.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">นางสาว จารุวรรณ ตราไชย</h5>
            <hr>
            <p class="card-text">ผู้จัดทำ</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>
</body>

</html>