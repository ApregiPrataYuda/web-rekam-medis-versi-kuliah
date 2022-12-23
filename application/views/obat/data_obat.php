 <section class="content-header">
      <h1>
        Obat
        <small>Obat data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Obat </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>


 
   
    <!-- Main content -->
    <section class="content">
         <?php $this->load->view('flash_mesages');?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Obat</h3>
              <div class="pull-right">
                 <a href="<?= site_url('Obat/add')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> create new data</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>NAME OBAT</th>
                  <th>KETERANGAN</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>
                     <?php $no=1;
                      foreach ($row->result() as $key => $data) { ?>
                         <tr>
                         <td><?=$no++?>.</td>
                         <td><?=$data->name?></td>
                           <td><?=$data->keterangan?></td>
                           <td>
                           <a href="<?=site_url('Obat/edit/'.$data->obat_id)?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                            <a href="<?=site_url('Obat/delete/'.$data->obat_id)?>" class="btn btn-warning btn-xs" onclick="return confirm('yakin akan di hapus')"><i class="fa fa-trash"></i></a>
                           </td>
                         </tr>
                      <?php } ?>
              </table>
            </div>  
          </div>
    </section>
  
    
   