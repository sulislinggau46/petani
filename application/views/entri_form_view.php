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
		
		
		
		
			<h2>Entri Produk</h2>
			
			<form action="http://localhost/ci/index.php/entri" method="post">
			<table>	
					<tr>
					<td><?php echo $model->labels['id'] ;?> </td>
					<td><input type="text" name="id"/><br /><br /></td>
					</tr>
					<tr>
					<td><?php echo $model->labels['nama'] ;?> </td>
					<td><input type="text" name="nama"/> <br /> <br /></td>
					</tr>
					<tr>
					<td><?php echo $model->labels['harga'] ;?> </td>
					<td><input type="text" name="harga"/> <br /> <br /></td>
					</tr>
					<tr>
					<td><input type="submit" name="btnSubmit" value="Simpan"/></td>
					</tr>
			</table>
			</form>
	
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