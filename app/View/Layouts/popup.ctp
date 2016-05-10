<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>InterSMS</title>
    
    <!-- <link rel="icon" type="image/png" href="<?php echo ENV_WEBROOT_FULL_URL?>favicon.ico" /> -->

    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/iCheck/custom.css" rel="stylesheet">
	
    <!-- Data Tables -->
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    
    <!-- Dropzone -->
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/dropzone/dropzone.css" rel="stylesheet">
    
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/toastr/toastr.min.css" rel="stylesheet">
	<link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/chosen/chosen.css" rel="stylesheet">
	<link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/animate.css" rel="stylesheet">

    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/plugins/codemirror/ambiance.css" rel="stylesheet">

    <link href="<?php echo ENV_WEBROOT_FULL_URL?>css/style2.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/bootstrap.min.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/iCheck/icheck.min.js"></script>

    <!-- Data Tables -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    
    <!-- Chosen -->
	<script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/chosen/chosen.jquery.js"></script>
	
	<!-- Data picker -->
	<script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/datapicker/bootstrap-datepicker.js"></script>
	
	<!-- Highchart -->
	<script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/highcharts-4.1.5/highcharts.js"></script>
	
	<!-- Input Mask-->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/jasny/jasny-bootstrap.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/inspinia.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/pace/pace.min.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/demo/peity-demo.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/toastr/toastr.min.js"></script>
	<script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/dropzone/dropzone.js"></script>
	<script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/video/responsible-video.js"></script>
	
	<!-- Upload image (Foto de usuario) -->
	<script src="<?php echo ENV_WEBROOT_FULL_URL?>js/bootstrap-fileupload.js"></script>


    <script>
	$(document).ready(function () {
		var myProccess;
	    myProccess = myProccess || (function () {

			var pleaseWaitDiv = $('<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"><div class="modal-dialog modal-sm"><div class="modal-content" style="padding:10px;">Procesando.. <div class="sk-spinner sk-spinner-three-bounce"><div class="sk-bounce1"></div><div class="sk-bounce2"></div><div class="sk-bounce3"></div></div></div></div></div>');
		    
			return {
				showPleaseWait: function () {
					pleaseWaitDiv.modal({backdrop: 'static',keyboard: false});
				},
				hidePleaseWait: function () {
					pleaseWaitDiv.modal('hide');
				},
			};
		})();
		
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});

		$('[data-toggle="tooltip"]').tooltip();
	});
	</script>
</head>

<body class="pace-done mini-navbar">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <!-- Elemento Menu -->
			
        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">

        
        <!-- Contenido -->   
        <?php echo $this->fetch('content'); ?>
        
        <div class="footer">
            <div class="pull-right">
                Calidad Integral.
            </div>
            <div>
                <strong>Copyright</strong> Alan Hugo &copy; 2016
            </div>
        </div>

        </div>
        </div>
    
    <!-- Scripts de Mantenimientos -->
    <!--<script src="<?= ENV_WEBROOT_FULL_URL;?>js/ajax/<?php echo $this->request->controller;?>.js" type="text/javascript"></script>-->
    <script>var env_webroot_script = '<?php echo ENV_WEBROOT_FULL_URL; ?>';</script>
    
    <!-- CodeMirror -->
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/codemirror/codemirror.js"></script>
    <script src="<?php echo ENV_WEBROOT_FULL_URL?>js/plugins/codemirror/mode/javascript/javascript.js"></script>

    <script>
         $(document).ready(function(){

             var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                 lineNumbers: true,
                 matchBrackets: true,
                 styleActiveLine: true,
                 theme:"ambiance"
             });

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