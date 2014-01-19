<?php

/**
*
* @package Tigris 1.1.4														
* @version $Id: 1:25 PM 3/2/2010 Aneeshtan $						
* @version  http://www.ierealtor.com - phpnuke id: scottr $						
* @copyright (c) Nukelearn Group  http://www.nukelearn.com											
* @license http://creativecommons.org/licenses/by-nc-sa/3.0 Attribution-Noncommercial-Share Alikes
*
*/

/************************************************************************/

if ( !defined('ADMIN_FILE') )
{
	die("Illegal File Access");
}
global $prefix,$admin, $db, $admin_file;

if (is_superadmin($admin)) {
	

	@include("header.php");
	GraphicAdmin();
	title("" . _DBOPTIMIZATION . "");
	OpenTable();
    echo "<center><font class=\"title\">" . _OPTIMIZINGDB . " $dbname</font></center><br><br>"
		."<table border=1 align=\"center\"><tr><td><div align=center>" . _TABLE . "</div></td><td><div align=center>" . _SIZE . "</div></td><td><div align=center>" . _STATUS . "</div></td><td><div align=center>" . _SPACESAVED . "</div></td></tr>";
    $db_clean = $dbname;
    $tot_data = 0;
    $tot_idx = 0;
    $tot_all = 0;
    $local_query = 'SHOW TABLE STATUS FROM '.$dbname;
    $result = $db->sql_query($local_query);
    if ($db->sql_numrows($result)) {
		while ($row = $db->sql_fetchrow($result)) {
    	    $tot_data = $row['Data_length'];
            $tot_idx  = $row['Index_length'];
            $total = $tot_data + $tot_idx;
            $total = $total / 1024 ;
            $total = round ($total,3);
            $gain= $row['Data_free'];
            $gain = $gain / 1024 ;
            $total_gain += $gain;
            $gain = round ($gain,3);   
            $local_query = 'OPTIMIZE TABLE '.$row[0];
	    	$resultat  = $db->sql_query($local_query);
       	    if ($gain == 0) {
       			echo "<tr><td>"."$row[0]"."</td>"."<td>"."$total"." Kb"."</td>"."<td>" . _ALREADYOPTIMIZED . "</td><td>0 Kb</td></tr>";
       	    } else {
       	   		echo "<tr><td><b>"."$row[0]"."</b></td>"."<td><b>"."$total"." Kb"."</b></td>"."<td><b>" . _OPTIMIZED . "</b></td><td><b>"."$gain"." Kb</b></td></tr>";
       	    }		
		} 
    }
    echo "</table>";
    echo "</center>";
    CloseTable();
    echo "<br>";
    OpenTable();
    $total_gain = round ($total_gain,3);
    echo "<center><b>" . _OPTIMIZATIONRESULTS . "</b><br><br>"
		."" . _TOTALSPACESAVED . " "."$total_gain"." Kb<br>";
    $sql_query = "CREATE TABLE IF NOT EXISTS ".$prefix."_optimize_gain(gain decimal(10,3))";  
    $result = $db->sql_query($sql_query);
    $sql_query = "INSERT INTO ".$prefix."_optimize_gain (gain) VALUES ('$total_gain')";
    $result = $db->sql_query($sql_query);
    $sql_query = "SELECT * FROM ".$prefix."_optimize_gain";
    $result = $db->sql_query ($sql_query);
    while ($row = $db->sql_fetchrow($result)) {
		$histo += $row[0];
		$cpt += 1;
    }
    echo "" . _YOUHAVERUNSCRIPT . " $cpt " . _TIMES . "<br>"
		."$histo " . _KBSAVED . "</center>";
    CloseTable();
    @include("footer.php");     

} else {
    echo "Access Denied";
}

?>