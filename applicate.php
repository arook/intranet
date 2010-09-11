<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>樂活無限 WR325最愛線</title>
<script src="js/check.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php
if(time() > mktime(0, 0, 0, 6, 11, 2010)){
?>
<script type="text/javascript">
<!--
alert('活動時間已經過期，不再接受申請');
location.href='index.html';
//-->
</script>
<?}
include "config/adodb.inc.php";
include "config/functions.php";
?>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	background-color: #e6f1d3;
	font-size:12px;
}
body,td,th {
	/*color: #000000;*/
}
.STYLE1 {font-size: 14px}
.STYLE7 {color: #000000}
-->
</style></head>

<body>
<table width="644" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/title.gif" width="694" height="424" border="0" usemap="#Map" /></td>
  </tr>
  <tr>
    <td height="417" ><table width="644" height="417" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#000000">
      <tr>
        <td valign="top"><img src="images/index_03.gif" /></td>
      </tr>
      <tr>
        <td width="40%" valign="top"><table width="90%" height="394" border="0" align="center" cellpadding="0" cellspacing="0" style="background:url(images/index_07.gif) no-repeat right bottom">
            <form action="do_applicate.php" method="post" enctype="multipart/form-data" onsubmit="return check(this)">
              <input name="action" type="hidden" value="shenqing" />
              <tr>
                <td height="25" colspan="4" class="STYLE2">樂活無限 WR325最愛線</td>
              </tr>
              <tr>
                <td height="20" valign="bottom" class="STYLE5">　個人資料</td>
                <td width="36%" height="20" valign="bottom" class="STYLE6"> (請填寫正確資料，以免影響申請權利)</td>
                <td width="5%" valign="bottom" class="STYLE5"></td>
                <td width="44%" valign="bottom" class="STYLE1">                </td>
              </tr>
              <tr>
                <td width="15%" height="25" align="center" valign="bottom" class="STYLE3">姓名</td>
                <td height="25" colspan="3" valign="bottom" class="STYLE3"><input name="name" type="text" class="inputclass" id="name" size="17" />
                  請填寫真實中文姓名</td>
              </tr>
			  <tr> 
                <td height="25" align="center" valign="bottom" class="STYLE3">生日</td> 
                <td height="25" colspan="3" valign="bottom"><span class="STYLE3"> 
					 <input name="bm" type="text" class="inputclass" size="2" />月/ <input name="bd" type="text" class="inputclass" size="2" />日
                 
                </span></td> 
              </tr> 
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">暱稱</td>
                <td height="25" colspan="3" valign="bottom"><input name="uname" type="text" class="inputclass" id="uname" size="17" /></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">電話</td>
                <td height="25" colspan="3" valign="bottom"><input name="phone" type="text" class="inputclass" id="phone" size="17" maxlength="15" />
                    <span class="STYLE3">手機或市話</span></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">Email</td>
                <td height="25" colspan="3" valign="bottom"><input name="email" type="text" class="inputclass" id="email" onblur="chkEmail(this)" size="37" />
                    <label id="Emailajax"></label></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">地址</td>
                <td height="25" colspan="3" valign="bottom"><input name="addess" type="text" class="inputclass" id="addess" size="37" /></td>
              </tr>
              <tr>
                <td height="25" valign="bottom" class="STYLE5">　購買日期</td>
                <td height="25" colspan="3" valign="bottom" class="STYLE3"><select name="dyear" size="1" id="dyear">
                    <option value="2010" selected="selected">2010</option>
                  </select>
                  -
                  <select name="dmonth" size="1" id="dmonth">
                    <option value="5" selected="selected">5</option>
                    <option value="6">6</option>
                  </select>
                  -
                  <select name="dday" size="1" id="dday">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4" selected="selected">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>                </td>
              </tr>
              <tr>
                <td height="25" colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="24%" height="25" valign="bottom" class="STYLE5">　購買喇叭型號</td>
                      <td width="76%" height="25" valign="bottom" class="STYLE5">發票號碼</td>
                    </tr>
                    <tr>
                      <td height="25" valign="bottom">　
                        <select name="dstyle" size="1" id="dstyle">
                          <option value="WR325">WR325</option>
                                                                        </select></td>
                      <td height="25" valign="bottom"><input name="dfapiao" type="text" class="inputclass" id="dfapiao" size="17" /></td>
                    </tr>
                    <tr>
                      <td colspan="2" class="STYLE5">　註:購買金額低於1099則不適用此一兌換活動</td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE5">　購買喇叭金額</td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE3"> 　
                  <input name="dprice" type="text" class="inputclass" id="dprice" size="17" /></td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE5">　購買地點(商家)</td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE3"> 　
                  <input name="saddess" type="text" class="inputclass" id="saddess" size="33" /></td>
              </tr>
              <tr>
                <td height="40" colspan="4" valign="bottom">　
                    <input name="image" type="image" title="提交" src="images/applicate_11.jpg" />
                  <a href="applicate.php"> <img src="images/applicate_09.jpg" border="0"></a><a href="wr325_application.doc"> <img src="images/applicate_10.jpg" border="0"></a></td>
              </tr>
            </form>
        </table></td>
      </tr>
	  <tr>
        <td valign="top"><img src="images/index_06.gif" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td  height="40" class="STYLE1"><span class="STYLE7">註意事項</span></td>
  </tr>
  <tr>
    <td ><ol class="STYLE4" style="color:black;">
	<li> 2010/05/10至2010/06/10日止, 活動期間內，凡於全省各門市或經銷商購買KKBOX百萬音樂指定搭配喇叭WR325樂活機，憑購機發票上網www.ozaki.com.tw申請即可免費獲得鉻金屬線控器乙個(市價NT$999元)，限量500個，數量有限送完為止。WR325售價低於NT$1099元以下，恕不適用於此兌換活動活動，詳情請見OZAKI官網。</li>
	<li>除線上報名之外，仍需回傳報名表，視同申請作業流程完成(視申請流程)。 </li>
	<li>贈品申請資料經OZAKI審查通過後，將於活動結束後統一寄送贈品。 </li>
	<li>報名表需傳真至(02)2995-8012，或郵寄至(241)台北縣三重市重新路五段609巷6號8樓之2 OZAKI 活動小組洪小姐收。 </li>
	<li>參加者須提供正確姓名、電話、地址、E-mail等正確基本資料，以免影響贈品寄送之權利。贈品數量有限送完為止。</li>
	<li>若購買WR325樂活機售價低於NT$1099元以下，恕不適用於此兌換活動</li>
	<li>參加本活動者OZAKI將視為瞭解並願意確實遵守活動辦法與規定；登錄資料如有造假及違反規定者，經OZAKI查證將取消其兌換資格並保留法律追訴權。 </li>
	<li>參加本活動者，必須於活動期間內購買WR325樂活機雙出力重低音喇叭，上網填寫個人申請資料且登錄後連同購機發票影本傳真至OZAKI活動小組，方可取得兌換資格。 </li>
	<li>經OZAKI審查通過贈品將於2010/06/10日活動結束後，依申請順序，統一寄送。 </li>
	<li>贈品兌換不得要求替換其它產品，或折現。 </li>
	<li>OZAKI保留內容更換、取消或修改本活動權利。 </li>
	<li>OZAKI代理商、經銷商、配合廠商不適用本活動。 </li>
	<li>OZAKI非常重視個人隱私權，其員工、協力廠商都會致力保護您的隱私權。本網路活動中，參加者的所有登錄資料均將完善保存在OZAKI資料庫中。 </li>
	<li>當您在使用本網站時，即表示您接受其條款。 </li>
	<li>本活動適用範圍，為台灣地區（包含離島）。 </li>
	<li>贈品查詢專線：(02)2278-1100#137   OZAKI活動小組 洪小姐收。 </li>
	<li>本網路活動中，消費者的所有申請資料均完善保存在OZAKI資料庫。本活動由OZAKI負責審核辦裡。</li>
    </ol></td>
  </tr>
  <tr>
    <td height="66" align="center"><img src="images/down.gif" width="678" height="35" /></td>
  </tr>
</table>

<map name="Map" id="Map">
<area shape="rect" coords="510,239,666,271" href="http://www.ozaki.com.tw/wow/big5/index.htm" target="_blank" />
<area shape="rect" coords="514,275,669,305" href="http://www.ozaki.com.tw/global/big5/products/products_Feature.php?source=series&pID=115" target="_blank" />
<area shape="rect" coords="6,367,309,406" href="applicate.php" /><area shape="rect" coords="327,369,440,401" href="notes.html" /><area shape="rect" coords="448,368,551,401" href="view.html" />
<area shape="rect" coords="555,368,671,402" href="wr325_application.doc" />
</map></body>
</html>
