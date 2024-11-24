<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR - Contact</title>
  <link rel="stylesheet" href="https://unphg.com/swiper07/swiper-bundle.min.css">
  <?php require('inc/links.php'); ?>
  <style>
    .pop:hover{
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Enjoy the best facilities that HR Hotel has to offer, from high-speed internet to comfortable living spaces.
  </p>
</div>

<div class="container"> 
  <div class="row">
    <?php 
    $facilities = [
      ["img" => "wifi.svg", "name" => "Wifi"],
      ["img" => "pool.svg", "name" => "Swimming Pool"],
      ["img" => "gym.svg", "name" => "Gym"],
      ["img" => "spa.svg", "name" => "Spa"],
      
      ["img" => "restaurant.svg", "name" => "Restaurant"],
      ["img" => "parking.svg", "name" => "Parking"]
    ];

    foreach($facilities as $facility) {
      echo '
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
          <div class="d-flex align-items-center mb-2">
            <img src="images/features/'.$facility['img'].'" width="40px">
            <h5 class="m-0 ms-3">'.$facility['name'].'</h5>
          </div>
        </div>
      </div>';
    }
    ?>
  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>

