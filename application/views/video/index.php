<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Videos de Curso <?php echo $grupo['grupo_nombre']?></h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('video/add/'.$grupo_id); ?>" class="btn btn-success btn-sm">Nuevo</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Nº</th>
						<th>Titulo</th>
						<th>Fecha</th>
						<th>Hora</th>
						<th>Link</th>
						<th></th>
                    </tr>
                    <?php foreach($video as $v){ ?>
                    <tr>
						<td><?php echo $v['video_id']; ?></td>
						<td><?php echo $v['video_titulo']; ?></td>
						<td><?php echo $v['video_fecha']; ?></td>
						<td><?php echo $v['video_hora']; ?></td>
						<td><?php echo $v['video_link']; ?></td>
						<td>
                            <a href="<?php echo site_url('video/edit/'.$v['video_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('video/remove/'.$v['video_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
