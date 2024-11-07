
<section class="engine"><a href="https://mobirise.info/a">online web builder</a></section><section class="extHeader cid-uaLgf77X3G" id="extHeader31-2b">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">

        <h1 class="mbr-section-title mbr-normal align-left mbr-white pb-4 mbr-fonts-style display-2">Find Documents</h1>
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-12 col-md-10 col-sm-12 align-center" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="W0O8C1qchjIep014Mk1nUj405a8QhedZAbkhf49jrFYe7NW83Bn6FJ/yPuizQbdauuhImBxJ14ALrZW3FSwtLssa0SVBcK0FBh8Wc0/aauszdhDxCdWGNzp0maAHAy8j.Zk3L0vQ3H7/P4zWZgVjOe26355gL4QNpF8BtZhjNR74k3D2Xqmx6CHZnOOGf4mPC2kZhmQjyurjqqMz488Owfx6JF071BjBUeeRqY+ag9WMVAYiUtQo17med/V/veAep">
                   
                    <div class="dragArea row">
                        <div class="col-lg-4 col-md-6 form-group" data-for="type">
                            <select name="type" data-form-field="Type" class="form-control display-7" placeholder="Any Type" id="type-extHeader31-2b">
                                <option value="Any Type">2024-05-24</option>
                                
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-6 form-group" data-for="status">
                            <select name="status" data-form-field="Status" class="form-control display-7" placeholder="Any Status" id="status-extHeader31-2b">
                                <option value="Any Status">All Documents</option>
                                <option value="Any Status">หนังสือเชิญประชุมคณะกรรมการบริษัท ครั้งที่ 6-2567 TH</option>
                                <option value="For Sale">วาระที่ 1 รายงานการประชุมคณะกรรมการบริษัท ครั้งที่ 5-2567_signed</option>
                                <option value="For Rent">วาระที่ 4 AGM Presentation 2024</option>
                                <option value="For Buy">วาระที่ 4 Script ประชุม AGM 2024</option>
                            </select>
                        </div>
                        
                        <div class="col-auto mbr-section-btn input-group-btn"><button type="submit" class="btn btn-form btn-white-outline display-7"><span class="mdi-action-search mbr-iconfont mbr-iconfont-btn"></span></button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<section class="section-table cid-u6T9nwuCu6" id="table1-1b">
    <div class="container container-table">
        <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Documents</h2> -->
        <div class="table-wrapper">
            <div class="container">
                <div class="row search">
                    <div class="col-md-6">
                        <!-- <div class="dataTables_filter"> -->
                            <!-- <label class="mbr-fonts-style display-7"><a href="#">Create New</a> | </label> -->
                            <!-- <input class="form-control input-sm" disabled=""> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-md-6">
                        <div class="dataTables_filter">
                            <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                            <input class="form-control input-sm" disabled="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container scroll">
                <table class="table isSearch" cellspacing="0" data-empty="No matching records found">
                    <thead>
                        <tr class="table-heads ">
                            <th class="head-item mbr-fonts-style display-7">NAME</th>
                            <?php if($user['permission']==1){ ?>
                                <th class="head-item mbr-fonts-style display-7">SORT</th>
                                <th class="head-item mbr-fonts-style display-7">STATUS</th>
                                <th class="head-item mbr-fonts-style display-7">DATE</th>
                                <th class="head-item mbr-fonts-style display-7"></th>
                            <?php } ?>
                        </tr>
                    </thead>

                    <tbody>
                       
                    <?php $i = 0; foreach ($docs as $row) { ?>

                        <tr>
                            <td class="body-item mbr-fonts-style display-7"><a href="<?php echo BASE_URL . 'docs/' . $docs[$i]->id; ?>" target="_blank"><?php echo $docs[$i]->name; ?></a></td>
                            
                            <?php if($user['permission']==1){ ?>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $docs[$i]->sort;?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo ($docs[$i]->actived == 1) ? '<strong class="text-success">Enable</strong>' : '<strong class="text-danger">Disable</strong>'; ?></td>
                                <td class="body-item mbr-fonts-style display-7"><?php echo $docs[$i]->date;?></td>
                                <td class="body-item mbr-fonts-style display-7"><a href="<?php echo BASE_URL . 'edit/' . $docs[$i]->id; ?>" target="_blank"><span class="mdi-editor-mode-edit mbr-iconfont mbr-iconfont-btn"></span></a>  <a href="<?php echo BASE_URL . 'remove/' . $docs[$i]->id; ?>" target="_blank"><span class="mdi-action-highlight-remove mbr-iconfont mbr-iconfont-btn text-warning"></span></a></td>
                            <?php } ?>
                        </tr>

                    <?php $i++; } ?>

                        

                    </tbody>
                </table>
            </div>
            <div class="container table-info-container">
                <div class="row info">
                    <div class="col-md-6">
                        <div class="dataTables_info mbr-fonts-style display-7">
                            <span class="infoBefore">Showing</span>
                            <span class="inactive infoRows"></span>
                            <span class="infoAfter">entries</span>
                            <span class="infoFilteredBefore">(filtered from</span>
                            <span class="inactive infoRows"></span>
                            <span class="infoFilteredAfter"> total entries)</span>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal mbr-popup cid-u6Tc0q7xA9 fade" tabindex="-1" role="dialog" data-overlay-opacity="0.8"
    data-overlay-color="#000000" id="mbr-popup-1c" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="container position-static margin-center-pos">
                <div class="modal-header">
                    <h5 class="modal-title mbr-fonts-style display-5">Edit Document</h5>
                    <button type="button" class="close d-flex" data-dismiss="modal" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            viewBox="0 0 23 23" fill="currentColor">
                            <path
                                d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">

                    <div>

                        <div class="form-wrapper" data-form-type="formoid">
                            <!--Formbuilder Form-->
                            <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler"
                                data-form-title="Mobirise Form"><input type="hidden" name="email"
                                    data-form-email="true"
                                    value="YFbuJm8rqn+V7IzqPmyrpvf34ZiMj33PJ50XNE2FgxMDRe1C94J0JY/QFaH2MMosB+GvQNeIWMCAFR6b1PT8OW3aKEQmL+TOiFBveFtAO0lKiz0YEP2FleBVfqoAoN79.H9oovqMChx211qiRjceZpZDr8jhOgS2wjBIKrRKHjV+cMg/Lc2zde5MzlFbd1n1Ft6YlbOcs1NJ+4y7V97r1F/HNZzEkh47PAp/UUOmH6khn1EGewH3Yww4Ypb//eTaE">
                                <div class="">
                                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                                        Thanks for filling out the form!</div>
                                    <div hidden="hidden" data-form-alert-danger=""
                                        class="alert alert-danger col-12"> </div>
                                </div>
                                <div class="dragArea">
                                    <div class="col form-group" data-for="name">
                                        <input type="text" name="name" placeholder="File Name"
                                            data-form-field="Name" required="required"
                                            class="form-control display-7" value="" id="name-popup_upload">
                                    </div>
                                    <div class="col form-group" data-for="email">
                                        <input type="email" name="email" placeholder="Upload"
                                            data-form-field="Email" required="required"
                                            class="form-control display-7" value="" id="email-popup_upload">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 input-group-btn"><button type="submit"
                                            class="btn btn-secondary display-4">UPLOAD</button></div>
                                </div>
                            </form>
                            <!--Formbuilder Form-->
                        </div>
                    </div>
                </div>

                <div class="modal-footer pt-0">
                    <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                            href="https://mobiri.se">
                            SAVE</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="modal mbr-popup cid-u7s0UbL2jk fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
    data-overlay-opacity="0.8" id="mbr-popup-1t" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="container position-static margin-center-pos">
                <div class="modal-header pb-0">
                    <h5 class="modal-title mbr-fonts-style display-5">Document Name</h5>
                    <button type="button" class="close d-flex" data-dismiss="modal" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            viewBox="0 0 23 23" fill="currentColor">
                            <path
                                d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                            </path>
                        </svg>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore incidunt molestias, vitae
                        recusandae error ipsam
                    </p>

                    <div>
                        <div class="card-img mbr-figure">
                            <img src="<?php echo BASE_URL . TEMPLATE ; ?>assets/images/popup.jpg" alt="Mobirise">
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <div class="mbr-section-btn">
                        <a class="btn btn-md btn-primary display-4" href="https://mobiri.se">
                            LEARN MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="modal mbr-popup cid-u7s0UbL2jk fade" tabindex="-1" role="dialog" data-overlay-color="#000000"
    data-overlay-opacity="0.8" id="mbr-popup-1t" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="container position-static margin-top-pos">
                <div class="modal-header pb-0">
                    <!-- <h5 class="modal-title mbr-fonts-style display-5">Document Name</h5> -->
                    <button type="button" class="close d-flex" data-dismiss="modal" data-bs-dismiss="modal"
                        aria-label="Close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                            viewBox="0 0 23 23" fill="currentColor">
                            <path
                                d="M13.4 12l10.3 10.3-1.4 1.4L12 13.4 1.7 23.7.3 22.3 10.6 12 .3 1.7 1.7.3 12 10.6 22.3.3l1.4 1.4L13.4 12z">
                            </path>
                        </svg>
                    </button>
                    
                </div>

                <div class="modal-body">
                    <object data="<?php echo BASE_URL ; ?>assets/uploads/2022_ar_479_en.pdf#toolbar=0" type="application/pdf" width="100%" height="1200px">
                    <!-- <p>Unable to display PDF file. <a href="<?php echo BASE_URL ; ?>assets/uploads/sample.pdf">Download</a> instead.</p> -->
                    </object>
                </div>

                <!-- <div class="modal-footer">
                    <div class="mbr-section-btn">
                        <a class="btn btn-md btn-primary display-4" href="https://mobiri.se">
                            LEARN MORE
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

