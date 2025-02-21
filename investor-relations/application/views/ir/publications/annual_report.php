<section class="cid-up66jRJEZJ" id="image2-bi">
    <figure class="mbr-figure container">
        <div class="image-block" style="width: 100%;">
            <img src="<?php echo BASE_URL . PATH_MOBIRISE ; ?>assets/images/cover-cmo-annual-2023-1b-2000x1294.jpg" alt="" title="">
        </div>
        <br><br>
        <div>

            <h2 class="mbr-section-title mbr-semibold mbr-black mbr-fonts-style display-1"
                style="color: rgb(54, 123, 186);">2023
                <a target="_blank" href="https://cmo-group.com/ir/uploads/annual-report/2024_ar_1_en.pdf" style="color:#808080;">56-1 One Report
                    <span class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></span>
                </a>
            </h2>
        </div>
    </figure>
</section>

<?php if($this->session->userdata('lang')=='thai'){ ?>
<section class="extFeatures cid-uk72NQGMBX" id="extFeatures60-5d">
    <div class="container">
        <div class="row justify-content-center food-content mt-5">
            <?php $i = 0; foreach ($result as $row) { ?>
                <div class="col-sm-12 col-lg-4 content-section">
                    <div class="image-wrap text-center">
                        <img src="<?php echo BASE_URL . 'assets/img/annual-report/' . $result[$i]->year . '.jpg'; ?>" alt="" title="">
                        <div class="content-block">
                            <a target="_blank" href="<?php echo BASE_URL_UPLOAD . 'annual-report/' . $result[$i]->file_th; ?>">
                                <h4 class="mbr-fonts-style mbr-text align-center mbr-white display-5"><?php echo $result[$i]->title_th; ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php $i++; } ?> 
        </div>
    </div>
</section>
<?php }else{ ?>

<section class="extFeatures cid-uk72NQGMBX" id="extFeatures60-5d">
    <div class="container">
        <div class="row justify-content-center food-content mt-5">
            <?php $i = 0; foreach ($result as $row) { ?>
                <div class="col-sm-12 col-lg-4 content-section">
                    <div class="image-wrap text-center">
                        <img src="<?php echo BASE_URL . 'assets/img/annual-report/' . $result[$i]->year . '.jpg'; ?>" alt="" title="">
                        <div class="content-block">
                            <a target="_blank" href="<?php echo BASE_URL_UPLOAD . 'annual-report/' . $result[$i]->file_en; ?>">
                                <h4 class="mbr-fonts-style mbr-text align-center mbr-white display-5"><?php echo $result[$i]->title_en; ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php $i++; } ?> 
        </div>
    </div>
</section>



<?php } ?>