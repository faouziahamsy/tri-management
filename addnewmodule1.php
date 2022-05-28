<?php if (!isset($conn)) {
	include 'db_connect.php';
} ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		  	<h1 class="m-0"><?php echo isset($_GET['semestr'])  ?  "S".$_GET['semestr']." - AJOUTER UN MODULE" : "Modification du Module ".$code_module ?>   </h1>
          </div>
        </div>
            <hr class="border-danger">
    </div>
</div>
<!-- /.content-header -->

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form  id="manage-project">

			  <input type="hidden" name="module_id" value="<?php echo isset($module_id) ? $module_id : 0 ?>">
			  <div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Code du module  <span class="text-danger">*</span></label>
							<input required type="text" class="form-control form-control-sm" name="code_module" value="<?php echo isset($code_module) ? $code_module : '' ?>">
						</div>
			  		</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Intitulé du module <span class="text-danger">*</span></label>
							<input required type="text" class="form-control form-control-sm" name="intitule" value="<?php echo isset($intitule) ? $intitule : '' ?>">
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Semestre <span class="text-danger">*</span></label>
							<input READONLY type="text" class="form-control form-control-sm" name="id_semestre" id="id_semestre" value="<?php echo isset($id_semestre) ? $id_semestre : $_GET['semestr'] ?>">   
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Note <span class="text-danger">*</span></label>
							<input required type="text" class="form-control form-control-sm" name="note" value="<?php echo isset($note) ? $note : '' ?>">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Element1 <span class="text-danger">*</span></label>
							<input required type="text" class="form-control form-control-sm" name="element1" value="<?php echo isset($element1) ? $element1 : '' ?>">
						</div>
					</div>
					<?php if ($_SESSION['login_type'] == 1 ||$_SESSION['login_type'] == 4) : ?>
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Intervenant element 1<span class="text-danger">*</span></label>
								<select required class="form-control form-control-sm select2" name="inter1">
								<option value="">--- Choisir un intervenant ---</option>
									<?php
									$managers = $conn->query("SELECT *,concat(firstname,' ',lastname) as inter1 FROM users  order by concat(firstname,' ',lastname) asc ");
									while ($row = $managers->fetch_assoc()) :
									?>
										<option value="<?php echo $row['inter1'] ?>" <?php echo isset($inter1) && $inter1 == $row['inter1'] ? "selected" : '' ?>><?php echo ucwords($row['inter1']) ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
					<?php else : ?>
						<input type="hidden" name="Responsable_id" value="<?php echo $_SESSION['login_id'] ?>">
					<?php endif; ?>
					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Element2<span class="text-danger"></span></label>
							<input type="text" class="form-control form-control-sm" name="element2" value="<?php echo isset($element2) ? $element2 : '' ?>">
						</div>
					</div>
					<?php if ($_SESSION['login_type'] == 1 ||$_SESSION['login_type'] == 4) : ?>
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Intervenant element 2</label>
								<select class="form-control form-control-sm select2" name="inter2">
								<option value="">--- Choisir un intervenant ---</option>
									<?php
									$managers = $conn->query("SELECT *,concat(firstname,' ',lastname) as inter2 FROM users  order by concat(firstname,' ',lastname) asc ");
									while ($row = $managers->fetch_assoc()) :
									?>
										<option value="<?php echo $row['inter2'] ?>" <?php echo isset($inter2) && $inter1 == $row['inter2'] ? "selected" : '' ?>><?php echo ucwords($row['inter2']) ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
					<?php else : ?>
						<input type="hidden" name="Responsable_id" value="<?php echo $_SESSION['login_id'] ?>">
					<?php endif; ?>
					<div class="col-md-12">
						<div class="form-group">
							<label for="" class="control-label">Element3 <span class="text-danger"></span></label>
							<input type="text" class="form-control form-control-sm" name="element3" value="<?php echo isset($element3) ? $element3 : '' ?>">
						</div>
					</div>
					<?php if ($_SESSION['login_type'] == 1 ||$_SESSION['login_type'] == 4) : ?>
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Intervenant element 3</label>
								<select class="form-control form-control-sm select2" name="inter3">
								<option value="">--- Choisir un intervenant ---</option>
									<?php
									$managers = $conn->query("SELECT *,concat(firstname,' ',lastname) as inter3 FROM users order by concat(firstname,' ',lastname) asc ");
									while ($row = $managers->fetch_assoc()) :
									?>
										<option value="<?php echo $row['inter3'] ?>" <?php echo isset($inter3) && $inter1 == $row['inter3'] ? "selected" : '' ?>><?php echo ucwords($row['inter3']) ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
					<?php else : ?>
						<input type="hidden" name="Responsable_id" value="<?php echo $_SESSION['login_id'] ?>">
					<?php endif; ?>

					<?php if ($_SESSION['login_type'] == 1 ||$_SESSION['login_type'] == 4) : ?>
						<div class="col-md-12">
							<div class="form-group">
								<label for="" class="control-label">Responsable du module<span class="text-danger">*</span></label>
								<select required class="form-control form-control-sm select2" name="responsable">
								<option value="">--- Choisir un type ---</option>
									<?php
									$managers = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users order by concat(firstname,' ',lastname) asc ");
									while ($row = $managers->fetch_assoc()) :
									?>
										<option value="<?php echo $row['id'] ?>" <?php echo isset($responsable) && $responsable == $row['id'] ? "selected" : '' //responsable c'est l'id'responsable ?>><?php echo ucwords($row['name']) ?></option>
									<?php endwhile; ?>
								</select>
							</div>
						</div>
					<?php else : ?>
						<input type="hidden" name="Responsable_id" value="<?php echo $_SESSION['login_id'] ?>">
					<?php endif; ?>
				</div>	

			</form>
		          </div>
		<div class="card-footer border-top border-info">
			<div class="d-flex w-100 justify-content-center align-items-center">
				<button class="btn btn-flat  bg-gradient-danger mx-2" form="manage-project">Enregistrer</button>
				<button class="btn btn-flat bg-gradient-dark mx-2" type="button" onclick="goPrev()">Fermer</button>
			</div>
		</div>
	</div>
</div>

<script>
	$('#manage-project').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_module1',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1 || resp ==2 ){
					if(resp == 1)
						alert_toast('Module ajouté avec succès',"success");
					if(resp == 2)
						alert_toast('Module mis à jour avec succès',"success");
					setTimeout(function(){
					
						var smstr = $( "#id_semestre" ).val();
						
						if  (smstr == '1')  {location.href = 'index.php?page=S1'}
						if  (smstr == '2')  {location.href = 'index.php?page=S2'}
						if  (smstr == '3')  {location.href = 'index.php?page=S3'}
						if  (smstr == '4')  {location.href = 'index.php?page=S4'}
						if  (smstr == '5')  {location.href = 'index.php?page=S5'}
					},2000)
				}
			}
		}) 
	})

  function goPrev(){
    window.history.back();
  }

</script>