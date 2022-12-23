<section class="content-header">
      <h1>
     Dokter
        <small><?=$page?> form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Dokter </a></li>
        <li><a href="<?=site_url('Dokter')?>">Dokter</a></li>
      </ol>
    </section>





 <section class="content">
  
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"> Dokter</h4>
      <div class="pull-right">
      <a href="<?=site_url('Dokter')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <?php echo form_open_multipart('Dokter/proses')?>
             
         
              <div class="form-group">
              <label style="color:blue;" for="name">name*</label>
              <input type="text" name="name" value="<?=$row->name?>" class="form-control" placeholder="name Dokter" required>
              </div>

               <div class="form-group">
              <input type="hidden" name="id" value="<?=$row->dokter_id?>" >
              <label style="color:blue;" for="spesialis">spesialis*</label>
              <input type="text" name="spesialis" value="<?=$row->spesialis?>" class="form-control" placeholder="spesialis" required>
              </div>


              
               <div class="form-group">
              <label style="color:blue;" for="alamat">alamat*</label>
               <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="alamat saat ini" class="form-control"><?=$row->alamat?></textarea>
              </div>


              <div class="form-group">
              <label style="color:blue;" for="no_telp">no telepon*</label>
              <input type="text" name="no_telp" value="<?=$row->no_telp?>" class="form-control" placeholder="no telp" required>
              </div>


              <div class="form-group">
              <label style="color:blue;" for="image">image*</label>
               <?php if ($page == 'edit') {
                     if ($row->image != null) { ?>
                           <div style="margin-bottom:4px;">
                                 <img src="<?= site_url('image/dokter/'.$row->image)?>" style="width:100px;" >
                           </div>
                         <?php
                     }
               } ?>
              <input type="file"  name="image" class="form-control">
                <small  style="color:yellow;">(biarkan kosong jika image tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
              </div>
         
 

               

               <div class="form-group">
                  <button type="submit"  name="<?=$page?>" class="btn btn-primary"><i class="fa fa-paper-plane"></i> <?=$page?></button>
                   <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i> reset</button>
               </div>
          <?php echo form_close() ?>
          </div>
          </div>
            </div>  
         </div>
    </section>
   
         


   
