<section class="mbr-section form1 cid-uqIcaKptso" id="form1-ic">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <?php $form_attributes = array('class' => 'mbr-form form-with-styler', 'id' => 'whistleblowing_form', 'data-form-title' => 'Whistleblowing Form');?>
                <?php echo form_open(BASE_URL . 'corporate_governance/send', $form_attributes); ?>
                <!-- 
                    <input type="hidden" name="email" data-form-email="true"
                        value="fR/sHjLoU4h7UBD7ImMhIpYdFpeJepFTWiyrvVT+UbmVB260+aRMrII6c+XuuNOE3nungrwVqaS6wW/6oPpw/8Bqtqi3SEFCo9p/sOJ0AgHU67E7sBT51iBBuZdY6W0l.76T53RC/I5MeBuC2k6GNcWqW4+KEejSZFhYwG/AHNsbOQ7ZCf4XqJxq83cjuQ7O2tl0QKCBOYU0p+cVkxYqtk8Dw5MGDcFTfq+awqotndgvqrKVFu0v3XEKLe237bhm/.exTCPvbcERyV5ys3G+Wqmi7qBDPK55U2imh/hTBFRBZvBtxpIZ2uACePrwgNOjCEsb3QJEd8mwKM6IdocOr2Si4VQt13jwiZy+IuGvOUYX4HX+nkzJJ0TNfiA0qRw7xt"> -->
                <div class="row">
                    <div hidden="hidden" data-form-alert="" class="alert alert-success col-12"></div>
                    <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12"> </div>
                </div>
                <div class="dragArea row">
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="name">
                        <label for="name" class="form-control-label mbr-fonts-style display-7">Name</label>
                        <input type="text" name="name" data-form-field="Name" required class="form-control display-7" value="" id="name">
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 form-group" data-for="phone">
                        <label for="phone" class="form-control-label mbr-fonts-style display-7">Phone</label>
                        <input type="text" name="telephone" data-form-field="Phone" required class="form-control display-7" value="" id="telephone" pattern="[0-9]+">
                    </div>
                    <div data-for="email" class="col-lg-8 col-md-12 col-sm-12 form-group">
                        <label for="email" class="form-control-label mbr-fonts-style display-7">Email</label>
                        <input type="email" name="email" data-form-field="Email" class="form-control display-7" required value="" id="email">
                    </div>
                    <div data-for="subject" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="subject" class="form-control-label mbr-fonts-style display-7">Subject</label>
                        <input type="text" name="subject" data-form-field="subject" class="form-control display-7" required value="" id="subject">
                    </div>
                    <div data-for="message" class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <label for="message" class="form-control-label mbr-fonts-style display-7">Message</label>
                        <textarea name="message" data-form-field="Message" required class="form-control display-7" id="message"></textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="checkbox">
                        <div class="form-control-label">
                            <label for="checkbox" class="mbr-fonts-style display-7">The Privacy Statement</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="Yes" name="I Have Read And Accept" data-form-field="I Have Read And Accept" class="form-check-input display-7" required="required" id="I Have Read And Accept-form1-ic">
                            <label class="form-check-label display-7">I Have Read And Accept</label>
                        </div>
                    </div>
                    <div class="col-md-12 input-group-btn align-center">
                        <button type="submit" class="btn btn-primary btn-form display-4">SEND</button>
                    </div>
                </div>
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</section>