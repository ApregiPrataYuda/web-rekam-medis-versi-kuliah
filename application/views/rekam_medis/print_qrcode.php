<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print data qr-code <?=$row->kode_rekam?></title>
</head>
<body>
           <img src="image/qrcode/"<?=$row->kode_rekam?> style="width:100px;"> 
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