<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php') ?>
  <title>InnTrack | Facilities</title>

  <style>
    :root {
      --primary: #3b38ad;
      --primary_hover: #3b37adc9;
    }

    .pop:hover {
      border-top-color: var(--primary) !important;
      transform: scale(1.03);
      transition: all 0.3s ease;
    }
  </style>
</head>

<body>

  <?php require('inc/header.php') ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Facilities</h2>
    <p class="text-center">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
      Fugiat dolorum nostrum expedita illum debitis possimus
      blanditiis odit officia quos voluptas.
    </p>
  </div>

  <div class="container">
    <div class="row">

    <?php
      $res = selectAll('facilities');
      $path = FACILITIES_IMG_PATH;

      while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
          <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="$path$row[icon]" width="40px">
                  <h5 class="m-0 ms-3">Wifi</h5>
                </div>
                <p>
                  $row[description]
                </p>
              </div>
            </div>
          data;
      }
    ?>

    </div>
  </div>

  <?php require('inc/footer.php') ?>

</body>

</html>