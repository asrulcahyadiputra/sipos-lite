<?php $this->load->view('_partials/head') ?>
<!-- mini card area -->
<div class="row mt-4">
	<div class="col-md-12 col-xl-12 col-sm-12">
		<!-- row -->
		<div class="row">
			<!-- mini card -->
			<div class="col-md-3 col-xl-3 col-sm-12 mb-3">
				<div class="card text-white bg-primary">
					<div class="card-header text-center">Total Penjualan</div>
					<div class="card-body">
						<div class="text-center">
							<h5>0</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- ./mini card -->
			<!-- mini card -->
			<div class="col-md-3 col-xl-3 col-sm-12 mb-3">
				<div class="card text-white bg-success">
					<div class="card-header text-center">Total GrossProfit</div>
					<div class="card-body">
						<div class="text-center">
							<h5>0</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- ./mini card -->
			<!-- mini card -->
			<div class="col-md-3 col-xl-3 col-sm-12 mb-3">
				<div class="card text-white bg-warning">
					<div class="card-header text-center">Total Stok Masuk</div>
					<div class="card-body">
						<div class="text-center">
							<h5>0</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- ./mini card -->
			<!-- mini card -->
			<div class="col-md-3 col-xl-3 col-sm-12">
				<div class="card text-white bg-info">
					<div class="card-header text-center">Total Stok</div>
					<div class="card-body">
						<div class="text-center">
							<h5>0</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- ./mini card -->
		</div>
		<!-- ./row -->
	</div>
</div>
<!-- ./mini card area -->

<!-- bar chart card -->
<div class="row mt-4">
	<div class="col-md-12 col-xl-12 col-sm-12">
		<div class="card">
			<div class="card-header text-bold text-primary">
				Total Penjualan
			</div>
			<div class="card-body">
				<canvas id="myChart" style="width: 100%"></canvas>
			</div>
		</div>
	</div>
</div>
<!-- bar chart card -->
<script src="<?= base_url() ?>assets/chartjs.js/dist/chart.min.js"></script>

<script>
	var xValues = [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"Mei",
		"Jun",
		"Jul",
		"Agu",
		"Sep",
		"Okt",
		"Nov",
		"Des",
	];
	var yValues = [3, 10, 8, 9, 9, 9, 10, 11, 14, 14, 15, 20];

	new Chart("myChart", {
		type: "line",
		data: {
			labels: xValues,
			datasets: [{
				fill: false,
				lineTension: 0,
				backgroundColor: "rgba(0,0,255,1.0)",
				borderColor: "rgba(0,0,255,0.1)",
				data: yValues,
			}, ],
		},
		options: {
			legend: {
				display: false
			},
			scales: {
				yAxes: [{
					ticks: {
						min: 10,
						max: 5000
					}
				}],
			},
		},
	});
</script>
<?php $this->load->view('_partials/js') ?>
