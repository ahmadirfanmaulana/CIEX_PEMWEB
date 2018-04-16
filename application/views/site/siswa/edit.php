<?php
  $siswa = $data['siswa'];
 ?>
<form action="" method="POST">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">EDIT SISWA</h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="">NIS :</label>
        <input type="text" class="form-control" id="" placeholder="" name="nis" value="<?php echo $siswa->siswa_nis; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">NISN :</label>
        <input type="text" class="form-control" id="" placeholder="" name="nisn" value="<?php echo $siswa->siswa_nisn; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">NAMA :</label>
        <input type="text" class="form-control" id="" placeholder="" name="nama" value="<?php echo $siswa->siswa_nama; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">JENIS KELAMIN :</label> <br>
        <?php
        if ($siswa->siswa_jk == "L") {
          $check['laki'] = 'checked';
          $check['perempuan'] = null;
        }
        else {
          $check['laki'] = null;
          $check['perempuan'] = 'checked';
        }
         ?>
        <input type="radio" id="" placeholder="" name="jenis_kelamin" value="L" <?php echo $check['laki']; ?>> Laki - Laki <br>
        <input type="radio" id="" placeholder="" name="jenis_kelamin" value="P" <?php echo $check['perempuan']; ?>> Perempuan
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">ALAMAT :</label>
        <textarea class="form-control" id="" placeholder="" name="alamat" rows="8" cols="80"><?php echo $siswa->siswa_alamat; ?>"</textarea>
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">TEMPAT LAHIR :</label> <br>
        <input type="text" class="form-control" id="" placeholder="" name="tmp_lahir"  value="<?php echo $siswa->siswa_tmp_lahir; ?>">
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label for="">TANGGAL LAHIR :</label> <br>
        <input type="date" class="form-control" id="" placeholder="" name="tgl_lahir" value="<?php echo $siswa->siswa_tgl_lahir; ?>">
        <p class="help-block"></p>
      </div>
    </div>
    <div class="panel-footer">
      <button type="submit" name="buttonback" value="button" class="btn btn-warning">
        Update & Kembali
      </button>
      <button type="submit" name="button" value="button" class="btn btn-primary">
        Update
      </button>
    </div>
  </div>

</form>
