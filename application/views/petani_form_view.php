<!--
<!DOCTYPE html>
<html>
<head>
<title>Demo Model Table</title>
 <link rel="stylesheet" media="all" href="<?php //echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 <script src="<?php //echo base_url()?>assets/js/bootstrap.js" type="text/javascript"></script>

</head>
<body>
<div class="container">
-->
<?php $this->load->view('template/header'); ?>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
		
			<div class="container">
			  <h2>Entri Petani</h2>
			  <form class="form-horizontal" action="http://localhost/ci/index.php/petani" method="post">
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nik"><?php echo $model->labels['nik'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="nik" placeholder="Enter nik" name="nik">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nama"><?php echo $model->labels['nama'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
				  </div>
				</div>
			   
				<div class="form-group">
				  <label class="control-label col-sm-2" for="alamat"><?php echo $model->labels['alamat'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="alamat" placeholder="Enter alamat" name="alamat">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="desa"><?php echo $model->labels['desa'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="desa" placeholder="Enter desa" name="desa">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="kecamatan"><?php echo $model->labels['kecamatan'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="kecamatan" placeholder="Enter kecamatan" name="kecamatan">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="kabupaten"><?php echo $model->labels['kabupaten'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="kabupaten" placeholder="Enter kabupaten" name="kabupaten">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="provinsi"><?php echo $model->labels['provinsi'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="provinsi" placeholder="Enter provinsi" name="provinsi">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="tglmasuk"><?php echo $model->labels['tglmasuk'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="tglmasuk" placeholder="Enter tglmasuk" name="tglmasuk">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="status"><?php echo $model->labels['status'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="status" placeholder="Enter status" name="status">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="koords"><?php echo $model->labels['koords'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="koords" placeholder="Enter koords" name="koords">
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for="koorde"><?php echo $model->labels['koorde'] ;?></label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="koorde" placeholder="Enter koorde" name="koorde">
				  </div>
				</div>
				
				
			   
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" name="btnSubmit" value="Submit">Submit</button>
				  </div>
				</div>
			  
			  </form>
			</div>
		
		
	
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('template/footer'); ?>
	

<!--
</div>
</body>
</html>
-->