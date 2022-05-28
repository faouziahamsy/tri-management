<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM module where module_id = ".$_GET['module_id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include 'addnewmodule.php';
?>