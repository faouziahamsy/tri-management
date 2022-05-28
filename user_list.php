<?php include'db_connect.php' ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ENSEIGNANTS</h1>
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
				<a class="btn btn-block btn-sm btn-danger btn-flat border-black" href="./index.php?page=new_user&id_fonction=4&id_f_c=45"><i class="fa fa-plus"></i> Ajouter un enseignant</a>
			</div>
			<?php endif; ?>

		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead class = "thead-dark">
					<tr>
						<th class="text-center">#</th>
						<th>Nom complet</th>
						<th>Email</th>
						<th>Filiere</th>
						<?php if($_SESSION['login_type'] ==1 ||$_SESSION['login_type'] ==4): ?>
						<th>Action</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$type = array('','','','',"ISIC","2ITE");
					$qry = $conn->query("SELECT *,concat(firstname,' ',lastname) as name FROM users WHERE users.id_fonction=4 order by concat(firstname,' ',lastname) asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo $type[$row['id_f_c']] ?></b></td>
						<?php if($_SESSION['login_type'] ==1 ||$_SESSION['login_type'] ==4): ?>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" >
		                      <a class="dropdown-item view_user" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Voir</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item" href="./index.php?page=edit_user&id=<?php echo $row['id'] ?>">Modifier</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_user" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Supprimer</a>
		                    </div>
						</td>
						<?php endif; ?>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.view_user').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Détails du membre","view_user.php?id="+$(this).attr('data-id'))
	})
	$('.delete_user').click(function(){
	_conf("Etes vous sur de vouloir supprimer cet enseignant","delete_user",[$(this).attr('data-id')])
	})
	})
	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Enseignant supprimé avec succés",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>