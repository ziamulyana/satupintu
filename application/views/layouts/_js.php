<!-- JavaScript -->
<script src="<?php echo base_url('assets');?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/js/adminlte.min.js"></script>
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
<script>
  $(function () {
    $("#tbl").DataTable();
  });
</script>

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets');?>/vendor/jquery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets');?>/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets');?>/vendor/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/vendor/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/vendor/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets');?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets');?>/vendor/select2/js/select2.full.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets');?>/vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>