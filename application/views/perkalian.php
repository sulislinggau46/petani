<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Perkalian menggunakan validasi!</h1>
<?php echo validation_errors() ;?>
<p>Silahkan masukkan data berikut!</p>
<?php echo form_open('hitung/perkalian'); ?>
<?php echo form_input('v1',$v1); ?> x
<?php echo form_input('v2',$v2);  ?><br>

<?php echo form_submit('submit','Hitung!');  ?>
<?php echo form_close();  ?>
Hasil : <?php echo $hasil;  ?>

</body>
</html>