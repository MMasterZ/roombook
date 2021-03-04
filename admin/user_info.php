<?php require("Connections/conn.php");  ?>
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
                        <span data-item="<?php print_r($item); ?>" class='edit-btn icon-cursor fas fa-pen-alt'></span>
                    </td>
                </tr>
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