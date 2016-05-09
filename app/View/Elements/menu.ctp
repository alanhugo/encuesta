<?php $controller = $this->request->params['controller'];?>
<?php $action = $this->request->params['action'];?>
<ul class="nav metismenu" id="side-menu">
	<li class="nav-header">
		<div class="dropdown profile-element">
			<span> 
			</span> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <span
				class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Alan Hugo
					</strong>
				</span> <span class="text-muted text-xs block">
						<b class="caret"></b>
				</span>
			</span>
			</a>
			<ul class="dropdown-menu animated fadeInRight m-t-xs">
				<!-- <li><a href="profile.html">Perfil</a>
				</li> -->
				<li class="divider"></li>
				<li><a href="<?php echo ENV_WEBROOT_FULL_URL?>usuarios/logout">Salir</a>
				</li>
			</ul>
		</div>
		<div class="logo-element">IS+</div>
	</li>
	<li class="<?php echo ($controller == 'preguntas' && $action == 'portal')?"active":"";?>"><a href="<?php echo ENV_WEBROOT_FULL_URL?>preguntas/portal"><i class="fa fa-th-large"></i> <span
			class="nav-label">Portal</span>
	</a></li>
	<li class="<?php echo ($controller == 'preguntas' && $action == 'index')?"active":"";?>"><a href="<?php echo ENV_WEBROOT_FULL_URL?>preguntas"><i class="fa fa-files-o"></i> <span
			class="nav-label">Pregunta</span>
	</a></li>
	<li class="<?php echo ($controller == 'preguntas' && $action == 'resultados')?"active":"";?>"><a href="<?php echo ENV_WEBROOT_FULL_URL?>preguntas/resultados"><i class="fa fa-cogs"></i> <span
			class="nav-label">Resultados</span>
	</a></li>
</ul>