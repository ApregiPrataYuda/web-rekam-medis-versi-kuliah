 <section class="content-header">
      <h1>
       Dokter
        <small>Dokter data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Dokter </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>


    
   
    <!-- Main content -->
    <section class="content">
         <?php  $this->load->view("flash_mesages");?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Dokter</h3>
              <div class="pull-right">
                 <a href="<?= site_url('Dokter/add')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> create new data</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>NAME</th>
                  <th>SPESIALIS</th>
                  <th>ALAMAT</th>
                  <th>NO TELEPON</th>
                  <th>image</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>
                    <?php  $no=1;
                      foreach ($row->result() as $key => $data) { ?>
                         <tr>
                             <td><?=$no++?>.</td>
                             <td><?=$data->name?></td>
                              <td><?=$data->spesialis?></td>
                               <td><?=$data->alamat?></td>
                                <td><?=$data->no_telp?></td>
                                <td>
                                 <?php if ($data->image != null) { ?>
                                 <img src="<?= site_url('image/dokter/'.$data->image)?>" style="width:100px;" >
                                 <?php } ?>
                                </td>

                                <td>
                                      <a href="<?=site_url('Dokter/edit/'.$data->dokter_id)?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a> 
                                     <a href="<?=site_url('Dokter/delete/'.$data->dokter_id)?>" onclick="return confirm('yakin data akan di hapus?')"  class="btn btn-warning btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                         </tr>
                   
                    <?php } ?>
              </table>
            </div>  
          </div>
    </section>
  
     
   