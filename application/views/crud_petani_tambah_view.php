<?php $this->load->view('template/header'); ?>

    <!-- Main content -->
    <section class="content">

		 <!-- Default box -->
		 <div class="box">
			<div class="box-header with-border">
			  <h3 class="box-title">TAMBAH PETANI</h3>

			  <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
				  <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				  <i class="fa fa-times"></i></button>
			  </div>
			</div>
			<div class="box-body">

					<form  class="form-horizontal" action="<?php echo base_url(). 'Crud_petani/tambah_aksi' ;?>" method="post">
						  
						  <div class="form-group">
							<label class="control-label col-sm-2" for="nik">NIK :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter NIK">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="nama">NAMA :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="alamat">ALAMAT :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter Alamat">
							</div>
						  </div>
						
						<div class="form-group">

							<label class="control-label col-sm-2" for="title">PROVINSI:</label>
							<div class="col-sm-10">
							<select name="provinsi" class="form-control" id="provinsi" >

								<!--<option value="">--- Select Provinsi ---</option>-->

								<?php 
									foreach($provinsi as $prov)
									{
										echo '<option value="'.$prov->IDprovinsi.'">'.$prov->nama.'</option>';
									}
								?>
							</select>
							</div>
						</div>						  
						  <!--<div class="form-group">  tak pindah kene style="width:350px" style="width:350px"
							<label class="control-label col-sm-2" for="provinsi">PROVINSI :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Enter provinsi">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="kabupaten">KABUPATEN :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Enter kabupaten">
							</div>
						  </div>-->
						 
						<div class="form-group">

							<label class="control-label col-sm-2" for="title">KABUPATEN:</label>
							<div class="col-sm-10">
								<select name="kabkota" class="form-control" id="kabkota">
									<!--<option value=''>Select Kabupaten</option>-->
								</select>
							</div>
						</div>						 
						 
						  <div class="form-group">
							<label class="control-label col-sm-2" for="kecamatan">KECAMATAN :</label>
							<div class="col-sm-10">
								<select name="kecamatan" class="form-control" id="kecamatan">
									<!--<option value=''>Select Kecamatan</option>-->
								</select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="desa">DESA :</label>
							<div class="col-sm-10">
								<select name="desa" class="form-control" id="desa">
									<!--<option value=''>Select Desa</option>-->
								</select>
							</div>
						  </div>
						  
<!-- Sumber B 
						  
						  		<p>Provinsi :</p>
		<select name="prov" class="form-control" id="provinsi">
			<option>- Select Provinsi -</option>
			
		</select>
		<p>Kabupaten :</p>
		<select name="kab" class="form-control" id="kabupaten">
			<option value=''>Select Kabupaten</option>
		</select>
		<p>Kecamatan :</p>
		<select name="kec" class="form-control" id="kecamatan">
			<option>Select Kecamatan</option>
		</select>
		<p>Desa :</p>
		<select name="des" class="form-control" id="desa">
			<option>Select Desa</option>
		</select>
		<hr>
						  
 /Sumber B-->
						  
						  
						  <div class="form-group">
							<label class="control-label col-sm-2" for="tglmasuk">TANGGAL MASUK :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="tglmasuk" name="tglmasuk" placeholder="Enter tglmasuk">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="status">STATUS :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="status" name="status" placeholder="Enter status">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="koords">KOORDINAT S :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="koords" name="koords" placeholder="Enter koords">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-sm-2" for="koorde">KOORDINAT E :</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="koorde" name="koorde" placeholder="Enter koorde">
							</div>
						  </div>
						  
						  
						  
						  
						  <div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-default">Submit</button>
							</div>
						  </div>
						</form> 						
						
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
  

  
  <!-- Sumber wilayah_view.php -->
  
  		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script>
        	$(document).ready(function(){
	            $("#provinsi").change(function (){
	                var url = "<?php echo site_url('crud_petani/add_ajax_kab');?>/"+$(this).val();
	                $('#kabkota').load(url);
					
	                return false;
	            })
	   
	   			$("#kabkota").change(function (){
	                var url = "<?php echo site_url('crud_petani/add_ajax_kec');?>/"+$(this).val();
	                $('#kecamatan').load(url);
	                return false;
	            })
	   
	   			$("#kecamatan").change(function (){
	                var url = "<?php echo site_url('crud_petani/add_ajax_des');?>/"+$(this).val();
	                $('#desa').load(url);
	                return false;
	            })
	        });
    	</script>

  
  <!-- /Sumber wilayah_view.php -->

  <!--<script type="text/javascript">


    $(document).ready(function() {

        $('select[name="provinsi"]').on('change', function() {

            var IDprovinsi = $(this).val();

            if(IDprovinsi) {

                $.ajax({

                    url: '/myform/ajax/'+IDprovinsi,

                    type: "GET",

                    dataType: "json",

                    success:function(data) {

                        $('select[name="kabupaten"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="kabupaten"]').append('<option value="'+ value.IDkabkota +'">'+ value.name +'</option>');

                        });

                    }

                });

            }else{

                $('select[name="kabupaten"]').empty();

            }

        });

    });

</script>
-->


  <?php $this->load->view('template/footer'); ?>
