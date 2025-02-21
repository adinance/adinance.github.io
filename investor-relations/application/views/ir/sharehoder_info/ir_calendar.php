<style>
    .link span {
        /* color:blue; */
        font-size: 30px;
    }

    .link:hover span {
        /* font-weight: bold; */
        /* color: #93dd88 !important; */
        color: #293787 !important;
        

    }

    .link:hover {
        text-decoration: underline;
        /* font-size: 40px; */
        /* font-weight: bold; */
        
    }
</style>

<?php $CI =& get_instance(); ?>
<section class="features6 cid-upnKUgGxV0" id="features6-dy">
    <div class="container">
        <div class="media-container-row">

         
        <?php if($this->session->userdata('lang')=='thai'){ ?>

        <?php $i = 0; foreach ($result as $row) { ?>
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3"><a target="_blank" class="link" href="<?php echo 'https://cmo-group.com/ir/uploads/calendar/' . $result[$i]->id . '.ics'; ?>">
                        <span class="mbr-iconfont fa-calendar fa"
                            style="color: rgb(74, 122, 181);"></span>
                </a>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-4" style="line-height : 1.25em;">
                            <strong><?php echo $CI->utilities->th_date($result[$i]->date); ?> </strong> | <?php echo $result[$i]->start; ?>  <?php if($result[$i]->duration>0) { echo ' - ' . $result[$i]->end;} ?>  น. </h4>
                        <p class="mbr-text mbr-fonts-style display-7" style="line-height : 1.25em;"><?php echo $result[$i]->title_th; ?> </p>
                        <br><a target="_blank" class="link" href="<?php echo 'https://cmo-group.com/ir/uploads/calendar/' . $result[$i]->id . '.ics'; ?>"><div class="mbr-text mbr-fonts-style display-4" style="float: right; color: rgb(74, 122, 181);">เพิ่มในปฏิทิน</div></a>
                    </div>
                </div>
            <?php 
            $number = $i + 1;
            if ($number % 3 === 0 ) {
                echo '</div><div class="media-container-row">';
            } else {
                echo '';
            }
        
            $i++; 
            }
        ?> 

<?php }else{ ?>

    <?php $i = 0; foreach ($result as $row) { ?>
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-img pb-3"><a target="_blank" class="link" href="<?php echo 'https://cmo-group.com/ir/uploads/calendar/' . $result[$i]->id . '.ics'; ?>">
                        <span class="mbr-iconfont fa-calendar fa"
                            style="color: rgb(74, 122, 181);"></span>
                </a>
                    </div>
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-4" style="line-height : 1.25em;">
                            <strong><?php echo $result[$i]->date; ?> </strong> | <?php echo $result[$i]->start; ?>  <?php if($result[$i]->duration>0) { echo ' - ' . $result[$i]->end;} ?>  hrs. </h4>
                        <p class="mbr-text mbr-fonts-style display-7" style="line-height : 1.25em;"><?php echo $result[$i]->title_en; ?> </p>
                        <br><a target="_blank" class="link" href="<?php echo 'https://cmo-group.com/ir/uploads/calendar/' . $result[$i]->id . '.ics'; ?>"><div class="mbr-text mbr-fonts-style display-4" style="float: right; color: rgb(74, 122, 181);">Add to Calendar</div></a>
                    </div>
                </div>
            <?php 
            $number = $i + 1;
            if ($number % 3 === 0 ) {
                echo '</div><div class="media-container-row">';
            } else {
                echo '';
            }
        
            $i++; 
            }
        ?> 


    <?php } ?>

           

        </div>

        <div class="media-container-row">

            

        </div>

    </div>

</section>
