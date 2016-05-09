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
					<h5>¿Como calificas esta pagina web?</h5>
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
						<form id="form" action="<?php echo ENV_WEBROOT_FULL_URL?>preguntas/save" method="post">
							<div>
							<?php foreach ($arr_obj_opciones as $key => $obj_opciones) {?>
							<label for="<?php echo $key;?>">&nbsp;&nbsp;&nbsp;<input type="radio" name="respuesta[]" id="<?php echo $key;?>" value="<?php echo $obj_opciones['Opcione']['id'];?>"/> <?php echo $obj_opciones['Opcione']['nombre'];?></label><br>
							<?php }?>
							</div>
							<br>
							<div>
                                <button class="btn btn-white" type="submit">Cancel</button>
                                <button class="btn btn-primary" type="submit">Enviar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>