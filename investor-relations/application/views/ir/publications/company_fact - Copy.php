<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Factsheet</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    * {
       box-sizing: border-box;
       padding: 0;
       margin: 0;
       font-family: 'Montserrat', sans-serif;
       width: auto;
   }


    @media only screen and (min-device-width: 480px) {
        .container {
            padding: 40px 40px 20px 40px;
            height:100%;
        }
        .col {
            padding: 40px 0px 0px 15px;
        }
        .txt-year {
            margin-top:0px;
            font-size:35px;
            color:#2f61b6;
            font-weight:bold;
            margin-bottom:18px;
        }
        .txt-down {
            font-size:20px;
            color:#999999;
            margin-top:7px;
            margin-left:-83px;
            margin-bottom:36px;
        }
        
    }

    @media only screen and (min-width: 600px) {
        .container {
            padding: 60px 50px 20px 50px;
        }
        .col {
            padding: 20px 0px 0px 0px;
        }
        .txt-year {
            padding-left:13px;
            margin-top:30px;
            font-size:40px;
            color:#2f61b6;
            font-weight:bold;
        }
        .txt-down {
            padding-left:26px;
            font-size:25px;
            margin-top:37px;
            color:#999999;
            margin-bottom:48px;
        }
    }

    @media only screen and (min-width: 960px)  {
        .container {
            padding: 80px 0px 60px 0px;
            height:100%;
        }
        .col {
            padding: 0px 40px 0px 40px;
        }
        .col-md-4 {
            margin-left:100px;
        }
        .txt-year {
            margin-top:0px;
            font-size:45px;
            color:#2f61b6;
            font-weight:bold;
            margin-bottom:18px;
        }
        .txt-down {
            font-size:25px;
            color:#999999;
            margin-bottom:41px;
            margin-top:8px;
            margin-left:-30px;
        }
        .txt-down img {
            margin-top:-1px;
        }
    }

</style>

</head>

<body>
        <section>
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-4">
                            <img src="<?php echo BASE_URL;?>assets\img\publication\company-factsheet.jpg" style="max-width: 100%;display: block;">
                        </div>
                        <div class="col col-lg-2">
                            <?php foreach ($factsheet as $f){ ?>  
                                <h3 class="txt-year"><?php echo $f-> factsheet_year;?></h3>
                            <?php }?>
                        </div>
                        <div class="col col-3">
                            <?php foreach ($factsheet as $f){  ?>  
                                <h4 class="txt-down">Download <a target="_blank" style="text-decoration:none;" href="<?php echo BASE_URL;?>assets\img\publication\<?php echo $f-> factsheet_file;?>">
                                <img src="<?php echo BASE_URL;?>assets\img\publication\download_bt_gray.png" style="max-width: 14%;"></a></h4>
                            <?php }?>
                        </div>
                    </div>
                </div>
        </section>
</body>