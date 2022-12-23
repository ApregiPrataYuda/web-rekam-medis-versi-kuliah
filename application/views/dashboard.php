
      
               
 <section class="content-header">
      <h1>
        Dashboard
        <small>control panel</small>
      </h1>
      
      <ol class="breadcrumb">
         <?php 
       date_default_timezone_set("asia/jakarta");
         $b=time();
         $hour = date("G",$b);
          if($hour>=0 && $hour<=11){
                  echo"|-----(Selamat pagi)-";
          }

           elseif ($hour>=12 && $hour<=14) {
                     echo"|-----(Selamat siang)-";
                
           }

               elseif ($hour>=15 && $hour<=17) {
                    echo"|-----(Selamat sore)-";
                
           }
                elseif ($hour>=17 && $hour<=18) {
                    echo"|-----(Selamat senja)-";
                
           }
                elseif ($hour>=19 && $hour<=23) {
                   echo"|-----(Selamat malam)-";
                
           }

           
          $date = date('(Y-m-d, H-i-s)----|'); 
            echo  "$date";
       
       ?>
     
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li><a href="<?=site_url('Dashboard')?>">dashboard</a></li>
      </ol>
    </section>

   
    <section class="content">
       <div class="row">
         <div class="col-md-3 col-sm-12 col-xs-12">
           <div class="info-box">
             <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
             <div class="info-box-content">
               <span class="info-box-text">pasien</span>
               <span class="info-box-number"><?=$this->fungsi->count_pasien()?></span>
                 <?php if ($this->session->userdata('level') == 1 ) { ?>
                <a href="<?=site_url('pasien')?>">selengkapnya</a>
                <?php } ?>
             </div>
           </div>
         </div>
      


         <div class="col-md-3 col-sm-12 col-xs-12">
           <div class="info-box">
             <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>
             <div class="info-box-content">
               <span class="info-box-text">Dokter</span>
               <span class="info-box-number"><?=$this->fungsi->count_dokter()?></span>
                 <?php if ($this->session->userdata('level') == 1 ) { ?>
                <a href="<?=site_url('Dokter')?>">selengkapnya</a>
                   <?php } ?>
             </div>
           </div>
         </div>
      

             <div class="col-md-3 col-sm-12 col-xs-12">
           <div class="info-box">
             <span class="info-box-icon bg-aqua"><i class="fa fa-medkit"></i></span>
             <div class="info-box-content">
               <span class="info-box-text">Rekam medis</span>
               <span class="info-box-number"><?=$this->fungsi->count_Rekam_medis()?></span>
                 <?php if ($this->session->userdata('level') == 1 ) { ?>
                <a href="<?=site_url('Rekam_medis')?>">selengkapnya</a>
                  <?php } ?>
             </div>
           </div>
         </div>


          <div class="col-md-3 col-sm-12 col-xs-12">
           <div class="info-box">
             <span class="info-box-icon bg-aqua"><i class="fa fa-hospital-o"></i></span>
             <div class="info-box-content">
               <span class="info-box-text">Data Poliklinik</span>
               <span class="info-box-number"><?=$this->fungsi->count_poliklinik()?></span>
                 <?php if ($this->session->userdata('level') == 1 ) { ?>
                <a href="<?=site_url('Poliklinik')?>">selengkapnya</a>
                 <?php } ?>
             </div>
           </div>
         </div>

       
       
      
    
       </div> 
    </section>



           