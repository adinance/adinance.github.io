<section class="form cid-u6T6VH2jao" id="extForm22-12">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto mbr-form" data-form-type="formoid">
                <!--Formbuilder Form-->
                <?php $form_attributes = array('class' => 'mbr-form form-with-styler', 'id' => 'form_uploads', );?>
                <?php echo form_open_multipart(BASE_URL . 'apps/edit/' . $docs->id, $form_attributes); ?>
                <div class="dragArea form-row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-1">Uploads</h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="filename">
                        <label for="filename-extForm22-12" class="form-control-label mbr-fonts-style display-5">Name</label>
                        <input type="text" name="name" required class="form-control display-5" value="<?php echo $docs->name?>" id="filename-extForm22-12">
                    </div>
                    <div data-for="url" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="uploads-extForm22-12" class="form-control-label mbr-fonts-style display-5">URL</label>
                        <input type="text" name="source" class="form-control display-5" value="<?php echo $docs->source?>"  required id="uploads-extForm22-12">
                    </div>
                    <div data-for="description" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="description-extForm22-12" class="form-control-label mbr-fonts-style display-5">Description</label>
                        <textarea name="description" data-form-field="description" class="form-control display-5" id="description-extForm22-12"><?php echo $docs->description?></textarea>
                    </div>
                    <div data-for="sort" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="ordering-extForm22-12" class="form-control-label mbr-fonts-style display-5">Sorting (Minimum number to first order)</label>
                        <div class="form-row">
                            <input type="range" name="sort" min="0" max="100" step="1" data-form-field="input-range" class="col display-5" value="<?php echo $docs->sort?>"  id="ordering-extForm22-12">
                            <div class="col-auto">
                                <span class="value form-control"><?php echo $docs->sort?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="status">
                        <div class="form-control-label">
                            <label for="status-extForm22-12" class="mbr-fonts-style display-5">Status</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="actived" data-form-field="radio" class="form-check-input display-5" value="1" <?php if($docs->actived == 1) echo 'checked'; ?>  id="status-extForm22-12">
                            <label class="form-check-label display-5">Enable</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="actived" data-form-field="radio" class="form-check-input display-5" value="0" <?php if($docs->actived == 0) echo 'checked'; ?> id="status-extForm22-12">
                            <label class="form-check-label display-5">Disable</label>
                        </div>
                    </div>
                    <div class="col-auto m-auto mbr-section-btn">
                        <button type="submit" class="btn btn-primary display-5">SAVE</button>
                    </div>
                </div>
                <?php echo form_close(); ?>

                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>
