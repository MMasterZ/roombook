<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">
</head>

<body>

  <!-- Header Bar -->
  <div class="container ">
    <div class="bg-primary" style="padding:10px 15px;">
      <div style="width:50%;padding:5px;">
        <a href="/roombook/index.php">
          <button class="btn-action bg-primary" style="border-radius:5px;border:0px;padding:5px;">

            <span style="font-size:25px;" class="fas fa-home text-white"></span>
          </button>
        </a>
      </div>
    </div>

    <div class="card" style="padding:15px;">
      <div style="display:flex;">
        <div style="width:50%;padding:0px 15px;">
          <span class="h5" style="font-weight:bold;">รายการห้องพัก</span>
        </div>
        <div style="width:50%;padding:0px 10px;" align="right">
          <a href="/roombook/addEdit.php">
            <button class="btn-action bg-primary" style="width:35px;height:35px;border-radius:5px;border:0px;">

              <span class="fas fa-plus text-white"></span>
            </button>
          </a>

        </div>
      </div>

      <div style="padding:10px;">
        <table>
          <tr>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

</body>


</html>