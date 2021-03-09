<?php 
session_start();
$pages = "register";
include("header.php");
include('nav_bar.php');
?>

<script>
$(document).ready(function() {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  if (urlParams.get('error') == 1) {
    swal({
      title: "ล้มเหลว",
      text: "รหัสผู้ใช้งานซ้ำ กรุณาลองใหม่อีกครั้ง",
      icon: "error",
    })
  } else if (urlParams.get('success') == 1) {
    swal({
      title: "สำเร็จ",
      text: "สมัครสมาชิกสำเร็จ",
      icon: "success",
    })
  }


})
</script>

<div class="container">
  <!-- <div class="alert alert-success" role="alert">
    <h4> สมัครสมาชิก </h4>
  </div> -->
  <div class="card" style="border-radius:0px;min-height:calc(100vh - 226px);max-height:fit-content">
    <div class="pt-5 pb-2" align="center">
      <form action="api/register.php" method="post" class="form-horizontal" id="add">
        <h3 class="text-center text-info">สมัครสมาชิก</h3>
        <div class="form-group">
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label" align="left">
              ชื่อ-นามสกุล :
            </div>
            <div class="col-sm-3 col-md-4">
              <input type="text" name="name" required class="form-control" placeholder="ภาษาไทยหรืออังกฤษ">
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label" align="left">
              ที่อยู่ :
            </div>
            <div class="col-sm-3 col-md-4">
              <input type="text" name="address" required class="form-control" placeholder="ภาษาไทยหรืออังกฤษ">
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label" align="left">
              เบอร์โทร :
            </div>
            <div class="col-sm-3 col-md-4">
              <input type="text" name="tel" required class="form-control" placeholder="เช่น 091 999 9999">
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label" align="left">
              อีเมล์ :
            </div>
            <div class="col-sm-3 col-md-4">
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                placeholder="name@example.com">
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label" align="left">
              Username :
            </div>
            <div class="col-sm-2 col-md-4">
              <input type="text" autocomplete="off" name="username" required class="form-control"
                placeholder="ภาษาอังกฤษหรือตัวเลข">
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label" class="form-control" align="left">
              Password :
            </div>
            <div class="col-sm-2 col-md-4">
              <input type="password" autocomplete="off" name="password" required class="form-control"
                placeholder="อย่างน้อย 8 ตัว">
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-sm-2 col-md-4 control-label">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">สถานะ</label>
                </div>
                <select class="custom-select" name="role" id="inputGroupSelect01" required>

                  <option selected value="1">admin</option>
                  <option value="2">member</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group py-2">
            <div class="col-md-6">
              <button style='width:150px' type="submit" class="btn btn-primary">สมัครสมาชิก</button>
              <button style='width:150px' type="" class="btn btn-danger">ยกเลิก</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>

</body>

</html>