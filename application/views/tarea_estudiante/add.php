<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tarea Estudiante Add</h3>
            </div>
            <?php echo form_open('tarea_estudiante/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="tarea_id" class="control-label">Tarea Id</label>
						<div class="form-group">
							<input type="text" name="tarea_id" value="<?php echo $this->input->post('tarea_id'); ?>" class="form-control" id="tarea_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tareaes_titulo" class="control-label">Tareaes Titulo</label>
						<div class="form-group">
							<input type="text" name="tareaes_titulo" value="<?php echo $this->input->post('tareaes_titulo'); ?>" class="form-control" id="tareaes_titulo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tareaes_archivo" class="control-label">Tareaes Archivo</label>
						<div class="form-group">
							<input type="text" name="tareaes_archivo" value="<?php echo $this->input->post('tareaes_archivo'); ?>" class="form-control" id="tareaes_archivo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tareaes_fechahora" class="control-label">Tareaes Fechahora</label>
						<div class="form-group">
							<input type="text" name="tareaes_fechahora" value="<?php echo $this->input->post('tareaes_fechahora'); ?>" class="has-datetimepicker form-control" id="tareaes_fechahora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tareaes_descripcion" class="control-label">Tareaes Descripcion</label>
						<div class="form-group">
							<textarea name="tareaes_descripcion" class="form-control" id="tareaes_descripcion"><?php echo $this->input->post('tareaes_descripcion'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>