<!-- JavaScript -->
<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-2.4.3/js/adminlte.min.js"></script>
<script>
	window.onload = function() {
		<?php if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		} ?>
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
	$(function() {
		$("#tbl").DataTable();
	});
</script>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets'); ?>/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets'); ?>/vendor/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets'); ?>/vendor/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets'); ?>/vendor/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets'); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets'); ?>/vendor/select2/js/select2.full.min.js"></script>
<!-- Idle Auto Logout -->
<script src="<?php echo base_url('assets'); ?>/vendor/jquery/jquery.idle.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
	$(function() {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.

		//bootstrap WYSIHTML5 - text editor
		$(".textarea").wysihtml5();
	});
</script>
<script>
	$(document).idle({
		onIdle: function() {
			alert('Silahkan Login Kembali');
			window.location.href = '<?php echo base_url() ?>auth/logout';
		},
		idle: 900000
	});
</script>
<script>
	var fieldId = 0;

	function addElement(parentId, elementTag, elementId, html) {
		var id = document.getElementById(parentId);
		var newElement = document.createElement(elementTag);
		newElement.setAttribute('id', elementId);
		newElement.innerHTML = html;
		id.appendChild(newElement);

	}

	function removeField(elementId) {
		var fieldId = "field-" + elementId;
		var element = document.getElementById(fieldId);
		element.parentNode.removeChild(element);
	}

	function addField() {
		fieldId++;
		var html = '<br/><div class="input-group"> <span class="input-group-addon"><i class="fa fa-list-alt"></i></span> <select class="calc" value="" name="komoditi" required> <option value="" disabled selected>- Komoditi -</option> <option value="#">SK</option> <option value="#">Obat</option> <option value="#">Kos</option> <option value="#">OT</option> <option value="#">Pangan</option> </select> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><i class="fa fa-flask"></i></span> <input type="text" class="calc" value="" placeholder="Jumlah Sampel" required> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><b>Rp.</b></span> <input type="text" class="form-control" name="harga" id="#" placeholder="Harga" required> </div> </br>' +
			'<div class="b" ><button class="btn btn-danger" onclick="removeField(' + fieldId + ');"><span class="glyphicon glyphicon-remove"></span></button> </div> ';
		addElement('forms', 'div', 'field-' + fieldId, html);
	}

	function addField2() {
		fieldId++;
		var html = '<br/><div class="input-group"> <span class="input-group-addon"><i class="fa fa-list-alt"></i></span> <select class="form-control" id="#" name="komoditi" required> <option value="" disabled selected>- Komoditi -</option> <option value="#">SK</option> <option value="#">Obat</option> <option value="#">Kos</option> <option value="#">OT</option> <option value="#">Pangan</option> </select> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><i class="fa fa-flask"></i></span> <input type="text" class="form-control" name="jumlah_sampel" id="#" placeholder="Jumlah Sampel" required> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><b>Rp.</b></span> <input type="text" class="form-control" name="harga" id="#" placeholder="Harga" required> </div> </br>' +
			'<button class="btn btn-danger" onclick="removeField(' + fieldId + ');"><span class="glyphicon glyphicon-remove"></span></button> ';
		addElement('forms1', 'div', 'field-' + fieldId, html);
	}
</script>
<script>
	$(document).ready(function() {
		$('.calc').change(function() {
			var total = 0;
			$('.calc').each(function() {
				if ($(this).val() != '') {
					total += parseInt($(this).val());
				}
			});
			$('#total').html(total);
		});
	})(jQuery);
</script>