<div id="hdr_main">งบการเงิน</div>
<?
$perpage = 4;
$condition = " ";
$total = getTotalDocument($condition);
$num_page = ceil($total/$perpage);
$page = 1;
if(isset($_GET["page"])){  $page = $_GET["page"];}
$startpoint = ($page-1)*$perpage;
$arrList = getFinancialStagementList($condition ," option ASC ",$startpoint,$perpage);
?>
<table width="100%" cellspacing="1" cellpadding="3" border="0" class="ir_table">
    <tr class="ir_tableTopRowHead">
        <td class="left">ปี : 2555</td>
        <td width="10%">ดาวน์โหลด</td>
    </tr>
    <? foreach($arrList as $k=>$v){ ?>
    <tr>
        <td class="title_attach"><?=$v['title_th']?></td>
        <td class="left"><a href="uploads/<?=$v['file_th']?>" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
    </tr>
    <? 
    }
    ?>
</table>



<br/>
<table width="100%" cellspacing="1" cellpadding="3" border="0" class="ir_table">
    <tr class="ir_tableTopRowHead">
        <td class="left">ปี : 2554</td>
        <td width="10%">ดาวน์โหลด</td>
    </tr>		
    <tr>
        <td class="title_attach">&#3649;&#3610;&#3610; 56-1 2545</td>
        <td class="left"><a href="http://ir.listedcompany.com/tracker.pl?type=5&amp;id=27874&amp;redirect=http%3A%2F%2Fscc.listedcompany.com%2Fmisc%2FSET_561%2Fscc56-1_2002.zip" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></a></td>
    </tr>	
</table>