

<!-- Adjuntar Archivos -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	
        <div class="modal-content">
            <div class="modal-header">
               
                <center><h4 class="modal-title" id="myModalLabel">Adjuntar Archivos</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
                <div class="card-body">
				

				
		<form method="POST" autocomplete="off" enctype="multipart/form-data">
					<div class="row">													
											

						<div class="col-md-6">
									<div class="form-group form-group-default">
										<label>Especialidad</label>
										<select class="form-control" id="continentes" required name="codespe">
										</select>
									</div>
								</div>


						<div class="col-md-6">
							<div class="form-group form-group-default">
								<label>Medicos</label>
								<select class="form-control" id="doctor"  name="coddoc">				
								</select>
							</div>
						</div>


								
						
						<div class="col-md-12">
							<div class="form-group">
								<label class="bmd-label-floating">Descripción</label>
								<input type="text" name="descripcion" class="form-control" placeholder="Ingresa una descripción">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="bmd-label-floating">Examinar</label>
								<input type="file" name="url" accept="application/pdf">
								<!--<input type="submit">-->
							</div>
						</div>




					</div>			
            </div>

        </div>
		 <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar
				
				
				</button>
                <button type="submit" name="agregar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar Registro</button>
			</form>
			
                </div>
			
            </div>

        </div>
		
    </div>
</div>
</div>
<!-- -->