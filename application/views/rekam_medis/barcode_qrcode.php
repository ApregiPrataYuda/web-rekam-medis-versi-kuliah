<section class="content-header">
      <h1>
        Rekam medis
        <small> form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Rekam medis </a></li>
        <li><a href="<?=site_url('Rekam_medis')?>">Rekam medis</a></li>
      </ol>
    </section>





 <section class="content">
  
    <div class="box">
    <div class="box-header">
      <h4 style="color:blue;" class="box-title">Data Output</h4>
      <div class="pull-right">
      <a href="<?=site_url('Rekam_medis')?>" class="btn btn-danger btn-xs"><i class="fa fa-undo">back</i></a>
      </div>
    </div>
      <div class="box-body">
            
           <label for="" style="color:blue;">barcode : </label>
          <?php
          $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
         echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->kode_rekam, $generator::TYPE_CODE_128)) . '">';
           ?>

        <br>
        <br>
             <label for="" style="color:blue;"> QR-code :</label>
         <?php
          $qrCode = new Endroid\QrCode\QrCode($row->kode_rekam);
                 $qrCode->writeFile('image/qrcode/qr-'.$row->kode_rekam.'.png');
           ?>
           <img src="<?=base_url('image/qrcode/qr-'.$row->kode_rekam.'.png')?>" style="width:100px;"> 
           
            <br>
            <br>
            
            <label for="" style="color:blue;" >kode rekam : </label>
              <?=$row->kode_rekam?>
            
              <br>
              <label for="" style="color:blue;">nama pasien : </label>
            <?=$row->pasien_name?>
          
              <br>
               <label for="" style="color:blue;">nama Dokter : </label>
            <?=$row->dokter_name?>
              <br>
               <label for="" style="color:blue;">keluhan pasien : </label>
            <?=$row->keluhan?>
              <br>
               <label for="" style="color:blue;">Diagnosa: </label>
            <?=$row->diagnosa?>
              <br>
                <label for="" style="color:blue;">nama obat : </label>
            <?=$row->obat_name?>
              <br>
               <label for="" style="color:blue;">nama poliklinik : </label>
            <?=$row->poli_name?>
            <br>
             <label for="" style="color:blue;">tanggal periksa : </label>
            <?=$row->tanggal_periksa?>

  <br>
                   
                <div class="form-group">
                  <a href=" <?=site_url('Rekam_medis/print_data/'.$row->rm_id)?>" class="btn btn-primary"><i class="fa fa-print"> Print / Download data barcode</i></a>
                  <a href=" <?=site_url('Rekam_medis/print_qrcode/'.$row->rm_id)?>" class="btn btn-success"><i class="fa fa-print"> Print / Download data Qr-code</i></a>
                  <a href=" <?=site_url('Rekam_medis/print_data/'.$row->rm_id)?>" class="btn btn-warning"><i class="fa fa-file-word-o"> export to word</i></a>
                    <a href=" <?=site_url('Rekam_medis/print_data/'.$row->rm_id)?>" class="btn btn-danger"><i class="fa fa-file-excel-o""> export to excel</i></a>
                   
                   </div>
         
         </div>
    </section>
   
         


   
