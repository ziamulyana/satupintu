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
<!-- ChartJs -->
<script src="<?php echo base_url('assets'); ?>/vendor/chartjs/Chart.js"></script>
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
		var html = '<br/><div class="input-group"> <span class="input-group-addon"><i class="fa fa-list-alt"></i></span> <select class="form-control" value="" name="komoditi" required> <option value="" disabled selected>- Komoditi -</option> <option value="#">SK</option> <option value="#">Obat</option> <option value="#">Kos</option> <option value="#">OT</option> <option value="#">Pangan</option> </select> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><i class="fa fa-flask"></i></span> <input onkeyup="findTotal1()" type="text" name="sampel" id="qty1" class="form-control" value="" placeholder="Jumlah Sampel" required> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><b>Rp.</b></span> <input onkeyup="findTotal2()" type="text" name="harga" id="qty2" class="form-control" value="" placeholder="Harga" required> </div> </br>' +
			'<div class="b" ><button class="btn btn-danger" onclick="removeField(' + fieldId + ');"><span class="glyphicon glyphicon-remove"></span></button> </div> ';
		addElement('forms', 'div', 'field-' + fieldId, html);
	}

	function addField2() {
		fieldId++;
		var html = '<br/><div class="input-group"> <span class="input-group-addon"><i class="fa fa-list-alt"></i></span> <select class="form-control" id="#" name="komoditi" required> <option value="" disabled selected>- Komoditi -</option> <option value="#">SK</option> <option value="#">Obat</option> <option value="#">Kos</option> <option value="#">OT</option> <option value="#">Pangan</option> </select> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><i class="fa fa-flask"></i></span> <input onkeyup="findTotal1()" type="text" name="sampel" id="qty1" class="form-control" value="" placeholder="Jumlah Sampel" required> </div> <br>' +
			'<div class="input-group"> <span class="input-group-addon"><b>Rp.</b></span> <input onkeyup="findTotal2()" type="text" name="harga" id="qty2" class="form-control" value="" placeholder="Harga" required> </div> </br>' +
			'<button class="btn btn-danger" onclick="removeField(' + fieldId + ');"><span class="glyphicon glyphicon-remove"></span></button> ';
		addElement('forms1', 'div', 'field-' + fieldId, html);
	}
</script>
<script>
	function findTotal1() {
		var arr = document.getElementsByName('sampel');
		var tot = 0;
		for (var i = 0; i < arr.length; i++) {
			if (parseInt(arr[i].value))
				tot += parseInt(arr[i].value);
		}
		document.getElementById('total_sampel').value = tot;
	};
	document.addEventListener("DOMContentLoaded", function(event) {
		findTotal();
	});

	function findTotal2() {
		var arr = document.getElementsByName('harga');
		var tot = 0;
		for (var i = 0; i < arr.length; i++) {
			if (parseInt(arr[i].value))
				tot += parseInt(arr[i].value);
		}
		document.getElementById('total_harga').value = tot;
	};
	document.addEventListener("DOMContentLoaded", function(event) {
		findTotal();
	});
</script>
<script>
	$(function() {
		/* ChartJS
		 * -------
		 * Here we will create a few charts using ChartJS
		 */

		//--------------
		//- AREA CHART -
		//--------------

		// Get context with jQuery - using jQuery's .get() method.
		var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
		// This will get the first returned node in the jQuery collection.
		var areaChart = new Chart(areaChartCanvas);

		var areaChartData = {
			labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September", "Oktober", "November", "Desember",],
			datasets: [{
					label: "Electronics",
					fillColor: "rgba(210, 214, 222, 1)",
					strokeColor: "rgba(210, 214, 222, 1)",
					pointColor: "rgba(210, 214, 222, 1)",
					pointStrokeColor: "#c1c7d1",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(220,220,220,1)",
					data: [65, 59, 80, 81, 56, 55, 40]
				},
				{
					label: "Digital Goods",
					fillColor: "rgba(60,141,188,0.9)",
					strokeColor: "rgba(60,141,188,0.8)",
					pointColor: "#3b8bba",
					pointStrokeColor: "rgba(60,141,188,1)",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(60,141,188,1)",
					data: [28, 48, 40, 19, 86, 27, 90]
				}
			]
		};
		//-------------
		//- BAR CHART -
		//-------------
		var barChartCanvas = $("#barChart").get(0).getContext("2d");
		var barChart = new Chart(barChartCanvas);
		var barChartData = areaChartData;
		barChartData.datasets[1].fillColor = "#00a65a";
		barChartData.datasets[1].strokeColor = "#00a65a";
		barChartData.datasets[1].pointColor = "#00a65a";
		var barChartOptions = {
			//Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
			scaleBeginAtZero: true,
			//Boolean - Whether grid lines are shown across the chart
			scaleShowGridLines: true,
			//String - Colour of the grid lines
			scaleGridLineColor: "rgba(0,0,0,.05)",
			//Number - Width of the grid lines
			scaleGridLineWidth: 1,
			//Boolean - Whether to show horizontal lines (except X axis)
			scaleShowHorizontalLines: true,
			//Boolean - Whether to show vertical lines (except Y axis)
			scaleShowVerticalLines: true,
			//Boolean - If there is a stroke on each bar
			barShowStroke: true,
			//Number - Pixel width of the bar stroke
			barStrokeWidth: 2,
			//Number - Spacing between each of the X value sets
			barValueSpacing: 5,
			//Number - Spacing between data sets within X values
			barDatasetSpacing: 1,
			//String - A legend template
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
			//Boolean - whether to make the chart responsive
			responsive: true,
			maintainAspectRatio: true
		};

		barChartOptions.datasetFill = false;
		barChart.Bar(barChartData, barChartOptions);
	});
</script>