<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Price and Documents</title> -->
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        body {
            /* background-color: #f8f9fa; */
            /* background-color: white; */
            /* font-family: Arial, sans-serif; */
        }
        .header {
            font-size: 24px;
            font-weight: 700;
            color: #4A90E2;
            margin: 20px 0;
        }
        .stock-section {
        
            /* background: #DBE4E9; */
            /* border-radius: 8px; */
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            padding: 20px;
            padding-left:0px;
            padding-right:0px;
            padding-top:0px;
        }

        .documents-section {
        
            /* background: white; */
            /* border-radius: 8px; */
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
            padding: 20px;
        }
        .stock-section img {
            /* border-radius: 8px; */
            width: 100%;
        }
        .stock-details {
            margin-top: 15px;
            /* font-size: 16px; */
        }
        .document-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
            padding-left: 20px;
            padding-top:0px;
            /* border: 1px solid #ddd; */
            /* border-radius: 5px; */
        }
        .document-item img {
            margin-top: -30px;
            width:82px;
            /* height: 30px; */
            margin-right: 20px;
        }
        .document-info {
            /* color: #073b5d; */
            /* color: #4A90E2; */
            text-decoration: none;
            font-weight: bold;
            
            
        }
        .document-info a {
            /* color: #073b5d; */
            /* color: #4A90E2; */
            /* text-decoration: none; */
            font-weight: bold;
            font-size: 0.75em;
            
            
        }
    </style>
<!-- </head> -->
<!-- <body> -->

<section class="header1 cid-uwD2xhfYlY mbr-fullscreen" id="header16-v3">
<!-- <section class="mbr-section content4 cid-uwD2NuoEM6" id="content4-v4"> -->

    <div class="container">
        <div class="row justify-content-center">
            <!-- Stock Price Section -->
            <div class="col-md-6 stock-section mb-4" style="background-color: #DBE4E9; ">
                <img src="<?php echo BASE_URL ?>assets/img/stock-chart.jpg" alt="Stock Chart">
                <h1 class="text-center mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1" style="padding-top:20px; color: #497AB5;">STOCK PRICE</h1>
                <div class="stock-details text-center">
                <iframe frameborder="0" scrolling="no" width="200" height="200"
                src="https://weblink.settrade.com/IRPage/irpage.jsp?txtSymbol=CMO&amp;language=en&amp;key=21631"></iframe>
                
                    <!-- <p><strong>Symbol:</strong> CMO</p>
                    <p><strong>Date:</strong> 09/12/2024 13:46</p>
                    <p><strong>Last:</strong> 0.83 <span class="text-success">(+0.01 / +1.22%)</span></p>
                    <p><strong>Open:</strong> 0.83 | <strong>Prior Close:</strong> 0.82</p>
                    <p><strong>Volume:</strong> 24,100 | <strong>P/E:</strong> --</p> -->
               &nbsp;<br>&nbsp;<br>
                </div>
            </div>

            <!-- Latest Documents Section -->
            <div class="col-md-6 documents-section" >
                <div class="mbr-text pb-3 mbr-fonts-style display-2" style="color: #497AB5; padding-left:20px; margin-bottom: 20px; font-size: 45px;"><strong>LATEST DOCUMENT</strong></div>
                <div class="mt-3">
                    <!-- Repeat for more items -->
                    <div class="document-item">
                        <img src="<?php echo BASE_URL ?>assets/img/icon1.png" alt="Document Icon">
                        <div class="document-info">
                            <h4 class="mbr-text pb-3 mbr-fonts-style display-7" style= "line-height : 1.2em; color: #073b5d;"><strong>Financial Statement Q3/2024</strong><br>
                            <a class="mbr-text pb-3 mbr-fonts-style upper" href="https://cmo-group.com/ir/uploads/financial-statement/2024_q3_0_en.pdf">Download</a>
                            </h4>
                        </div>
                    </div>
                    <div class="document-item">
                        <img src="<?php echo BASE_URL ?>assets/img/icon2.png" alt="Document Icon">
                        <div class="document-info">
                            <h4 class="mbr-text pb-3 mbr-fonts-style display-7" style= "line-height : 1.2em; color: #073b5d;"><strong>Management Discussion And Analysis Q2/2024</strong><br>
                            <a class="mbr-text pb-3 mbr-fonts-style upper" href="https://cmo-group.com/ir/uploads/operating-result/2024_op_q2_0_en.pdf">Download</a>
                            </h4>
                        </div>
                    </div>
                    <div class="document-item">
                        <img src="<?php echo BASE_URL ?>assets/img/icon3.png" alt="Document Icon">
                        <div class="document-info">
                            <p class="mbr-text pb-3 mbr-fonts-style display-7" style= "line-height : 1.2em; color: #073b5d;"><strong>Minutes of the EGM of Shareholders No. 1/2024</strong><br>
                            <a class="mbr-text pb-3 mbr-fonts-style upper" href="https://cmo-group.com/ir/uploads/report/2024_rslt_585_en.pdf">Download</a>
                            </p>
                        </div>
                    </div>
                    <div class="document-item">
                        <img src="<?php echo BASE_URL ?>assets/img/icon4.png" alt="Document Icon">
                        <div class="document-info">
                            <p class="mbr-text pb-3 mbr-fonts-style display-7" style= "line-height : 1.2em; color: #073b5d;"><strong>56-1 One Report 2023</strong><br>
                            <a class="mbr-text pb-3 mbr-fonts-style upper" href="https://cmo-group.com/ir/uploads/annual-report/2024_ar_1_en.pdf">Download</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <!-- Bootstrap JS and Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->
