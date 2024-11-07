<div id="hdr_main">หน้าหลักนักลงทุนสัมพันธ์</div>
<?
$configurationId = 6;
$order = " order_id asc, year desc , update_date desc ";
$condition = " WHERE status='1' and configuration_id in ('5','6') ";

//$perPageDefault = 5;
$perpage = $perPageDefault; 
$total1 = getTotalDocument($condition);
$total2 = getTotalPRNews();

$total = $total1 + $total2;

$numPage = ceil($total/$perpage);
$page = 1;
if(isset($_GET["page"])){  
    $page = $_GET["page"];
}
$startpoint = ($page-1)*$perpage;

$newsList = getIRNewsList($condition,$order, $startpoint, $perpage);

// echo $numPage;
// echo "<br>".$page."<br/>";
// echo curPageURL()."<br/>";
// echo curPageName();
if($total >0){
?>
<!--<div id="content">-->
     <!--<div id="press-content">-->
        <!-- IR Left Side -->
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
                 <td style="vertical-align:top;">
                        <div id="right-invester-news">
                        <div class="headtxt" style="height:20px; width:148px;">ข่าวประชาสัมพันธ์</div>
                        <div id="right-ir-news-box">
                          <?//php $newsList = getIRNewsList(" WHERE status='1' ", "order_id ASC " ,0,10); ?>
                            <ul>
                             <?php foreach($newsList as $k=>$v){ 
                                        $news_status = "";
                                        $nday = floor(DateDiff($v[submit_date],date("Y-m-d")));
                                        if($nday < 10){
                                            $news_status = "<span class='new-news'>NEW</span>";  
                                        }
                                       ?>
                                <li>
                                    <div><img src="../image/ir/annual/arrow-black.png" width="7" height="9" />
                                    <?php if($v['file_th']==''){ ?>
                                    <a target="_blank" href="http://cmo-group.com/news_preview.php?id=<?=stripslashes($v[id])?>"><?=stripslashes($v[title_th])?> </a> 
                                    <?php }else{ ?>
                                    <a href="uploads/press-release/<?=$v['file_th']?>"><?=stripslashes($v[title_th])?> </a> 
                                    <?php }?>
                                    <?=$news_status?> 
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <?php } ?>
                                <li style="border:0; padding:5px 10px 5px 10px;">
                                <? require_once "../ir/paging.php"; ?> 
                                <!--<div class="news-readmore"><a href="http://cmo-group.com/investor-news.php">READ MORE ></a></div>-->
                                <div class="clear"></div>
                                </li>
                            </ul>

                        </div>
                        </div>
                 </td>
                 <td>
                     <div id="stock-info-area">
                <div class="headtxt" style="height:20px; width:160px;">ข้อมูลสำหรับนักลงทุน</div>
                <p style="background-color:#f7f7f7; padding:0; margin:0; text-align:center;">
                <iframe frameborder=0 scrolling=no width="210" height="240" src="http://www.settrade.com/IRPage/irpage.jsp?txtSymbol=CMO&language=en&key=21631" allowtransparency="true"  ></iframe>
                </p>
                <p style="background:url(image/ir/br-iframe-settrade.jpg) repeat-x; text-align:center; padding-top:2px;"><iframe frameborder=0 scrolling=no width="200" height="206" src="http://www.settrade.com/banner/banner3.jsp" allowtransparency="true"></iframe></p>
            </div>
                 </td>
             </tr>
             <tr></tr>
         </table>
        <? } ?>


       

