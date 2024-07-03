<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGEMENT DISCUSSION AND ANALYSIS</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    * {
       box-sizing: border-box;
       font-family: 'Montserrat', sans-serif;
   }


    @media only screen and (min-device-width: 480px) {
        .container {
            padding: 60px 30px 60px 30px;
            height:100%;
        }
        .table .col-2 h4 {
            font-size: 18px;
        }
        .col-2 tr {
            font-size: 15px;
        }
        .col-2 img {
            width: 45%;
        }
        .table th {
            font-size:15px;
        }
        .table td {
            font-size:12px;
            text-align: center;
            vertical-align: middle;
        }
        
    }

    @media only screen and (min-width: 600px) {
        .container {
            padding: 80px 40px 60px 40px;
            height:100%;
        }
        .table .col-md-2 h4 {
            font-size: 24px;
        }
        .col-sm-2 img {
            width: 27%;
        }
        .table td {
            font-size:18px;
            text-align: center;
            vertical-align: middle;
        }
        .table th {
            font-size:20px;
        }
    }

    @media only screen and (min-width: 960px)  {
        .container {
            padding: 80px 60px 60px 60px;
            height:100%;
        }
        .table .col-md-2 h4 {
            font-size: 24px;
        }
        .col-md-2 img {
            width: 12%;
        }
        .table td {
            font-size:20px;
            text-align: center;
            vertical-align: middle;
        }
        .table th {
            font-size:24px;
        }
    }

</style>

</head>

<body>
        <section>
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-md" style="font-weight:bold;">
                            <thead>
                                <tr>
                                <th style="text-align:center;background-color:#2a56a2;color:#ffffff;">YEAR</th>
                                <th style="text-align:center;background-color:#2a56a2;color:#ffffff;">Q1</th>
                                <th style="text-align:center;background: linear-gradient(to right, #2a56a2 0%, #346bcb 100%);color:#ffffff;">Q2</th>
                                <th style="text-align:center;background: linear-gradient(to right, #346bcb 0%, #7198da 100%);color:#ffffff;">Q3</th>
                                <th style="text-align:center;background: linear-gradient(to right, #7198da 0%, #9ab5e5 100%);color:#ffffff;">Q4</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($manage as $mg) { ?>
                                <tr>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <h4 style="font-weight:bold;"><?php echo $mg->year ?></h4>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($mg->year != NULL and $mg->q1 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $mg->q1;
                                            echo '<a href=' . $path . ' target="_blank"><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($mg->year != NULL and $mg->q2 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $mg->q2;
                                            echo '<a href=' . $path . ' target="_blank"><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($mg->year != NULL and $mg->q3 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $mg->q3;
                                            echo '<a href=' . $path . ' target="_blank"><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($mg->year != NULL and $mg->q4 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $mg->q4;
                                            echo '<a href=' . $path . ' target="_blank"><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
</body>