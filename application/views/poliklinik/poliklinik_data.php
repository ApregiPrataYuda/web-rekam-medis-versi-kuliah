 <section class="content-header">
      <h1>
        Poliklinik
        <small>Poliklinik data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Poliklinik </a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>



   
    <!-- Main content -->
    <section class="content">
         <?php $this->load->view('flash_mesages');?>
          <div class="box">
            <div class="box-header witd-border">
              <h3 class="box-title">Poliklinik</h3>
              <div class="pull-right">
                 <a href="<?= site_url('Poliklinik/add')?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"> create new data</i></a>
              </div>
            </div>
            <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                <thead>
                <tr>
                  <td style="width:5%;">#NO</td>
                  <th>NAME POLIKLINIK</th>
                  <th>GEDUNG</th>
                  <th style="width:5%;">pilihan</th>
                </tr>
                    </thead>
                    <!--   <?php $no=1;
                     foreach ($row->result() as $key => $data) { ?>
                    <tr>
                    <td><?=$no++?></td>
                    <td><?=$data->name?></td>
                    <td><?=$data->gedung?></td>
                    <td>
                    <a href="<?=site_url('Poliklinik/edit/'.$data->poli_id)?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                       <a href="<?=site_url('Poliklinik/delete/'.$data->poli_id)?>" onclick="return confirm('yakin data kan di hapus')"  class="btn btn-warning btn-xs"><i class="fa fa-trash"></i></a></td>
                    </tr>
                 <?php } ?>  -->
              </table>
            </div>  
          </div>
    </section>




    <script>
 $(document).ready(function() {
        $('#table1').DataTable({
             "processing": true,
             "serverSide": true,
             "ajax": {

               "url": "<?=site_url('Poliklinik/get_ajax')?>",
               "type": "POST",
             },

             "columnDefs": [
              
               {
                 "targets": [3],
                 "orderable": false,
               },

             ]

        })
 }) 
</script>



  
    
   