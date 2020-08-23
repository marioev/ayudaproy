<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Tarea</h3>
            </div>
            <?php echo form_open_multipart('tarea/edit/'.$tarea['tarea_id'].'/'.$tarea['grupo_id']); ?>
                <div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="tarea_titulo" class="control-label">T&iacute;tulo<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="tarea_titulo" value="<?php echo ($this->input->post('tarea_titulo') ? $this->input->post('tarea_titulo') : $tarea['tarea_titulo']); ?>" class="form-control" id="tarea_titulo" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tarea_archivo" class="control-label">Archivo<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="file" name="tarea_archivo" value="<?php echo $this->input->post('tarea_archivo'); ?>" class="form-control" id="tarea_archivo" />
                                <input type="hidden" name="tarea_archivo1" value="<?php echo ($this->input->post('tarea_archivo') ? $this->input->post('tarea_archivo') : $tarea['tarea_archivo']); ?>" class="form-control" id="tarea_archivo1" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="grupo_id" class="control-label">Grupo</label>
                            <div class="form-group">
                                <select name="grupo_id" class="form-control">
                                    <?php 
                                    foreach($all_grupo as $grupo)
                                    {
                                        $selected = ($grupo['grupo_id'] == $tarea['grupo_id']) ? ' selected="selected"' : "";
                                        echo '<option value="'.$grupo['grupo_id'].'" '.$selected.'>'.$grupo['grupo_nombre'].'</option>';
                                    } 
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="tarea_fecha" class="control-label">Fecha</label>
                            <div class="form-group">
                                <input type="date" name="tarea_fecha" value="<?php echo ($this->input->post('tarea_fecha') ? $this->input->post('tarea_fecha') : $tarea['tarea_fecha']); ?>" class="form-control" id="tarea_fecha" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="tarea_hora" class="control-label">Hora</label>
                            <div class="form-group">
                                <input type="text" name="tarea_hora" value="<?php echo ($this->input->post('tarea_hora') ? $this->input->post('tarea_hora') : $tarea['tarea_hora']); ?>" class="form-control" id="tarea_hora" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="tarea_fechaentrega" class="control-label">Fecha Entrega</label>
                            <div class="form-group">
                                <input type="date" name="tarea_fechaentrega" value="<?php echo ($this->input->post('tarea_fechaentrega') ? $this->input->post('tarea_fechaentrega') : $tarea['tarea_fechaentrega']); ?>" class="form-control" id="tarea_fechaentrega" />
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <label for="tarea_fechahora" class="control-label">Fecha-Hora Creaci&oacute;n</label>
                            <div class="form-group">
                                <input type="text" name="tarea_fechahora" value="<?php //echo ($this->input->post('tarea_fechahora') ? $this->input->post('tarea_fechahora') : date("d/m/Y H:i:s", strtotime($tarea['tarea_fechahora']))); ?>" class="form-control" id="tarea_fechahora" />
                            </div>
                        </div>-->
                        <div class="col-md-12">
                            <label for="tarea_descripcion" class="control-label">Descripci&oacute;n</label>
                            <div class="form-group">
                                <textarea name="tarea_descripcion" class="form-control" id="tarea_descripcion"><?php echo ($this->input->post('tarea_descripcion') ? $this->input->post('tarea_descripcion') : $tarea['tarea_descripcion']); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Guardar
                    </button>
                    <a href="<?php echo site_url('tarea/tgrupo/'.$tarea['grupo_id']); ?>" class="btn btn-danger">
                        <i class="fa fa-times"></i> Cancelar
                    </a>
                </div>
                    <?php echo form_close(); ?>
        </div>
    </div>
</div>