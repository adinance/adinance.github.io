<!--<div id="hdr_main">Financial Highlight</div>
<style>
    .headtxt2{
        padding: 7px 10px 0px 10px;
        background-color: #0F6D94;
        color: #ffffff;
        font-size: 10px;
    }
    </style> //ของเดิมตั้งแต่ line 1-16 -->


</?php
$cond = " ";
$arrDetail = getFinancialHilight($cond);
?>
</?=stripslashes($arrDetail['detail_en'])?>  


<div id="hdr_main">Financial Highlight</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr class="head-tb">
            <td height="20" align="left" class="tb-border1" valign="middle" bgcolor="#000000" colspan="4" style="padding: 5px;"><span style="color: rgb(255, 255, 255); font-weight: bold; background-color: rgb(35, 31, 32);"></span></td>
        </tr>
        <tr>
            <td align="center" class="tb-border1" style="padding: 5px;">1</td>
            <td align="left" class="tb-border2" style="padding: 5px;">Financial Information</td>
            <td align="center" class="tb-border3" style="padding: 5px;"><a href="uploads/sustainable-development/Financial_Information_en.pdf" target="_blank"><img src="../image/ir/btn-download-pdf.png" /></td>
        </tr>
        
    </tbody>
</table>
