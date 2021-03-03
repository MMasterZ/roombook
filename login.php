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


<body>
    <html>


    <!-- NAV BAR -->
    <?php include('nav_bar.php'); ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4>เข้าสู่ระบบ</h4>
        </div>
        <!-- Card deck -->
        <div class="card-deck" style='height:calc(100vh - 330px)'>
            <!-- Card -->
            <div class="card mb-4">
                <!--Card image-->
                <div class="view overlay">
                    <br>
                    <html>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
                        id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <!------ Include the above in your HEAD tag ---------->

                    <div id="login">
                        <h3 class="text-center text-white pt-5">Login form</h3>
                        <div class="container">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12">
                                        <form id="login-form" class="form" action="api/checkLogin.php" method="post">
                                            <h3 class="text-center text-info">เข้าสู่ระบบ</h3>
                                            <div class="form-group">
                                                <label for="username" class="text-info">Username:</label><br>
                                                <input type="text" name="username" id="username" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="text-info">Password:</label><br>
                                                <input type="text" name="password" id="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="remember-me" class="text-info"><span>Remember
                                                        me</span> <span><input id="remember-me" name="remember-me"
                                                            type="checkbox"></span></label><br>
                                                <input type="submit" name="submit" class="btn btn-info btn-md"
                                                    value="submit">
                                            </div>
                                            <div id="register-link" class="text-right">
                                                <a href="register.php" class="text-info">สมัครสมาชิก</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>

    </html>
</body>