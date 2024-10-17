<section class="extСontent cid-upmykgfvWC" id="extContent7-dh">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 img-col order-2">
                <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/general-information-1050x1203.jpg" alt="" title="">

            </div>
            <div class="col-lg-6 text-col align-left">

                <p class="mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-5">
                    <?php echo isset($this->session->gi_company_name) ? $this->session->gi_company_name : '<strong>● Company name</strong> : CMO Public Company Limited'; ?>
                    <br><?php echo isset($this->session->gi_stock_code) ? $this->session->gi_stock_code : '<strong>● Stock code</strong> : CMO'; ?>
                    <br><?php echo isset($this->session->gi_registration_no) ? $this->session->gi_registration_no : '<strong>● Registration no.</strong> : 0107546000458';?>
                    <br><?php echo isset($this->session->gi_stock_market) ? $this->session->gi_stock_market : '<strong>● Stock market</strong> : mai'; ?>
                    <br><?php echo isset($this->session->gi_type_of_industry) ? $this->session->gi_type_of_industry : '<strong>● Type of industry</strong> : Services'; ?>
                    <br><?php echo isset($this->session->gi_type_of_business) ? $this->session->gi_type_of_business : '<strong>● Type of business</strong> : -';?>
                    <br><?php echo isset($this->session->gi_website) ? $this->session->gi_website : '<strong>● Website</strong> : www.cmo-group.com'; ?>
                    <br><?php echo isset($this->session->gi_year_of_establishment) ? $this->session->gi_year_of_establishment : '<strong>● Year of establishment</strong> : 1991'; ?>
                    <br><?php echo isset($this->session->gi_first_trade_date) ? $this->session->gi_first_trade_date : '<strong>● First trade date</strong> : 16 September 2004'; ?>
                    <br><?php echo isset($this->session->gi_address) ? $this->session->gi_address : '<strong>● Address</strong> : 4/18-19 Soi Nuanchan 56, Nuanchan, Buengkum, Bangkok 10230';?>
                    <br><?php echo isset($this->session->gi_registered_capital) ? $this->session->gi_registered_capital : '<strong>● Registered capital</strong> : 434,398,577 Baht'; ?>
                    <br><?php echo isset($this->session->gi_paid_up_capital) ? $this->session->gi_paid_up_capital : '<strong>● Paid-up capital</strong> : 280,962,733 Baht'; ?>
                    <br><?php echo isset($this->session->gi_par_value) ? $this->session->gi_par_value : '<strong>● Par value</strong> : 1.00 Baht'; ?>
                    <br><?php echo isset($this->session->gi_fiscal_year) ? $this->session->gi_fiscal_year : '<strong>● Fiscal year </strong>: 1 January -31 December'; ?>
                    <br><?php echo isset($this->session->gi_contact) ? $this->session->gi_contact : '<strong>● Contact</strong> : Warunee Puthapornpoj (NAN) / Investor Relations <br> Tel. +6699 595 6423 / Email: warunee@cmo-group.com'; ?>
                </p>
            </div>
        </div>
    </div>
</section>