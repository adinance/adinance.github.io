<section class="extСontent cid-upmykgfvWC" id="extContent7-dh">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 img-col order-2">
                <img src="<?php echo BASE_URL . PATH_MOBIRISE; ?>assets/images/general-information-1050x1203.jpg" >
            </div>
            <div class="col-lg-6 text-col align-left">
                <!-- <table width="100%" cellspacing="0" cellpadding="0" border="0" class="table dataTable mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7"> -->
                <table border="0" cellspacing="0" cellpadding="0"  class="table dataTable mbr-text mbr-black mbr-regular mbr-light mbr-fonts-style display-7">
                    <tbody>
                        <tr>
                            <td valign="middle" bgcolor="#367bba" colspan="2" style="padding-left: 3px; color: rgb(255, 255, 255);">
                                <strong>&nbsp;&nbsp;&nbsp;<?php echo isset($this->session->gi_company_name_value) ? $this->session->gi_company_name_value : 'CMO Public Company Limited'; ?></strong>
                            </td>
                        </tr>
                        <tr bgcolor="#f1eff0">
                            <td valign="top"  align="left" style="padding: 3px 10px;" ><strong><?php echo isset($this->session->gi_stock_code) ? $this->session->gi_stock_code : 'Stock code'; ?></strong></td>
                            <td valign="top" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_stock_code_value) ? $this->session->gi_stock_code_value : 'CMO'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_registration_no) ? $this->session->gi_registration_no : 'Registration no.';?></strong></td>
                            <td valign="top" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_registration_no_value) ? $this->session->gi_registration_no_value : '0107546000458';?></td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_stock_market) ? $this->session->gi_stock_market : 'Stock market'; ?></strong></td>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_stock_market_value) ? $this->session->gi_stock_market_value : 'mai'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_type_of_industry) ? $this->session->gi_type_of_industry : 'Type of industry'; ?></strong></td>
                            <td valign="top" align="left" style="padding: 3px 10px;"><span style="color: rgb(63, 68, 74);"><?php echo isset($this->session->gi_type_of_industry) ? $this->session->gi_type_of_industry : 'Services'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_type_of_business) ? $this->session->gi_type_of_business : 'Type of business';?></strong></td>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_type_of_business_vaue) ? $this->session->gi_type_of_business_vaue : '-';?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_website) ? $this->session->gi_website : 'Website'; ?></strong></td>
                            <td valign="top" align="left" style="padding: 3px 10px;" nowrap><?php echo isset($this->session->gi_website_value) ? $this->session->gi_website_value : '<a href="http://www.cmo-group.com">www.cmo-group.com</a>'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;" nowrap><strong><?php echo isset($this->session->gi_year_of_establishment) ? $this->session->gi_year_of_establishment : 'Year of establishment'; ?></strong></td>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;" ><?php echo isset($this->session->gi_year_of_establishment_value) ? $this->session->gi_year_of_establishment_value : '1991'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_first_trade_date) ? $this->session->gi_first_trade_date : 'First trade date'; ?></strong></td>
                            <td valign="top" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_first_trade_date_value) ? $this->session->gi_first_trade_date_value : '16 September 2004'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_address) ? $this->session->gi_address : 'Address';?></strong></td>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_address_value) ? $this->session->gi_address_value : '4/18-19 Soi Nuanchan 56, <br>Nuanchan, Buengkum,<br>Bangkok 10230';?></td>
                        </tr>
                        <tr>
                            <td valign="top" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_registered_capital) ? $this->session->gi_registered_capital : 'Registered capital'; ?></strong></td>
                            <td valign="top" align="left" style="padding: 3px 10px;"><span style="color: rgb(30, 30, 33);"><?php echo isset($this->session->gi_registered_capital_value) ? $this->session->gi_registered_capital_value : '501,610,698.00 Baht'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_paid_up_capital) ? $this->session->gi_paid_up_capital : 'Paid-up capital'; ?></strong></td>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><span style="color: rgb(30, 30, 33);"><?php echo isset($this->session->gi_paid_up_capital_value) ? $this->session->gi_paid_up_capital_value : '426,174,854.00 Baht'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top"  align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_par_value) ? $this->session->gi_par_value : 'Par value'; ?></strong></td>
                            <td valign="top"  align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_par_value_value) ? $this->session->gi_par_value_value : '1.00 Baht'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_fiscal_year) ? $this->session->gi_fiscal_year : 'Fiscal year'; ?></strong></td>
                            <td valign="top" bgcolor="#f1eff0" align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_fiscal_year_value) ? $this->session->gi_fiscal_year_value : '1 January -31 December'; ?></td>
                        </tr>
                        <tr>
                            <td valign="top"  align="left" style="padding: 3px 10px;"><strong><?php echo isset($this->session->gi_contact) ? $this->session->gi_contact : 'Contact'; ?></strong></td>
                            <td valign="top"  align="left" style="padding: 3px 10px;"><?php echo isset($this->session->gi_contact_value) ? $this->session->gi_contact_value : 'Warunee Puthapornpoj (NAN) <br>Tel. (662) 088-3888 #1399 <br>Email: ir@cmo-group.com'; ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>

            
            </div>
        </div>
    </div>
</section>