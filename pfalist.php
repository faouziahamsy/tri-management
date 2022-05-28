<?php 
	include 'header.php' 
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">LISTE DES PFA</h1>
          </div>
        </div>
            <hr class="border-danger">
    </div>
</div>
<!-- /.content-header -->

<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
            <?php if($_SESSION['login_type'] == 5 || $_SESSION['login_type'] == 1): ?>
			<div class="card-tools">
						<!-- Button trigger modal -->
			<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
 				 Ajouter un sujet PFA
			</button>
			</div>
            <?php endif; ?>
		</div>
		<div class="card-body">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un sujet PFA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="form-group">
			<label for="exampleInputEmail1">Sujet <span class="text-danger">*</span></label>
			<input type="text" class="form-control" id="sujet"  placeholder="Sujet PFA">
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Groupe  <span class="text-danger">*</span></label>
			<input type="text" class="form-control" id="groupe" placeholder=" Exemple = PFA1 ISIC1" >
	
		</div>
		<div class="mb-3">
        <div class="mb-3" id="class_time_table_dv_form">
		<div class="mb-3">
            <label for="" class="mb-3">Encadrant<span class="text-danger">*</span></label>
			<div class="mb-3">
            <select style="width: 100%;" name="responsable" class="form-control" id= encadrant>
			<option value="">--- Choisir un encadrant ---</option>
 			 <?php
                $managers = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users order by concat(firstname,' ',lastname) asc ");
                while ($row = $managers->fetch_assoc()) :
              ?>
				 <option value="<?php echo $row['id'] ?>" <?php echo isset($Responsable_id) && $Responsable_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
                 <?php endwhile; ?>
                 </select>

		 		</div>
		</div>
    </div>
</div>
              

		<div class="form-group">
			<label for="exampleInputEmail1">Date de début  <span class="text-danger">*</span></label>
			<input type="date" class="form-control" id="date_debut"  >
	
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Date de fin  <span class="text-danger">*</span></label>
			<input type="date" class="form-control" id="date_fin"  >
	
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Description  <span class="text-danger">*</span></label>
			<input type="text" class="form-control" id="description"  placeholder="Breve description du sujet">
		</div>

      </div>
      <div class="modal-footer">
	 	 <button type="button" class="btn btn-dark" onclick="ajoutersujet()">Enregistrer</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
 



			<table class="table tabe-hover table-bordered" id="list">
			<colgroup>
					<col width="5%">
					<col width="20%">
					<col width="10%">
					<col width="10%">
					<col width="10%">
					<col width="10%">
					<col width="35%">
					<col width="10%">
				</colgroup>
				<thead class = "thead-dark">
					<tr>
						<th class="text-center">#</th>
						<th>Sujet</th>
						<th>Encadrant</th>
						<th>Groupe</th>
						<th>Date de debut</th>
						<th>Date de fin</th>
						<th>Description</th>
						<?php if($_SESSION['login_type'] == 5 || $_SESSION['login_type'] == 1): ?>
						<th>Action</th>
						<?php endif ;?>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					
					$where = "";
					if($_SESSION['login_type'] == 2){
						$where = " where responsable = '{$_SESSION['login_id']}' ";
					}elseif($_SESSION['login_type'] == 3){
						$where = " where concat('[',REPLACE(user_ids,',','],['),']') LIKE '%[{$_SESSION['login_id']}]%' ";
					}
					$qry = $conn->query("SELECT * FROM cellule,users WHERE  cellule.id_cellule=1 AND cellule.id_encadrant = users.id");
					while($row= $qry->fetch_assoc()):
						$trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
						unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
					 	$tprog = $conn->query("SELECT * FROM cellule where id_cellule = {$row['id_cellule']}")->num_rows;
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>

						<td><b><?php echo $row['sujet'] ?></b></td>
						<td><b><?php echo $row['lastname'] ,' ', $row['firstname'] ?></b></td>
						<td><b><?php echo $row['groupe'] ?></b></td>
						<td><b><?php echo $row['date_debut'] ?></b></td>
						<td><b><?php echo $row['date_fin'] ?></b></td>
						<td><b><?php echo $row['description'] ?></b></td>
						<?php if($_SESSION['login_type'] == 5 || $_SESSION['login_type'] == 1): ?>
						<td>
	<button type="button" class="btn btn-dark  btn-block" ><a href ="index.php?page=editmodule&module_id=<?php echo $row['module_id'] ?>" class="text-light">Modifier </a></button>
						<button type="button" class="btn btn-danger  btn-block delete_sujet " href="javascript:void(0)" data-id_sujet="<?php echo $row['id_sujet'] ?>" >Supprimer </button>
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
	
		$('.delete_sujet').click(function(){
	_conf("Etes vous sur de vouloir supprimer ce sujet?","delete_sujet",[$(this).attr('data-id_sujet')])
	})
	})
	function delete_sujet($id_sujet){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_sujet',
			method:'POST',
			data:{id_sujet:$id_sujet},
			success:function(resp){
				if(resp==1){
					alert_toast("Sujet supprimé avec succés",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>

<script>
	function ajoutersujet() {
		var idcelluleAdd=1;
		var sujetAdd=$('#sujet').val();
		var groupeAdd=$('#groupe').val();
		var encadrantAdd=$('#encadrant').val();
		var datedebutAdd=$('#date_debut').val();
		var datefinAdd=$('#date_fin').val();
		var descriptionAdd=$('#description').val();
		
		$.ajax({
			url:"insert.php",
			type: 'post',
			data:{
				idcelluleSend:idcelluleAdd,
				sujetSend:sujetAdd,
				groupeSend:groupeAdd,
				encadrantSend:encadrantAdd,
				datedebutSend:datedebutAdd,
				datefinSend:datefinAdd,
				descriptionSend:descriptionAdd,
			},	
			success:function(data, status){
			// function to display data;
				console.log(status);
										}
		});

		window.location.reload();
	}

</script>

