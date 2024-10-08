<section class="extFeatures cid-uo4kVypzus" id="extFeatures9-8m">
    <div class="container">
        <div class="section-heading">
        </div>
        <div class="row text-center justify-content-center">

            <?php if($this->session->userdata('lang')=='thai'){ ?>
            <?php $i = 0; foreach ($result as $row) { ?>
            <div class="col-xl-4 col-md-6 col-10">
                <div class="table-wrap">
                    <div class="table-icon">
                       <span
                                class="mbr-iconfont fa-file-pdf-o fa"></span>
                    </div>
                    <div class="table-heading">
                        <h1 class="table-pricing mbr-fonts-style display-5 pt-3"><?php echo $result[$i]->date; ?></h1>
                    </div>
                    <hr> <a target="_blank"
                    href="<?php echo BASE_URL_UPLOAD . 'set-notification/' . $result[$i]->file_th; ?>">
                    <h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-7">
                   <?php echo $result[$i]->title_th; ?></h3></a>

                </div>
            </div>

            <?php $i++; } ?>
            <?php }else{ ?>
            <?php $i = 0; foreach ($result as $row) { ?>

                <div class="col-xl-4 col-md-6 col-10">
                <div class="table-wrap">
                    <div class="table-icon">
                        <span
                                class="mbr-iconfont fa-file-pdf-o fa"></span>
                    </div>
                    <div class="table-heading">
                        <h1 class="table-pricing mbr-fonts-style display-5 pt-3"><?php echo $result[$i]->date; ?></h1>
                    </div>
                    <hr>
                    <a target="_blank"
                            href="<?php echo BASE_URL_UPLOAD . 'set-notification/' . $result[$i]->file_en; ?>"><h3 class="mbr-fonts-style mbr-section-subtitle align-left mbr-light pt-3 display-7">
                        <?php echo $result[$i]->title_en; ?></h3></a>

                </div>
            </div>

            <?php $i++; } ?>

            <?php } ?>

        </div>
    </div>
</section>