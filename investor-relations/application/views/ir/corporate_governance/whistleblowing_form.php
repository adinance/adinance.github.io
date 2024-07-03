<section>

<div class="container form_apps">
    <?php $form_attributes = array('class' => 'whistleblowing_form', 'id' => 'whistleblowing_form');?>
    <?php echo form_open(BASE_URL . 'corporate_governance/send', $form_attributes); ?>

    <div class="row ">
        <div class="col-md-1 ">
        </div>
        <div class="col-md-10 col-xs-11" >
            <label for="name" class="bold">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    </div>


    <div class="row ">
        <div class="col-md-1">
        </div>
        <div class="col-md-5 col-xs-12">
            <label for="telephone" class="bold">Telephone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" pattern="[0-9]+" required>
        </div>
        <div class="col-md-5 col-xs-12">
            <label for="email" class="bold">Email</label>
            <input type="text" class="form-control text-lowercase" id="email" name="email"
                pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" required>
        </div>
        <div class="col-md-1">
        </div>
    </div>

    
    <div class="row ">
        <div class="col-md-1 ">
        </div>
        <div class="col-md-10 col-xs-11">
            <label for="subject" class="bold">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
    </div>

    <div class="row " >
        <div class="col-md-1 ">
        </div>
        <div class="col-md-10 col-xs-11">
            <label for="name" class="bold">Message</label>
            <textarea class="form-control" name="message" id="editor"></textarea>
        </div>
    </div>

    <div class="row">
      <div class="col-md-1 ">
      </div>
      <div class="col-md-11" style="padding:15px 0px 0px 11px;">
        <button type="submit" class="btn btn-primary text-uppercase">Send</button>
      </div>

    </div>

    <!-- <div class="row ">
            <div class="col-md-1 ">
            </div> -->
            <!-- <div class="col-md-12" > -->
                <!-- <button type="submit" class="btn btn-primary text-uppercase">Send</button> -->
            <!-- </div> -->

    <!-- </div> -->

    <?php echo form_close(); ?>
    </div>
</section>
