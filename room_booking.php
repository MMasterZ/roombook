<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <!-- BODY -->
  <div class="container">
    <div class="" style="height:calc(100vh - 244px)">
      <div class="alert alert-success" role="alert">
        <span class="h4"> จองห้องพัก </span>
      </div>
      <div class="card" style="margin-top:15px;">
        <table>
          <tr>
            <td>
              <img width="200px" src="img/bandinB001.jpg">
            </td>
            <td style="width:70%;vertical-align: top;">
              <div style="padding:15px;">
                <div align='left'>
                  <span class="h6" style="font-weight:bold;">บ้านดินดารา</span>
                </div>
                <div style="margin-top:5px;">
                  <img width="15px" src="img/star.png"></img>
                </div>
                <hr>
                <div>
                  <span style="font-weight:bold;">รายละอียดห้องพัก : </span>
                  <span>xxx</span>
                </div>
              </div>

            </td>
            <td style="vertical-align: bottom;" align='center'>
              <div style="margin-top:5px;">
                <div style="width:100px;border:1px solid rgba(0,0,0,.2);padding:10px;">
                  <div style="font-size:12px;padding-bottom:5px;padding-left:5px;" align="left">
                    ราคา
                  </div>
                  <span style="color:green;font-weight:bold;">1,200 บาท</span>
                </div>
              </div>
              <div align='center' style="width:150px;padding:15px;">

                <button class="btn-action text-white"
                  style="width:100px;background-color:green;border:0px solid;padding:5px;">จองห้องพัก</button>
              </div>
            </td>
          </tr>
        </table>
      </div>

    </div>
  </div>

  <!-- FOOTER -->
  <?php include("footer.php"); ?>

</body>

</html>