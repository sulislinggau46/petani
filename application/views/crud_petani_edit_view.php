<?php $this->load->view('template/header'); ?>

    <!-- Main content -->
    <section class="content">

		 <!-- Default box -->
		 <div class="box">
			<div class="box-header with-border">
			  <h3 class="box-title">FORM EDIT PETANI</h3>

			  <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
				  <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				  <i class="fa fa-times"></i></button>
			  </div>
			</div>
			<div class="box-body">

				<center>
					<h1>Form Edit Petani</h1>
				</center>
				<?php foreach($petani as $u){ ?>
				<form  class="form-horizontal" action="<?php echo base_url(). 'Crud_petani/update'; ?>" method="post">
			
			
					<div class="form-group">
						<label class="control-label col-sm-2" for="nik">NIK :</label>
						<div class="col-sm-10">
							<input type="hidden" name="IDpetani" value="<?php echo $u->IDpetani ?>">
							<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $u->nik ?>" placeholder="Enter NIK">
						</div>
					</div>

					
					<div class="form-group">
						<label class="control-label col-sm-2" for="nama">NAMA :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $u->nama ?>" placeholder="Enter nama">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="alamat">ALAMAT :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $u->alamat ?>" placeholder="Enter Alamat">
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2" for="provinsi">PROVINSI :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="provinsi" name="provinsi" value="<?php echo $u->provinsi ?>" placeholder="Enter provinsi">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="kabupaten">KABUPATEN :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?php echo $u->kabupaten ?>" placeholder="Enter kabupaten">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="kecamatan">KECAMATAN :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?php echo $u->kecamatan ?>" placeholder="Enter kecamatan">
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-2" for="desa">DESA :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $u->desa ?>" placeholder="Enter desa">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="tglmasuk">TANGGAL MASUK :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="tglmasuk" name="tglmasuk" value="<?php echo $u->tglmasuk ?>" placeholder="Enter tglmasuk">
						</div>
					</div>
					
					
					
					<div class="form-group">
						<label class="control-label col-sm-2" for="status">STATUS :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="status" name="status" value="<?php echo $u->status ?>" placeholder="Enter status">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2" for="koords">KOORDINAT S :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="koords" name="koords" value="<?php echo $u->koords ?>" placeholder="Enter koords">
					</div>
					</div>

					<div class="form-group">
					<label class="control-label col-sm-2" for="koorde">KOORDINAT E :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="koorde" name="koorde" value="<?php echo $u->koorde ?>" placeholder="Enter koorde">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>

				</form>	
	
	
				<?php } ?>

	
			</div>
			<!-- /.box-body -->
			<!--ali	<div class="box-footer">
			  Footer
			</div>  ali-->
			<!-- /.box-footer-->
		</div>
		<!-- /.box -->

    </section>
    <!-- /.content -->
	</div>
  <!-- /.content-wrapper -->

<?php $this->load->view('template/footer'); ?>
