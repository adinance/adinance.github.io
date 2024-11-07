<div id="hdr_main">โครงสร้างผู้ถือหุ้น</div>
<?php
$order = " order_id asc , amount desc ";
$condition = " where actived = '1' ";
$arrList = getShareHolderStructureList($condition,$order);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="head-tb">
            <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;"><span style="color: rgb(255, 255, 255); font-weight: bold; background-color: rgb(35, 31, 32);">ผู้ถือหุ้นใหญ่</span></td>
        </tr>
        <tr class="head-tb">
            <td width="50" align="center" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">ลำดับ</td>
            <td  align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">รายชื่อ</td>
            <td width="100" align="center" class="tb-border3" bgcolor="#e7e7e8" style="padding: 5px;">จำนวนหุ้น</td>
            <td width="50" align="center" class="tb-border4" bgcolor="#e7e7e8" style="padding: 5px;">สัดส่วน(%)</td>
        </tr>
        <?php
        $i=1;
        foreach($arrList as $k=>$v){ 
        ?>
        <tr>
            <td align="center" class="tb-border1" style="padding: 5px;"><?php echo $i?></td>
            <td align="left" class="tb-border2" style="padding: 5px;"><?php echo $v['name_th']?></td>
            <td align="center" class="tb-border3" style="padding: 5px;"><?php echo number_format($v['amount'])?></td>
            <td align="center" class="tb-border4" style="padding: 5px;"><?php echo $v['percent'].' %'?></td>
        </tr>
        <?php 
        $i++;
        }
        ?>

        
    </tbody>
    
</table>

<h2 style="text-align:right;">ข้อมูลผู้ถือหุ้น ณ วันที่ 28 พ.ย. 2566</h2>




