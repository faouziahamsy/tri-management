<?php
include'db_connect.php';
ob_start();
date_default_timezone_set("Asia/Manila");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
	extract($_POST);

if($action=='add_seance'){
if(isset($_POST['heuredebut'])&&isset($_POST['heurefin'])&&isset($_POST['jour'])&&isset($_POST['responsable'])&&isset($_POST['module'])&&isset($_POST['salle'])){
	$sql="insert into emplois1 (heuredebut,heurefin,jour,responsable,module,salle,s_d,s_fin)values ('$heuredebut','$heurefin','$jour','$responsable','$module','$salle','$s_d','$s_fin')";
	$result=mysqli_query($conn,$sql);
}
}
if($action=='add_seance1'){
	if(isset($_POST['heuredebut'])&&isset($_POST['heurefin'])&&isset($_POST['jour'])&&isset($_POST['responsable'])&&isset($_POST['module'])&&isset($_POST['salle'])){
		$sql="insert into emplois2(heuredebut,heurefin,jour,responsable,module,salle,s_d,s_fin)values ('$heuredebut','$heurefin','$jour','$responsable','$module','$salle','$s_d','$s_fin')";
		$result=mysqli_query($conn,$sql);
	}
	}

if($action=='add_evaluation'){
	if(isset($_POST['heuredebut'])&&isset($_POST['heurefin'])&&isset($_POST['jour'])&&isset($_POST['responsable'])&&isset($_POST['module'])&&isset($_POST['salle'])&&isset($_POST['type'])){
		$sql="insert into evaluation (heuredebut,heurefin,jour,responsable,module,salle,type) values ('$heuredebut','$heurefin','$jour','$responsable','$module','$salle','$type')";
		$result=mysqli_query($conn,$sql);
	}
	}

	if($action=='add_evaluation1'){
		if(isset($_POST['heuredebut'])&&isset($_POST['heurefin'])&&isset($_POST['jour'])&&isset($_POST['responsable'])&&isset($_POST['module'])&&isset($_POST['salle'])&&isset($_POST['type'])){
			$sql="insert into evaluation1 (heuredebut,heurefin,jour,responsable,module,salle,type) values ('$heuredebut','$heurefin','$jour','$responsable','$module','$salle','$type')";
			$result=mysqli_query($conn,$sql);
		}
		}

if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}

if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}

if($action == 'delete_module'){
	$save = $crud->delete_module();
	if($save)
		echo $save;
}

if($action == 'delete_module1'){
	$save = $crud->delete_module1();
	if($save)
		echo $save;
}

if($action == 'delete_sujet'){
	$save = $crud->delete_sujet();
	if($save)
		echo $save;
}

if($action == 'save_module'){
	$save = $crud->save_module();
	if($save)
		echo $save;

}

if($action == 'save_module1'){
	$save = $crud->save_module1();
	if($save)
		echo $save;

}

if($action == 'delete_project'){
	$save = $crud->delete_project();
	if($save)
		echo $save;
}
if($action == 'save_task'){
	$save = $crud->save_task();
	if($save)
		echo $save;
}
if($action == 'delete_task'){
	$save = $crud->delete_task();
	if($save)
		echo $save;
}
if($action == 'save_progress'){
	$save = $crud->save_progress();
	if($save)
		echo $save;
}
if($action == 'delete_progress'){
	$save = $crud->delete_progress();
	if($save)
		echo $save;
}
if($action == 'get_report'){
	$get = $crud->get_report();
	if($get)
		echo $get;
}
ob_end_flush();
?>
