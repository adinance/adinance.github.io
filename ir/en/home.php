
<!-- Banner -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    // $("#myModal").modal('show');
});
</script>
<div id="myModal" class="modal fade">
    <div class="container-fluid">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0 none;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" align="center">
                <a href="https://cmo-group.com/ir/uploads/invitation/2024_ar_0_en.pdf">
                    <img src="ir-popup.jpg" alt="" title="" width="95%;">
                </a>
                <br><br>

            </div>
        </div>
    </div>
</div>
</div>
<!-- End Banner -->



<div id="hdr_main">IR Home</div>
<?php
function sanitized_name($original){
return preg_replace('/[^ก-๙]/u','',$original);
}

$items = array();
//$feed_url = "http://cmogroup.blogspot.com/feeds/posts/default?alt=rss";

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

$Per_Page = 50;   // Per Page
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

//if($total >0){
?>
<!--<div id="content">-->
     <!--<div id="press-content">-->
        <!-- IR Left Side -->
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
                 <td style="vertical-align:top;">
                        <div id="right-invester-news">
                        <div class="headtxt" style="height:20px; width:148px;background-color:#0F6D94;color:white;">INVESTOR NEWS</div>
                        <div id="right-ir-news-box">
                            <ul>
                             <?php 
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
                                    $is_thai_word=trim(sanitized_name($item->title));
                                    if($is_thai_word==""){ 
                                ?>
                                <li>
                                    <div>
                                    <img src="../image/ir/annual/arrow-black.png" width="7" height="9" />
                                    <a target="_blank" href="<?php echo $items['link'][$i]?>"><?php echo $items['title'][$i]?> </a> 
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <?php 
                                    }
                                } 
                                ?>
                                <li style="border:0; padding:5px 10px 5px 10px;">
                                <?php require_once "../ir/paging.php"; ?> 
                                <!--<div class="news-readmore"><a href="http://cmo-group.com/investor-news.php">READ MORE ></a></div>-->
                                <div class="clear"></div>
                                </li>
                            </ul>

                        </div>
                        </div>
                 </td>
                 <td>

                
                 

            <div id="stock-info-area">
                <div class="headtxt" style="height:20px; width:160px;background-color:#0F6D94;color:white;">INVESTOR STOCK INFO</div><br>
                <p style="background-color:#ffffff; padding:0; margin:0; text-align:center;">
                <iframe frameborder=0 scrolling=no width="200" height="260" src="https://weblink.settrade.com/banner/banner3.jsp"></iframe>
                <!-- <iframe frameborder=0 scrolling=no width="210" height="240" src="https://www.settrade.com/IRPage/irpage.jsp?txtSymbol=CMO&language=en&key=21631" allowtransparency="true"  ></iframe> -->
                </p>
                <p style="background:url(image/ir/br-iframe-settrade.jpg) repeat-x; text-align:center; padding-top:2px;">
                <iframe frameborder=0 scrolling=no width="200" height="200" src="https://weblink.settrade.com/IRPage/irpage.jsp?txtSymbol=CMO&language=en&key=21631"></iframe>
                <!-- <iframe frameborder=0 scrolling=no width="200" height="206" src="https://www.settrade.com/banner/banner3.jsp" allowtransparency="true"></iframe> -->
                </p>
            </div>  

            
<!-- <div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://th.tradingview.com/symbols/SET-CMO/" rel="noopener" target="_blank"><span class="blue-text">CMO ราคา</span></a> โดย TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "SET:CMO",
  "width": "100%",
  "height": "100%",
  "locale": "th_TH",
  "dateRange": "1D",
  "colorTheme": "light",
  "trendLineColor": "rgba(41, 98, 255, 1)",
  "underLineColor": "rgba(41, 98, 255, 0.3)",
  "underLineBottomColor": "rgba(41, 98, 255, 0)",
  "isTransparent": false,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div> -->
                 </td>
             </tr>
             <tr></tr>
         </table>
        <?php // } ?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="container">
    <div class="modal fade" id="myModalTH" role="dialog">
        <div class="modal-dialog" style="width: 70%; ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><strong>Notification of Policy to prevent the spread of COVID-19 in the Extraordinary General
Meeting of Shareholders No. 1/2021</strong></h4>
                </div>
                <div class="modal-body" style="font-size: medium;">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Extraordinary General Meeting of Shareholders No. 1/2021 of CMO Public Company Limited (“the Company”) <strong>on November 15, 2021, at 10.00 am at a Meeting Room, CMO Public Company Limited, 4/18-19 Soi Nuanchan 56, Nuanchan, Buangkum Bangkok. </strong></p>

                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Due to the ongoing situation of COVID-19 in Thailand, the company is concerned over the risk of the infection at the shareholders’ meeting. The company, therefore, kindly asks shareholders to be informed the Policy to prevent the spread of COVID-19 which is the policy of screening shareholders before attend the meeting. The Company will prepare the Antigen Test Kits (ATK) service to shareholders (*No extra charge). However, shareholder who is get positive ATK test result will not allow attending the meeting. Please prepare your own face mask and wear the mask during the entire meeting period and around the meeting area.
 

                    </p>
                </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).load(function() {
        $('#myModalTH').modal('hide');
    });
</script>



       

