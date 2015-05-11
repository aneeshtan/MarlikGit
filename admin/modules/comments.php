<?PHP

/**
*
* @package Tigris 1.1.4														
* @version $Id: 1:25 PM 3/2/2010 Aneeshtan $						
* @version  http://www.ierealtor.com - phpnuke id: scottr $						
* @copyright (c) Marlik Group  http://www.MarlikCMS.com											
* @license http://creativecommons.org/licenses/by-nc-sa/3.0 Attribution-Noncommercial-Share Alikes
*
*/


if (!preg_match("/".$admin_file.".php/", "$_SERVER[PHP_SELF]")) { die ("Access Denied"); }

if (!defined('ADMIN_FILE')) {
	die ("Access Denied");
}

global $prefix, $db, $admin_file;
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT radminsuper FROM " . $prefix . "_authors WHERE aid='$aid'"));
if ($row['radminsuper'] == 1) {

	/*********************************************************/
	/* Comments Delete Function                              */
	/*********************************************************/

	/* Thanks to Oleg [Dark Pastor] Martos from http://www.rolemancer.ru */
	/* to code the comments childs deletion function!                    */

	function removeSubComments($tid) {
		global $prefix, $db;
		$tid = intval($tid);
		$result = $db->sql_query("SELECT tid from " . $prefix . "_comments where pid='$tid'");
		$numrows = $db->sql_numrows($result);
		if($numrows>0) {
			while ($row = $db->sql_fetchrow($result)) {
				$stid = intval($row['tid']);
				removeSubComments($stid);
				$stid = intval($stid);
				$db->sql_query("delete from " . $prefix . "_comments where tid='$stid'");
			}
		}
		$db->sql_query("delete from " . $prefix . "_comments where tid='$tid'");
	}

	function removeComment ($tid, $sid, $ok=0) {
		global $prefix, $db, $admin_file;
		if($ok) {
			$tid = intval($tid);
			$result = $db->sql_query("SELECT date from " . $prefix . "_comments where pid='$tid'");
			$numresults = $db->sql_numrows($result);
			$sid = intval($sid);
			$db->sql_query("update " . $prefix . "_stories set comments=comments-1-'$numresults' where sid='$sid'");
			/* Call recursive delete function to delete the comment and all its childs */
			removeSubComments($tid);

			Header("Location: modules.php?name=News&file=article&sid=$sid");
		} else {
			include("header.php");
			GraphicAdmin();
			OpenTable();
			echo "<center><font class=\"title\"><b>" . _REMOVECOMMENTS . "</b></font></center>";
			CloseTable();
			echo "<br>";
			OpenTable();
			echo "<center>" . _SURETODELCOMMENTS . "";
			echo "<br><br>[ <a href=\"javascript:history.go(-1)\">" . _NO . "</a> | <a href=\"".$admin_file.".php?op=RemoveComment&tid=$tid&sid=$sid&ok=1\">" . _YES . "</a> ]</center>";
			CloseTable();
			include("footer.php");
		}
	}

	function removePollSubComments($tid) {
		global $prefix, $db;
		$tid = intval($tid);
		$result = $db->sql_query("SELECT tid, pollID from " . $prefix . "_pollcomments where pid='$tid'");
		$numrows = $db->sql_numrows($result);
		if($numrows>0) {
			while ($row = $db->sql_fetchrow($result)) {
				$stid = intval($row['tid']);
				removePollSubComments($stid);
				$db->sql_query("delete from " . $prefix . "_pollcomments where tid='$stid'");
				$db->sql_query("update " . $prefix . "_poll_desc set comments=comments-1 where pollID='".intval($row['pollID'])."'");
			}
		}
		$db->sql_query("delete from " . $prefix . "_pollcomments where tid='$tid'");
		$db->sql_query("update " . $prefix . "_poll_desc set comments=comments-1 where pollID='".intval($row['pollID'])."'");
	}

	function RemovePollComment ($tid, $pollID, $ok=0) {
		global $admin_file, $prefix, $db;
		if($ok) {
			$db->sql_query("update " . $prefix . "_poll_desc set comments=comments-1 where pollID='".intval($pollID)."'");
			removePollSubComments($tid);
			Header("Location: modules.php?name=Surveys&op=results&pollID=$pollID");
		} else {
			include("header.php");
			GraphicAdmin();
			OpenTable();
			echo "<center><font class=\"title\"><b>" . _REMOVECOMMENTS . "</b></font></center>";
			CloseTable();
			echo "<br>";
			OpenTable();
			echo "<center>" . _SURETODELCOMMENTS . "";
			echo "<br><br>[ <a href=\"javascript:history.go(-1)\">" . _NO . "</a> | <a href=\"".$admin_file.".php?op=RemovePollComment&tid=$tid&pollID=$pollID&ok=1\">" . _YES . "</a> ]</center>";
			CloseTable();
			include("footer.php");
		}
	}

	 if (!(isset($op))) { $op = ""; }
  	 if (!(isset($ok))) { $ok = ""; }
	  
	switch ($op) {

		case "RemoveComment":
		removeComment ($tid, $sid, $ok);
		break;

		case "removeSubComments":
		removeSubComments($tid);
		break;

		case "removePollSubComments":
		removePollSubComments($tid);
		break;

		case "RemovePollComment":
		RemovePollComment($tid, $pollID, $ok);
		break;

	}

} else {
	echo "Access Denied";
}
?>