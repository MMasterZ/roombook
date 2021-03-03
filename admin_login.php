<!DOCTYPE html>
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

<body class='bg'>

    <form action="api/adminLogin.php" method="post">
        <div class="login-container">
            <div align="center" style='padding:10px' class='h2'>Administrator</div>
            <div align="center" style='width:250px;margin:auto'>
                <input name="username" class="form-control" type="text" placeholder='username'>
            </div>
            <div align="center" style='width:250px;margin:auto;padding-top:20px'>
                <input name="password" class="form-control" type="text" placeholder='password'>
            </div>
            <div align="center" style="padding-top:20px">
                <button type='submit' type="button" class="btn btn-primary">เข้าสู่ระบบ</button>
            </div>
        </div>
    </form>
</body>


<style>
.brx {
    border: 1px solid red
}

.bg {
    background-image: url('img/1.jpg');
    background-size: cover
}

.login-container {
    width: 500px;
    height: 280px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 3px 3px 3px 3px grey;
    background-color: white;
    padding: 20px;
}
</style>

</html>