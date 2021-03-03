<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="index.php">บ้านดินถิ่นวาปี</a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>



                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">ห้องพัก</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="roomtype1.php">ห้องพักแบบที่ 1</a>
                            <a class="dropdown-item" href="roomtype2.php">ห้องพักแบบที่ 2</a>

                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="room_booking.php">จองห้องพัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php">ติดต่อสอบถาม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="developer.php">ผู้จัดทำ</a>
                    </li>

                    <?php 
                    if(!isset($_SESSION['user_data'])){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                    </li>
                    <?php
                    }
                    ?>
                    </li>
                </ul>

            </div>
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
    </div>
</body>

</html>