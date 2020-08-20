<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Estudiante Nuevo del Curso <?php echo $grupo['grupo_nombre']?></h3>
            </div>
            <?php echo form_open('estudiante/add/'.$grupo_id); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="estudiante_nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="estudiante_nombre" value="<?php echo $this->input->post('estudiante_nombre'); ?>" class="form-control" id="estudiante_nombre" required/>
						</div>
					</div>
					<div class="col-md-3">
						<label for="estudiante_ci" class="control-label">C.I.</label>
						<div class="form-group">
							<input type="text" name="estudiante_ci" value="<?php echo $this->input->post('estudiante_ci'); ?>" class="form-control" id="estudiante_ci" required/>
						</div>
					</div>
					<div class="col-md-3">
						<label for="estudiante_email" class="control-label">Email</label>
						<div class="form-group">
							<input type="email" name="estudiante_email" value="<?php echo $this->input->post('estudiante_email'); ?>" class="form-control" id="estudiante_email" required/>
						</div>
					</div>
					<div class="col-md-3">
						<label for="estudiante_telefono" class="control-label">Telefono</label>
						<div class="form-group">
							<input type="text" name="estudiante_telefono" value="<?php echo $this->input->post('estudiante_telefono'); ?>" class="form-control" id="estudiante_telefono" />
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