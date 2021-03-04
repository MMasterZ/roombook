<?php session_start(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>บ้านดินถิ่นวาปี</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <?php  include('nav_bar.php');?>

  <?php include("slideShow.php"); ?>

  <div class="container">

    <?php if(isset($_SESSION['user_data'])){ ?>
    <div class="alert alert-success" role="alert">
      <span class="h4" style="color:green"> ยินดีต้อนรับ </span>
      <span><?php echo $_SESSION['user_data']; ?></span>

    </div>
    <?php } ?>
    <!-- Card deck -->
    <div class="card brx " style="height:500px;">
      <div class="row justify-content-center p-3">
        <div class="col m-2 " align='center'>
          <div class="p-3" align="left">
            <p class="h4">
              บ้านดินถิ่นวาปี รีสอร์ท (Wapi Pathum Earthen House Resort)
            </p>
            <br />

            <br>
            <p>

              <span class="h5"> รายละอียดรีสอร์ท :</span> บ้านดินถิ่นวาปี รีสอร์ท ตั้งอยู่ในวาปีปทุม ใช้เวลาเดินทางเพียง
              5
              นาทีจากข่นส่ง มีบริการอินเทอร์เน็ตไร้สาย
              (WiFi) ฟรี และผู้เข้าพักสามารถเพลิดเพลินกับอาหารไทยที่ห้องอาหารในสถานที่

              ห้องพักปรับอากาศรวมเคเบิลทีวีจอแบน ตู้เย็นและกาต้มน้ำไฟฟ้า ตู้นิรภัย
              มีเครื่องใช้ในห้องน้ำฟรีและมีฝักบัวในห้องน้ำส่วนตัว

              ที่พักมีห้องออกกำลังกาย ที่จอดรถฟรี และแผนกต้อนรับ 24 ชั่วโมง
              โรงเรียนวาปีปุทมและสนามกีฬาอยู่ห่างจากรีสอร์ท 10 นาที
              <br>
              <br>
              คู่รักชอบทำเลนี้เป็นพิเศษ โดยให้คะแนน 8.3 สำหรับการเข้าพัก 2 ท่าน

              <br>
              <br>
              * รีสอร์ทกำหนดให้ต้องยกเลิกการจองก่อนเช็คอิน 24 ชั่วโมง
              โปรดดูรายละเอียดที่จองห้องพัก
            </p>

          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- FOOTER -->
  <?php include("footer.php"); ?>


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>

</html>