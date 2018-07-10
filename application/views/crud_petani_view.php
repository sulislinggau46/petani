
<?php $this->load->view('template/header'); ?>

    <!-- Main content -->
    <section class="content">

		 <!-- Default box -->
		 <div class="box">
			<div class="box-header with-border">
			  <h3 class="box-title">TABEL PETANI</h3>

			  <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
				  <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				  <i class="fa fa-times"></i></button>
			  </div>
			</div>
			<div class="box-body">
				
			
					<center>sumber: https://www.malasngoding.com/membuat-crud-dengan-codeigniter-menampilkan-data-dari-database/</center>
					<center>https://itsolutionstuff.com/post/codeigniter-dynamic-dependent-dropdown-using-jquery-ajax-exampleexample.html</center>
					<center><?php echo anchor('Crud_petani/tambah','Tambah Data'); ?></center>
					<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Provinsi</th>
							<th>Kabupaten</th>
							<th>Kecamatan</th>
							<th>Desa</th>
							<th>Tgl Masuk</th>
							<th>Status</th>
							<th>Koord S</th>
							<th>Koord E</th>
							<th>AKSI</th>
						</tr>
						</thead>
						<?php 
						$no = 1;
						foreach($petani as $u){ 
						?>
						<tbody>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $u->nik ?></td>
							<td><?php echo $u->nama ?></td>
							<td><?php echo $u->alamat ?></td>
							<td><?php echo $u->provinsi ?></td>
							<td><?php echo $u->kabupaten ?></td>
							<td><?php echo $u->kecamatan ?></td>
							<td><?php echo $u->desa ?></td>
							<td><?php echo $u->tglmasuk ?></td>
							<td><?php echo $u->status ?></td>
							<td><?php echo $u->koords ?></td>
							<td><?php echo $u->koorde ?></td>
							<td>
							<?php echo anchor('Crud_petani/edit/'.$u->IDpetani,'Edit'); ?>
							<?php echo anchor('Crud_petani/hapus/'.$u->IDpetani,'Hapus'); ?>
							</td>
						</tr>
						</tbody>
						<?php } ?>
					</table>
					</div>
					<!-- akhir .table-respoNNsive-->
		
				
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
