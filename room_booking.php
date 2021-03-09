<?php 
session_start();
include('./Connections/conn.php');
$pages = "booking";
include("header.php");
include('nav_bar.php');
 ?>

<script>
$(document).ready(function() {

    var activeItem
    var checkInDate
    var checkOutDate
    var name
    var surname
    var tel
    var roomType
    var email

    $(".btn-booking").click(function() {
        let item = $(this).attr('item')
        activeItem = item
        roomType = item
    })

    $("#confirm-booking").click(function() {
        var roomName
        if (roomType == '1') {
            roomName = "Standard"
        } else {
            roomName = "Deluxe"
        }

        let formData = new FormData()

        var getFile = $("#filePayment").prop('files')[0]

        formData.append('checkIn', checkInDate)
        formData.append("checkOut", checkOutDate)
        formData.append("roomType", roomName)
        formData.append("name", name)
        formData.append("surname", surname)
        formData.append("tel", tel)
        formData.append("email", email)
        formData.append("file", getFile)

        let postData = {
            checkIn: checkInDate,
            checkOut: checkOutDate,
            roomType: roomName,
            name: name,
            surname: surname,
            tel: tel,
            email: email,
            file: $("#filePayment").val()
        }

        if (!getFile) {
            swal({
                title: "ผิดพลาด",
                text: "กรุณาอัพโหลดหลักฐานการชำระเงิน",
                icon: "error",
            })
            return
        }

        $.ajax({
            url: 'api/confirmBooking.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            type: 'post',
            success: function(php_script_response) {
                swal({
                    title: "สำเร็จ",
                    text: "จองห้องพักสำเร็จ",
                    icon: "success",
                })
                $("#btn-close-modal").click()
            }
        });
    })



    $("#check-booking").click(function() {
        checkInDate = $("#start").val()
        checkOutDate = $("#end").val()
        name = $("#name").val()
        surname = $("#surname").val()
        tel = $("#tel").val()
        email = $("#email").val()


        if (checkInDate && checkOutDate && name && surname && tel) {
            $("#pass-validate").click()
        } else {
            swal({
                title: "ผิดพลาด",
                text: "กรุณากรอกข้อมูลให้ครบถ้วน",
                icon: "error",
            })
            return
        }


    })

    $('.input-daterange').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        calendarWeeks: true,
        clearBtn: true,
        disableTouchKeyboard: true
    });


    $(".check-login").click(function() {
        <?php if(!isset($_SESSION['user_data']))
    { ?>
       swal({
        title: "ผิดพลาด",
        text: "กรุณาเข้าสู่ระบบสมาชิกก่อน",
        icon: "error",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = "login.php"
        }
      });
       
        <?php  }else{ ?>
        $(".booking-room").click()
        <?php }  ?>
    })

})
</script>

<!-- Modal จองห้องพัก -->
<div class="modal fade" tabindex="-1" id="bookingDialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">เลือกวันที่เข้าพัก</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body  pt-5">
                <div class=" px-1  px-sm-5 mx-auto ">
                    <form autocomplete="off">
                        <div class="row  ">
                            <div class="col-12 ">
                                <div class="input-group input-daterange ">
                                    <input style="width:100%" type="text" id="start" class="form-control text-left ">
                                    <label class="ml-3 form-control-placeholder" id="start-p" for="start">Check
                                        in</label> <span class="fa fa-calendar" id="fa-1"></span> <input type="text"
                                        id="end" class="form-control text-left ml-2"> <label
                                        class="ml-3 form-control-placeholder" id="end-p" for="end">Check out</label>
                                    <span class="fa fa-calendar" id="fa-2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2 ">
                            <div class="col-12 ">
                                <div class="input-group ">
                                    <input type="text" id="name" placeholder="ชื่อ" style="width:100%"
                                        class='form-control text-left'>
                                    <input type="text" id="surname" placeholder="นามสกุล" style="width:100%"
                                        class='ml-2 form-control text-left'>
                                </div>
                            </div>
                            <div class="col-12 pt-2">
                                <div class="input-group">
                                    <input id="email" type="text" id="name" placeholder="อีเมล" style="width:100%"
                                        class='form-control text-left'>
                                </div>
                            </div>
                            <div class="col-12 pt-2">
                                <div class="input-group">
                                    <input id="tel" type="text" id="name" placeholder="เบอร์โทร" style="width:100%"
                                        class='form-control text-left'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="check-booking">จองห้องพัก</button>

                <button data-bs-dismiss="modal" style='display:none' data-bs-target="#paymentDoc" data-bs-toggle="modal"
                    type="button" class="btn btn-primary" id="pass-validate">จองห้องพัก</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal แนบเอกสารการชำระเงิน -->
<div class="modal fade" tabindex="-1" id="paymentDoc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แนบเอกสารการชำระเงิน</h5>
            </div>

            <div class="modal-body  pt-2">
                <div class="row align-items-center px-2">
                    <div class="col-4 "><img style='width:150px' src="./img/SCB.png"></div>
                    <div class="col-8 ">
                        <p>กรุณาโอนเงิน จำนวน 1,000 บาท </p>
                        <p>เข้าบัญชีเลขที่ 067-0-12886-4</p>
                        <p> ธนาคารไทยพาณิชย์ สาขามหาสารคาม</p>
                    </div>
                </div>

                <div class=" px-1  px-sm-5 mx-auto ">
                    <form autocomplete="off">
                        <div class="row pt-2 ">
                            <div class="col-12 ">
                                <div class="input-group ">
                                    <input accept=".jpg,.png" type="file" name="file" id="filePayment"
                                        placeholder="แนบเอกสารการชำระเงิน" style="width:100%" class=''>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    id="btn-close-modal">ปิด</button>
                <button type="button" class="btn btn-primary" id="confirm-booking">ยืนยันการจองห้องพัก</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card" style="height:calc(100vh - 226px)">
        <div class="alert alert-success" role="alert">
            <span class="h4"> จองห้องพัก </span>
        </div>
        <?php  
            include("api/getHotel.php");
            foreach($result as $item)
            {  ?>
        <div class="card" style="margin-top:15px;">
            <table>
                <tr>
                    <td>
                        <img width="300px" src="<?php echo "img/".$item['files'] ?>">
                    </td>
                    <td style="width:70%;vertical-align: top;">
                        <div style="padding:15px;">
                            <div align='left'>
                                <span class="h6" style="font-weight:bold;"><?php echo $item['name']; ?></span>
                            </div>
                            <div style="margin-top:5px;">
                                <img width="15px" src="img/star.png"></img>
                                <img width="15px" src="img/star.png"></img>
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
                            <button  class="check-login btn-action btn-booking text-white"
                                style="width:100px;background-color:green;border:0px solid;padding:5px;">จองห้องพัก</button>

                            <button class="booking-room" style='display:none' data-bs-toggle="modal"
                                data-bs-target="#bookingDialog" item="<?php echo $item['id']; ?>"
                                class="btn-action btn-booking text-white"
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