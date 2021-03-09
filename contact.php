<?php
session_start();
$pages = "contact";
include("header.php");
include("nav_bar.php");
include("slideShow.php");
?>

<div class="container">
  <div class="card" style="border-radius:0px;">
    <div class="row">

      <div class="col-6 ">
        <div class="py-4">
          <h3 class="text-center text-info">ติดต่อสอบถาม</h3>
        </div>
        <div align="left" class="p-3">
          <div>
            <span style="font-size:20px">บ้านดินถิ่นวาปี รีสอร์ท (Wapi Pathum Earthen House Resort)</span>
          </div>
          <div>
            <span>ที่อยู่: บ้านดินถิ่นวาปี ตำบล หนองแสง อำเภอ วาปีปทุม มหาสารคาม 44120 </span>
          </div>
          <p>ชั่วโมง: เปิด-ปิด 23:30 </p>
          <p><span class="fas fa-phone mx-2" style="font-size:26px;"></span> โทรศัพท์: 081 318 1361</p>
        </div>
      </div>
      <div class="col mx-3 blue-grey">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7676.275620199326!2d103.3978714494482!3d15.849352673741313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31181b0b8bb3a4b1%3A0x1228d381d2075456!2z4Lia4LmJ4Liy4LiZ4LiU4Li04LiZ4LiW4Li04LmI4LiZ4Lin4Liy4Lib4Li1IOC4o-C4teC4quC4reC4o-C5jOC4lyBXYXBpIFBhdGh1bSBFYXJ0aGVuIEhvdXNlIFJlc29ydA!5e0!3m2!1sth!2sth!4v1615302360217!5m2!1sth!2sth"
          width="600px" style="width:100%;" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
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
</body>
<!-- InstanceEnd -->

</html>