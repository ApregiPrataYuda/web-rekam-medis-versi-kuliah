<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print data barcode <?=$row->kode_rekam?></title>
</head>
<body>
      <label for="" style="color:blue;">barcode : </label>
          <?php
          $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
         echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->kode_rekam, $generator::TYPE_CODE_128)) . '">';
           ?>

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
</body>
</html>