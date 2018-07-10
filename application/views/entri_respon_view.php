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
					<h2>Entri Data Sukses</h2>
					<p>Baris data beikut telah ditambahkan ke dalam Table 'produk'</p>
					<table border ="1">
					<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>Harga</th>
					</tr>
					<tr>
						<td><?php echo $model->id ;?></td>
						<td><?php echo $model->nama ;?></td>
						<td><?php echo $model->harga ;?></td>
					</tr>
					</table>
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
