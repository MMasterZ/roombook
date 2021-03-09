<div class="container">
  <nav class=" navbar navbar-expand-lg navbar-dark primary-color " style="padding:0px 15px;">
    <div>
      <span class="navbar-brand" style="font-size:28px;">บ้านดินถิ่นวาปี</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class=" collapse navbar-collapse" id="basicExampleNav" style="padding:15px 15px;">
      <ul class="navbar-nav">
        <li class="nav-item px-1">
          <a class="nav-link <?php if($pages == "home"){ echo "active"; } ?>" href="index.php">หน้าหลัก
          </a>
        </li>
        <li class="nav-item px-1">
          <a class="nav-link <?php if($pages == "booking"){ echo "active"; } ?>" href="room_booking.php">จองห้องพัก</a>
        </li>
        <li class="nav-item px-1">
          <a class="nav-link <?php if($pages == "contact"){ echo "active"; } ?>" href="contact.php">ติดต่อสอบถาม</a>
        </li>
        <li class="nav-item px-1">
          <a class="nav-link <?php if($pages == "developer"){ echo "active"; } ?>" href="developer.php">ผู้จัดทำ</a>
        </li>
        <?php 
            if(!isset($_SESSION['user_data'])){
            ?>
        <li class="nav-item px-1">
          <a class="nav-link  <?php if($pages == "login"){ echo "active"; } ?>" href="login.php">เข้าสู่ระบบ</a>
        </li>
        <?php
          }
        ?>
      </ul>
    </div>
  </nav>
</div>

<style>
.nav-link.active {
  background-color: white;
  color: #4285F4 !important;
}
</style>