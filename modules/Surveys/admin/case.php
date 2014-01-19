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

if (!defined('ADMIN_FILE')) {
	die ("Access Denied");
}

$module_name = "Surveys";
include_once("modules/$module_name/admin/language/lang-".$currentlang.".php");

switch($op) {

    case "create":
    case "createPosted":
    case "ChangePoll":
    case "remove":
    case "removePosted":
    case "polledit":
    case "savepoll":
    case "polledit_select":
    include("modules/$module_name/admin/index.php");
    break;

}

?>