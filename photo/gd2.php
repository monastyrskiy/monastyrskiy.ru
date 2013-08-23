<?php
include("configuration.php");
if (array_key_exists("gd2jpg", $_REQUEST) && $_REQUEST["gd2jpg"]=$_GET[gd2jpg])
{
$BS_GD2_FILENAME = $_GET['gd2jpg'];
$PSS_EXT_TYPE = strtolower(substr(strrchr($BS_GD2_FILENAME, "."),1));
$BS_GD2_FF_IMG = getimagesize($BS_GD2_FILENAME);
if ($BS_GD2_FF_IMG[0] >= 256)
{
$BS_GD2_PERCENT = $BS_GD2_FF_IMG[0]/256;
}
else {
$BS_GD2_PERCENT = 1;
}
if ($PSS_EXT_TYPE == "jpg" || $PSS_EXT_TYPE == "jpeg")
{header('Content-type: image/jpeg');
}
elseif ($PSS_EXT_TYPE == "gif")
{header('Content-type: image/gif');
}
elseif ($PSS_EXT_TYPE == "png")
{header('Content-type: image/png');
}
list($BS_GD2_WIDTH, $BS_GD2_HEIGHT) = getimagesize($BS_GD2_FILENAME);
$BS_GD2_BS_GD2_NEWBS_GD2_WIDTH = $BS_GD2_WIDTH / $BS_GD2_PERCENT;
$BS_GD2_NEWBS_GD2_HEIGHT = $BS_GD2_HEIGHT / $BS_GD2_PERCENT;
$BS_GD2_THUMB = imagecreatetruecolor($BS_GD2_BS_GD2_NEWBS_GD2_WIDTH, $BS_GD2_NEWBS_GD2_HEIGHT);
if ($PSS_EXT_TYPE == "jpg" || $PSS_EXT_TYPE == "jpeg")
{$BS_GD2_SOURCE = imagecreatefromjpeg($BS_GD2_FILENAME);
}
elseif ($PSS_EXT_TYPE == "gif")
{$BS_GD2_SOURCE = imagecreatefromgif($BS_GD2_FILENAME);
}
elseif ($PSS_EXT_TYPE == "png")
{$BS_GD2_SOURCE = imagecreatefrompng($BS_GD2_FILENAME);
}
imagecopyresized($BS_GD2_THUMB, $BS_GD2_SOURCE, 0, 0, 0, 0, $BS_GD2_BS_GD2_NEWBS_GD2_WIDTH, $BS_GD2_NEWBS_GD2_HEIGHT, $BS_GD2_WIDTH, $BS_GD2_HEIGHT);
$COLOR_255_255_255 = imagecolorallocate($BS_GD2_THUMB, 255, 255, 255);
#$COLOR_128_128_128 = imagecolorallocate($BS_GD2_THUMB, 128, 128, 128);
#$COLOR_0_0_0 = imagecolorallocate($BS_GD2_THUMB, 0, 0, 0);
imagestring($BS_GD2_THUMB, 2,5,5, $GD2_JPG_TEXT,$COLOR_255_255_255);
imagejpeg($BS_GD2_THUMB);
imagedestroy($BS_GD2_THUMB);
}
?>