<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Video Nuevo del Curso <?php echo $grupo['grupo_nombre']?></h3>
            </div>
            <?php echo form_open('video/add/'.$grupo_id); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="video_titulo" class="control-label">Titulo</label>
						<div class="form-group">
							<input type="text" name="video_titulo" value="<?php echo $this->input->post('video_titulo'); ?>" class="form-control" id="video_titulo" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="video_fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="date" name="video_fecha" value="<?php echo $this->input->post('video_fecha'); ?>" class="form-control" id="video_fecha" />
						</div>
					</div>
					<div class="col-md-3">
						<label for="video_hora" class="control-label">Hora</label>
						<div class="form-group">
							<input type="time" name="video_hora" value="<?php echo $this->input->post('video_hora'); ?>" class="form-control" id="video_hora" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="video_link" class="control-label">Link / URL</label>
						<div class="form-group">
							<textarea name="video_link" class="form-control" id="video_link"><?php echo $this->input->post('video_link'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Guardar
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>