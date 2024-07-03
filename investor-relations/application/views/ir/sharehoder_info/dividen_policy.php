<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVIDEN POLICY AND PAYMENT</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    * {
       box-sizing: border-box;
       font-family: 'Montserrat', sans-serif;
   }


    @media only screen and (min-device-width: 480px) {
        .container {
            padding:60px 40px 100px 40px;
            text-align: center;
            font-weight:bold;
            font-size:14px;
        }
        
    }

    @media only screen and (min-width: 600px) {
        .container {
            padding:80px 0px 120px 0px;
            text-align: center;
            font-weight:bold;
            font-size:18px;
        }
    }

    @media only screen and (min-width: 960px)  {
        .container {
            padding:100px 70px 260px 70px;
            text-align: center;
            font-weight:bold;
            font-size:21px;
            height:100%;
        }
    }

</style>

</head>

<body>
        <section>
                <div class="container">
                    <?php foreach ($policy as $pl) { ?>
                        <p><?php echo $pl->policy_en?></p>
                    <?php } ?>
                    
                </div>
        </section>
</body>