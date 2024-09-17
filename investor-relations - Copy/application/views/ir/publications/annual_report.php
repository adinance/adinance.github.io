<!-- <!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>56-1 One Report</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

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
            width:100%;
            height:100%;
            padding: 10px 35px 40px 35px;
        }
        .vdo {
            width:290px;
            height:210px;
        }
        h2 {
            font-size:20px;
            font-weight:bold;
            margin-top:20px;
            color: #2a56a2;
            margin-bottom:50px;
        }
        h2 img {
            width:25px;
            height:25px;
        }
        .poster {
            width:130px;
            height:150px;
        }
        h4 {
            font-size:26px;
            font-weight:bold;
            color: #2a56a2;
        }
        h6 {
            font-size:10px;
            font-weight:bold;
            color: #000000;
            text-decoration:none;
        }
        .bg-blue {
            display:block;
            margin-top:10px;
            background-color:#e6f2ff;
            padding:14px 20px 0px 20px; 
            height:105px;
        }
        .col-md-5 img {
            padding-bottom:30px;
        }
        .col-sm-3.col-md-2 img {
            position:absolute;
            width:17px;
            height:17px;
        }
        
}

   
    @media screen and (min-width: 600px) { 
        .container {
            width:100%;
            height:100%;
            padding: 10px 0px 70px 0px;
        }
        .vdo {
            width:550px;
            height:450px;
        }
        h2 {
            font-size:36px;
            font-weight:bold;
            margin-top:30px;
            color: #2a56a2;
            margin-bottom:70px;
        }
        h2 img {
            width:50px;
            height:50px;
        }
        h4 {
            font-size:25px;
            font-weight:bold;
            color: #2a56a2;
            
        }
        h6 {
            font-size:11px;
            font-weight:bold;
            color: #000000;
            text-decoration:none;
        }
        .bg-blue {
            display:block;
            margin-top:10px;
            background-color:#e6f2ff;
            padding:14px 20px 0px 20px; 
            height:110px;
        }
        .col-md-5 img {
            padding-bottom:40px;
        }

        .col-sm-3.col-md-2 img {
            margin-top:-10px;
            width:17px;
            height:17px;
        }
    }

    @media screen and (min-width: 960px)  {     
        .header {
            background-color: #5d89d5;
            color: #ffff;
            padding: 50px;
            width: 100%;
        }
        .panel {
            background-color: #1f407a;
            margin-top:-10px;
            padding: 10px 0px 20px 15px;  /* top right bottom left */
            font-size:12px;
            color:#ffff;
            text-decoration:none;
        }
        .menu-right {
            right:10px;
            margin-top:-3px;
        }
        div.row {
            padding: 0px 0px 5px 0px;  /* top right bottom left */
            width:100%;
        }
        .container {
            width:100%;
            height:100%;
            padding: 90px 40px 80px 70px;
        }
        .vdo {
            width:1168px;
            height:650px;
        }
        h2 {
            font-size:44px;
            font-weight:bold;
            margin-top:40px;
            margin-bottom:90px;
            color: #2a56a2;
        }
        h4 {
            font-size:35px;
            font-weight:bold;
            color: #2a56a2;
            
        }
        h6 {
            font-size:15px;
            font-weight:bold;
            color: #000000;
            text-decoration:none;
        }

        .bg-blue {
            display:block;
            margin-top:10px;
            background-color:#e6f2ff;
            padding:20px 8px 0px 20px; 
            height:140px;
        }
        .col-md-5 img {
            padding-bottom:40px;
        }
    }   
      
</style>





<!-- </head> -->

<!-- <body> -->
        <section>
                <div class="container">
                    <?php foreach($detail as $de) { ?>
                    <video class="vdo" controls autoplay="" muted >
                        <source src="<?php echo BASE_URL;?>assets\img\publication\<?php echo $de->img_topic;?>" >
                    </video>
                    <div>
                        <h2><?php echo $de->Year;?> 
                        <a style="color:#808080;"><?php echo $de->topic_name1;?></a><a href="<?php echo BASE_URL;?>assets\img\publication\<?php echo $de->file_name1; ?>" style="text-decoration:none;">&nbsp;
                        <img src="<?php echo BASE_URL;?>assets\img\publication\download_bt_blue.png" width="65" height="65"></a></h2>
                    </div>
                    <?php } ?>
                    
                    <div class="row">
                        <?php foreach($detail_all as $all) { ?>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="row">
                                    <div class="col-5 col-sm-5 col-md-5">
                                        <img src="<?php echo BASE_URL;?>\assets\img\publication\<?php echo $all->img_topic;?>" style="display:block;max-width:100%;height:auto;">
                                    </div>
                                    <div class="col-7 col-sm-7 col-md-7 bg-blue">
                                        <div>
                                            <h4><?php echo $all->Year;?></h6>
                                            <div class="row">
                                                    <div class="col-9 col-sm-9 col-md-10">
                                                        <h6><?php echo $all->topic_name1;?></h6>
                                                    </div>
                                                    <div class="col-3 col-sm-3 col-md-2">
                                                        <?php if ($all->topic_name1 != null) {
                                                            $baseurl = BASE_URL;
                                                            $path = $baseurl . '\assets\img\publication\\' . $all->file_name1;
                                                            echo 
                                                            '<a href=' . $path . '>
                                                            <img style="margin-top:-4px;" src="' . $baseurl . '\assets\img\publication\download_bt_blue.png" width="20" height="20"></a>';
                                                            } else {
                                                                
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            
                                            <div class="row">
                                                <div class="col-9 col-sm-9 col-md-10">
                                                    <h6><?php echo $all->topic_name2;?></h6>
                                                </div>
                                                <div class="col-3 col-sm-3 col-md-2">
                                                    <?php if ($all->topic_name2 != null) {
                                                        $baseurl = BASE_URL;
                                                        $path = $baseurl . '\assets\img\publication\\' . $all->file_name2;
                                                        echo 
                                                        '<a href=' . $path . '>
                                                        <img style="margin-top:-4px;" src="' . $baseurl . '\assets\img\publication\download_bt_blue.png" width="20" height="20"></a>';
                                                        } else {
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        <?php } ?>
                    </div>
                    
                </div> 
            
        </section>
<!-- </body> -->