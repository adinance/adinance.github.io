<div id="hdr_main">News Clipping</div>
<?
$configurationId = 7;
$order = " order_id asc , year desc , id desc ";
$condition = " WHERE configuration_id = '".$configurationId."' and year = '2013' ";

$perpage = $perPageDefault; 
$total = getTotalDocument($condition);

$numPage = ceil($total/$perpage);
$page = 1;
if(isset($_GET["page"])){  
    $page = $_GET["page"];
}
$startpoint = ($page-1)*$perpage;

$arrList = getFinancialStagementPagingList($condition,$order, $startpoint, $perpage);

if($total >0){
?>
<div id="corp-content">
<div id="ir-corp-content-box" style="border:0;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr style="background-color:#e7e7e8; padding:0px 5px; font-weight:bold; ">
            <td width="10" class="ir-td1"></td>
            <td width="277" class="ir-td2" style="font-size: 12px;">Topic</td>
            <td width="10" align="center" class="ir-td3" style="font-size: 12px;">Date
                <!--<a href="../data/irfile/set/pdf/set_3.pdf" target="_blank"><img src="../image/ir/btn-download-pdf.png" width="78" height="16" border="0"></a>-->
            </td>
        </tr>
        <?
        foreach($arrList as $k=>$v){ 
        ?>
        <tr>
            <td class="td1"><img src="../image/ir/annual/arrow-black.png" width="7" height="9"></td>
            <td class="td2"><a href="<?=$v['url_th']?>" target="_blank"><?=$v['title_th']?></a></td>
            <td align="center" class="td3"><?=$v['dated']?>
            </td>
        </tr>
        <? 
        }
        ?>
        </tbody>
    </table>
</div>
</div>
<? } ?>

<? require_once "../ir/paging.php"; ?> 