<?php
// Paginate
$page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$page = ($page == 0 ? 1 : $page);
$perpage = $page_size; // Check page_size in inc/config_txt.php
if(isset($_REQUEST["perpage"]) && ($_REQUEST["perpage"] !="") && ($_REQUEST["perpage"] !="all")) $perpage = $_REQUEST["perpage"];

$startpoint = ($page * $perpage) - $perpage;
?>
