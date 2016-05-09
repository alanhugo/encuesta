<div id="groupcmd">
 <div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Pregunta</h2>
		<ol class="breadcrumb">
			<li><a href="index.html">Inicio</a>
			</li>
			<li class="active"><strong>Pregunta</strong>
			</li>
		</ol>
	</div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
	<div id="add_edit_groupcmd_container">
	</div>
	<p>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Resultados</h5>
					<div class="ibox-tools">
						<a class="collapse-link"> <i class="fa fa-chevron-up"></i>
						</a> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
							class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a>
							</li>
							<li><a href="#">Config option 2</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="ibox-content" id="conteiner_all_rows">
					<div class="table-responsive">
						<form id="form" action="preguntas/save" method="post">
							<div>
							<table class="table table-striped">
                            <thead>
                            <tr>
                            	<th>Respuesta</th>
								<th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($arr_obj_respuestas as $key => $obj_respuestas) {?>
								<tr>
									<td><?php echo $obj_respuestas['Opcione']['nombre'];?></td>
									<td>&nbsp;&nbsp;&nbsp;<?php echo $obj_respuestas[0]['total'];?></td>
								</tr>
								<?php }?>
                            
                            </tbody>
                        </table>
							<br>
							<div>
                                <a class="btn btn-primary" href="index" hrefl>Intentar de nuevo</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>