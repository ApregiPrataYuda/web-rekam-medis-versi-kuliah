<section class="content-header">
      <h1>
        Pasien
        <small><?=$page?> form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Pasien </a></li>
        <li><a href="<?=site_url('Pasien')?>">Pasien</a></li>
      </ol>
    </section>





 <section class="content">
  
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"> Pasien</h4>
      <div class="pull-right">
      <a href="<?=site_url('Pasien')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <?php echo form_open_multipart('Pasien/proses')?>
             
         
           <div class="form-group">
              <input type="hidden" name="id" value="<?=$row->pasien_id?>">
              <label style="color:blue;" for="no_identitas">no identitas*</label>
              <input type="text" name="no_identitas" value="<?=$row->no_identitas?>" class="form-control" placeholder=" no identitas" required>
              </div>


              <div class="form-group">
              <label style="color:blue;" for="name">name*</label>
              <input type="text" name="name" value="<?=$row->name?>" class="form-control" placeholder="name Pasien" required>
              </div>

              
             <div class="form-group">
              <label style="color:blue;" for="jenis_kelamin">jenis kelamin*</label>
                <select name="jenis_kelamin" id="jenis_kelamin"  class="form-control">
                <option value="">-pilih-</option>
                <option value="L"  <?=$row->jenis_kelamin == 'L' ? 'selected' : '' ?> >L</option>
                <option value="P" <?=$row->jenis_kelamin == 'P' ? 'selected' : '' ?>  >P</option>
                </select>
              </div>
 

              <div class="form-group">
              <label style="color:blue;" for="address">address*</label>
              <textarea name="address" id="address" cols="30" rows="10" class="form-control"><?=$row->address?></textarea>
              </div>

              <div class="form-group">
              <label style="color:blue;" for="no_telp">no telp*</label>
              <input type="number" name="no_telp" value="<?=$row->no_telp?>" class="form-control" placeholder=" no telepon" required>
              </div>


              <div class="form-group">
              <label style="color:blue;" for="image">image</label>
               <?php if ($page == 'edit') { 
                   if ($row->image != null) { ?>
                       <div style="margin-bottom:4px;">
                       <img src="<?=site_url('image/pasien/'.$row->image)?>" style="width:100px;"></td>
                       </div>

                   <?php 
                   }
                  
               } ?>
               <input type="file" id="image" name="image" class="form-control" >
                <small style="color:yellow;">(biarkan kosong jika image tidak <?= $page == 'edit' ? 'diganti' : 'ada' ?>)</small>
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
   
         


   
