 <section class="content-header">
      <h1>
        Rekam-medis
        <small>Rekam medis data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Rekam-medis </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>



   
    <!-- Main content -->
    <section class="content">
         <?php $this->load->view('flash_mesages');?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Rekam-medis</h3>
              <div class="pull-right">
                 <a href="<?= site_url('Rekam_medis/add')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> add </i></a>
                    <a href="" class="btn btn-success btn-sm"><i class="fa fa-print"> print all data</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>KODE REKAM PASIEN</th>
                  <th>NAME PASIEN</th>
                  <th>NAME DOKTER</th>
                  <th>KELUHAN</th>
                  <th>DIAGNOSA</th>
                  <th>OBAT</th>
                  <th>NAMA POLIKLINIK</th>
                  <th>TANGGAL PERIKSA</th>
                  <th>pilihan</th>
                </tr>
                    </thead>
               <?php $no=1; 
                    foreach ($row->result() as $key => $data) { ?> 
                        <tr>
                        <td><?=$no++?>.</td>

                         <td><?=$data->kode_rekam?>
                           <br>
                           <a href=" <?=site_url('Rekam_medis/barcode_qrcode/'.$data->rm_id)?>" class="btn btn-default"><i class="fa fa-barcode"> Generator</i></a>
                         </td>

                           <td><?=$data->pasien_name?></td>
                           <td><?=$data->dokter_name?></td>
                             <td><?=$data->keluhan?></td>
                              <td><?=$data->diagnosa?></td>
                               <td><?=$data->obat_name?></td>
                                <td><?=$data->poli_name?></td>
                                 <td><?=$data->tanggal_periksa?></td>
                                  <td>
                                   <a href="" class="btn btn-success btn-xs"><i class="fa fa-file-excel-o"></i></a>

                                  <a href="" class="btn btn-primary btn-xs"><i class="fa fa-file-word-o"></i></a>

                                  <a href="" class="btn btn-danger btn-xs"><i class="fa  fa-download"></i></a>

                                   <a href="" class="btn btn-danger btn-xs"><i class="fa  fa-print"></i></a>

                                   <a href="" class="btn btn-danger btn-xs"><i class="fa fa-file-text-o"></i></a>
                                  <a href=" <?=site_url('Rekam_medis/delete/'.$data->rm_id)?>" onclick="return confirm('yakin data akan di hapus')" class="btn btn-warning btn-xs"><i class="fa fa-trash"></i></a>
                                  </td>

                        </tr>
                    <?php } ?>
                    
              </table>
            </div>  
          </div>
    </section>
  
