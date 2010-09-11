<?php

/************************************************************/
/* Theme Name: BlueStorm  (v1.0)                            */
/* Theme Developer: w4z004 (http://ar.xoops.org)            */
/* based in phpkaox theme from kaox 2001                    */
/* Last Updated: 02/16/2002                                 */
/*                                                          */
/* Note: This theme looks best in IE 5-6 and Netscape 6.    */
/* It looks okay in Netscape 4.7x but the right-hand side   */
/* of the Story Box displays a little off by a few pixels.  */
/************************************************************/

$xoopsTheme['thename'] = "bluestorm";

/************************************************************/
/* OpenTable Functions                                      */
/*                                                          */
/* Define the tables look&feel for you whole site. For this */
/* we have two options: OpenTable and OpenTable2 functions. */
/* Then we have CloseTable and CloseTable2 function to      */
/* properly close our tables. The difference is that        */
/* OpenTable has a 100% width and OpenTable2 has a width    */
/* according with the table content                         */
/************************************************************/

function OpenTable($width="100%") {
 echo "<table width='".$width."' border='0' cellspacing='0' cellpadding='0' class='bg2'><tr><td>\n";
 echo "<table width='100%' border='0' cellspacing='1' cellpadding='8' class='bg5'><tr><td>\n";
}

function CloseTable() {
 echo "</td></tr></table></td></tr></table>\n";
}

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeheader($show_rblock) {
 global $xoopsConfig, $xoopsUser;
 echo "</head><body class='bg5'>\n\n";
      //OpenWaitBox();
 echo"<table width='100%' border='0' cellspacing='0' cellpadding='0' class='bg5'>"
    ."<tr>"
    ."<td valign='top' class='bg3'>"
    ."<table width='100%' border='0' cellspacing='0' cellpadding='0'>"
    ."<tr>"
    ."<td width='285' valign='middle' align='center'> <a href='".XOOPS_URL."/'><img src='".XOOPS_URL."/themes/newtheme/images/logo.gif'></a></td>"
    ."<td>";

if ($xoopsConfig['banners'] == 1) {
showbanner();
}

 echo"</td>"
    ."</tr>"
    ."</table>"
    ."</td>"
    ."</tr>"
    ."<tr>"
    ."<td valign='top' class='bg5'>"
    ."<table width='100%' border='0' cellspacing='0' cellpadding='0' height='100%'>"
    ."<tr>"
    ."<br><td width='18%' valign='top' align='center'0>";
      make_sidebar("left");

 echo"<table border='0' cellpadding='0' cellspacing='0' width='100%'>"
    ."<tr>"
    ."<td class='dotv'><img height='1' width='1' src='".XOOPS_URL."/themes/newtheme/images/spacer.gif' align='top'></td>"
    ."</tr>"
    ."</table>";


 echo"</td>"
    ."<td align='center' valign='top'>";
}

/************************************************************/
/* Function themefooter()                                   */
/*                                                          */
/* Control the footer for your site. You don't need to      */
/* close BODY and HTML tags at the end. In some part call   */
/* the function for right blocks with: blocks(right);       */
/* Also, $index variable need to be global and is used to   */
/* determine if the page your're viewing is the Homepage or */
/* and internal one.                                        */
/************************************************************/

function themefooter($show_rblock, $footer) {
global $xoopsConfig;
 echo"</td>";
    if ( $show_rblock ) {
 echo"<td width='18%' valign='top' align='center'>";
      make_sidebar("right");

 echo"<table border='0' cellpadding='0' cellspacing='0' width='100%'>"
    ."<tr>"
    ."<td class='dotv'><img height='1' width='1' src='".XOOPS_URL."/themes/newtheme/images/spacer.gif' align='top'></td>"
    ."</tr>"
    ."</table>";

    }
 echo"</td></tr></table></td></tr><tr>"
    ."<td height='30' valign='middle' class='bg3' align='center'>";
 echo $footer;
 echo"</td>"
    ."</tr>"
    ."</table>";
    //CloseWaitBox();
}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
  global $xoopsConfig;

 echo"<table border='0' cellpadding='0' cellspacing='0' width='200' class='bg4'>"
    ."<tr>"
    ."<td colspan='3' align='center' valign='middle' class='bg6'><b><font class='fg3'>$title</font></b></td>"
    ."</tr>"
    ."<tr>"
    ."<td width='1' rowspan='2' align='center' valign='top' class='dot'><img height='1' width='1' src='".XOOPS_URL."/themes/newtheme/images/spacer.gif' align='top'></td>"
    ."<td rowspan='2' valign='top' class='content'>$content<br></td>"
    ."<td width='1' rowspan='2' align='center' valign='top' class='dot'><img height='1' width='1' src='".XOOPS_URL."/themes/newtheme/images/spacer.gif' align='top'></td>"
    ."</tr>"
    ."<tr></tr>"
    ."</table>";

}

function themecenterposts($title, $content) {
 echo"<br><table width='95%' border='0' cellspacing='0' cellpadding='0' cellpadding='0'bgcolor='#E2DBD3'> <tr><td bgcolor='#000066'>&nbsp;<b><font class='fg3'>$title</font></b></td></tr><tr><td class='bg3'>$content</td></tr></table>";

}
?>