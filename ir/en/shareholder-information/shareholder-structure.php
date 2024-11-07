<div id="hdr_main">Shareholder Structure</div>
<?php
$order = " order_id asc , amount desc ";
$condition = " where actived = '1' ";
$arrList = getShareHolderStructureList($condition,$order);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="head-tb">
            <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;"><span style="color: rgb(255, 255, 255); font-weight: bold; background-color: rgb(35, 31, 32);">MAJOR SHAREHOLDER</span></td>
        </tr>
        <tr class="head-tb">
            <td width="50" align="center" class="tb-border1" bgcolor="#e7e7e8" style="padding: 5px;">Order</td>
            <td  align="center" class="tb-border2" bgcolor="#e7e7e8" style="padding: 5px;">Name</td>
            <td width="100" align="center" class="tb-border3" bgcolor="#e7e7e8" style="padding: 5px;">Amount</td>
            <td width="90" align="center" class="tb-border4" bgcolor="#e7e7e8" style="padding: 5px;" nowrap>Proportion (%)</td>
        </tr>
        <?php
        $i=1;
        foreach($arrList as $k=>$v){ 
        ?>
        <tr>
            <td align="center" class="tb-border1" style="padding: 5px;"><?php echo $i?></td>
            <td align="left" class="tb-border2" style="padding: 5px;"><?php echo $v['name_en']?></td>
            <td align="center" class="tb-border3" style="padding: 5px;"><?php echo number_format($v['amount'])?></td>
            <td align="center" class="tb-border4" style="padding: 5px;"><?php echo $v['percent'].' %'?></td>
        </tr>
        <?php 
        $i++;
        }
        ?>
    </tbody>
</table>

<h2 style="text-align:right;">As of 28 Nov 2023</h2>