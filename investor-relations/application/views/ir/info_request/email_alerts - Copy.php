<section>

  <div class="container form_apps">

    <!-- <section class="py-5 text-center container"> -->
    <div class="row py-lg-5 ">
      <div class="col-lg-12 col-md-12 mx-auto">
        <p class="lead text-body-secondary text-nowrap text-center">
          Please fill up your details below to receive email alerts.<br>
          Our systems will automatically send you company annoucements and <br>
          set announcements on CMO public company limited.
        </p>
      </div>
    </div>
    <!-- </section> -->

    <?php 
    $form_attributes = array('class' => 'email_alerts', 'id' => 'email_alerts');
    echo form_open(BASE_URL . 'info_request/subscribe', $form_attributes); 
    ?>

    <div class="row">
      <div class="col-md-1 ">
      </div>
      <div class="col-md-10 col-xs-11">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-md-1 ">
      </div>
      <div class="col-md-7 col-xs-11 ">
        <label for="email">Email</label>
        <input type="email" class="form-control text-lowercase" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" required>
      </div>

      <div class="col-auto">
        <label for="agree">&nbsp;</label>
        <div class="form-check align-middle">
          <input class="form-check-input" type="checkbox" id="gridCheck" required>
          <label class="form-check-label" for="gridCheck">
            I Have Read And Accrept
          </label>
        </div>
        <span class="form-text" style="padding:0px 0px 0px 24px;">
          <a href="">The Privacy Statement</a>
        </span>
      </div>
    </div>
    <!--     
    <div class="row g-10">
      <div class="col-md-8 col-sm-12">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required
          pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" style="text-transform: lowercase">
      </div>
      <div class="col-md-4 col-sm-12 ">
        <label for="agree"></label>
        <div class="form-check align-middle">
          <input class="form-check-input" type="checkbox" id="gridCheck" required>
          <label class="form-check-label" for="gridCheck">
            I Have Read And Accrept
          </label>
          <div id="gridCheck" class="form-text">
            The Privacy Statement
          </div>
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="col-md-1 ">
      </div>
      <div class="col-md-11" style="padding:15px 0px 0px 11px;">
        <button type="submit" class="btn btn-primary text-uppercase">Subscribe</button>
      </div>

    </div>

    <?php echo form_close(); ?>

</section>