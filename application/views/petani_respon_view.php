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
		
		
			<!--content ali -->
			<div class="container">
					<h2>Entri Data Petani Sukses</h2>
					<p>Baris data beikut telah ditambahkan ke dalam Table 'Petani'</p>
					<table class="table">
					<thead>
					<tr>
						<th>NIK</th>					
						<th>Nama</th>
						<th>Alamat</th>
						<th>Desa</th>
						<th>Kecamatan</th>
						<th>Kabupaten</th>
						<th>Provinsi</th>
						<th>Tanggal Masuk</th>
						<th>Status</th>
						<th>Koordinat S</th>
						<th>Koordinat E</th>
					</tr>
					</thead>
					<tr>
						<td><?php echo $model->nik ;?></td>						
						<td><?php echo $model->nama ;?></td>
						<td><?php echo $model->alamat ;?></td>
						<td><?php echo $model->desa ;?></td>
						<td><?php echo $model->kecamatan ;?></td>
						<td><?php echo $model->kabupaten ;?></td>
						<td><?php echo $model->provinsi ;?></td>
						<td><?php echo $model->tglmasuk ;?></td>
						<td><?php echo $model->status ;?></td>
						<td><?php echo $model->koords ;?></td>
						<td><?php echo $model->koorde ;?></td>
					</tr>
					</table>
			</div>
			<!--akhir content ali-->

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
