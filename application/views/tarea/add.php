<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tarea Add</h3>
            </div>
            <?php echo form_open('tarea/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="grupo_id" class="control-label">Grupo</label>
						<div class="form-group">
							<select name="grupo_id" class="form-control">
								<option value="">select grupo</option>
								<?php 
								foreach($all_grupo as $grupo)
								{
									$selected = ($grupo['grupo_id'] == $this->input->post('grupo_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$grupo['grupo_id'].'" '.$selected.'>'.$grupo['grupo_nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_titulo" class="control-label">Tarea Titulo</label>
						<div class="form-group">
							<input type="text" name="tarea_titulo" value="<?php echo $this->input->post('tarea_titulo'); ?>" class="form-control" id="tarea_titulo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_archivo" class="control-label">Tarea Archivo</label>
						<div class="form-group">
							<input type="text" name="tarea_archivo" value="<?php echo $this->input->post('tarea_archivo'); ?>" class="form-control" id="tarea_archivo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_fecha" class="control-label">Tarea Fecha</label>
						<div class="form-group">
							<input type="text" name="tarea_fecha" value="<?php echo $this->input->post('tarea_fecha'); ?>" class="has-datepicker form-control" id="tarea_fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_hora" class="control-label">Tarea Hora</label>
						<div class="form-group">
							<input type="text" name="tarea_hora" value="<?php echo $this->input->post('tarea_hora'); ?>" class="form-control" id="tarea_hora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_fechaentrega" class="control-label">Tarea Fechaentrega</label>
						<div class="form-group">
							<input type="text" name="tarea_fechaentrega" value="<?php echo $this->input->post('tarea_fechaentrega'); ?>" class="form-control" id="tarea_fechaentrega" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_fechahora" class="control-label">Tarea Fechahora</label>
						<div class="form-group">
							<input type="text" name="tarea_fechahora" value="<?php echo $this->input->post('tarea_fechahora'); ?>" class="has-datetimepicker form-control" id="tarea_fechahora" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tarea_descripcion" class="control-label">Tarea Descripcion</label>
						<div class="form-group">
							<textarea name="tarea_descripcion" class="form-control" id="tarea_descripcion"><?php echo $this->input->post('tarea_descripcion'); ?></textarea>
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