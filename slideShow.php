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
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade " style="background-color:#80aef7;"
      data-ride="carousel">
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
            <img class="d-block " style="width:100%;height:370px;object-fit:cover" src="./img/bg1.jpg"
              alt="First slide">
            <div class="mask "></div>
          </div>

        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block " style="width:100%;height:370px;object-fit:cover" src="./img/bg2.jpg"
              alt="First slide">
            <div class="mask "></div>
          </div>

        </div>
        <div class="carousel-item">
          <!--Mask color-->
          <div class="view">
            <img class="d-block " style="width:100%;height:370px;object-fit:cover" src="./img/bg3.jpg"
              alt="First slide">
            <div class="mask "></div>
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
</body>

</html>