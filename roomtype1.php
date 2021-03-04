<?php 
include_once('Connections/conn.php');

?>
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

</head>

<body>
  <!-- NAV BAR -->
  <?php include('nav_bar.php'); ?>

  <?php include("slideShow.php"); ?>

  <div class="container">
    <br>

    <div class="alert alert-success" role="alert">
      <h4> แบบห้องพักประเภทที่ 1 </h4>
    </div>
    <!-- Card deck -->
    <div class="card-deck">
      <!-- Card -->
      <div class="card mb-4">
        <!--Card image-->
        <?php  
            include("api/getHotel.php");
            foreach($result as $item)
            {  
               
                
                ?>
        <div class="card" style="margin-top:15px;">
          <table>
            <tr>
              <td>
                <img width="300px" src="<?php echo "img/".$item['files'] ?>">
              </td>
              <td style="width:70%;vertical-align: top;">
                <div style="padding:15px;">
                  <div align='left'>
                    <span class="h6" style="font-weight:bold;"><?php echo $item['name']; ?></span>
                  </div>
                  <div style="margin-top:5px;">
                    <img width="15px" src="img/star.png"></img>
                    <img width="15px" src="img/star.png"></img>
                    <img width="15px" src="img/star.png"></img>
                  </div>
                  <hr>
                  <div>
                    <span style="font-weight:bold;">รายละอียดห้องพัก : </span>
                    <span>
                      <?php echo $item['details']; ?>
                    </span>
                  </div>
                </div>
              </td>
              <td style="vertical-align: bottom;" align='center'>
                <div style="margin-top:5px;">
                  <div style="width:100px;border:1px solid rgba(0,0,0,.2);padding:10px;">
                    <div style="font-size:12px;padding-bottom:5px;padding-left:5px;" align="left">
                      ราคา
                    </div>
                    <span style="color:green;font-weight:bold;"><?php echo $item['price']; ?> บาท</span>
                  </div>
                </div>
                <div align='center' style="width:150px;padding:15px;">

                  <button data-bs-toggle="modal" data-bs-target="#bookingDialog" item="<?php echo $item['id']; ?>"
                    class="btn-action btn-booking text-white"
                    style="width:100px;background-color:green;border:0px solid;padding:5px;">จองห้องพัก</button>
                </div>
              </td>
            </tr>
          </table>
        </div>
        <?php } ?>

        <!--Card content-->
        <div class="card-body">
          <!--Title-->


        </div>
      </div>
      <!-- Card -->

    </div>
    <!-- Card deck -->
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