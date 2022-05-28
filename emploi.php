<?php include 'db_connect.php';
$stmt = $conn->query("SELECT e.*,concat(r.firstname,' ',r.lastname) as name ,intitule
					 FROM emplois1 e  JOIN users r 
					 ON(e.responsable=r.id)
					 JOIN module m 
					 ON (m.module_id=e.module)
					 ");
$seances = $stmt->fetch_all(MYSQLI_ASSOC);
?>
<html>
	<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">S1 - EMPLOI DU TEMPS</h1>
          </div>
        </div>
            <hr class="border-danger">
    </div>
</div>
<!-- /.content-header -->

<head>
	<title>Emploi du temps</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		.auto-style1 {
			border: 2px solid #000000;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 10pt;
			border-collapse: collapse;
		}

		.auto-style8 {
			border: 2px solid #000000;
			background-color: #dc3545;
			text-align: center;
		}

		.cellule {
			border: 2px solid #000000;
			text-align: center;
			height: 70px;
			width: 240px;
		}
	</style>
</head>

<body onload="CreateTable(fetchdata)">
	<table class="auto-style1" style="width: 982px">
		<thead>
			<tr id="thead">
				<th class="auto-style8 heure"><strong></strong></th>
				<th class="auto-style8 heure"><strong>08h30 - 10h20</strong></th>
				<th class="auto-style8 heure"><strong>10h30 - 12h20</strong></th>
				<th class="auto-style8 heure"><strong>13h30 - 15h20</strong></th>
				<th class="auto-style8 heure"><strong>15h30 - 17h20</strong></th>
			</tr>
		</thead>
		<tbody id="emploi">

		</tbody>
	</table>

	<form class="modal fade" id="formJour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Ajouter une séance</h5>
				</div>
				<form action="ajax.php" method="POST">
					<div class="modal-body">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Heure Début <span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="heuredebut" value="" readonly>
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Heure Fin <span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="heurefin" value="" readonly>
						</div>

						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Jour <span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="jour" value=" " readonly>
						</div>
						<div class="mb-3">
								<div class="mb-3" id="class_time_table_dv_form">
									<div class="mb-3">
										<label for="" class="mb-3">Responsable<span class="text-danger">*</span></label>
										<div class="mb-3">
											<select style="width: 100%;" id="responsable" name="responsable" class="form-control">
											<option >--- Choisir un responsable ---</option>
												<?php
												$managers = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users order by concat(firstname,' ',lastname) asc ");
												while ($row = $managers->fetch_assoc()) :
												?>
													<option  value="<?php echo $row['id'] ?>" <?php echo isset($Responsable_id) && $Responsable_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['name']) ?></option>
												<?php endwhile; ?>
											</select>
										</div>
									</div>
								</div>
							
							
							<div class="mb-3">
								
									<div class="mb-3" id="class_time_table_dv_form">
										<div class="mb-3">
											<label for="" class="mb-3">Module<span class="text-danger">*</span></label>
											<div class="mb-3">
												<select style="width: 100%;" id="module" name="module" class="form-control">
												<option >--- Choisir un module ---</option>
													<?php
													$managers = $conn->query("SELECT intitule ,module_id FROM module,semestre  WHERE  semestre.id_semestre=module.id_semestre AND code_semestre='S1' ");
													while ($row = $managers->fetch_assoc()) :
													?>
														<option value="<?php echo $row['module_id'] ?>" <?php echo isset($module_id) && $module_id == $row['id'] ? "selected" : '' ?>><?php echo ucwords($row['intitule']) ?></option>
													<?php endwhile; ?>
												</select>
											</div>
										</div>
									</div>
			
				</form>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Salle <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="salle" >
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Semaine de début <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="s_d" value=" " >
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Semaine de fin <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="s_fin" value=" " >
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-dark" onclick="ajoutercreneau()">Enregistrer</button>
			<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
		</div>
		</div>
		</div>
	</form>
	<script src='./assets/dist/js/functions.js'></script>
	<script>
		function fetchdata(table) {
			const lines = table.querySelectorAll("td")
			var seances = <?php echo json_encode($seances); ?>;

			//	console.log(seance)

			for (let i = 0; i < lines.length; i++) {
				let td=lines[i]
				seances.forEach(seance => {
					if (td.dataset.jour == seance.jour && td.dataset.heuredebut==seance.heuredebut && td.dataset.heurefin==seance.heurefin) {
						td.setAttribute("data-module",seance.module);
						td.setAttribute("data-prf",seance.responsable);
						td.setAttribute("data-salle",seance.salle);
						td.innerHTML="<p><b>"+seance.intitule+"</b>("+seance.name+")"
						+"</br>semaine:"+seance.s_d+"-"+seance.s_fin+"</br>salle:"+seance.salle+"  </p>"
					}

				})
			}


		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script>
	
			function ajoutercreneau() {
			var heuredebut = $('#heuredebut').val();
			var heurefin = $('#heurefin').val();
			var jour = $('#jour').val();
			var responsable = $('#responsable').val();
			var module = $('#module').val();
			var salle = $('#salle').val();
			var s_d = $('#s_d').val();
			var s_fin = $('#s_fin').val();

			$.ajax({
				url: 'ajax.php?action=add_seance',
				method: 'POST',
				data: {
					heuredebut: heuredebut,
					heurefin: heurefin,
					jour: jour,
					responsable: responsable,
					module: module,
					salle: salle,
					s_d:s_d,
					s_fin:s_fin
				},
				cache: false,
				success: function(data) {
					alert(data);
				},
				error: function(xhr, status, error) {
					console.error(xhr);
				}

			})
			window.location.reload();
		};
	</script>

</body>



</html>