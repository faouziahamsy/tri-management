<?php 
if (!isset($conn)) { include 'db_connect.php';} 
//Recupère l'id fonction
$idf= $_GET['id_fonction'];
//Recupère le type fonction
$result = $conn->query("SELECT type_fonction FROM fonction WHERE id_fonction=$idf");
$tf=$result->fetch_assoc();

//pour tester la visibilité des champs Filiere cellule 
$idfc= $_GET['id_f_c'];
?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <?php echo "AJOUTER UN ".strtoupper($tf['type_fonction']); ?></h1>
          </div>
        </div>
            <hr class="border-danger">
    </div>
</div>
<!-- /.content-header -->

<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_user">
				<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">Prénom</label>
							<input type="text" name="firstname" class="form-control form-control-sm" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Nom</label>
							<input type="text" name="lastname" class="form-control form-control-sm" required value="<?php echo isset($lastname) ? $lastname : '' ?>">
						</div>
						<?php //if($_SESSION['login_type'] == 1): ?>
						<div class="form-group">
							<label for="" class="control-label">Fonction</label>
							<input Disabled type="text" class="form-control form-control-sm" name="type_fonction" id="type_fonction" value="<?php echo ($tf['type_fonction'])  ?>" >
							<input type="hidden" name="id_fonction" id="id_fonction" value="<?php echo ($idf)?>" >
						</div>
						


						<?php if($idfc ==123 ){ ?>
							<div class="form-group">
								<label for="">Cellule</label>
								<select name="id_f_c" id="cellule" class="custom-select custom-select-sm">
									<option value="1" <?php echo isset($cellule) && $cellule == 1 ? 'selected' : '' ?>>PFA</option>
									<option value="2" <?php echo isset($cellule) && $cellule == 2 ? 'selected' : '' ?>>PFE</option>
									<option value="3" <?php echo isset($cellule) && $cellule == 3 ? 'selected' : '' ?>>Stage</option>
								</select>
							</div>
						<?php } ?>

						<?php if($idfc ==45 ){ ?>
							<div class="form-group">
								<label for="">Filière</label>
								<select name="id_f_c" id="filiere" class="custom-select custom-select-sm">
									<option value="4" <?php echo isset($cellule) && $cellule == 4 ? 'selected' : '' ?>>ISIC</option>
									<option value="5" <?php echo isset($cellule) && $cellule == 5 ? 'selected' : '' ?>>2ITE</option>
								</select>
							</div>
						<?php } ?>




					

						<div class="form-group">
							<label for="" class="control-label">Avatar</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="img" required onchange="displayImg(this,$(this))">
		                      <label class="custom-file-label" for="customFile">Choisir un fichier</label>
		                    </div>
						</div>
						<div class="form-group d-flex justify-content-center align-items-center">
							<img src="<?php echo isset($avatar) ? 'assets/uploads/'.$avatar :'' ?>" alt="Avatar" id="cimg" class="img-fluid img-thumbnail ">
						</div>
					</div>
					<div class="col-md-6">
						
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control form-control-sm" name="email" required value="<?php echo isset($email) ? $email : '' ?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Mot de passe</label>
							<input type="password" class="form-control form-control-sm" name="password" <?php echo !isset($id) ? "required":'' ?>>
							<small><i><?php echo isset($id) ? "Leave this blank if you dont want to change you password":'' ?></i></small>
						</div>
						<div class="form-group">
							<label class="label control-label">Confirmer le mot de passe</label>
							<input type="password" class="form-control form-control-sm" name="cpass" <?php echo !isset($id) ? 'required' : '' ?>>
							<small id="pass_match" data-status=''></small>
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-dark mr-2" form="manage_user">Enregistrer</button>
					<button class="btn btn-danger" type="button" onclick="goPrev()">Fermer</button>
				</div>
			</form>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	$('[name="password"],[name="cpass"]').keyup(function(){
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if(cpass == '' ||pass == ''){
			$('#pass_match').attr('data-status','')
		}else{
			if(cpass == pass){
				$('#pass_match').attr('data-status','1').html('<i class="text-success">Le mot de passe est correct.</i>')
			}else{
				$('#pass_match').attr('data-status','2').html('<i class="text-danger">Incorrect, réessayer.</i>')
			}
		}
	})
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage_user').submit(function(e){
		e.preventDefault()
		start_load()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		if($('[name="password"]').val() != '' && $('[name="cpass"]').val() != ''){
			if($('#pass_match').attr('data-status') != 1){
				if($("[name='password']").val() !=''){
					$('[name="password"],[name="cpass"]').addClass("border-danger")
					end_load()
					return false;
				}
			}
		}
		$.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Membre ajouté avec succès',"success");

					setTimeout(function(){

						//location.href = 'index.php?page=college_list'
						var fonct = <?php echo json_encode($idf); ?>;
						
						if (fonct == 1)  {location.href = 'index.php?page=cellule_list'}
						if (fonct == 2)  {location.href = 'index.php?page=filiere_list'}
						if (fonct == 3)  {location.href = 'index.php?page=college_list'}
						if (fonct == 4)  {location.href = 'index.php?page=user_list'}
					},2000)
				}
			}
		})
	})

	function goPrev(){
    	window.history.back();
	}

</script>
