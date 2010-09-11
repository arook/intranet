
<?php
// ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System                      //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
// Based on:								     //
// myPHPNUKE Web Portal System - http://myphpnuke.com/	  		     //
// PHP-NUKE Web Portal System - http://phpnuke.org/	  		     //
// Thatware - http://thatware.org/					     //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
// ------------------------------------------------------------------------- //
//  myBooks                                                                //
//  by Eric R. Evans                                                         //
//  GiantSpider Publisher                                                    //
//  http://www.giantspider.biz                                               //
//  based on mydownloads                                                     //
// ------------------------------------------------------------------------- //

include("header.php");
include_once(XOOPS_ROOT_PATH."/class/xoopstree.php");


$myts =& MyTextSanitizer::getInstance(); // MyTextSanitizer object
$mytree = new XoopsTree($xoopsDB->prefix("myBooks_cat"),"cid","pid");

$q = "SELECT cid, title, imgurl FROM ".$xoopsDB->prefix("myBooks_cat")." WHERE pid = 0 ORDER BY title";
$result=$xoopsDB->query($q) or die("");
if($xoopsConfig['startpage'] == "myBooks"){
	$xoopsOption['show_rblock'] =1;
	include(XOOPS_ROOT_PATH."/header.php");
	make_cblock();
//	echo "<br />";
}else{
	$xoopsOption['show_rblock'] =1;
	include(XOOPS_ROOT_PATH."/header.php");
}

?>
<table width="90%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<? if(!$_REQUEST[submit]){?><? include("pino_input.php");?>
<? }else if ($_REQUEST[submit]=="confirm"){?>
<? include("pino confirm.php");?>
<? }else if ($_REQUEST[submit]=="sendout"){?>
<? include("pi_action.php");?>
<? }else if ($_REQUEST[submit]=="search"){?>
<? include("pino search.php");?>
<? }else if ($_REQUEST[submit]=="search_result"){?>
<? include("pino search.php");?>
<? include("search_result.php");?>
<? }?></td></tr>
</table>
<?
//OpenTable();
//$mainlink = 0;
//mainheader($mainlink);
//echo "<center>\n";
//echo "<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\" width=\"90%\"><tr>\n";
//$count = 0;
//while($myrow = $xoopsDB->fetchArray($result)) {
//	$title = $myts->makeTboxData4Show($myrow['title']);
//    	echo "<td valign=\"top\" align=\"right\">";
//    	if ($myrow['imgurl'] && $myrow['imgurl'] != "http://"){
//		$imgurl = $myts->makeTboxData4Edit($myrow['imgurl']);
//		echo "<a href=\"".XOOPS_URL."/modules/myBooks/viewcat.php?cid=".$myrow['cid']."\"><img src=\"".$imgurl."\" height=\"50\" border=\"0\"></a>";
//    	} else {
//		echo "";
//    	}
//	$totaldownload = getTotalItems($myrow['cid'], 1);

//    	echo "</td><td valign=\"top\" width=\"40%\"><a href=\"".XOOPS_URL."/modules/myBooks/viewcat.php?cid=".$myrow['cid']."\"><b>$title</b></a>&nbsp;($totaldownload)<br>";
	// get child category objects
//	$arr=array();
//	$arr=$mytree->getFirstChild($myrow['cid'], "title");
//	$space = 0;
//	$chcount = 0;
//	foreach($arr as $ele){
//		$chtitle=$myts->makeTboxData4Show($ele['title']);
//		if ($chcount>5){
//			echo "...";
//			break;
//		}
//		if ($space>0) {
//        		echo ", ";
//        	}
//        	echo "<a href=\"".XOOPS_URL."/modules/myBooks/viewcat.php?cid=".$ele['cid']."\">".$chtitle."</a>";
//        	$space++;
//		$chcount++;
//	}
//    	if ($count<1) {
//        	echo "</td>";
//    	}
//    	$count++;
//    	if ($count==2) {
//        	echo "</td></tr><tr>";
//        	$count = 0;
//    	}
//}
//echo "</td></tr></table>";
//list($numrows)=$xoopsDB->fetchRow($xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("myBooks_downloads")." WHERE status>0"));
//echo "<br><br>";
//printf(_MD_THEREARE,$numrows);
//echo "</center>";
//CloseTable();

/* echo "<br>";

OpenTable();
echo "<div align=\"center\"><big><b>"._MD_LATESTLIST."</b></big><br><br>";
showNew($mytree);
echo "</div>";
CloseTable(); */	
//include("../../footer.php");

// Shows the Latest Listings on the front page
/* function showNew($mytree){
	global $myts, $xoopsDB, $xoopsConfig, $xoopsModule;
	global $myBooks_shotwidth, $myBooks_newdownloads, $myBooks_useshots;
	$result = $xoopsDB->query("SELECT d.lid, d.cid, d.title, d.url, d.homepage, d.version, d.size, d.platform, d.price, d.logourl, d.status, d.date, d.hits, d.rating, d.votes, d.comments, t.description FROM ".$xoopsDB->prefix("myBooks_downloads")." d, ".$xoopsDB->prefix("myBooks_text")." t WHERE d.status>0 AND d.lid=t.lid ORDER BY date DESC",$myBooks_newdownloads,0);
	echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"10\" border=\"0\"><tr><td width=\"110\" align=\"center\">";
    	$x=0;
    	while(list($lid, $dtitle, $url, $homepage, $version, $size, $platform, $price, $logourl, $status, $time, $hits, $rating, $votes, $comments, $description)=$xoopsDB->fetchRow($result)) {
		$rating = number_format($rating, 2);
                $dtitle = $myts->makeTboxData4Show($dtitle);
                $url = $myts->makeTboxData4Show($url);
                $url = urldecode($url);
                $homepage = $myts->makeTboxData4Show($homepage);
                $version = $myts->makeTboxData4Show($version);
                $size = $myts->makeTboxData4Show($size);
                $platform = $myts->makeTboxData4Show($platform);
                $price = $myts->makeTboxData4Show($price);
                $logourl = $myts->makeTboxData4Show($logourl);
#               $logourl = urldecode($logourl);
                $datetime = formatTimestamp($time);

                $description = $myts->makeTareaData4Show($description,1);
		include("include/dlformat.php");
        	$x++;

    	}
	echo "</table>";
	
} */
?>