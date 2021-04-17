<!-- JavaScript -->
<script src="<?php echo base_url('assets');?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/js/adminlte.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
	window.onload = function() {
		<?php if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		}?>
	}

	function effect_msg_form() {
		$('.form-msg').slideDown(1000),
		setTimeout(function() {
			$('.form-msg').slideUp(1000);
		}, 3000)
	}

	function effect_msg() {
		$('.msg').show(1000),
		setTimeout(function() {
			$('.msg').fadeOut(1000);
		}, 3000)
	}
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.category').select2();
	});
</script>

	<!-- jQuery 3 -->
<script src="<?php echo base_url('assets');?>/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets');?>/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets');?>/vendor/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/vendor/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/vendor/dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('assets');?>/vendor/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets');?>/vendor/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>