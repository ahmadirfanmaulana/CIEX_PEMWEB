<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">List Siswa</h3>
  </div>
  <div class="panel-body">
    <a href="<?php echo base_url('siswa/tambah'); ?>" class="btn btn-success">Tambah Data</a>
    <a href="#" class="btn btn-warning" id="cetak">Cetak Laporan</a>
    <br><br>
    <div id="table">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th class="text-center">NO</th>
            <th class="text-center">NIS</th>
            <th class="text-center">NISN</th>
            <th class="text-center">NAMA</th>
            <th class="text-center">JS</th>
            <th class="text-center">TEMPAT LAHIR</th>
            <th class="text-center">TANGGAL LAHIR</th>
            <th class="text-center print-hidden">AKSI</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($siswa as $key ) {
            ?>
            <tr>
              <td class="text-center"><?php echo $no; ?></td>
              <td class="text-center"><?php echo $key->siswa_nis; ?></td>
              <td class="text-center"><?php echo $key->siswa_nisn; ?></td>
              <td class="text-uppercase"><?php echo $key->siswa_nama; ?></td>
              <td class="text-center"><?php echo $key->siswa_jk; ?></td>
              <td class="text-uppercase"><?php echo $key->siswa_tmp_lahir; ?></td>
              <td class="text-center"><?php echo $key->siswa_tgl_lahir; ?></td>
              <td class="print-hidden">
                <a href="<?php echo base_url('siswa/edit/'.$key->siswa_id); ?>" class="btn btn-info btn-xs">Edit</a>
                <a href="" data-id="<?php echo $key->siswa_id; ?>" data-url="<?php echo base_url('siswa/hapus'); ?>" class="button-delete btn btn-danger btn-xs">Hapus</a>
              </td>
            </tr>
            <?php
            $no++;
          }
           ?>
        </tbody>
      </table>
    </div>

  </div>
  <div class="panel-footer">
    <div class="btn-group btn-group-sm">
      <a href="#" class="btn btn-primary"><<</a>
      <a href="#" class="btn btn-primary">1</a>
      <a href="#" class="btn btn-primary">2</a>
      <a href="#" class="btn btn-primary">3</a>
      <a href="#" class="btn btn-primary">4</a>
      <a href="#" class="btn btn-primary">>></a>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="form-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
        <form id="form-modal" method="POST">
            <div class="form-group">
              <label for="">NIS :</label>
              <input type="text" class="form-control" id="" placeholder="" name="nis">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">NISN :</label>
              <input type="text" class="form-control" id="" placeholder="" name="nisn">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">NAMA :</label>
              <input type="text" class="form-control" id="" placeholder="" name="nama">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">JENIS KELAMIN :</label> <br>
              <input type="radio" id="" placeholder="" name="jenis_kelamin" value="L"> Laki - Laki <br>
              <input type="radio" id="" placeholder="" name="jenis_kelamin" value="P"> Perempuan
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">ALAMAT :</label>
              <textarea class="form-control" id="" placeholder="" name="alamat" rows="8" cols="80"></textarea>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">TEMPAT LAHIR :</label> <br>
              <input type="text" class="form-control" id="" placeholder="" name="tmp_lahir">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="">TANGGAL LAHIR :</label> <br>
              <input type="date" class="form-control" id="" placeholder="" name="tgl_lahir">
              <p class="help-block"></p>
            </div>

            <button type="submit" name="buttonback" value="button" class="btn btn-warning">
              Tambah & Kembali
            </button>
            <button type="submit" name="button" value="button" class="btn btn-primary">
              Tambahkan
            </button>
          </div>

        </form>


    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.button-delete').click(function(event) {
    event.preventDefault();
    siswa_id = $(this).data('id');

    quest = window.confirm('Apakah anda yakin akan menghapus data siswa ini ?');

    if (quest) {
      $(this).parent('td').parent('tr').remove();
      $.ajax({
        url: 'http://localhost/ciCRUD/siswa/hapus',
        type: 'post',
        dataType: 'json',
        data : { id : siswa_id },
        success: function(response){
          alert(response.message);
        }
      });
    }


  });

  $('#cetak').click(function(event) {
    event.preventDefault();
    $('body').html(
      $('#table').html()
    );
    $('.print-hidden').remove();
    if (!window.print()) {
      $('body').html('finish !');
    }
  });

  $('#form-modal').submit(function(event) {
    event.preventDefault();

    data = $(this).find('input, textarea, select').serializeArray();

    console.log(data);
  })
</script>
