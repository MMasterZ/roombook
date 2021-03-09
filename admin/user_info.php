<!DOCTYPE html>
<html lang="en">

<script>
$(document).ready(function() {
  $(".delete-btn").click(function() {
    const user_id = $(this).attr('item')
    swal({
        title: "ลบข้อมูลลูกค้า",
        text: "คุณต้องการลบข้อมูลลูกค้าหรือไม่?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.post("api/delete_user.php", {
            user_id: user_id
          }).done(function(res) {
            window.location.href = "admin.php?menu=1"
          })
        }
      });
  })

  $(".edit-btn").click(function() {
    const item = $(this).attr("data-item")
    console.log(item[1]);


  })
})
</script>

<body style="overflow:hidden">

  <div class="container p-5">
    <div class='card p-3' style='min-height:85vh;'>

      <div class='h3 p-2'>
        ข้อมูลลูกค้า
      </div>
      <table style="width:100%;border-collapse:collapse">
        <tr>
          <th>ชื่อ</th>
          <th>รหัสผู้ใช้งาน</th>
          <th>ที่อยู่</th>
          <th>เบอร์โทรศัพท์</th>
          <th>อีเมล</th>
          <th>ลบ</th>
          <th>แก้ไข</th>
        </tr>
        <?php 
                // ดึงข้อมูลเฉพาะ Member
                $sql = "select * from user where role = '2'";
                $result = $mysqli -> query("$sql");
                foreach($result as $item){ ?>
        <tr>

          <td>


            <?php echo $item['name'];  ?>
          </td>
          <td>
            <?php echo $item['username'];  ?>
          </td>
          <td>
            <?php echo $item['address'];  ?>
          </td>
          <td>
            <?php echo $item['tel'];  ?>
          </td>
          <td>
            <?php echo $item['email'];  ?>
          </td>
          <td>
            <span class='delete-btn icon-cursor fas fa-trash-alt' item="<?php echo $item['id'];  ?>"></span>
          </td>
          <td>
            <span data-bs-toggle="modal" data-bs-target="<?php echo "#editModel".$item['id'] ?>"
              class='edit-btn icon-cursor fas fa-pen-alt'></span>
          </td>
        </tr>

        <div class="modal fade" id="editModel<?php echo $item['id'] ?>" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลลูกค้า</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="api/editUser.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                  <div class="row pb-2">

                    <div class="col-4" align="left">ชื่อ :</div>
                    <div class="col" align="left">
                      <input name="files" type="text" value="<?php  echo $item["name"] ?>">
                    </div>
                  </div>
                  <div class="row py-2">
                    <div class="col-4" align="left">รหัสผู้ใช้งาน :</div>
                    <div class="col" align="left">
                      <input name="files" type="text" value="<?php  echo $item["username"] ?>">
                    </div>
                  </div>
                  <div class="row py-2">
                    <div class="col-4" align="left">ที่อยู่ :</div>
                    <div class="col" align="left">
                      <input name="files" type="text" value="<?php  echo $item["address"] ?>">
                    </div>
                  </div>
                  <div class="row py-2">
                    <div class="col-4" align="left">เบอร์โทรศัพท์ :</div>
                    <div class="col" align="left">
                      <input name="files" type="text" value="<?php  echo $item["tel"] ?>">
                    </div>
                  </div>
                  <div class="row py-2">
                    <div class="col-4" align="left">อีเมล :</div>
                    <div class="col" align="left">
                      <input name="files" type="text" value="<?php  echo $item["email"] ?>">
                    </div>
                  </div>

                </div>
                <input name="id" value="<?php echo $item['id'] ?>" style="display:none;">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                  <input type="submit" name="submit" class="btn btn-info btn-md" value="แก้ไข">
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php } ?>
      </table>
    </div>
  </div>

</body>

<style>
.icon-cursor:hover {
  cursor: pointer
}

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