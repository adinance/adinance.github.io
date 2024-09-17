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
            width: 60%;
        }
        .table th {
            font-size:15px;
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
            width: 35%;
        }
        .table th {
            font-size:20px;
        }
    }

    @media only screen and (min-width: 960px)  {
        .menu-right {
            right:10px;
            margin-top:-3px;
        }
        .container {
            padding: 80px 60px 60px 60px;
            height:100%;
        }
        
        h2 {
            font-family: 'Open Sans', sans-serif;
            text-align: left;
            margin: auto;
            line-height: 2;
        }
        .left-and-right::before {
            content:'';
            position: absolute;
            margin-top:-60px;
            background-color: #808080;
            width: 4px;
            height: 7%;
            left:545px; 
        }
        .left-and-right::after{
            content:'';
            position: absolute;
            margin-top:-60px;
            background-color: #808080;
            width: 4px;
            height: 7%;
            right:545px;
        }
        .col-md-4.menu {
            font-size:18px;
            font-weight:bold;
            text-align:center;
        }
        .table .col-md-2 h4 {
            font-size: 24px;
        }
        .col-md-2 img {
            width: 12%;
        }
        .table {
            top:30px;
        }
        .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table th {
            font-size:24px;
        }
        .row h3 {
            text-decoration-line: none;
            font-size:35px;
            color:#2f61b6;
            font-weight:bold;
            margin-top:50px;
            margin-bottom:80px;
        }

}



</style>

</head>

<body>
        <section>

                <div class="container">
                    <div class="row">
                        <div  class="col-md-4 menu"><a href="invitation" style="text-decoration-line: none;color:#cccccc;text-align:center;">INVITATION</a></div>
                        <div class="col-md-4 menu"><a href="resolutions" style="text-decoration-line: none;color:#cccccc;">THE RESOLUTIONS</a></div>
                        <div class="col-md-4 menu"><a href="the-minutes-of-annaul-general-meeting" style="text-decoration-line: none;color:#2f61b6;">THE MINUTE OF <br>ANNUAL GENERAL MEETING</a></div>
                        <h2 class="left-and-right"></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="text-align:center;"><h3>THE MINUTES OF <br> ANNAUL GENERAL MEETING</h3>
                        </div>
                    </div>

                    
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
                            <?php foreach($invitation as $inv) { ?>
                                <tr>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <h4 style="font-weight:bold;"><?php echo $inv->year ?></h4>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($inv->year != NULL and $inv->q1 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $inv->q1;
                                            echo '<a href=' . $path . '><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($inv->year != NULL and $inv->q2 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $inv->q2;
                                            echo '<a href=' . $path . '><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($inv->year != NULL and $inv->q3 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $inv->q3;
                                            echo '<a href=' . $path . '><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
                                        } else {
                                        }
                                        ?>
                                    </td>
                                    <td class="col-2 col-sm-2 col-md-2" style="text-align:center;">
                                        <?php if ($inv->year != NULL and $inv->q4 != NULL) {
                                            $baseurl = BASE_URL;
                                            $path = $baseurl . '\assets\img\publication\\' . $inv->q4;
                                            echo '<a href=' . $path . '><img src="' . $baseurl . 'assets\img\publication\download_bt_gray.png"></a>';
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