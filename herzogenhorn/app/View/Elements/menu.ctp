
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo __("Herzogenhorn-Anmeldung"); ?></a>
          <div class="nav-collapse">
            <ul class="nav">
            <?php
            if(!empty($activeMenuButton)) {
             echo "<li class=\"active\"><a href=\"#\">".$activeMenuButton."</a></li>";
            } ?>
                <li <?php if(empty($activeMenuButton)) { echo "class=\"active\""; } ?>><?php echo $this->Html->link('<i class="icon-star"></i>'.__("Home") , array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?></li>
                <li><a href="#about"><?php echo __("About"); ?></a></li>
                <li><a href="#contact"><?php echo __("Contact"); ?></a></li>
                
                <li><?php echo $this->Html->link(__('applicant.form'),
array('controller' => 'applicants', 'action' => 'index' )); ?></li>
                <li><?php echo $this->Html->link(__("user.form"),
array('controller' => 'users', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__("user.logout"),
array('controller' => 'users', 'action' => 'logout')); ?></li>
                <li><?php echo "wwww:"; /*.$this->Auth->user('username');*/  ?></li>
            </ul>
            <p class="navbar-text pull-right" id="unameHead"><?php echo __("Logged in as"); ?> <a href="#"><i class="icon-user icon-white"></i> <?php if(!empty($activeUser)) { echo $activeUser; } else { echo __("guest"); } ?></a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>