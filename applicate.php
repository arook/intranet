<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>�֬��L�� WR325�̷R�u</title>
<script src="js/check.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<?php
if(time() > mktime(0, 0, 0, 6, 11, 2010)){
?>
<script type="text/javascript">
<!--
alert('���ʮɶ��w�g�L���A���A�����ӽ�');
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
                <td height="25" colspan="4" class="STYLE2">�֬��L�� WR325�̷R�u</td>
              </tr>
              <tr>
                <td height="20" valign="bottom" class="STYLE5">�@�ӤH���</td>
                <td width="36%" height="20" valign="bottom" class="STYLE6"> (�ж�g���T��ơA�H�K�v�T�ӽ��v�Q)</td>
                <td width="5%" valign="bottom" class="STYLE5"></td>
                <td width="44%" valign="bottom" class="STYLE1">                </td>
              </tr>
              <tr>
                <td width="15%" height="25" align="center" valign="bottom" class="STYLE3">�m�W</td>
                <td height="25" colspan="3" valign="bottom" class="STYLE3"><input name="name" type="text" class="inputclass" id="name" size="17" />
                  �ж�g�u�ꤤ��m�W</td>
              </tr>
			  <tr> 
                <td height="25" align="center" valign="bottom" class="STYLE3">�ͤ�</td> 
                <td height="25" colspan="3" valign="bottom"><span class="STYLE3"> 
					 <input name="bm" type="text" class="inputclass" size="2" />��/ <input name="bd" type="text" class="inputclass" size="2" />��
                 
                </span></td> 
              </tr> 
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">�ʺ�</td>
                <td height="25" colspan="3" valign="bottom"><input name="uname" type="text" class="inputclass" id="uname" size="17" /></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">�q��</td>
                <td height="25" colspan="3" valign="bottom"><input name="phone" type="text" class="inputclass" id="phone" size="17" maxlength="15" />
                    <span class="STYLE3">����Υ���</span></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">Email</td>
                <td height="25" colspan="3" valign="bottom"><input name="email" type="text" class="inputclass" id="email" onblur="chkEmail(this)" size="37" />
                    <label id="Emailajax"></label></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="bottom" class="STYLE3">�a�}</td>
                <td height="25" colspan="3" valign="bottom"><input name="addess" type="text" class="inputclass" id="addess" size="37" /></td>
              </tr>
              <tr>
                <td height="25" valign="bottom" class="STYLE5">�@�ʶR���</td>
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
                      <td width="24%" height="25" valign="bottom" class="STYLE5">�@�ʶR��z����</td>
                      <td width="76%" height="25" valign="bottom" class="STYLE5">�o�����X</td>
                    </tr>
                    <tr>
                      <td height="25" valign="bottom">�@
                        <select name="dstyle" size="1" id="dstyle">
                          <option value="WR325">WR325</option>
                                                                        </select></td>
                      <td height="25" valign="bottom"><input name="dfapiao" type="text" class="inputclass" id="dfapiao" size="17" /></td>
                    </tr>
                    <tr>
                      <td colspan="2" class="STYLE5">�@��:�ʶR���B�C��1099�h���A�Φ��@�I������</td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE5">�@�ʶR��z���B</td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE3"> �@
                  <input name="dprice" type="text" class="inputclass" id="dprice" size="17" /></td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE5">�@�ʶR�a�I(�Ӯa)</td>
              </tr>
              <tr>
                <td height="25" colspan="4" valign="bottom" class="STYLE3"> �@
                  <input name="saddess" type="text" class="inputclass" id="saddess" size="33" /></td>
              </tr>
              <tr>
                <td height="40" colspan="4" valign="bottom">�@
                    <input name="image" type="image" title="����" src="images/applicate_11.jpg" />
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
    <td  height="40" class="STYLE1"><span class="STYLE7">���N�ƶ�</span></td>
  </tr>
  <tr>
    <td ><ol class="STYLE4" style="color:black;">
	<li> 2010/05/10��2010/06/10���, ���ʴ������A�Z����٦U�����θg�P���ʶRKKBOX�ʸU���֫��w�f�t��zWR325�֬����A���ʾ��o���W��www.ozaki.com.tw�ӽЧY�i�K�O��o�̪��ݽu�����A��(����NT$999��)�A���q500�ӡA�ƶq�����e������CWR325����C��NT$1099���H�U�A�����A�Ω󦹧I�����ʬ��ʡA�Ա��Ш�OZAKI�x���C</li>
	<li>���u�W���W���~�A���ݦ^�ǳ��W��A���P�ӽЧ@�~�y�{����(���ӽЬy�{)�C </li>
	<li>�ث~�ӽи�ƸgOZAKI�f�d�q�L��A�N�󬡰ʵ�����Τ@�H�e�ث~�C </li>
	<li>���W��ݶǯu��(02)2995-8012�A�ζl�H��(241)�x�_���T�������s�����q609��6��8�Ӥ�2 OZAKI ���ʤp�լx�p�j���C </li>
	<li>�ѥ[�̶����ѥ��T�m�W�B�q�ܡB�a�}�BE-mail�����T�򥻸�ơA�H�K�v�T�ث~�H�e���v�Q�C�ث~�ƶq�����e������C</li>
	<li>�Y�ʶRWR325�֬�������C��NT$1099���H�U�A�����A�Ω󦹧I������</li>
	<li>�ѥ[�����ʪ�OZAKI�N�����A�Ѩ��@�N�T���u���ʿ�k�P�W�w�F�n����Ʀp���y���ιH�ϳW�w�̡A�gOZAKI�d�ұN������I�����ëO�d�k�߰l�D�v�C </li>
	<li>�ѥ[�����ʪ̡A�����󬡰ʴ������ʶRWR325�֬������X�O���C����z�A�W����g�ӤH�ӽи�ƥB�n����s�P�ʾ��o���v���ǯu��OZAKI���ʤp�աA��i���o�I�����C </li>
	<li>�gOZAKI�f�d�q�L�ث~�N��2010/06/10�鬡�ʵ�����A�̥ӽж��ǡA�Τ@�H�e�C </li>
	<li>�ث~�I�����o�n�D�����䥦���~�A�Χ�{�C </li>
	<li>OZAKI�O�d���e�󴫡B�����έק糧�����v�Q�C </li>
	<li>OZAKI�N�z�ӡB�g�P�ӡB�t�X�t�Ӥ��A�Υ����ʡC </li>
	<li>OZAKI�D�`�����ӤH���p�v�A����u�B��O�t�ӳ��|�P�O�O�@�z�����p�v�C���������ʤ��A�ѥ[�̪��Ҧ��n����Ƨ��N�����O�s�bOZAKI��Ʈw���C </li>
	<li>��z�b�ϥΥ������ɡA�Y��ܱz��������ڡC </li>
	<li>�����ʾA�νd��A���x�W�a�ϡ]�]�t���q�^�C </li>
	<li>�ث~�d�߱M�u�G(02)2278-1100#137   OZAKI���ʤp�� �x�p�j���C </li>
	<li>���������ʤ��A���O�̪��Ҧ��ӽи�Ƨ������O�s�bOZAKI��Ʈw�C�����ʥ�OZAKI�t�d�f�ֿ�̡C</li>
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
