<!DOCTYPE html>
<html lang="en">

<script>
$(document).ready(function() {
  $(".checkBox").change(function() {
    if ($(this).is(":checked")) {
      console.log("checked");
      $.post("api/updateRoomStatus.php", {
        id: $(this).attr('item'),
        status: '1'
      }).done(function(res) {})
    } else {
      $.post("api/updateRoomStatus.php", {
        id: $(this).attr('item'),
        status: '0'
      }).done(function(res) {})
    }
  })
})
</script>

<body>

  <div class="container p-5">
    <div class='card p-3' style='min-height:85vh;'>

      <div class='h3 p-2'>
        สถานะการจองห้องพัก
      </div>
      <table style="width:100%;border-collapse:collapse">
        <tr>
          <th>ผู้จอง</th>
          <th>Check In Date</th>
          <th>Check Out Date</th>
          <th>ประเภทห้อง</th>
          <th>เบอร์โทร</th>
          <th>อีเมล</th>
          <th>เอกสารการชำระเงิน</th>
          <th>เลขห้อง</th>
          <th>สถานะ</th>
        </tr>
        <?php 
                $sql = "select * from booking_log";
                $result = $mysqli -> query("$sql");
                foreach($result as $item){ ?>
        <tr>
          <td>
            <?php  
                        $user_id = $item['user_id'];
                        echo $item['name'] . " " . $item['surname'];
                     ?>
          </td>
          <td>
            <?php echo $item['check_in_date'];  ?>
          </td>
          <td>
            <?php echo $item['check_out_date'];  ?>
          </td>
          <td>
            <?php echo $item['room_type'];  ?>
          </td>
          <td>
            <?php echo $item['tel'];  ?>
          </td>
          <td>
            <?php echo $item['email'];  ?>
          </td>
          <td>
            <a target="_blank" href="./payment_document/<?php echo $item['payment_file']; ?>">
              ดูเอกสารการชำระเงิน
            </a>
          </td>
          <td>
            <?php echo $item['room_no'];  ?>
          </td>
          <td>
            <input class='checkBox' item="<?php echo $item['id']; ?>" type="checkbox"
              <?php if($item['status'] == '1'){ echo "checked"; } ?>>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>

</body>

<style>
.brx {
  border: 1px solid red
}

th,
td {
  text-align: center
}

table,
tr,
th,
td {
  border: 1px solid grey
}
</style>

</html>