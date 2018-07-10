<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
 <script src="<?php echo base_url()?>assets/js/bootstrap.js" type="text/javascript"></script>

</head>
<body>
<div class="container">
<h2>Hitung Luas dan keliling Lingkaran</h2>
jari-jari:<?php echo $model->get_radius() ;?> <br />
Luas: <?php echo $model->hitung_luas() ;?> <br />
Keliling: <?php echo $model->hitung_keliling()  ;?>
</div>
</body>
</html>