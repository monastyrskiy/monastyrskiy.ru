<?php
list($BS2_MSEC,$BS2_SEC)=explode(chr(32),microtime());$BS2_HTH=$BS2_SEC+$BS2_MSEC;
#Powered by Rolly
#BS:) 2.0
#2006
include("configuration.php");
include("function.php");
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<html>
<title>$BS2_NAME_</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\"/>
<meta http-equiv=\"pragma\" content=\"no-cache\"/>
<meta http-equiv=\"Author\" content=\"Powered by Rolly\"/>
<link href=\"$BS2_STYLE_FOLDER/$BS2_STYLE/style.css\" type=\"text/css\" rel=\"stylesheet\"/>
<table width=\"1000\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"0\">
<tr>
<td><b>$BS2_NAME_&nbsp;version&nbsp;$BS2_VERSION_&nbsp;[$BS2_DATE_TD__]&nbsp;[$BS2_TIME_NW__]</b></td>
</tr>
</table>";
echo "<table width=\"1000\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"style_table_01\">
<tr>
<td><table width=\"1000\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\">";
if ($open = @opendir($BS2_HDIR.$_GET['path']))
{
for($i=0;($BS2_DIRECTORY = readdir($open)) != FALSE;$i++)
if (is_dir($BS2_HDIR.$_GET['path'].$BS2_DIRECTORY)  && $BS2_DIRECTORY != "." && $BS2_DIRECTORY != ".." && !PSS_HD($BS2_HDIR.$_GET['path'].$BS2_DIRECTORY))
$BS2_DIRECTORIES[$i] = array($BS2_DIRECTORY,$BS2_DIRECTORY);
closedir($open);
}
echo "<tr valign=\"top\">
<td width=\"256\" class=\"style_table_02\" title=\"Return back\" style=\"CURSOR: hand\" onclick=\"location='$BS2_URL_N&amp;path=".dirname($_GET['path'])."/'\" onmouseover=\"this.style.backgroundColor='$COLOR_02'\" onmouseout=\"this.style.backgroundColor='$COLOR_01'\"><div align=\"left\"><a href=\"$BS2_URL_N&amp;path=".dirname($_GET['path'])."/\">...</a></div></td>
<td width=\"744\" class=\"style_table_02\">&nbsp;</td>
</tr>";
if (isset($BS2_DIRECTORIES)) foreach($BS2_DIRECTORIES as $BS2_DIRECTORY)
{
{
echo "<tr valign=\"top\">
<td width=\"256\" class=\"style_table_02\" title=\"$BS2_DIRECTORY[0]\" style=\"CURSOR: hand\" onclick=\"location='$BS2_URL_N&amp;path=$_GET[path]".rawurlencode($BS2_DIRECTORY[0])."/'\" onmouseover=\"this.style.backgroundColor='$COLOR_02'\" onmouseout=\"this.style.backgroundColor='$COLOR_01'\"><div align=\"left\"><a href=\"$BS2_URL_N&amp;path=$_GET[path]".rawurlencode($BS2_DIRECTORY[0])."/\">";
$BS2_DIRECTORY_STRLEN = strlen($BS2_DIRECTORY[0]);
if ($BS2_DIRECTORY_STRLEN > 30)
{
$BS2_DIRECTORY_ = substr($BS2_DIRECTORY[0],0,30);
echo "$BS2_DIRECTORY_...";
}
else
{
echo "$BS2_DIRECTORY[0]";
}
echo "</a></div></td>
<td width=\"744\" class=\"style_table_02\">&nbsp;</td>
</tr>";
}
$FOLDER_COUNTER++;
}
if ($open = @opendir($BS2_HDIR.$_GET['path']))
{
for($i=0;($BS2_FILE = readdir($open)) != FALSE;$i++)
if (is_file($BS2_HDIR.$_GET['path'].$BS2_FILE) && !PSS_HF($BS2_HDIR.$_GET['path'].$BS2_FILE))
{
$BS2_FILESIZE = filesize($BS2_HDIR.$_GET['path'].$BS2_FILE);
$BS2_MODIFIED = filemtime($BS2_HDIR.$_GET['path'].$BS2_FILE);
$BS2_FILES[$i] = array("filename"=>$BS2_FILE,"filesize"=>$BS2_FILESIZE,"modified"=>$BS2_MODIFIED,);
}
closedir($open);
}
if (isset($BS2_FILES)) foreach($BS2_FILES as $BS2_FILE)
{
$BS2_EXT_TYPE = strtolower(substr(strrchr($BS2_FILE[filename], "."),1));
$BS2_FILE['filesize'] = PSS_F_FILESIZE($BS2_FILE['filesize']);
$BS2_FILE['modified'] = date($BS2_DATE_MODIFIED, $BS2_FILE['modified']);
$FILENAME_substr = substr($BS2_FILE['filename'],0,30);
{
{
{
{
$BS2_URL_WORK  = ereg_replace('%2F','/',$_GET['path']);
if ($BS2_EXT_TYPE == "jpeg" || $BS2_EXT_TYPE == "jpg" || $BS2_EXT_TYPE == "gif" || $BS2_EXT_TYPE == "png")
{
$BS2_GETIMGSZ_VAR_FILE = "$BS2_HDIR$BS2_URL_WORK$BS2_FILE[filename]";
$BS2_GETIMGSZ_VAR_DEM = getimagesize($BS2_GETIMGSZ_VAR_FILE);
echo"<tr valign=\"top\">
<td width=\"256\" class=\"style_table_02\" title=\"$BS2_FILE[filename]\" style=\"CURSOR: hand\" onclick=\"location='$BS2_HDIR$BS2_URL_WORK".rawurlencode($BS2_FILE['filename'])."'\" onmouseover=\"this.style.backgroundColor='$COLOR_02'\" onmouseout=\"this.style.backgroundColor='$COLOR_01'\"><div align=\"left\"><a href=\"$BS2_HDIR$BS2_URL_WORK".rawurlencode($BS2_FILE['filename'])."\">";
echo "<img src=\"gd2.php?gd2jpg=$BS2_HDIR$BS2_URL_WORK".rawurlencode($BS2_FILE['filename'])."\" border=\"0\">";
echo"</a></div></td>
<td width=\"744\" class=\"style_table_02\"><font color=\"#CC0000\">Name: </font><a title=\"$BS2_FILE[filename]\">";$BS2_FILE_STRLEN = strlen($BS2_FILE['filename']);
if ($BS2_FILE_STRLEN > 30)
{
$BS2_FILE_ = substr($BS2_FILE['filename'],0,30);
echo "${PSS_FILE_}...";
}
else
{
echo "$BS2_FILE[filename]";
}
echo"</a><br/>";

$LINK_URL = "http://monastyrskiy.ru/photo/" . $BS2_URL_WORK . rawurlencode($BS2_FILE['filename']);
$LJ_LINK_URL = '<div style="text-align: center;"><img src="' . $LINK_URL . '"></div>';

echo "<font color=\"#CC0000\">Link:</font> <a href=\"$LINK_URL\">$LINK_URL</a><br/>";
echo '<font color="#CC0000">LJ Link:</font>' . htmlspecialchars($LJ_LINK_URL) . '<br/>';

echo"<font color=\"#CC0000\">Size:</font> $BS2_FILE[filesize]<br/>
<font color=\"#CC0000\">Date modified:</font> $BS2_FILE[modified]<br/>
<font color=\"#CC0000\">Type:</font> $BS2_EXT_TYPE<br/>
<font color=\"#CC0000\">Dimensions:</font> $BS2_GETIMGSZ_VAR_DEM[0] x $BS2_GETIMGSZ_VAR_DEM[1]</td>
</tr>";
}
if ($BS2_EXT_TYPE == "jpeg" || $BS2_EXT_TYPE == "jpg" || $BS2_EXT_TYPE == "gif" || $BS2_EXT_TYPE == "png")
{
$FILE_COUNTER++;
}
}
if ($BS2_EXT_TYPE == "jpeg" || $BS2_EXT_TYPE == "jpg")
{
$FILE_COUNTER_JPEG++;
}
}
if ($BS2_EXT_TYPE == "gif")
{
$FILE_COUNTER_GIF++;
}
}
if ($BS2_EXT_TYPE == "png")
{
$FILE_COUNTER_PNG++;
}
}
}
echo "</table></td>
</tr>
</table>";
list($BS2_MSEC,$BS2_SEC)=explode(chr(32),microtime());
echo "<hr width=\"600\" size=\"1\">
<table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"0\">
<tr vAlign=\"top\">
<td width=\"340\"><div align=\"left\">
<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
<tr><td>This page was produced in ".round(($BS2_SEC+$BS2_MSEC)-$BS2_HTH,3)."&nbsp;seconds.</td></tr>
<tr><td>PHP|GD2|XHTML|CSS</td></tr>
<tr><td>TFLS: $FILE_COUNTER&nbsp;|&nbsp;TFLDRS:&nbsp;$FOLDER_COUNTER</td></tr>
<tr><td>TJPEGFS: $FILE_COUNTER_JPEG&nbsp;|&nbsp;TGIFFS: $FILE_COUNTER_GIF&nbsp;|&nbsp;TPNGFS:&nbsp;$FILE_COUNTER_PNG</td></tr>
</table>
</div>
</td>
<td width=\"260\"><div align=\"left\">
<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr>
<td><strong>Copyright &copy; 2003—$BS2_PRESENT_DATE_ deyuri</strong></td></tr>
<tr><td>$BS2_NAME_&nbsp;version $BS2_VERSION_</td></tr>
<tr><td>powered by Rolly</td></tr>
</table></div></td>
</tr>
</table>
</html>";
?>