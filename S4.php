<?php include'db_connect.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">S4 - PROGRAMME</h1>
          </div>
        </div>
            <hr class="border-danger">
    </div>
</div>
<!-- /.content-header -->

<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
		<?php if($_SESSION['login_type'] ==1 ||$_SESSION['login_type'] ==4): ?>
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-danger btn-flat border-black" href="./index.php?page=addnewmodule1&semestr=4"><i class="fa fa-plus"></i> Ajouter un module dans S4</a>
			</div>
            <?php endif; ?>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead class = "thead-dark">
					<tr>
					<th class="text-center">#</th>
						<th>Code module</th>
						<th>Intitulé module</th>
						<th>Element1</th>
						<th>Element2</th>
						<th>Element3</th>
						<th>Responsable</th>
						<th>Note</th>
						<?php if($_SESSION['login_type'] ==1 ||$_SESSION['login_type'] ==4): ?>
						<th>action</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$where = "";
					$qry = $conn->query("SELECT * FROM module1,users,semestre WHERE module1.responsable = users.id AND semestre.id_semestre=module1.id_semestre AND code_semestre='S4' ");
					while($row= $qry->fetch_assoc()):
						$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
						unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
					 	$tprog = $conn->query("SELECT * FROM module1 where module_id = {$row['module_id']}")->num_rows;
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td>
						<p><b><?php echo ucwords($row['code_module']) ?></b></p>
						</td>
						<td><b><?php echo $row['intitule'] ?></b></td>
						<td><b><?php echo $row['element1'] ?></br> intervenant : <?php echo $row['inter1']?></br></b></td>
						<td><b><?php echo !empty($row['element2']) ? $row['element2']   ."<br>"."intervenant : ". $row['inter2'] : '' ?></br></b></td>
						<td><b><?php echo !empty($row['element3']) ? $row['element3']   ."<br>"."intervenant : ". $row['inter3'] : '' ?></br></b></td>
						<td><b><?php echo $row['lastname'] ,' ', $row['firstname'] ?></b></td>
						<td><b><?php echo $row['note'] ?></b></td>
						<?php if($_SESSION['login_type'] ==1 ||$_SESSION['login_type'] ==4): ?>
						<td>
							<button type="button" class="btn btn-dark  btn-block" ><a href ="index.php?page=editmodule1&module_id=<?php echo $row['module_id'] ?>" class="text-light">Modifier </a></button>						
							<button type="button" class="btn btn-danger  btn-block delete_module1 " href="javascript:void(0)" data-module_id="<?php echo $row['module_id'] ?>" >Supprimer </button>
						</td>
					<?php endif; ?>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	
		$('.delete_module1').click(function(){
	_conf("Etes vous sur de vouloir supprimer ce module?","delete_module1",[$(this).attr('data-module_id')])
	})
	})
	function delete_module1($module_id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_module1',
			method:'POST',
			data:{module_id:$module_id},
			success:function(resp){
				if(resp==1){
					alert_toast("Module supprimé avec succés",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>