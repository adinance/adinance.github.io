<?php $CI =& get_instance(); ?>


<section class="extFeatures cid-uo4kVypzus" id="extFeatures9-8m">
    <div class="container-fluid">
        
        <?php  $current_year = date("Y"); for($year = $current_year; $year >= 2014; $year--){ ?>

        <div class="section-heading" style="padding-top: 30px; ">
            <h1 class="mbr-fonts-style mbr-section-title align-center mbr-light mbr-black display-2" style="color: #293787;"><strong>
                <?php 
                if($this->session->userdata('lang')=='thai'){
                    echo $year + 543;

                }else{
                    echo $year;

                }
                
                ?></strong></h1>
            <div class="underline align-center">
                <div class="line"></div>
            </div>
        </div>
        <div class="row text-center justify-content-center">

            <?php if($this->session->userdata('lang')=='thai'){ ?>
            <?php $i = 0; foreach ($result[$year] as $row) { ?>

            <div class="col-xl-3 col-md-6 col-10">
                <a target="_blank" href="<?php echo BASE_URL_UPLOAD . 'set-notification/' . $result[$year][$i]->file_th; ?>">
                    <div class="table-wrap">
                        <div class="table-icon">
                            <span class="mbr-iconfont fa-file-pdf-o fa"></span>
                        </div>
                        <div class="table-heading">
                            <h1 class="table-pricing mbr-fonts-style display-4 pt-3">
                                <strong><?php echo $CI->utilities->th_date($result[$year][$i]->create_date); ?></strong></h1>
                        </div>
                        <hr>
                        <h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-4">
                            <?php echo $result[$year][$i]->title_th; ?></h3>

                    </div>
                </a>

            </div>

            <?php $i++; } ?>

            <?php }else{ ?>
            <?php $i = 0; foreach ($result[$year] as $row) { ?>

            <div class="col-xl-3 col-md-6 col-10">
                <a target="_blank" href="<?php echo BASE_URL_UPLOAD . 'set-notification/' . $result[$year][$i]->file_en; ?>">
                    <div class="table-wrap">
                        <div class="table-icon">
                            <span class="mbr-iconfont fa-file-pdf-o fa"></span>
                        </div>
                        <div class="table-heading">
                            <h1 class="table-pricing mbr-fonts-style display-7 pt-3"><strong><?php echo $result[$year][$i]->date; ?></strong>
                            </h1>
                        </div>
                        <hr>

                        <h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-4">
                            <?php echo $result[$year][$i]->title_en; ?></h3>

                    </div>
                </a>

            </div>

            <?php $i++; } ?>

            <?php } ?>

        </div>
                <!-- <hr style="border : 50px solid rgb(181, 182, 187);"> -->
        <?php } ?>
    </div>
</section>