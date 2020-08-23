<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de Tareas del grupo <b><?php echo $grupo["grupo_nombre"]; ?></b></h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tarea/add/'.$grupo["grupo_id"]); ?>" class="btn btn-success btn-sm">Nueva</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>N°</th>
                        <th>T&iacute;tulo</th>
                        <th>Archivo</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Fecha Entrega</th>
                        <th>Creado</th>
                        <th>Descripci&oacute;n</th>
                        <th></th>
                    </tr>
                    <?php $i = 1; foreach($all_tarea as $t){ ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $t['tarea_titulo']; ?></td>
                        <td>
                            <a href="<?php echo site_url('/resources/imagenes/tarearchivo/'.$t['tarea_archivo']) ?>" target="_blank"><?php echo $t['tarea_archivo']; ?></a>
                        </td>
                        <td><?php echo date("d/m/Y", strtotime($t['tarea_fecha'])); ?></td>
                        <td><?php echo $t['tarea_hora']; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($t['tarea_fechaentrega'])); ?></td>
                        <td><?php echo date("d/m/Y H:i:s", strtotime($t['tarea_fechahora'])); ?></td>
                        <td><?php echo $t['tarea_descripcion']; ?></td>
                        <td>
                            <a href="<?php echo site_url('tarea/edit/'.$t['tarea_id'].'/'.$grupo["grupo_id"]); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('tarea/remove/'.$t['tarea_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<a href="<?php echo site_url('grupo'); ?>" class="btn btn-danger">
    <i class="fa fa-times"></i> Cancelar
</a>