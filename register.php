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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

    <script>
    $(document).ready(function() {
        // <?php 
        // if($_GET['error'] == 1)
        // {
        // ?>

        // <?php
        // } ?>

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        console.log(urlParams.get('error'));

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
    <html>
    <?php include('nav_bar.php'); ?>

    <div class="container">
        <!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                            alt="First slide">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Light mask</h3>
                        <p>First text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                            alt="Second slide">
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Strong mask</h3>
                        <p>Secondary text</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                            alt="Third slide">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Slight mask</h3>
                        <p>Third text</p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>
    <div class="container">
        <br>
        <div class="alert alert-success" role="alert">
            <h4> สมัครสมาชิก </h4>
        </div>
        <!-- Card deck -->
        <div class="card-deck">
            <!-- Card -->
            <div class="card mb-4">
                <!--Card image-->
                <div class="" align="center">
                    <form action="api/register.php" method="post" class="form-horizontal" id="add">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label" align="left">
                                    ชื่อ-นามสกุล :
                                </div>
                                <div class="col-sm-3 col-md-6">
                                    <input type="text" name="name" required class="form-control"
                                        placeholder="ภาษาไทยหรืออังกฤษ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label" align="left">
                                    ที่อยู่ :
                                </div>
                                <div class="col-sm-3 col-md-6">
                                    <input type="text" name="address" required class="form-control"
                                        placeholder="ภาษาไทยหรืออังกฤษ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label" align="left">
                                    เบอร์โทร :
                                </div>
                                <div class="col-sm-3 col-md-6">
                                    <input type="text" name="tel" required class="form-control"
                                        placeholder="เช่น 091 999 9999">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label" align="left">
                                    อีเมล์ :
                                </div>
                                <div class="col-sm-3 col-md-6">
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label" align="left">
                                    Username :
                                </div>
                                <div class="col-sm-2 col-md-6">
                                    <input type="text" autocomplete="off" name="username" required class="form-control"
                                        placeholder="ภาษาอังกฤษหรือตัวเลข">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label" class="form-control" align="left">
                                    Password :
                                </div>
                                <div class="col-sm-2 col-md-6">
                                    <input type="password" autocomplete="off" name="password" required
                                        class="form-control" placeholder="อย่างน้อย 8 ตัว">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2 col-md-6 control-label">
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
                            <div class="form-group">
                                <div class="col-md-6">
                                    <button style='width:150px' type="submit"
                                        class="btn btn-primary">สมัครสมาชิก</button>
                                    <button style='width:150px' type="" class="btn btn-danger">ยกเลิก</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <?php include("footer.php"); ?>

    </html>

</body>

</html>