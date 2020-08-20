<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Estudiantes de Curso <?php echo $grupo['grupo_nombre']?></h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('estudiante/add/'.$grupo_id); ?>" class="btn btn-success btn-sm">Nuevo</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nº</th>
						<th>Curso</th>
						<th>Nombre</th>
						<th>C.I.</th>
						<th>Email</th>
						<th>Telefono</th>
						<th></th>
                    </tr>
                    <?php foreach($estudiante as $e){ ?>
                    <tr>
						<td><?php echo $e['estudiante_id']; ?></td>
						<td><?php echo $e['grupo_nombre']; ?></td>
						<td><?php echo $e['estudiante_nombre']; ?></td>
						<td><?php echo $e['estudiante_ci']; ?></td>
						<td><?php echo $e['estudiante_email']; ?></td>
						<td><?php echo $e['estudiante_telefono']; ?></td>
						<td>
                            <a href="<?php echo site_url('estudiante/edit/'.$e['estudiante_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('estudiante/remove/'.$e['estudiante_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
