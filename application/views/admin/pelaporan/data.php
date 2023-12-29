<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h4>Data Pelaporan Fastmucare</h4>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/welcome')?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Pelaporan</li>
            </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Proses</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Selesai</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- dataPending -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive mt-3">
                            <table class="table table-striped" id="tabel2">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pelapor</th>
                                        <th>Bagian</th>
                                        <th>Laporan</th>
                                        <th>Keterangan</th>
                                        <th>*</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($pending as $p){ ?>
                                    <tr>
                                        <td><?= $no++?></td>
                                        <td><?= $p->nama?></td>
                                        <td><?= $p->unit?></td>
                                        <td><?= $p->judul_lapor?></td>
                                        <td><?= $p->keterangan?></td>
                                        <td>*</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>
<section>


