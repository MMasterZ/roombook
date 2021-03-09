<!DOCTYPE html>
<html lang="en">

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
        </tr>
        <?php 
                $sql = "select * from booking_log";
                $result = $mysqli -> query("$sql");
                foreach($result as $item){ ?>
        <tr>
          <td>
            <?php  
                        $user_id = $item['user_id'];
                        $sql_get_name = "select * from user where id = $user_id";
                        $result_name = $mysqli -> query($sql_get_name);
                        foreach ($result_name as $item2) {
                            echo $item2['name'];
                        }
                     ?>
          </td>
          <td>
            <?php echo $item['check_in_date'];  ?>
          </td>
          <td>
            <?php echo $item['check_out_date'];  ?>
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