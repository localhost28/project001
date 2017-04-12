<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Aplikasi Pendataan Barang</title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css">
      <script src="<?php echo base_url();?>assets/js/materialize.js"></script>
      <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery-3.1.0.min.js"></script>
</head>
<body class="light-blue lighten-2">
      <div>
          <div clas="row">
            <h2 class="center-align white-text">Aplikasi Pendataan Barang</h2>
          </div>
          <?php $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/cek", $attributes);?>
          <div class="row">
            <div class="col s12 m4 l4 xl4 offset-m4 offset-l4 offset-xl4">
              <div class="card-panel">
                <div class="input-field">
                  <span><?php echo form_error('i_username'); ?></span>
                  <input type="text" class="validate" id="i_username" name="i_username" placeholder="Username" />
                </div>
                <div class="input-field">
                  <span><?php echo form_error('i_password'); ?></span>
                  <input type="password" class="validate" id="i_password" name="i_password" placeholder="Password" />
                  <?php echo $this->session->flashdata('msg'); ?>
                  <input type="submit" value="Login" class="waves-effect waves-light btn" />
                </div>
              </div>
            </div>
          </div>
          <?php echo form_close();?>
      </div>





</body>
</html>
