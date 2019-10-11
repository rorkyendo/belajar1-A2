<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
      <div class="panel-body">
      <h3 class="text-center"><?php echo $subtitle;?></h3>
      <hr/>
      <!-- <form class="" action="<?php echo base_url('auth/doCreate');?>" method="post"> -->
      <form class="" id="formRegister">
      <div class="form-group">
          <label for="NIM">NIM</label>
          <input type="text" class="form-control" name="nim">
      </div>
      <div class="form-group">
        <label for="Nama_lengkap">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap">
      </div>
      <div class="form-group">
        <label for="Jenkel">Jenis Kelamin</label>
        <select class="form-control" name="jenkel">
          <option value="">-Pilih Jenis Kelamin-</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="Alamat">Alamat</label>
        <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="Fakultas">Fakultas</label>
        <input type="text" class="form-control" name="fakultas">
      </div>
      <div class="form-group">
        <label for="Prodi">Program Studi</label>
        <input type="text" class="form-control" name="prodi">
      </div>
      <div class="form-group">
        <label for="Username">username</label>
        <input type="text" class="form-control" name="username">
      </div>
      <div class="form-group">
        <label for="Password">password</label>
        <input type="password" class="form-control" name="password">
      </div>
      <button type="submit" class="btn btn-info btn-sm">Daftar</button>
      </form>
    </div>
  </body>
</html>
