<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>บ้านดินถิ่นวาปี</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </style>

  <style>
  @font-face {
    font-family: myItim;
    src: url(fonts/Itim-Regular.ttf);
  }

  * {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: myItim;
  }

  .container {
    overflow: hidden;
  }

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
    background-image: #fff;
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
  </style>
</head>

<body>