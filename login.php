<?php 
session_start();
$pages = "login";
include("header.php");
include('nav_bar.php');
?>
<div class="container">
  <div class="card" style="border-radius:0px;min-height:calc(100vh - 226px);max-height:fit-content">
    <div id="login">
      <h3 class="text-center text-white pt-5">Login form</h3>
      <div id="login-row" class="row justify-content-center align-items-center pb-5">
        <div id="login-column" class="col-md-4">
          <div id="login-box" class="col-md-12">
            <form id="login-form" class="form" action="api/checkLogin.php" method="post">
              <h3 class="text-center text-info">เข้าสู่ระบบ</h3>
              <div class="form-group">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="text" name="password" id="password" class="form-control" required>
              </div>
              <div class="form-group p-3" align='center'>
                <input type="submit" name="submit" class="btn btn-info btn-md" value="login">
              </div>
              <div id="register-link" class="text-right" align='center'>
                <a href="register.php" class="text-info">สมัครสมาชิก</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="alert alert-success" role="alert">
    <h4>เข้าสู่ระบบ</h4>
  </div> -->
</div>

<?php include("footer.php"); ?>
</body>

</html>