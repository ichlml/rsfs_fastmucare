<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h4>E-Ticket Fastmucare</h4>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('welcome')?>">Home</a></li>
                <li class="breadcrumb-item active">Lapor</li>
            </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card card-dark card-outline">
              <div class="card-header">
                <h3 class="card-title">From e-ticket fastmucare</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                    <form action="<?= base_url('welcome/addLapor')?>" method="post">
                        <div class="col-md-6">
                                <input type="hidden"  name="nama" class="form-control" value="<?= $this->session->userdata('nama')?>" required autocomplete="off" placeholder="Nama Pelapor">
                                <input type="hidden" name="unit" value="<?= $this->session->userdata('bagian')?>" class="form-control" required autocomplete="off" placeholder="Unit Pelapor">
                            <div class="form-grup">
                            <label for="">Teknisi</label>
                              <select name="teknik" id="teknik" class="form-control">
                                <option value="" disabled selected> -- Pilih Pasangan Kalian --</option>
                                <?php foreach($teknisi as $t){  ?>
                                <option value="<?= $t->id_teknisi?>"><?= $t->nama_teknisi?> - <?= $t->bagian?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="">Judul Laporan</label>
                                <input type="text" name="judul_laporan" class="form-control" required autocomplete="off" placeholder="Judul Laporan">
                                <input type="hidden" name="id_chat" id="id_chat" class="form-control" required autocomplete="off" placeholder="chat id tele" readonly>
                                <input type="hidden" name="tgl_masuk" class="form-control" value="<?= date('Y-m-d H:i:s')?>">
                                <input type="hidden" name="status_laporan" class="form-control" value="pending">
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea name="ket" id="ket" class="form-control" cols="5" rows="5"></textarea>
                            </div>
                            <input type="submit" value="Laporkan Masalah" class="btn btn-sm btn-danger">
                        </div>
                    </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
</section>
<script>
  $(document).ready(function () {
      $(document).on('change', '#teknik', function () {
        var id_teknisi = $(this).val();
        console.log(id_teknisi);
        $.ajax({
            method:"post",
            url:"<?= base_url('welcome/getChatid')?>",
            data:{id_teknisi:id_teknisi},
            dataType:"JSON",
            success: function(data) {
              $('#id_chat').val(data.id_chat);
            }

        });
      });
  });
</script>