<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>X3-English</title>

  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./public/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./public/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->


  <script src="./public/bootstrap.min.js"></script>
  <script src="./public/jquery-1.11.1.min.js"></script>
  <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
  <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  <style>
    img{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    /* animation  */
  .stars {
    background: white;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    animation-iteration-count: infinite;
  }

  .star-1 {
    margin-top: 10px;
    margin-left: 60%;
    animation-name: twinkle-1;
    animation-duration: 1s;
  }

  .star-2 {
    /* margin-top: 10%; */
    margin-left: 25%;
    animation-name: twinkle-2;
    animation-duration: 1s;
  }

  .star-3 {
    /* margin-top: 5%; */
    margin-left: 40%;
    animation-name: twinkle-3;
    animation-duration: 1s;
  }

  .star-4 {
    /* margin-top: 5%; */
    margin-left: 10%;
    top:0px;
    animation-name: twinkle-1;
    animation-duration: 1s;
  }

  .star-5 {
    /* margin-top: 5%; */
    margin-left: 70%;
    top:0px;
    animation-name: twinkle-3;
    animation-duration: 1s;
  }

  .star-6 {
    /* margin-top: 5%; */
    margin-left: 50%;
    top:0px;
    animation-name: twinkle-2;
    animation-duration: 1s;
  }

  @keyframes twinkle-1 {
    20% {
      transform: scale(0.5);
      opacity: 0.5;
    }
    40% {
      transform: scale(0.5);
      opacity: 0.5;
    }
  }

  @keyframes twinkle-2 {
    100% {
      transform: scale(0.5);
      opacity: 0.5;
    }
  }

  @keyframes twinkle-3 {
    50% {
      transform: scale(0.5);
      opacity: 0.5;
    }
  }

  #back {
    position: fixed;
    padding: 0;
    margin: 0;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index:0;
    background: linear-gradient(black, #000099, #66c2ff, #ffcccc, #ffeee6);
  }
  </style>
  <script>
    $(document).on('click', '.panel div.clickable', function(e) {
      var $this = $(this); //Heading
      var $panel = $this.parent('.panel');
      var $panel_body = $panel.children('.panel-body');
      var $display = $panel_body.css('display');

      if ($display == 'block') {
        $panel_body.slideUp();
      } else if ($display == 'none') {
        $panel_body.slideDown();
      }
    });

    $(document).ready(function(e) {
      var $classy = '.panel.autocollapse';

      var $found = $($classy);
      $found.find('.panel-body').hide();
      $found.removeClass($classy);
    });
  </script>
  <!------ Include the above in your HEAD tag ---------->
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
        include("layout/directional.php");
        include("layout/body-left/body-left.php");
      ?>
    </div>
  </div>
</body>

</html>