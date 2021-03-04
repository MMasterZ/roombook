<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Document</title>
</head>
<script>
$(document).ready(function() {
    $("#user_info").click(function() {
        window.location.href = "/roombook/admin.php?menu=1"
    })
    $("#room_status").click(function() {
        window.location.href = "/roombook/admin.php?menu=2"
    })
    $("#manage_room").click(function() {
        window.location.href = "/roombook/admin.php?menu=3"
    })

})
</script>

<body class='bg'>
    <!-- LAYOUT -->
    <div class="">
        <div class="row align-items-start">
            <div class="" style='width:320px;background-color:black;height:99vh;color:white'>
                <div align="center">
                    Admin Menu xx
                </div>
                <br>
                <div style='padding:10px'>
                </div>
                <div style='padding:10px'>
                    <button id="user_info" type="button" class="btn btn-outline-secondary"
                        style='width:100%'>ข้อมูลลูกค้า</button>
                </div>
                <div style='padding:10px'>
                    <button id="room_status" type="button" class="btn btn-outline-secondary"
                        style='width:100%'>ตรวจสอบการจองห้องพัก</button>
                </div>
                <div style='padding:10px'>
                    <button id="manage_room" type="button" class="btn btn-outline-secondary"
                        style='width:100%'>จัดการห้องพัก</button>
                </div>

            </div>
            <div class="col " align="center">
                <?php
if($_GET['menu'] == 1)
{
    include("admin/user_info.php");
}else if ($_GET['menu'] == 2){
    include("admin/room_status.php");
}else if ($_GET['menu'] == 3){
    include("admin/manage_room.php");
}
 ?>
            </div>

        </div>
    </div>
</body>

<style>
.bg {
    background-image: url('img/1.jpg');
    background-size: cover
}

.brx {
    border: 1px solid red
}
</style>

</html>