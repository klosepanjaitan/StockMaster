<head>

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Satuan</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Satuan-save')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Satuan Barang *</label>
							<input type="text" name="satuan" class="form-control" name="" id="">
						</div>

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-success btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-warning">Reset</button>
						</div>
				</div>
			</div>
		</div>

	</div>

</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<script>
	$('.js-single').select2({
		placeholder: 'Select an option'
	});

</script>
