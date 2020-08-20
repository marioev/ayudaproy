<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tarea Estudiante Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tarea_estudiante/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tareaes Id</th>
						<th>Tarea Id</th>
						<th>Tareaes Titulo</th>
						<th>Tareaes Archivo</th>
						<th>Tareaes Fechahora</th>
						<th>Tareaes Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tarea_estudiante as $t){ ?>
                    <tr>
						<td><?php echo $t['tareaes_id']; ?></td>
						<td><?php echo $t['tarea_id']; ?></td>
						<td><?php echo $t['tareaes_titulo']; ?></td>
						<td><?php echo $t['tareaes_archivo']; ?></td>
						<td><?php echo $t['tareaes_fechahora']; ?></td>
						<td><?php echo $t['tareaes_descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('tarea_estudiante/edit/'.$t['tareaes_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tarea_estudiante/remove/'.$t['tareaes_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
