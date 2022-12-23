<section class="content-header">
      <h1>
       Obat
        <small><?=$page?> form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Obat </a></li>
        <li><a href="<?=site_url('Obat')?>">Obat</a></li>
      </ol>
    </section>





 <section class="content">
  
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title">Obat</h4>
      <div class="pull-right">
      <a href="<?=site_url('Obat')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <?php echo form_open_multipart('Obat/proses')?>
             
         
          


              <div class="form-group">
              <input type="hidden" name="id" value="<?=$row->obat_id?>">
              <label style="color:blue;" for="name">name*</label>
              <input type="text" name="name" value="<?=$row->name?>" class="form-control" placeholder="name Obat" required>
              </div>

                <div class="form-group">
              <label style="color:blue;" for="keterangan">keterangan*</label>
               <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"><?=$row->keterangan?></textarea>
              </div>


             
    
               <div class="form-group">
                  <button type="submit"  name="<?=$page?>" class="btn btn-primary"><i class="fa fa-paper-plane"></i> <?=$page?></button>
                   <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> reset</button>
               </>
          <?php echo form_close() ?>
          </div>
          </div>
            </div>  
         </div>
    </section>
   
         


   
