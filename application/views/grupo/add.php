<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Nuevo Curso</h3>
            </div>
            <?php echo form_open('grupo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="grupo_nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="grupo_nombre" value="<?php echo $this->input->post('grupo_nombre'); ?>" class="form-control" id="grupo_nombre" required/>
						</div>
					</div>
					<div class="col-md-6">
						<label for="grupo_descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<input type="text" name="grupo_descripcion" value="<?php echo $this->input->post('grupo_descripcion'); ?>" class="form-control" id="grupo_descripcion" />
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