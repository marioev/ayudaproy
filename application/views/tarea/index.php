<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tarea Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tarea/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Tarea Id</th>
						<th>Grupo Id</th>
						<th>Tarea Titulo</th>
						<th>Tarea Archivo</th>
						<th>Tarea Fecha</th>
						<th>Tarea Hora</th>
						<th>Tarea Fechaentrega</th>
						<th>Tarea Fechahora</th>
						<th>Tarea Descripcion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tarea as $t){ ?>
                    <tr>
						<td><?php echo $t['tarea_id']; ?></td>
						<td><?php echo $t['grupo_id']; ?></td>
						<td><?php echo $t['tarea_titulo']; ?></td>
						<td><?php echo $t['tarea_archivo']; ?></td>
						<td><?php echo $t['tarea_fecha']; ?></td>
						<td><?php echo $t['tarea_hora']; ?></td>
						<td><?php echo $t['tarea_fechaentrega']; ?></td>
						<td><?php echo $t['tarea_fechahora']; ?></td>
						<td><?php echo $t['tarea_descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('tarea/edit/'.$t['tarea_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tarea/remove/'.$t['tarea_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
