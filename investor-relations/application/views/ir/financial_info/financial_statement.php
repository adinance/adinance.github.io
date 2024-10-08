<section class="section-table cid-uoUt9IpGmT" id="table1-a9">
  <div class="container container-table">
    <!-- <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2 text-uppercase"><strong><?php echo isset($this->session->the_resolutions) ? $this->session->the_resolutions : 'The Resolutions'; ?></strong></h2> -->

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

      <div class="container scroll ">
        <table class="table isSearch" cellspacing="0" data-empty="No matching records found" >
          <thead>
            <tr class="table-heads " style="background: rgb(54, 123, 186); color: white;">
            <th class="head-item mbr-fonts-style display-7 text-uppercase"><?php echo isset($this->session->year) ? $this->session->year : 'YEAR'; ?></th>
              <th class="head-item mbr-fonts-style display-7 text-uppercase"><?php echo isset($this->session->q1) ? $this->session->q1 : 'Q1'; ?></th>
              <th class="head-item mbr-fonts-style display-7 text-uppercase"><?php echo isset($this->session->q2) ? $this->session->q2 : 'Q2'; ?></th>
              <th class="head-item mbr-fonts-style display-7 text-uppercase"><?php echo isset($this->session->q3) ? $this->session->q3 : 'Q3'; ?></th>
              <th class="head-item mbr-fonts-style display-7 text-uppercase"><?php echo isset($this->session->q4) ? $this->session->q4 : 'Q4'; ?></th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 0; foreach ($result['year'] as $row) { ?>
            <tr>
              <td class="body-item mbr-fonts-style display-7 align-center">
                <strong><?php echo $result['year'][$i]->year; ?></strong></td>
              <td class="body-item mbr-fonts-style display-7">
                <?php if($result['record'][$result['year'][$i]->year]['Q1']['file'] != ''){?>
                <a target="_blank"
                  href="<?php echo 'https://cmo-group.com/ir/uploads/financial-statement/' . $result['record'][$result['year'][$i]->year]['Q1']['file']; ?>"
                  class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></a>
                <?php } ?>
              </td>
              <td class="body-item mbr-fonts-style display-7">
                <?php if($result['record'][$result['year'][$i]->year]['Q2']['file'] != ''){?>
                <a target="_blank"
                  href="<?php echo 'https://cmo-group.com/ir/uploads/financial-statement/' . $result['record'][$result['year'][$i]->year]['Q2']['file']; ?>"
                  class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></a>
                <?php } ?>
              </td>
              <td class="body-item mbr-fonts-style display-7">
                <?php if($result['record'][$result['year'][$i]->year]['Q3']['file'] != ''){?>
                <a target="_blank"
                  href="<?php echo 'https://cmo-group.com/ir/uploads/financial-statement/' . $result['record'][$result['year'][$i]->year]['Q3']['file']; ?>"
                  class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></a>
                <?php } ?>
              </td>
              <td class="body-item mbr-fonts-style display-7">
                <?php if($result['record'][$result['year'][$i]->year]['Q4']['file'] != ''){?>
                <a target="_blank"
                  href="<?php echo 'https://cmo-group.com/ir/uploads/financial-statement/' . $result['record'][$result['year'][$i]->year]['Q4']['file']; ?>"
                  class="fa fa-download mbr-iconfont" style="color: rgb(54, 123, 186);"></a>
                <?php } ?>
              </td>
            </tr>

            <?php $i++; } ?>

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