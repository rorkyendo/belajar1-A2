<div class="container">
  <div class="row">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel panel-heading">
          <?php echo $subtitle;?>
        </div>
        <div class="panel panel-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="DataTables">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Fakultas</th>
                  <th>Prodi</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mahasiswa as $key): ?>
                <tr>
                  <td><?php echo $key->nim;?></td>
                  <td><?php echo $key->nama_lengkap;?></td>
                  <td><?php echo $key->alamat;?></td>
                  <td><?php echo $key->fakultas;?></td>
                  <td><?php echo $key->prodi;?></td>
                  <td>
                    <button type="button" onclick="detail('<?php echo $key->nim;?>')" class="btn btn-xs btn-info" data-toggle="modal" data-target="#detailData">Detail</button>
                    <button type="button" onclick="edit('<?php echo $key->nim;?>')" class="btn btn-xs btn-warning">Edit</button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready( function () {
  $('#DataTables').DataTable();
} );
</script>

<script type="text/javascript">
  function detail(nim){
    $.ajax({
      url:"<?php echo base_url('mahasiswa/detail/');?>"+nim,
      success:function(data){
        console.log(data);
        var data = JSON.parse(data);
        $.each(data,function(key,val){
          $('#nim').val(val.nim);
          $('#nama_lengkap').val(val.nama_lengkap);
          $('#jenkel').val(val.jenkel);
          $('#alamat').val(val.alamat);
          $('#fakultas').val(val.fakultas);
          $('#prodi').val(val.prodi);
        });
      }
    })
  }
</script>

<!-- Modal -->
<div id="detailData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Detail Data Mahasiswa</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Nim</label>
          <input type="text" id="nim" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="">Nama Lengkap</label>
          <input type="text" id="nama_lengkap" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="">Jenkel</label>
          <select class="form-control" id="jenkel" readonly>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Fakultas</label>
          <input type="text" id="fakultas" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="">Prodi</label>
          <input type="text" id="prodi" class="form-control" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
