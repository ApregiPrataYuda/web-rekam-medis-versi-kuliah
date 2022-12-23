<section class="content-header">
      <h1>
        Rekam medis
        <small> <?=$page?> form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Rekam medis </a></li>
        <li><a href="<?=site_url('Rekam_medis')?>">Rekam medis</a></li>
      </ol>
    </section>





 <section class="content">
  
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title"> <?=$page?> form Rekam medis</h4>
      <div class="pull-right">
      <a href="<?=site_url('Rekam_medis')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
          <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <?php echo form_open_multipart('Rekam_medis/proses')?>
             
         
          


              <div class="form-group">
              <input type="hidden" name="id" value="<?=$row->rm_id?>">
              <label style="color:blue;" for="kode_rekam">Kode Rekam*</label>
              <input type="number" name="kode_rekam" value="<?=$row->kode_rekam?>" class="form-control" placeholder="kode rekam" required>
              </div>

               <div class="form-group">
               <label style="color:blue;" for="pasien_id">nama Pasien*</label>
                <select name="pasien_id" id="pasien_id" class="form-control">
                <option value="">-pilih-</option>
                 <?php foreach ($Pasien->result() as $key => $data) { ?>
                        <option value="<?=$data->pasien_id?>"> <?=$data->name?></option>
                 <?php } ?>
                </select>
              </div>

               <div class="form-group">
               <label style="color:blue;" for="dokter_id">nama Dokter*</label>
                <select name="dokter_id" id="dokter_id" class="form-control">
                <option value="">-pilih-</option>
                  <?php foreach ($Dokter->result() as $key => $data) {  ?>
                        <option value="<?=$data->dokter_id?>"> <?=$data->name?></option>
                  <?php } ?>
                </select>
              </div>


              
              <div class="form-group">
              <label style="color:blue;" for="keluhan">Keluhan*</label>
                <textarea name="keluhan" id="keluhan" cols="30" rows="10"  class="form-control" placeholder="Keluhan Pasien"><?=$row->keluhan?></textarea>
              </div>

               <div class="form-group">
              <label style="color:blue;" for="diagnosa">Diagnosa*</label>
                <textarea name="diagnosa" id="diagnosa" cols="30" rows="10"  class="form-control" placeholder="Diagnosa Pasien"><?=$row->diagnosa?></textarea>
              </div>


                <div class="form-group">
               <label style="color:blue;" for="obat_id">obat*</label>
                <select name="obat_id" id="obat_id" class="form-control">
                <option value="">-pilih-</option>
                  <?php foreach ($Obat->result() as $key => $data) {  ?>
                        <option value="<?=$data->obat_id?>"> <?=$data->name?></option>
                  <?php } ?>
                </select>
              </div>


               <div class="form-group">
               <label style="color:blue;" for="poli_id">poliklinik*</label>
                <select name="poli_id" id="poli_id" class="form-control">
                <option value="">-pilih-</option>
                  <?php foreach ($Poliklinik->result() as $key => $data) {  ?>
                        <option value="<?=$data->poli_id?>"> <?=$data->name?></option>
                  <?php } ?>
                </select>
              </div>

              
              <div class="form-group">
              <label style="color:blue;" for="tanggal_periksa">Tanggal Periksa*</label>
              <input type="date" name="tanggal_periksa" value="<?=$row->tanggal_periksa?>" class="form-control"  required>
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
   
         


   
