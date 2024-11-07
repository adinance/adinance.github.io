<div id="hdr_main">The Resolutions</div>

<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2020' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2020</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>


<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2019' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2019</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>

<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2018' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2018</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>

<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2017' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2017</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>
    
<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2016' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2016</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>

<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2015' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2015</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>

<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2014' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2014</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>


<?php
$configurationId = 9;
$order = " title_en desc ";
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2013' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2013</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>

<?php
$condition = " WHERE configuration_id = '" . $configurationId . "' and year = '2012' ";
$arrList = getFinancialStagementList($condition, $order);
$total = getTotalDocument($condition);
if ($total > 0) {
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr class="head-tb">
                <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                    <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">Year : 2012</span>
                </td>
            </tr>
            <tr class="head-tb">
                <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">List</td>
                <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Download</td>
            </tr>

            <?php
            foreach ($arrList as $k => $v) {
                ?>
                <tr>
                    <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_en'] ?>"><?php echo $v['title_en'] ?></td>
                    <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/resolutions/<?php echo $v['file_en'] ?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br/>
<?php } ?>

