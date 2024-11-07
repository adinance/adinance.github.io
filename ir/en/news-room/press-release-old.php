<div id="hdr_main">Press Release</div>
<?php
//$configurationId = 6;
//$order = " order_id asc, year desc , update_date desc ";
//$condition = " WHERE configuration_id = '".$configurationId."' and status = '1' ";
//
//$perpage = $perPageDefault; 
//$total = getTotalDocument($condition);
//
//$numPage = ceil($total/$perpage);
//$page = 1;
//if(isset($_GET["page"])){  
//    $page = $_GET["page"];
//}
//$startpoint = ($page-1)*$perpage;
//
//$arrList = getFinancialStagementPagingList($condition,$order, $startpoint, $perpage);

//echo $numPage;
//echo "<br>".$page;
//echo curPageURL()."<br/>";
//echo curPageName();


$items = array();
$feed_url = "http://cmogroup.blogspot.com/feeds/posts/default?alt=rss";
$xml = simplexml_load_file($feed_url);


$doc = new DOMDocument(); 
$str = $xml->asXML(); 
$doc->loadXML($str); 
$total = $doc->getElementsByTagName("item")->length; 

//echo $total;
//$total = 0;
//foreach ($xml->channel->item as $item){
//    $total = $total+1;
//}
//
//echo '<br>';
//echo $total;

$Per_Page = 10;   // Per Page
$Num_Rows = $total;

$Page = $_GET["p"];
if(!$_GET["p"]){
        $Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page){
    $Num_Pages =1;
}else if(($Num_Rows % $Per_Page)==0){
    $Num_Pages =($Num_Rows/$Per_Page) ;
}else{
    $Num_Pages =($Num_Rows/$Per_Page)+1;
    $Num_Pages = (int)$Num_Pages;
}


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
        <?php
//        foreacsh($arrList as $k=>$v){ 
            for($i=$Page_Start;$i<$Page_Start+$Per_Page;$i++){
                $item = $xml->channel->item[$i];
                if($item->description==NULL) break;
                $ns_content = @$item->children('http://purl.org/rss/1.0/modules/content/');
                $img = $item->description;//(string)$ns_content->description;//                preg_match_all('/<img[^>]+>/i',$html, $result);
                $items['image'][$i] = $img;
                $img = str_replace('<br/>', '<br>', $img);
                $img = str_replace('<br />', '<br>', $img);
                $start = strpos( $img, "<img", 0);
                $end = strpos( $img, "/>", 0);
                $items['image'][$i] = substr($img, $start,$end+2-$start);
                preg_match( '@src="([^"]+)"@' , $items['image'][$i] ,$matches );
                $items['image'][$i] = @$matches[1];
                if($items['image'][$i]==''){
                    $items['image'][$i] = 'http://www.cambodiatravel.us/wp-content/themes/cambodia/images/no_image.gif';//'assets/images/default.jpg';
                }
                $items['title'][$i] = $item->title;
                $items['description'][$i] = $item->description;
                $start = strpos( $item->description, "&lt;img", 0);
                $end = strpos( $item->description, "/>", 0);
                $content = substr($item->description, $start,$end+2-$start);
                $content = str_replace($items['image'][$i], '', $item->description);
                $items['content'][$i] = $content;//substr($content, 0,100);
                $items['category'][$i] = $item->category;
                $items['pubDate'][$i] = $item->pubDate;
                $items['link'][$i] = $item->link;
        ?>
        <tr>
<!--            <td class="td1"><img src="../image/ir/annual/arrow-black.png" width="7" height="9"></td>
            <td class="td2"><a href="uploads/press-release/<?php echo $v['file_en']?>" target="_blank"><?php echo $v['title_en']?></a></td>
            <td align="center" class="td3"><?php echo $v['dated']?></td>-->
            <td class="td1"><img src="../image/ir/annual/arrow-black.png" width="7" height="9"></td>
            <td class="td2"><a href="<?php echo $items['link'][$i]?>" target="_blank"><?php echo $items['title'][$i]?></a></td>
            <td align="center" class="td3"><?php echo   substr($items['pubDate'][$i], 0, -14) ?><?php//=$v['dated']?></td>
        </tr>
        <?php 
        }
        ?>
        </tbody>
    </table>
</div>
</div>
<?php } ?>

<?php require_once "../ir/paging.php"; ?> 