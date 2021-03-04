<?php 
session_start();
include('./Connections/conn.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- jQuery -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
</head>
<style>
input {
    padding: 22px 15px !important;
    border: 1px solid #CFD8DC !important;
    border-radius: 4px !important;
    box-sizing: border-box;
    background-color: #fff !important;
    color: #000 !important;
    font-size: 16px !important;
    letter-spacing: 1px;
    position: relative
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #1976D2 !important;
    outline-width: 0
}

.fa-calendar {
    position: absolute;
    top: 13px;
    font-size: 20px;
    color: #1976D2;
    z-index: 1000
}

#fa-1 {
    left: calc(50% - 40px)
}

#fa-2 {
    left: calc(100% - 40px)
}

.form-control-placeholder {
    position: absolute;
    top: -10px !important;
    padding: 12px 2px 0 2px;
    opacity: 0.5
}

#end-p {
    left: calc(50% + 4px)
}

.form-control:focus+.form-control-placeholder,
.form-control:valid+.form-control-placeholder {
    font-size: 95%;
    top: 10px;
    transform: translate3d(0, -100%, 0);
    opacity: 1
}

::placeholder {
    color: #BDBDBD;
    opacity: 1
}

:-ms-input-placeholder {
    color: #BDBDBD
}

::-ms-input-placeholder {
    color: #BDBDBD
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.datepicker {
    background-color: #fff;
    border-radius: 0 !important;
    align-content: center !important;
    padding: 0 !important
}

.datepicker-dropdown {
    top: 180px !important;
    left: calc(50% - 173.5px) !important;
    border-right: #1976D2;
    border-left: #1976D2
}

.datepicker-dropdown.datepicker-orient-left:before {
    left: calc(50% - 6px) !important
}

.datepicker-dropdown.datepicker-orient-left:after {
    left: calc(50% - 5px) !important;
    border-bottom-color: #1976D2
}

.datepicker-dropdown.datepicker-orient-right:after {
    border-bottom-color: #1976D2
}

.datepicker table tr td.today,
span.focused {
    border-radius: 50% !important;
    background-image: linear-gradient(#FFF3E0, #FFE0B2)
}

thead tr:nth-child(2) {
    background-color: #1976D2 !important
}

thead tr:nth-child(3) th {
    font-weight: bold !important;
    padding: 20px 10px !important;
    color: #BDBDBD !important
}

tbody tr td {
    padding: 10px !important
}

tfoot tr:nth-child(2) th {
    padding: 10px !important;
    border-top: 1px solid #CFD8DC !important
}

.cw {
    font-size: 14px !important;
    background-color: #E8EAF6 !important;
    border-radius: 0px !important;
    padding: 0px 20px !important;
    margin-right: 10px solid #fff !important
}

.old,
.day,
.new {
    width: 40px !important;
    height: 40px !important;
    border-radius: 0px !important
}

.day.old,
.day.new {
    color: #E0E0E0 !important
}

.day.old:hover,
.day.new:hover {
    border-radius: 50% !important
}

.old-day:hover,
.day:hover,
.new-day:hover,
.month:hover,
.year:hover,
.decade:hover,
.century:hover {
    border-radius: 50% !important;
    background-color: #eee
}

.active {
    border-radius: 50% !important;
    background-image: linear-gradient(#1976D2, #1976D2) !important;
    color: #fff !important
}

.range-start,
.range-end {
    border-radius: 50% !important;
    background-image: linear-gradient(#1976D2, #1976D2) !important
}

.range {
    background-color: #E3F2FD !important
}

.prev,
.next,
.datepicker-switch {
    border-radius: 0 !important;
    padding: 10px 10px 10px 10px !important;
    font-size: 18px;
    opacity: 0.7;
    color: #fff
}

.prev:hover,
.next:hover,
.datepicker-switch:hover {
    background-color: inherit !important;
    opacity: 1
}

@media screen and (max-width: 726px) {
    .datepicker-dropdown.datepicker-orient-right:before {
        right: calc(50% - 6px)
    }

    .datepicker-dropdown.datepicker-orient-right:after {
        right: calc(50% - 5px)
    }
}

.brx {
    border: 1px solid red
}
</style>

<script>
$(document).ready(function() {

    var activeItem
    $(".btn-booking").click(function() {
        let item = $(this).attr('item')
        activeItem = item
    })

    $("#confirm-booking").click(function() {
        let checkIn = $("#start").val()
        let checkOut = $("#end").val()
        $.post("api/confirmBooking.php", {
            checkIn: checkIn,
            checkOut: checkOut
        }).done(function(res) {
            console.log(res);
            window.location.href = "room_booking.php"
        })
    })

    $('.input-daterange').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        calendarWeeks: true,
        clearBtn: true,
        disableTouchKeyboard: true
    });

})
</script>

<body>

    <div class="modal fade" tabindex="-1" id="bookingDialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เลือกวันที่เข้าพัก</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-5">
                    <div class=" px-1 px-sm-5 mx-auto ">
                        <form autocomplete="off">
                            <div class="row  ">
                                <div class="col-12 ">
                                    <div class="input-group input-daterange ">
                                        <input style="width:100%" type="text" id="start"
                                            class="form-control text-left "> <label
                                            class="ml-3 form-control-placeholder" id="start-p" for="start">Check
                                            in</label> <span class="fa fa-calendar" id="fa-1"></span> <input type="text"
                                            id="end" class="form-control text-left ml-2"> <label
                                            class="ml-3 form-control-placeholder" id="end-p" for="end">Check out</label>
                                        <span class="fa fa-calendar" id="fa-2"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="confirm-booking">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- NAV BAR -->
    <?php include('nav_bar.php'); ?>
    <!-- BODY -->
    <div class="container">
        <div class="" style="height:calc(100vh - 244px)">
            <div class="alert alert-success" role="alert">
                <span class="h4"> จองห้องพัก </span>
            </div>
            <?php  
            $sql = "select * from hotel";
            $result = $mysqli -> query($sql);
            $row = $result -> num_rows;
            foreach($result as $item)
            {  ?>
            <div class="card" style="margin-top:15px;">
                <table>
                    <tr>
                        <td>
                            <img width="200px" src="img/bandinB001.jpg">
                        </td>
                        <td style="width:70%;vertical-align: top;">
                            <div style="padding:15px;">
                                <div align='left'>
                                    <span class="h6" style="font-weight:bold;"><?php echo $item['name']; ?></span>
                                </div>
                                <div style="margin-top:5px;">
                                    <img width="15px" src="img/star.png"></img>
                                </div>
                                <hr>
                                <div>
                                    <span style="font-weight:bold;">รายละอียดห้องพัก : </span>
                                    <span>
                                        <?php echo $item['details']; ?>
                                    </span>
                                </div>
                            </div>

                        </td>
                        <td style="vertical-align: bottom;" align='center'>
                            <div style="margin-top:5px;">
                                <div style="width:100px;border:1px solid rgba(0,0,0,.2);padding:10px;">
                                    <div style="font-size:12px;padding-bottom:5px;padding-left:5px;" align="left">
                                        ราคา
                                    </div>
                                    <span style="color:green;font-weight:bold;"><?php echo $item['price']; ?> บาท</span>
                                </div>
                            </div>
                            <div align='center' style="width:150px;padding:15px;">

                                <button data-bs-toggle="modal" data-bs-target="#bookingDialog"
                                    item="<?php echo $item['id']; ?>" class="btn-action btn-booking text-white"
                                    style="width:100px;background-color:green;border:0px solid;padding:5px;">จองห้องพัก</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include("footer.php"); ?>

</body>

</html>