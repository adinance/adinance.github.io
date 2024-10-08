

<section class="section-table cid-uoUt9IpGmT" id="table1-a9">
  <div class="container container-table">
         <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-5"><strong><?php echo isset($this->session->invitations) ? $this->session->invitations : 'Invitation'; ?></strong></h2> -->
         <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><?php echo isset($this->session->invitations) ? $this->session->invitations : 'Invitation'; ?></strong></h2> -->
      
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                <label class="searchInfo mbr-fonts-style display-7"><?php echo isset($this->session->search) ? $this->session->search : 'Search'; ?> :</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" data-empty="No matching records found">
            <thead>
              <tr class="table-heads " style="background: rgb(54, 123, 186); color: white;">
              <th class="head-item mbr-fonts-style display-7"><?php echo isset($this->session->year) ? $this->session->year : 'YEAR'; ?></th>
              <th class="head-item mbr-fonts-style display-7"><?php echo isset($this->session->title) ? $this->session->title : 'TITLE'; ?></th>
              <th class="head-item mbr-fonts-style display-7"><?php echo isset($this->session->file) ? $this->session->file : 'FILE'; ?></th>
              
            </tr>
            </thead>

            <tbody>
            <!-- <tr> 
              <td class="body-item mbr-fonts-style display-7">2024</td>
              <td class="body-item mbr-fonts-style display-7">Invitation Letter to attend the Extraordinary General Meeting No. 1/2024</td>
              <td class="body-item mbr-fonts-style display-7"><span class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></span></td>
            </tr> -->
            <?php //echo gettype($result); exit;?>
            <?php if($this->session->userdata('lang')=='thai'){ ?>
                <?php $i = 0; foreach ($result as $row) { ?>
                <tr> 
                    <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->year + 543; ?></td>
                    <td class="body-item mbr-fonts-style display-7" align="left"><?php echo $result[$i]->title_th; ?></td>
                    <td class="body-item mbr-fonts-style display-7">
                        <a target="_blank" href="<?php echo 'https://cmo-group.com/ir/uploads/invitation/' . $result[$i]->file_th; ?>">
                            <span class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></span>
                        </a>
                    </td>
                </tr>
                <?php $i++; } ?> 
            <?php }else{ ?>
                <?php $i = 0; foreach ($result as $row) { ?>
                <tr> 
                    <td class="body-item mbr-fonts-style display-7"><?php echo $result[$i]->year; ?></td>
                    <td class="body-item mbr-fonts-style display-7" align="left"><?php echo $result[$i]->title_en; ?></td>
                    <td class="body-item mbr-fonts-style display-7">
                        <a target="_blank" href="<?php echo 'https://cmo-group.com/ir/uploads/invitation/' . $result[$i]->file_en; ?>">
                            <span class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></span>
                        </a>
                    </td>
                </tr>
                <?php $i++; } ?> 
            <?php } ?>  
        
            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
            <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore"><?php echo isset($this->session->showing) ? $this->session->showing : 'Showing'; ?></span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter"><?php echo isset($this->session->entries) ? $this->session->entries : 'entries'; ?></span>
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


<!-- 

<section class="section-table cid-uoUt9IpGmT" id="table1-a9">

    <div class="container container-table">
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><?php echo isset($this->session->invitations) ? $this->session->invitations : 'Invitation'; ?></strong></h2>


        <div class="table-wrapper">
            <div class="container">
                <div class="row search">
                    <div class="col-md-6"></div>
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

                            <th class="head-item mbr-fonts-style display-7">
                                YEAR</th>
                            <th class="head-item mbr-fonts-style display-7">
                                Q1</th>
                            <th class="head-item mbr-fonts-style display-7">
                                Q2</th>
                            <th class="head-item mbr-fonts-style display-7">
                                Q3</th>
                            <th class="head-item mbr-fonts-style display-7">
                                Q4</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td class="body-item mbr-fonts-style display-7">2023</td>
                            <td class="body-item mbr-fonts-style display-7"><span class="fa fa-download mbr-iconfont"
                                    style="color: rgb(54, 123, 186);"></span></td>
                            <td class="body-item mbr-fonts-style display-7">2025-10-17</td>
                            <td class="body-item mbr-fonts-style display-7">$317.000</td>
                            <td class="body-item mbr-fonts-style display-7">$317.000</td>
                        </tr>
                        <tr>

                            <td class="body-item mbr-fonts-style display-7">Caren Rials</td>
                            <td class="body-item mbr-fonts-style display-7">35</td>
                            <td class="body-item mbr-fonts-style display-7">2024-04-12</td>
                            <td class="body-item mbr-fonts-style display-7">$445.500</td>
                            <td class="body-item mbr-fonts-style display-7">$445.500</td>
                        </tr>
                        <tr>

                            <td class="body-item mbr-fonts-style display-7">Leon Rogol</td>
                            <td class="body-item mbr-fonts-style display-7">66</td>
                            <td class="body-item mbr-fonts-style display-7">2025-05-22</td>
                            <td class="body-item mbr-fonts-style display-7">$152.558</td>
                            <td class="body-item mbr-fonts-style display-7">$152.558</td>
                        </tr>
                        <tr>

                            <td class="body-item mbr-fonts-style display-7">Shala Barrera</td>
                            <td class="body-item mbr-fonts-style display-7">70</td>
                            <td class="body-item mbr-fonts-style display-7">2025-05-15</td>
                            <td class="body-item mbr-fonts-style display-7">$459.146</td>
                            <td class="body-item mbr-fonts-style display-7">$459.146</td>
                        </tr>
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
</section> -->