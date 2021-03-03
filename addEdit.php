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
      <div align='center'>
        <span class="h5" style="font-weight:bold;">เพิ่มห้องพัก</span>
      </div>
      <hr>

      <form action="api/addHotel.php" method="post">
        <div>
          <table>
            <tr>
              <td>รูปภาพ :</td>
              <td align="left" style="padding:5px;"><input name="files" type="file"></td>
            </tr>
            <tr>
              <td>ชื่อห้องพัก :</td>
              <td align="left" style="padding:5px;"><input name="name" type="text"></td>
            </tr>
            <tr>
              <td>รายละเอียดห้องพัก :</td>
              <td align="left" style="padding:5px;"><input name="details" type="text"></td>
            </tr>
            <tr>
              <td>ราคา :</td>
              <td align="left" style="padding:5px;"><input name="price" type="text"></td>
            </tr>
          </table>
          <div style="padding:15px;" align='center'>
            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
          </div>
        </div>
      </form>
    </div>
  </div>

</body>


<style>
table {
  width: 40%;
  border-collapse: collapse;
}

table,
tr,
td {
  border: 0px solid;
}
</style>

</html>