<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="js/jquery.min.js"></script>

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <div class="card" style="padding:15px;margin-top:15px;">
      <div align='center' style="position:relative;">
        <span class="h5" style="font-weight:bold;">จัดการห้องพัก</span>
        <div style="position:absolute;right:0;top:0;">
          <button type="button" class="btn-outline-primary bg-primary text-white"
            style="width:30px;height:30px;border-radius:50%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="fas fa-plus"></span>
          </button>
        </div>
      </div>
      <hr>

      <?php 

        include("api/getHotel.php");
        // echo ;
        foreach($result as $row)
        {

        ?>

      <div class="card" style="margin-top:15px;">
        <table>
          <tr>
            <td style="width:250px;">
              <img width="250px" src="<?php echo "img/".$row['files']; ?> ">
            </td>
            <td style="width:fit-content;vertical-align: top;">
              <div style="padding:15px;">
                <div align='left'>
                  <span class="h6" style="font-weight:bold;"><?php echo $row['name'] ?></span>
                </div>
                <div style="margin-top:5px;">
                  <img width="15px" src="img/star.png"></img>
                  <img width="15px" src="img/star.png"></img>
                  <img width="15px" src="img/star.png"></img>
                </div>
                <hr>
                <div>
                  <span style="font-weight:bold;">รายละอียดห้องพัก : </span>
                  <span><?php echo $row["details"] ?></span>
                </div>
              </div>
            </td>
            <td style="width:170px;vertical-align: center;" align='center'>
              <div style="margin-top:5px;">
                <div style="width:150px;border:1px solid rgba(0,0,0,.2);padding:10px;">
                  <div style="font-size:12px;padding-bottom:5px;padding-left:5px;" align="left">
                    ราคา
                  </div>
                  <div align="left" style="padding:0px 5px;">
                    <span style="color:green;font-weight:bold;"><?php echo $row["price"]." บาท" ?></span>
                  </div>
                </div>
              </div>
            </td>
            <td style="width:50px;vertical-align: center;" align='center'>
              <button type="button" class="btn-outline-green text-white"
                style="width:30px;height:30px;border-radius:50%;background-color:green;" data-bs-toggle="modal"
                data-bs-target="<?php echo "#editModel".$row['id'] ?>">
                <span class="fas fa-edit"></span>
              </button>
            </td>
          </tr>
        </table>
      </div>

      <div class="modal fade" id="editModel<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">แก้ไขห้องพัก</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/editHotel.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <div class="row pb-2">
                  <div align="left" class="py-3">
                    <img style="width:300px" src="<?php echo "img/".$row['files'] ?>" alt="">
                  </div>
                  <div class="col-4" align="left">รูปภาพ :</div>
                  <div class="col" align="left">
                    <input name="files" type="file" accept="image/png, image/jpeg">
                    <input name="old_files" value="<?php echo $row['files'] ?>" style="display:none;">
                  </div>
                </div>
                <div class="row py-2">
                  <div class="col-4" align="left">ชื่อห้องพัก :</div>
                  <div class="col" align="left">
                    <input name="name" type="text" value="<?php echo $row["name"] ?>" required>
                  </div>
                </div>
                <div class="row py-2">
                  <div class="col-4" align="left">รายละเอียดห้องพัก :</div>
                  <div class="col" align="left">
                    <textarea name="details" cols="30" rows="10" required>
                      <?php echo $row["details"]; ?>
                    </textarea>
                  </div>
                </div>
                <div class="row py-2">
                  <div class="col-4" align="left">ราคา :</div>
                  <div class="col" align="left"><input name="price" type="number" value="<?php echo $row["price"] ?>"
                      required>
                  </div>
                </div>
              </div>
              <input name="id" value="<?php echo $row['id'] ?>" style="display:none;">
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <input type="submit" name="submit" class="btn btn-info btn-md" value="แก้ไข">
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php 
        }
      ?>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่มห้องพัก</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/addHotel.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <div class="row py-2">
                  <div class="col-4" align="left">รูปภาพ :</div>
                  <div class="col" align="left"><input name="files" type="file" required></div>
                </div>
                <div class="row py-2">
                  <div class="col-4" align="left">ชื่อห้องพัก :</div>
                  <div class="col" align="left"><input name="name" type="text" required></div>
                </div>
                <div class="row py-2">
                  <div class="col-4" align="left">รายละเอียดห้องพัก :</div>
                  <div class="col" align="left"><input name="details" type="text" required></div>
                </div>
                <div class="row py-2">
                  <div class="col-4" align="left">ราคา :</div>
                  <div class="col" align="left"><input name="price" type="number" required></div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <input type="submit" name="submit" class="btn btn-info btn-md" value="บันทึก">
              </div>
            </form>
          </div>
        </div>
      </div>


    </div>
  </div>
</body>

</html>