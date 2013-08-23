<?php
function PSS_F_FILESIZE($BS2_FILESIZE)
{
#size!
#$BS2_SIZE_KB = 1024;
#$BS2_SIZE_MB = 1048576; 
#$BS2_SIZE_GB = 1073741824;
#$BS2_SIZE_TB = 1099511627776;
#size 00
$BS2_SIZE_KB = 1000;
$BS2_SIZE_MB = 1000000; 
$BS2_SIZE_GB = 1000000000;
$BS2_SIZE_TB = 1000000000000;
if ($BS2_FILESIZE >= $BS2_SIZE_TB)return number_format($BS2_FILESIZE/$BS2_SIZE_TB, 2, ',', '.')."&nbsp;TBytes";else 
if ($BS2_FILESIZE >= $BS2_SIZE_GB)return number_format($BS2_FILESIZE/$BS2_SIZE_GB, 2, ',', '.')."&nbsp;GBytes";else 
if ($BS2_FILESIZE >= $BS2_SIZE_MB)return number_format($BS2_FILESIZE/$BS2_SIZE_MB, 2, ',', '.')."&nbsp;MBytes";else 
if ($BS2_FILESIZE >= $BS2_SIZE_KB)return number_format($BS2_FILESIZE/$BS2_SIZE_KB, 2, ',', '.')."&nbsp;KBytes";else
return number_format($BS2_FILESIZE, 0, ',', '.')."&nbsp;Bytes";
}
function PSS_HF($path)
{
global 
$BS2_HFILE_STR, 
$BS2_HDIR_STR;
$BS2_EXT = strtolower(substr(strrchr($path, "."),1));
foreach ($BS2_HFILE_STR as $BS2_HS)
if (stristr(basename($path), $BS2_HS))return TRUE;
foreach ($BS2_HDIR_STR as $BS2_HS)
if (stristr(dirname($path), $BS2_HS))
return TRUE;return FALSE;
}
function PSS_HD($path) 
{
global $BS2_HDIR_STR;
foreach ($BS2_HDIR_STR as $BS2_HS)
if (stristr($path, $BS2_HS))
return TRUE;return FALSE;
}
#################
##Function on/off
#if (empty($path) == false)die;
#################
$_GET['path'] = str_replace("../", "",  $_GET['path']);
$_GET['path'] = str_replace("./",  "",  $_GET['path']);
$_GET['path'] = str_replace("\/",  "",  $_GET['path']);
$_GET['path'] = str_replace("\\",  "",  $_GET['path']);
#################
##Function on/off
#$_GET['path'] = str_replace("/",    "",  $_GET['path']);
#################
$_GET['path'] = str_replace("",    "",  $_GET['path']);
?>