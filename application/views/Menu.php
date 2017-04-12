<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Aplikasi Pendataan Barang</title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Login.css">
</head>

<body>
<div>
  <?php foreach ($menu as $row_menu) {?>
    <ul>
      <li><?php echo $row_menu->nama_menu;?></li>
    </ul>
  <?php } ?>
</div>


</body>
</html>
