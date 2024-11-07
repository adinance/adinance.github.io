<section class="form cid-u6T6VH2jao" id="extForm22-12">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto mbr-form" data-form-type="formoid">
                <!--Formbuilder Form-->
                <?php $form_attributes = array('class' => 'mbr-form form-with-styler', 'id' => 'form_uploads');?>
                <?php echo form_open_multipart(BASE_URL . 'apps/insert', $form_attributes); ?>
                <!-- <form action="https://mobirise.com/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"> -->
                <!-- <input type="hidden" name="email" data-form-email="true" value="JUQmKYYu1yqU7q8UGFKWnIfhfZB6dIxanXdtACNL+fqFNXx/h1WIfGzFPgk6DVD3/Xc27pVnC/HLg310FUWsvroc9uhv4t5k3yOcX7HPb8bkNoQ0LCq/uI2PlGCRVsuN.4uXsfndenmv6rxHirADibTKer329pyAnd3HK+E6RgvhxqqPOS7B/GLOfZQv9Zi2VcxSe/cv30zJWOPQa/Kwu/NkyipYcxL2iTWIIlHy1VUyJST9OnxZbnN/CBG1HcBWp"> -->
                <!-- <div class="form-row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div>
                    </div> -->
                <div class="dragArea form-row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Uploads</h2>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-group" data-for="filename">
                        <label for="filename-extForm22-12" class="form-control-label mbr-fonts-style display-7"><b>Name</b></label>
                        <input type="text" name="name" required class="form-control display-7" id="filename-extForm22-12">
                    </div>

                    <div data-for="date" class="col-lg-4 col-md-12 col-sm-12 form-group">
                        <label for="date-extForm22-12" class="form-control-label mbr-fonts-style display-7"><b>Date</b></label>
                        <input type="text" name="date" data-form-field="date" class="form-control display-7" required  id="date-extForm22-12">
                    </div>

                    <div data-for="url" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="uploads-extForm22-12" class="form-control-label mbr-fonts-style display-7"><b>URL</b></label>
                        <input type="text" name="url" class="form-control display-7" required id="uploads-extForm22-12">
                    </div>

                    <div data-for="sort" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="ordering-extForm22-12" class="form-control-label mbr-fonts-style display-7"><b> Sorting </b> (minimum number to first order)</label>
                        <div class="form-row">
                            <input type="range" name="sort" min="0" max="10" step="1" data-form-field="input-range" class="col display-7" value="5" id="ordering-extForm22-12">
                            <div class="col-auto">
                                <span class="value form-control">5</span>
                            </div>
                        </div>
                    </div>
                    <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="description-extForm22-12" class="form-control-label mbr-fonts-style display-7"><b>Description</b></label>
                        <textarea name="description" data-form-field="description" class="form-control display-7" id="description-extForm22-12"></textarea>
                    </div>

                    

                    
                  
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="status">
                        <div class="form-control-label">
                            <label for="status-extForm22-12" class="mbr-fonts-style display-7"><b>Status</b></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="actived" data-form-field="radio" class="form-check-input display-7" value="1" checked id="status-extForm22-12">
                            <label class="form-check-label display-7">Enable</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="actived" data-form-field="radio" class="form-check-input display-7" value="0" id="status-extForm22-12">
                            <label class="form-check-label display-7">Disable</label>
                        </div>
                    </div>
                    <div class="col-auto m-auto mbr-section-btn">
                        <button type="submit" class="btn btn-primary display-7">SAVE</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
               
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>





