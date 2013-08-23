<?php
// Home directory
	$BS2_HDIR = "./";

// Folders name
	$BS2_STYLE_FOLDER  = "bs2_style";

// Style
	$BS2_STYLE = "silver";

// Prohibition on viewing (Folder)
	$BS2_HDIR_STR  = array("bs2_style");    

// Prohibition on viewing (File)
	$BS2_HFILE_STR = array("configuration.php","index.php");

// Format
	$BS2_URL_N = "$_SERVER[PHP_SELF]?";
	$BS2_DATE_MODIFIED = "j M Y H:i:s";
	$BS2_DATE_TD = "d.m.Y";
	$BS2_TIME_NW = "H:i:s";

// Text on pictures (only EN)
	$GD2_JPG_TEXT = "GD2JPG|BS2|powered by Rolly";

// F&F counter
	$FILE_COUNTER_JPEG	= 0;
	$FILE_COUNTER_GIF	= 0;
	$FILE_COUNTER_PNG	= 0;
	$FOLDER_COUNTER		= 0;
	$FILE_COUNTER		= 0;
// Other 
#Does not change
#Variables
	$BS2_PRESENT_DATE_ = date("Y");
	$BS2_VERSION_      = "1.0.3";
	$BS2_NAME_  = "BS2:) photo review";
	include("$BS2_STYLE_FOLDER/$BS2_STYLE/index.php");
	$BS2_DATE_TD__ = date($BS2_DATE_TD);
	$BS2_TIME_NW__ = date($BS2_TIME_NW);
?>