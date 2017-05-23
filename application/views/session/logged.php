<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
 <a href="<?php echo base_url("adminlogin/logout")?>">Logout</a>
    <?php if  ($this->session->userdata['login']="Esther")
        {
            ?>
        <div class="row">
            <div class="col-xs-12">
               <h1>Interface Admin , Bienvenue <?php echo  $this->session->userdata['login']; ?> ! </h1>
            </div>
        </div>

        .row>.col-xs-3*3>.
        <?php }?>