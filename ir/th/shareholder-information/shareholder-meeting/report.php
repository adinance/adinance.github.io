<div id="hdr_main">รายงานการประชุมผู้ถือหุ้น</div>
<?php 
$num = date('Y') - 0;
for($i=0; $i<=$num; $i++){
    $year_en = date('Y') - $i;
    $year_th = date('Y') - $i + 543;
    ?>

    <?php
    $configurationId = 10;
    $order = " title_th desc ";
    $condition = " WHERE configuration_id = '".$configurationId."' and year = '".$year_en."' ";
    $arrList = getFinancialStagementList($condition,$order);
    $total = getTotalDocument($condition);
    if($total >0){
    ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr class="head-tb">
            <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;">
                <span style="color: rgb(255, 255, 255); font-size: 14px;font-weight: bold; background-color: rgb(35, 31, 32);">ปี : <?php echo $year_th?></span>
            </td>
        </tr>
        <tr class="head-tb">
            <td  align="left" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">รายการ</td>
            <td width="10%" align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">ดาวน์โหลด</td>
        </tr>
        
        <?php
        foreach($arrList as $k=>$v){ 
        ?>
        <tr>
            <td align="left" class="tb-border1" style="padding: 5px;" title="<?php echo $v['description_th']?>"><?php echo $v['title_th']?></td>
            <td align="center" class="tb-border2" style="padding: 5px;"><a href="uploads/report/<?php echo $v['file_th']?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
        </tr>
        <?php 
        }
        ?>
        </tbody>
    </table>
    <br/>
    <?php } ?>
    
    <?php

}

?>

