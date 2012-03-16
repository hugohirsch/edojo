<!DOCTYPE html>
<html lang="en">
  <head>
  <?php echo $this->Html->charset(); ?>
    <title><?php echo __('welcome.title'); ?></title>
    <meta name="description" content="">
    <meta name="author" content="root" >
<meta name="robots" content="noindex,nofollow,noarchive">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <?php
    		echo $this->Html->meta('icon')."\r\n";
    		echo $this->Html->css('bootstrap')."\r\n";
    		echo $this->Html->css('herzogenhorn')."\r\n";
    		echo $this->Html->css('bootstrap-responsive')."\r\n";

                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->fetch('script');

    ?>
    
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link href="img/favicon.ico" rel="icon" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
  </head>

  <body>
<?php echo $this->element('menu'); ?>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
        <?php echo $this->element('sidebar'); ?>
        </div><!--/span-->
        <div class="span9">

            <div class="hero-unit">
            <h1>Begrüßungstexte</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-large">Anmeldung hier &raquo;</a></p>
            </div><!-- .hero-unit -->

            <?php echo $this->element('flash'); ?>
						
			<?php echo $content_for_layout; ?>


<?php
/*
          <div class="row-fluid">
            <div class="span4">

 <h2>Example hover popover - wie geht Aktivierung mit JS?</h2>
          <p>Hover over the button to trigger the popover.</p>
          <div class="well">
            <a href="#" class="btn btn-danger" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">hover for popover</a>
          </div>
          
<div class="tabs">
<div class="btn-group" data-toggle="buttons-radio">
  <button class="btn">Left</button>
  <button class="btn">Middle</button>
  <button class="btn">Right</button>
</div>
</div>
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->
*/
?>
      <hr>

	<!-- render footer in here -->
	<?php echo $this->element('footer'); ?>
    </div><!--/.fluid-container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <?php
    		echo $this->Html->script('bootstrap-min')."\r\n";
    		echo $this->Html->script('bootstrap-button')."\r\n";
    		echo $this->Html->script('bootstrap-tooltip')."\r\n";
            echo $this->Html->script('bootstrap-popover')."\r\n";
            echo $this->Html->script('application')."\r\n";

            echo $this->fetch('script');
    ?>
  </body>
</html>
