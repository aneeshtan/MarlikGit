<?php

/** @package your_account admin files	12:59 AM 1/12/2010  MarlikCMS $ */	

if (!defined('ADMIN_FILE')) {show_error(HACKING_ATTEMPT);}



if (($radminsuper==1) OR ($radminuser==1)) {
	include("header.php");
    GraphicAdmin();
    list($username, $realname, $email, $check_num) = $db->sql_fetchrow($db->sql_query("SELECT username, realname, user_email, check_num FROM ".$user_prefix."_users_temp WHERE user_id='$act_uid'"));

    $pagetitle = ": "._USERADMIN." - "._YA_APPROVEUSER;
    title(_USERADMIN." - "._YA_APPROVEUSER);
    amain();
    echo "<br>\n";

    OpenTable();

         echo "<center>"._SURE2ACTIVATE.":</center><br>\n";

    OpenTable();
        echo "<table align='center' border='0' align=\"center\">";
        echo "<tr><td width=\"50%\"><b>"._USERNAME.":</b></td><td align=\"left\">$username<br></td></tr>";
        echo "<tr><td width=\"50%\"><b>"._UREALNAME.":</b></td><td align=\"left\">$realname<br></td></tr>";
        echo "<tr><td width=\"50%\"><b>"._EMAIL.":</b></td><td align=\"left\">$email</td></tr>";
        echo "</table>";
    CloseTable();

    echo "<center><table align='center' border='0' cellpadding='2' cellspacing='2'>\n";
    echo "<form action='".ADMIN_OP."mod_users' method='post'>\n";
    if (isset($min)) { echo "<input type='hidden' name='min' value='$min'>\n"; }
    if (isset($xop)) { echo "<input type='hidden' name='xop' value='$xop'>\n"; }
    echo "<input type='hidden' name='op' value='approveUserConf'>\n";
    echo "<input type='hidden' name='apr_uid' value='$apr_uid'>\n";
    echo "<tr><td align=center><input type='submit' value='"._YA_APPROVEUSER."'></td><tr>\n";
    echo "</form>\n";
    echo "<form action='".ADMIN_OP."mod_users' method='post'>\n";
    if (isset($query)) { echo "<input type='hidden' name='query' value='$query'>\n"; }
    if (isset($min)) { echo "<input type='hidden' name='min' value='$min'>\n"; }
    if (isset($xop)) { echo "<input type='hidden' name='op' value='$xop'>\n"; }
    echo "<tr><td align='center'><input type='submit' value='"._CANCEL."'></td></tr>\n";
    echo "</form>\n";
    echo "</table></center>\n";
    CloseTable();
    include("footer.php");

}

?>