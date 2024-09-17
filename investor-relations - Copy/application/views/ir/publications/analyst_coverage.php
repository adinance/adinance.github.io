<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annual Report</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
     @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    * {
       font-family: 'Montserrat', sans-serif;
   }

    @media screen and (min-device-width: 480px) {
        div.row {
            padding: 30px 10px 20px 30px; 
        }
        .col-md-2 img {
            padding:20px 10px 0px 30px;
        }
        .col-broker {
            font-size: 25px;
            font-weight:bold;
            width:100%;
            margin-top:20px;
            margin-bottom:20px;
        }
        .col-name  {
            color:#497ad0;
            font-size: 18px;
        }
        .col-gray {
            color:#999999;
            font-size: 16px;
        }
        .col-gray img {
            margin-top:-2px;
        }
        .col-gray-email {
            color:#999999;
            font-size: 16px;
            margin-bottom:60px;
        }
        .col-gray-email img {
            margin-top:-2px;
        }
        
    }
     

    @media only screen and (min-width: 600px)  {       
        div.row {
            padding: 60px 60px 0px 90px;
        }
        .col-md-2 img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .col-broker {
            font-size: 33px;
            font-weight:bold;
            width:100%;
            margin-top:20px;
            margin-bottom:20px;
        }
        .col-name  {
            color:#497ad0;
            font-size: 22px;
        }
        .col-gray {
            color:#999999;
            font-size: 18px;
        }
        .col-gray img {
            width: 20px;
            height: 20px;
            margin-top:-3px;
        }
        .col-gray-email {
            color:#999999;
            font-size: 18px;
            margin-bottom:60px;
        }
        .col-gray-email img {
            width: 20px;
            height: 20px;
            margin-top:-3px;
        }
    }


    @media screen and (min-width: 960px) {  
        div.row {
            padding: 0px 0px 0px 0px;
            width:100%;
        }
        .col-md-2 img {
            padding:0px;
        }
        .container {
            width:100%;
            /*margin-top:70px;
            margin-bottom:70px;*/
            padding: 90px 160px 70px 160px;
        }
        .col-md-2 {
            margin-top:20px;
        }
        .col-broker {
            font-size: 25px;
            font-weight:bold;
            width:100%;
            margin-top:20px;
            margin-bottom:20px;
        }
        .col-name  {
            color:#497ad0;
            font-size: 18px;
        }
        .col-gray {
            color:#999999;
            font-size: 16px;
        }
        .col-gray-email {
            color:#999999;
            font-size: 16px;
            margin-bottom:60px;
        }
        
    }
      
</style>


</head>

<body>
        <section>
                
                <div class="container">
                    <div class="row">
                        <?php foreach ($broker as $b){  ?>  
                            <div class="col-md-2">
                                <img src="<?php echo BASE_URL;?>assets\img\publication\<?php echo $b->broker_pic; ?>" style="width: auto;height: auto;max-width: 100%;">
                            </div>
                            <div class="col-md-4">
                                <h3 class="col-broker"><?php echo $b-> broker_name;?></h3>
                                <h5 class="col-name">Mr. Naruedom Mujjalinkool</h5>
                                <h6 class="col-gray"><img src="<?php echo BASE_URL;?>assets\img\publication\tel-icon-gray.png" width="16" height="16">  662-088-3888</h6>
                                <h6 class="col-gray-email"><img src="<?php echo BASE_URL;?>assets\img\publication\mail-icon-gray.png" width="16" height="16">  Warunee@cmo-group.com</h6>
                            </div>
                        <?php }?>
                    </div>
                </div> 
                    
               
        </section>
</body>