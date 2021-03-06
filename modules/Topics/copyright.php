<?php

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2005 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
/* INP-Nuke : Expect to be impressed                                    */
/* ===========================                                          */
/*                               COPYRIGHT                              */
/*                                                                      */
/* Copyright (c) 2005 - 2006 by http://www.irannuke.net                 */
/*                                                                      */
/*     Iran Nuke Portal                        (info@irannuke.net)      */
/*                                                                      */
/* Refer to irannuke.net for detailed information on INP-Nuke           */
/************************************************************************/

// To have the Copyright window work in your module just fill the following
// required information and then copy the file "copyright.php" into your
// module's directory. It's all, as easy as it sounds ;)
// NOTE: in $download_location PLEASE give the direct download link to the file!!!

$author_name = "Farshad Ghazanfari";
$author_email = "";
$author_homepage = "http://MarlikCMS.com";
$license = "GNU/GPL";
$download_location = "http://MarlikCMS.com";
$module_version = "";
$module_description = "This Advanced module can show categories and sub categories of News Module.";

// DO NOT TOUCH THE FOLLOWING COPYRIGHT CODE. YOU'RE JUST ALLOWED TO CHANGE YOUR "OWN"
// MODULE'S DATA (SEE ABOVE) SO THE SYSTEM CAN BE ABLE TO SHOW THE COPYRIGHT NOTICE
// FOR YOUR MODULE/ADDON. PLAY FAIR WITH THE PEOPLE THAT WORKED CODING WHAT YOU USE!!
// YOU ARE NOT ALLOWED TO MODIFY ANYTHING ELSE THAN THE ABOVE REQUIRED INFORMATION.
// AND YOU ARE NOT ALLOWED TO DELETE THIS FILE NOR TO CHANGE ANYTHING FROM THIS FILE IF
// YOU'RE NOT THIS MODULE'S AUTHOR.

function show_copyright() {
	global $author_name, $author_email, $author_homepage, $license, $download_location, $module_version, $module_description;
	if ($author_name == "") { $author_name = "N/A"; }
	if ($author_email == "") { $author_email = "N/A"; }
	if ($author_homepage == "") { $author_homepage = "N/A"; }
	if ($license == "") { $license = "N/A"; }
	if ($download_location == "") { $download_location = "N/A"; }
	if ($module_version == "") { $module_version = "N/A"; }
	if ($module_description == "") { $module_description = "N/A"; }
	$module_name = basename(dirname(__FILE__));
	$module_name = eregi_replace("_", " ", $module_name);
	echo "<html>\n"
	."<body bgcolor=\"#F6F6EB\" link=\"#363636\" alink=\"#363636\" vlink=\"#363636\">\n"
	."<title>$module_name: Copyright Information</title>\n"
	."<font size=\"2\" color=\"#363636\" face=\"Verdana, Helvetica\">\n"
	."<center><b>Module Copyright &copy; Information</b><br>"
	."$module_name Module for <a href=\"http://phpnuke.org\" target=\"new\" onClick = \"window.close()\">PHP-Nuke</a> / <a href=\"http://www.irannuke.net\" target=\"_blank\">INP-Nuke</a><br><br></center>"
	."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<b>Module's Name:</b> $module_name<br>\n"
	."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<b>Module's Version:</b> $module_version<br>\n"
	."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<b>Module's Description:</b> $module_description<br>\n"
	."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<b>License:</b> $license<br>\n"
	."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<b>Author's Name:</b> $author_name<br>\n"
	."<img src=\"../../images/arrow.gif\" border=\"0\">&nbsp;<b>Author's Email:</b> $author_email<br><br>\n"
	."<center>[ <a href=\"$author_homepage\" target=\"new\">Author's HomePage</a> | <a href=\"$download_location\" target=\"new\">Module's Download</a> | <a href=\"javascript:void(0)\" onClick=javascript:self.close()>Close</a> ]</center>\n"
	."</font>\n"
	."</body>\n"
	."</html>";
}

show_copyright();

?>