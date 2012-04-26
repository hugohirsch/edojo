          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><?php echo __("Sidebar");?></li>
              <li <?php if(empty($activeMenuButton)) { echo "class=\"active\""; } ?>><?php echo $this->Html->link('<i class="icon-home"></i>'.__("Home") , array('controller' => 'applicants', 'action' => 'index'), array('escape' => false)); ?></li>
              <li><a href="http://www.tendoryu-aikido.org" target="_blank"><i class="icon-pencil"></i><?php echo __("Tendoryu Landesverbund Berlin");?></a></li>
              <li><a href="http://www.kaishinkan.de" target="_blank"><i class="icon-star"></i><?php echo __("KaiShinKan");?></a></li>
              <li><a href="http://www.php.net/manual/en/" target="_blank"><i class="icon-book"></i><?php echo __("PHP");?></a></li>
              <li><a href="http://www.tendo-world-aikido.de/static/attachments/Aussschreibung-Herzogenhorn-2012.pdf" target="_blank"><i class="icon-flag"></i><?php echo __("PDF-Ausschreibung");?></a></li>
            <li><img src="http://lorempixel.com/110/68/animals/" alt="picture of the day"></li>
            </ul>
          </div><!--/.well -->
