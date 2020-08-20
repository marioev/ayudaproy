<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Video</h3>
            </div>
			<?php echo form_open('video/edit/'.$video['video_id']); ?>
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
									$selected = ($grupo['grupo_id'] == $video['grupo_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$grupo['grupo_id'].'" '.$selected.'>'.$grupo['grupo_nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_titulo" class="control-label">Titulo</label>
						<div class="form-group">
							<input type="text" name="video_titulo" value="<?php echo ($this->input->post('video_titulo') ? $this->input->post('video_titulo') : $video['video_titulo']); ?>" class="form-control" id="video_titulo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="date" name="video_fecha" value="<?php echo ($this->input->post('video_fecha') ? $this->input->post('video_fecha') : $video['video_fecha']); ?>" class="form-control" id="video_fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="video_hora" class="control-label">Hora</label>
						<div class="form-group">
							<input type="time" name="video_hora" value="<?php echo ($this->input->post('video_hora') ? $this->input->post('video_hora') : $video['video_hora']); ?>" class="form-control" id="video_hora" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="video_link" class="control-label">Link/URL</label>
						<div class="form-group">
							<textarea name="video_link" class="form-control" id="video_link"><?php echo ($this->input->post('video_link') ? $this->input->post('video_link') : $video['video_link']); ?></textarea>
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