<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Encuesta</title>

    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/animate.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/codemirror/ambiance.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/style.css" rel="stylesheet">

</head>

<body class="pace-done mini-navbar">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <!-- Elemento Menu -->
			<?php echo $this->Element('menu'); ?>
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Buscar..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenido <strong>ALAN</strong>.</span>|
                </li>
                
                <li>
                    <a href="<?php echo ENV_WEBROOT_FULL_URL?>usuarios/logout">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        
        <!-- Contenido -->   
        <?php echo $this->fetch('content'); ?>
        
        <div class="footer">
            <div class="pull-right">
                Calidad Integral.
            </div>
            <div>
                <strong>Copyright</strong> Alan Hugo &copy; 2015
            </div>
        </div>

        </div>
        </div>
    
    
    <!-- Mainly scripts -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/bootstrap.min.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- CodeMirror -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/codemirror/mode/javascript/javascript.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/inspinia.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/pace/pace.min.js"></script>

    <script>var env_webroot_script = '<?php echo ENV_WEBROOT_FULL_URL; ?>';</script>
    <script>var env_webroot_script_popup = '<?php echo str_replace("http:","",ENV_WEBROOT_FULL_URL);?>';</script>

    <script>
         $(document).ready(function(){
             var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                 lineNumbers: true,
                 matchBrackets: true,
                 styleActiveLine: true
             });
        });
    </script>

	<style>
	    body.DTTT_Print {
	        background: #fff;
	
	    }
	    .DTTT_Print #page-wrapper {
	        margin: 0;
	        background:#fff;
	    }
	
	    button.DTTT_button, div.DTTT_button, a.DTTT_button {
	        border: 1px solid #e7eaec;
	        background: #fff;
	        color: #676a6c;
	        box-shadow: none;
	        padding: 6px 8px;
	    }
	    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
	        border: 1px solid #d2d2d2;
	        background: #fff;
	        color: #676a6c;
	        box-shadow: none;
	        padding: 6px 8px;
	    }
	
	    .dataTables_filter label {
	        margin-right: 5px;
	
	    }
	</style>
</body>
</html>