<?php

/********************************************************/
/* NSN GR Downloads                                     */
/* By: NukeScripts Network (webmaster@nukescripts.net)  */
/* http://www.nukescripts.net                           */
/* Copyright � 2000-2005 by NukeScripts Network         */
/********************************************************/
$lid = sql_quote($lid);
$db->sql_query("DELETE FROM ".$prefix."_nsngd_new WHERE lid='$lid'");
$db->sql_query("OPTIMIZE TABLE ".$prefix."_nsngd_new");
Header("Location: ".$admin_file.".php?op=Downloads");

?>