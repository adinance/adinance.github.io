<section class="extFeatures cid-up5B5rcTsf" id="extFeatures9-b1">

    <div class="container-fluid">
        <!-- <div class="section-heading">
            <h2 class="mbr-fonts-style mbr-section-title align-center mbr-light mbr-black display-2"><strong>
                2024</strong></h2>
            <div class="underline align-center">
                <div class="line"></div>
            </div>
        </div> -->
        <div class="row text-center justify-content-center pt-5">


        <?php if($this->session->userdata('lang')=='thai'){ ?>
            <?php $i = 0; foreach ($result as $row) { ?>
            <div class="col-xl-4 col-md-6 col-10">
                <a target="_blank" href="<?php echo BASE_URL_UPLOAD . 'set-notification/' . $result[$i]->file_th; ?>">
                <div class="table-wrap">
                    <div class="table-icon">
                        <span class="mbr-iconfont fa-file-pdf-o fa"></span>
                    </div>
                    <div class="table-heading">
                        <h1 class="table-pricing mbr-fonts-style display-5 pt-3"><?php echo $result[$i]->date; ?></h1>
                    </div>
                    <hr>
                    <h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-7"><?php echo $result[$i]->title_th; ?></h3>

                </div>
                </a>
            </div>
            <?php $i++; } ?> 
            <?php }else{ ?>

                <?php $i = 0; foreach ($result as $row) { ?>
            <div class="col-xl-4 col-md-6 col-10">
                <a target="_blank" href="<?php echo BASE_URL_UPLOAD . 'set-notification/' . $result[$i]->file_en; ?>">
                <div class="table-wrap">
                    <div class="table-icon">
                        <span class="mbr-iconfont fa-file-pdf-o fa"></span>
                    </div>
                    <div class="table-heading">
                        <h1 class="table-pricing mbr-fonts-style display-5 pt-3"><?php echo $result[$i]->date; ?></h1>
                    </div>
                    <hr>
                    <h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-7"><?php echo $result[$i]->title_en; ?></h3>

                </div>
                </a>
            </div>
            <?php $i++; } ?> 



                <?php }?>

       


        </div>
    </div>
</section>