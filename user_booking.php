<?php 
session_start();
include('./Connections/conn.php');
include("header.php");
include('nav_bar.php');
?>
<script>
$(document).ready(function() {
  $(".cancle-booking").click(function() {
    let id = $(this).attr("itemId")
    // console.log(id);

    swal({
        title: "ยกเลิกการจอง",
        text: "หากยกเลิกเราจะทำการคืนเงินภายใน 7 วันทำการ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.post("api/cancelBooking.php", {
            id: id
          }).done(function(res) {
            window.location.href = "user_booking.php"
          })
        }
      });


  })
})
</script>
<div class="container">
  <div class="card px-3" style="height:calc(100vh - 228px)">
    <h3 align="center">รายละเอียดการจอง</h3>
    <div class='row'>
      <?php
        $user_id = $_SESSION['user_id'];
       
        $sql = "select * from booking_log where user_id = '$user_id'";
        $result = $mysqli -> query($sql);
        
        foreach ($result as $item) { ?>
      <div class="card px-2 mx-2 " style="width:300px;height:250px;border:1px solid">
        <div align="center"><?php echo $item['room_type']; ?></div>
        <div> Check In : <?php echo $item['check_in_date'];  ?> </div>
        <div> Check Out : <?php echo  $item['check_out_date']; ?> </div>
        <div>ผู้จอง : <?php echo $item['name'] . ' ' . $item['surname']; ?></div>
        <div>เบอร์โทร : <?php echo $item['tel'];  ?></div>
        <div>อีเมล <?php echo $item['email'];  ?> </div>
        <div>เลขห้อง <?php echo $item['room_no'];  ?> </div>
        <div>สถานะการจอง :
          <?php if($item['status'] == 0){ ?>
          <span class='warning-color-dark px-2 text-white'>อยู่ระหว่างตรวจสอบ</span>
          <?php }else{ ?>
          <span class='teal px-2 text-white'>สำเร็จ</span>
          <?php }  ?>
        </div>
        <div align='center'>
          <button itemId='<?php echo $item['id']; ?>' class='cancle-booking px-2 mt-2'>
            ยกเลิกการจอง
          </button>
        </div>
      </div>
      <?php } ?>
    </div>

  </div>

</div>

<?php include("footer.php"); ?>
</body>

</html>