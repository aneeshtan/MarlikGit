<?php

/** @package your_account admin files	12:59 AM 1/12/2010  MarlikCMS $ */	

if (!defined('ADMIN_FILE')) {show_error(HACKING_ATTEMPT);}


if (($radminsuper==1) OR ($radminuser==1)) {

  $pagetitle = ": "._USERADMIN." - "._USERUPDATE;
  include("header.php");
    GraphicAdmin();
  title(_USERADMIN." - "._USERUPDATE);
  amain();
  echo "<br>\n";
    $result = $db->sql_query("select * from ".$user_prefix."_users_temp where user_id='$chng_uid'");
    if($db->sql_numrows($result) > 0) {
    $chnginfo = $db->sql_fetchrow($result);
    OpenTable();
    echo "<center><table border='0'><form action='".ADMIN_OP."mod_users' method='post'>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._USERID.":</td><td><b><input type='text' value='$chnginfo[user_id]' size='40' disabled=disabled style='color=#000000;background-color: #FFFFFF'></b></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._NICKNAME.":</td><td><input type='text' name='chng_uname' value=".$chnginfo['username']." size='40' style='color=#000000;background-color: #FFFFFF'> <b>"._YA_CHNGRISK."</b></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._UREALNAME.":</td><td bgcolor='$bgcolor1'><input type='text' name='chng_realname' value='$chnginfo[realname]' size='40' maxlength='60' style='color=#000000;background-color: #FFFFFF'></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._EMAIL.":</td><td><input type='text' name='chng_email' value='$chnginfo[user_email]' size='40' maxlength='60' style='color=#000000;background-color: #FFFFFF'></td></tr>\n";

	$result = $db->sql_query("SELECT * FROM ".$user_prefix."_cnbya_field WHERE need <> '0' ORDER BY pos");
	while ($sqlvalue = $db->sql_fetchrow($result)) {
		$t = $sqlvalue[fid];
		$result1 = $db->sql_query("SELECT * FROM ".$user_prefix."_cnbya_value_temp WHERE uid='$chng_uid' AND fid='$t'");
		while ($tmpsqlvalue = $db->sql_fetchrow($result1)) {
			$tmp_value=$tmpsqlvalue[value];
			$value2 = explode("::", $sqlvalue[value]);
			if (substr($sqlvalue[name],0,1)=='_') eval( "\$name_exit = $sqlvalue[name];"); else $name_exit = $sqlvalue[name];
			if (count($value2) == 1) { 
			echo "<tr><td bgcolor='$bgcolor2'>$name_exit</td><td>";
			echo "<input type='text' name='nfield[$t]' value='".$tmp_value."' size='40' maxlength='$sqlvalue[size]'></td></tr>\n";
			} else {
			echo "<tr><td bgcolor='$bgcolor2'>$name_exit</td><td>";
			echo "<select name='nfield[$t]'>\n";
				for ($i = 0; $i<count($value2); $i++) {
					if (trim($chnginfo[$sqlvalue[name]]) == trim($value2[$i])) $sel = "selected"; else $sel = "";
					echo "<option value=\"".trim($value2[$i])."\" $sel>$value2[$i]</option>\n";
				}
			echo "</select>";
			echo "</td></tr>\n";
			}
		}
    }

    echo "<tr><td bgcolor='$bgcolor2'>"._REGDATE.":</td><td><input type='text' value='$chnginfo[user_regdate]' size='40' disabled=disabled style='color=#000000;background-color: #FFFFFF'></td></tr>\n";
    $chnginfo['time'] = date("D M j H:i T Y", $chnginfo['time']);
    echo "<tr><td bgcolor='$bgcolor2'>"._YA_APPROVE2.":</td><td><input type='text' value='$chnginfo[time]' size='40' disabled=disabled style='color=#000000;background-color: #FFFFFF'></td></tr>\n";
    echo "<tr><td bgcolor='$bgcolor2'>"._CHECKNUM.":</td><td><input type='text' value=".$chnginfo['check_num']." size='40' disabled=disabled style='color=#000000;background-color: #FFFFFF'></td></tr>\n";
    echo "<tr><td colspan=\"2\" align=\"left\"><br>\n";

        echo "<table cellspacing=\"0\" cellpadding=\"0\" border='0'><tr>\n";
		echo "<td>\n";
		if (isset($min)) { echo "<input type='hidden' name='min' value='$min'>\n"; }
		if (isset($xop)) { echo "<input type='hidden' name='op' value='$xop'>\n"; }
		echo "<input type='submit' value='"._RETURN."'></td>\n";
        echo "<td width=\"3\"></td>\n";
		echo "<td>\n";
		echo "<input type='hidden' name='chng_uid'  value='$chng_uid'>\n";
		echo "<input type='hidden' name='old_uname' value='$chnginfo[username]'>\n";
		echo "<input type='hidden' name='old_email' value='$chnginfo[user_email]'>\n";
		echo "<input type='hidden' name='op'        value='modifyTempConf'>\n";
		if (isset($query)) { echo "<input type='hidden' name='query' value='$query'>\n"; }
		if (isset($min))   { echo "<input type='hidden' name='min' value='$min'>\n"; }
		if (isset($xop))   { echo "<input type='hidden' name='xop' value='$xop'>\n"; }
		echo "<input type='submit' value='"._SAVECHANGES."'></td></form>\n";
        echo "<td width=\"3\"></td><td>\n";
			if ($ya_config['useactivate'] == 0) {
				echo "<form action='".ADMIN_OP."mod_users' method='post'><td>\n";
				if (isset($min)) { echo "<input type='hidden' name='min' value='$min'>\n"; }
				if (isset($xop)) { echo "<input type='hidden' name='xop' value='$xop'>\n"; }
				echo "<input type='hidden' name='op' value='approveUserConf'>\n";
				echo "<input type='hidden' name='apr_uid' value='".$chnginfo['user_id']."'>\n";
				echo "<input type='submit' value='"._YA_APPROVE."'></td></form>\n";
			} else {
				echo "<form action='".ADMIN_OP."mod_users' method='post'><td>\n";
				if (isset($min)) { echo "<input type='hidden' name='min' value='$min'>\n"; }
				if (isset($xop)) { echo "<input type='hidden' name='xop' value='$xop'>\n"; }
				echo "<input type='hidden' name='op' value='activateUser'>\n";
				echo "<input type='hidden' name='act_uid' value='".$chnginfo['user_id']."'>\n";
				echo "<input type='submit' value='"._YA_ACTIVATE."'></td></form>\n";
			}
        echo "</tr></table>\n";

    echo "</td></tr><tr><td colspan=\"2\"><b>"._NOTE."</b>\n";
    echo "</td></tr><tr><td colspan=\"2\"><b>"._YA_APPROVENOTE."</b>\n";
    echo "</td></tr><tr><td colspan=\"2\"><b>"._YA_ACTIVATENOTE."</b>\n";

    echo "</td></form></tr></table></center>\n";
    echo "<br>\n";

    CloseTable();
  } else {
    OpenTable();
    echo "<center><b>"._USERNOEXIST."</b></center>\n";
    CloseTable();
  }
  include("footer.php");

}

?>