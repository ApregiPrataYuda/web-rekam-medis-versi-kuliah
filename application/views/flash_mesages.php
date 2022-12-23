                    
           <?php if ($this->session->has_userdata('messages')) { ?>   
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"> good</i></h4><?=$this->session->flashdata('messages')?>  
         </div>
           <?php } ?>



<?php if ($this->session->has_userdata('error')) { ?> 
<div class="alert alert-error alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> perhatian!</h4><?=$this->session->flashdata('error');?>
</div>
<?php } ?>