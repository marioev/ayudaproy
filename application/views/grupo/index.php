<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cursos</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('grupo/add'); ?>" class="btn btn-success btn-sm">Nuevo</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nº</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th></th>
                    </tr>
                    <?php foreach($grupo as $g){ ?>
                    <tr>
						<td><?php echo $g['grupo_id']; ?></td>
						<td><?php echo $g['grupo_nombre']; ?></td>
						<td><?php echo $g['grupo_descripcion']; ?></td>
						<td>
                            <a href="<?php echo site_url('grupo/edit/'.$g['grupo_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('estudiante/grupo/'.$g['grupo_id']); ?>" class="btn btn-facebook btn-xs"><span class="fa fa-users"></span> Estudiantes</a> 
                            <a href="<?php echo site_url('tarea/grupo/'.$g['grupo_id']); ?>" class="btn btn-success btn-xs"><span class="fa fa-book"></span> Trabajos/Material</a> 
                            <a href="<?php echo site_url('video/grupo/'.$g['grupo_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-television"></span> Videos</a> 
                          
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
