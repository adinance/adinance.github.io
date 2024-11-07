<?php //if($total>0){ ?>
<br/>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td  align="right" valign="top"></td>
<!--        <td width="430" align="right" valign="middle" style="color:#000;">
            PAGE <?=$page?> / <?=$numPage?>
        </td>-->
        
<!--        <td  align="right" valign="top">
            <?php if($page != 1){ ?>
                <a href="<?=curPageURL();?>&page=<?=$page-1?>"><img src="../image/news/btn-prev.jpg" width="103" height="16" border="0" /></a>
            <?php }?>
            <?php if($page < $numPage && $numPage!=$page){ ?>
                <a href="<?=curPageURL();?>&page=<?=$page+1?>"><img src="../image/btn-nextpage.jpg" width="103" height="16" border="0" /></a>
            <?php } ?>
        </td>-->
        <td  align="right" valign="top">
            <?php if($Page != 1){ ?>
                <a href ='<?=curPageURL().'&p='.$Prev_Page?>'><img src="https://cmo-group.com/ir/uploads/back_page.jpg" width="103" height="16" border="0" /></a>
                
            <?php }?>
            <?php if($Page < $Num_Pages && $Num_Pages!=$Page){ ?>
                <a href ='<?=curPageURL().'&p='.$Next_Page?>'><img src="https://cmo-group.com/ir/uploads/next_page.jpg" width="103" height="16" border="0" /></a>
            <?php } ?>
        </td>
    </tr>
</table> 
<?php //} ?> 