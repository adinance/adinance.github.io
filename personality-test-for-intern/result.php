<?php

require_once 'conf.php';

$conn->set_charset("utf8");

$sql = "

SELECT t1 as position, 
COUNT(*) AS total,
ROUND((COUNT(*) * 100.0 / (SELECT COUNT(*) FROM personality_test_for_intern)), 2) AS percent
FROM personality_test_for_intern
GROUP BY t1
ORDER BY total DESC;



";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // $num = 0;
    $positionArray = array();
    $percentArray = array();

    while ($row = $result->fetch_assoc()) {
        array_push($positionArray, htmlspecialchars($row["position"]));
        array_push($percentArray, $row["percent"]);
    }

    // echo '<pre>';
    // print_r($positionArray);
    // print_r($percentArray);
} else {
    // echo "ไม่มีข้อมูล";
}




?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
  <meta name="description" content="">
  <meta name="robots" content="noindex, nofollow">
  <title>Personality Test for Intern | Result</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <style>
    .cid-uOxccGEVCp .progress1 .progressbar-number:before {
      content: '<?php echo isset($percentArray[0]) ? $percentArray[0] : 0;?>';
    }

    .cid-uOxccGEVCp .progress2 .progressbar-number:before {
      content: '<?php echo isset($percentArray[1]) ? $percentArray[1] : 0;?>';
    }

    .cid-uOxccGEVCp .progress3 .progressbar-number:before {
      content: '<?php echo isset($percentArray[2]) ? $percentArray[2] : 0;?>';
    }

    .cid-uOxccGEVCp .progress4 .progressbar-number:before {
      content: '<?php echo isset($percentArray[3]) ? $percentArray[3] : 0;?>';
    }

    .cid-uOxccGEVCp .progress5 .progressbar-number:before {
      content: '<?php echo isset($percentArray[4]) ? $percentArray[4] : 0;?>';
    }

    .cid-uOxccGEVCp .progress-bar-1 {
      width: <?php echo isset($percentArray[0]) ? $percentArray[0]: 0;
      ?>%;
    }

    .cid-uOxccGEVCp .progress-bar-2 {
      width: <?php echo isset($percentArray[1]) ? $percentArray[1]: 0;
      ?>%;
    }

    .cid-uOxccGEVCp .progress-bar-3 {
      width: <?php echo isset($percentArray[2]) ? $percentArray[2]: 0;
      ?>%;
    }

    .cid-uOxccGEVCp .progress-bar-4 {
      width: <?php echo isset($percentArray[3]) ? $percentArray[3]: 0;
      ?>%;
    }

    .cid-uOxccGEVCp .progress-bar-5 {
      width: <?php echo isset($percentArray[4]) ? $percentArray[4]: 0;
      ?>%;
    }


    /* 
.cid-uOxccGEVCp .progress1 .progressbar-number:before {
  content: '100';
}
.cid-uOxccGEVCp .progress2 .progressbar-number:before {
  content: '69';
}
.cid-uOxccGEVCp .progress3 .progressbar-number:before {
  content: '41';
}
.cid-uOxccGEVCp .progress4 .progressbar-number:before {
  content: '63';
}
.cid-uOxccGEVCp .progress5 .progressbar-number:before {
  content: '10';
}
.cid-uOxccGEVCp .progress-bar-1 {
  width: 100%;
}
.cid-uOxccGEVCp .progress-bar-2 {
  width: 69%;
}
.cid-uOxccGEVCp .progress-bar-3 {
  width: 41%;
}
.cid-uOxccGEVCp .progress-bar-4 {
  width: 63%;
}
.cid-uOxccGEVCp .progress-bar-5 {
  width: 10%;
} */
  </style>

</head>

<body>

  <?php  

?>
  <section class="extProgressBars mbr-fullscreen cid-uOxccGEVCp mbr-parallax-background" id="extProgressBars10-9">

    <!-- <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);">
    </div> -->
    <div class="container">
      <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style mbr-bold align-center display-1">Personality Test
        for Intern</h2>

      <div class="row pt-5  content-row">
        <div class="col-md-4 text-elements">
          <div class="card-img">
            <img src="assets/images/ptfi-700x700.png" title="" alt="">
          </div>
        </div>

        <div class="progress_elements col-md-8">
          <div class="progress1 pb-3">
            <div class="title-wrap">
              <div class="progressbar-title mbr-fonts-style display-5">
                <p>
                  <?php echo isset($positionArray[0]) ? $positionArray[0] : '';?>
                </p>
              </div>
              <div class="progress_value mbr-fonts-style display-5">
                <div class="progressbar-number"></div>
                <span>%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-1 progress-bar-striped progress-bar-animated" role="progressbar"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress2 pb-3">
            <div class="title-wrap">
              <div class="progressbar-title mbr-fonts-style display-5">
                <p>
                  <?php echo isset($positionArray[1]) ? $positionArray[1] : '';?>
                </p>
              </div>
              <div class="progress_value mbr-fonts-style display-5">
                <div class="progressbar-number"></div>
                <span>%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-2 progress-bar-striped progress-bar-animated" role="progressbar"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress3 pb-3">
            <div class="title-wrap">
              <div class="progressbar-title mbr-fonts-style display-5">
                <p>
                  <?php echo isset($positionArray[2]) ? $positionArray[2] : '';?>
                </p>
              </div>
              <div class="progress_value mbr-fonts-style display-5">
                <div class="progressbar-number"></div>
                <span>%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-3 progress-bar-striped progress-bar-animated" role="progressbar"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress4 pb-3">
            <div class="title-wrap">
              <div class="progressbar-title mbr-fonts-style display-5">
                <p>
                  <?php echo isset($positionArray[3]) ? $positionArray[3] : '';?>
                </p>
              </div>
              <div class="progress_value mbr-fonts-style display-5">
                <div class="progressbar-number"></div>
                <span>%</span>
              </div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-4 progress-bar-striped progress-bar-animated" role="progressbar"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

  <script>
  setTimeout(function () {
    location.reload();
  }, 10000); // 60000 มิลลิวินาที = 60 วินาที
</script>
  <?php 

  $conn->close();
  require_once 'script.php';
  
  ?>

</body>

</html>