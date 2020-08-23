<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">A&ntilde;adir Tarea</h3>
            </div>
            <?php echo form_open_multipart('tarea/add/'.$grupo_id); ?>
          	<div class="box-body">
                    <div class="row clearfix">
                        <div class="col-md-6">
                            <label for="tarea_titulo" class="control-label">T&iacute;tulo<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" name="tarea_titulo" value="<?php echo $this->input->post('tarea_titulo'); ?>" class="form-control" id="tarea_titulo" required onkeyup="var start = this.selectionStart; var end = this.selectionEnd; this.value = this.value.toUpperCase(); this.setSelectionRange(start, end);" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="tarea_archivo" class="control-label">Archivo<span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="file" name="tarea_archivo" value="<?php echo $this->input->post('tarea_archivo'); ?>" class="form-control" id="tarea_archivo" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="tarea_fecha" class="control-label">Fecha</label>
                            <div class="form-group">
                                <input type="date" name="tarea_fecha" value="<?php echo date('Y-m-d')?>" class="form-control" id="tarea_fecha" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="tarea_hora" class="control-label">Hora</label>
                            <div class="form-group">
                                <input type="time" name="tarea_hora" value="<?php echo date('H:i')?>" class="form-control" id="tarea_hora" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="tarea_fechaentrega" class="control-label">Fecha Entrega</label>
                            <div class="form-group">
                                <input type="date" name="tarea_fechaentrega" value="<?php echo date('Y-m-d', time()+(1*60*60)); ?>" class="form-control" id="tarea_fechaentrega" />
                            </div>
                        </div>
                        <!--<div class="col-md-6">
                            <label for="tarea_fechahora" class="control-label">Tarea Fechahora</label>
                            <div class="form-group">
                                <input type="text" name="tarea_fechahora" value="<?php //echo $this->input->post('tarea_fechahora'); ?>" class="has-datetimepicker form-control" id="tarea_fechahora" />
                            </div>
                        </div>-->
                        <div class="col-md-12">
                            <label for="tarea_descripcion" class="control-label">Tarea Descripcion</label>
                            <div class="form-group">
                                <textarea name="tarea_descripcion" class="form-control" id="tarea_descripcion"><?php echo $this->input->post('tarea_descripcion'); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
            	</button>
                <a href="<?php echo site_url('tarea/tgrupo/'.$grupo_id); ?>" class="btn btn-danger">
                    <i class="fa fa-times"></i> Cancelar
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
<?php
$string = "cadena.php";
$resultado = explode(".", $string);
print_r($resultado);
?>