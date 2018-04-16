<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <style media="screen">
      *{
        font-family: "roboto";
      }
      h1,h2,h3,h4,h5,h6{
        font-family: "poppins";
      }
    </style>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="navbar-header">
        <a href="#" class="navbar-brand">Ahmad Irfan Maulana</a>
      </div>
      <ul class="navbar-nav nav">
        <li>
          <?php echo anchor('dashboard', 'Home'); ?>
        </li>
        <li>
          <?php echo anchor('about', 'About'); ?>
        </li>
        <li>
          <?php echo anchor('contact', 'Contact'); ?>
        </li>
        <li>
          <?php echo anchor('siswa', 'Students'); ?>
        </li>
      </ul>
    </nav>
    <div class="container">
      <?php
        $data['data'] = $data;
        $this->load->view('site/'.$content,$data);
      ?>
    </div>


  </body>
</html>
