<?php
/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themenews ($poster, $time, $title, $counter, $thetext, $timglink, $adminlink, $morelink="") {
 global $xoopsTheme;

    echo "<div class='artblock'><div class='title'><img src='".XOOPS_URL."/themes/".$xoopsTheme['thename']."/images/da.gif'>&nbsp;$title</div><div class='postedby'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='".XOOPS_URL."/themes/".$xoopsTheme['thename']."/images/join.gif'>&nbsp;&nbsp;"._TH_POSTEDBY." $poster "._TH_ON." $time ($counter "._TH_READS.")</div>
	<div class='news'><div style='vertical-align: top;overflow: visible;'>$timglink</div>$thetext</div><div class='bottomlink'>$adminlink";
    if ($morelink != "" ) {
    echo "&nbsp;<img alt='pointer' src='".XOOPS_URL."/themes/".$xoopsTheme['thename']."/images/da.gif' />&nbsp;";
	echo $morelink;
    }
    echo"<div class='rule'><img height='20' width='1' src='".XOOPS_URL."/themes/bluestorm/images/spacer.gif' align='top'></div>";
    echo "</div></div>";
}

?>