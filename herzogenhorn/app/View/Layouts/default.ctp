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
          
<form class="form-horizontal">
        <fieldset>
          <legend><?php echo __("Lehrgangsauswahl"); ?></legend>
          <div class="control-group">
            <label class="control-label" for="week">Welche Woche?</label>
            <div class="controls">
              <select id="week">
                <option value="w1">1.Woche - ab Sa, 2012-06-17</option>
                <option value="w2">2.Woche - ab Sa, 2012-06-24</option>
              </select>
              <p class="help-block">Bitte die gewünschte Lehrgangswoche festlegen.</p>
            </div>
			 </div>
			</fieldset>

        <fieldset>
          <legend>Persönliche Daten</legend>
<!-- class="error" hinzufügen bei Fehlern -->
          <div class="control-group">
            <?php /* via JS username will be printed in the login block */ ?>
            <label class="control-label" for="vorname">Vorname</label>
            <div class="controls ">
              <input type="text" class="input-xlarge" id="vorname">
              <p class="help-block">Bitte Vornamen eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="nachname">Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="nachname">
              <p class="help-block">Bitte Name eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="street">Straße</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="street">
              <p class="help-block">Bitte Straße eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="houseno">Nr.</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="houseno">
              <p class="help-block">Bitte Hausnummer komplett eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="plz">PLZ</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="plz">
              <p class="help-block">Bitte Postleitzahl eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="loc">Ort</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="loc">
              <p class="help-block">Bitte Ort eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="email">E-Mail</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="email">
              <p class="help-block">Bitte E-Mail-Adresse für Bestätigungen eingeben.</p>
            </div>
			 </div>
          <div class="control-group">
            <label class="control-label" for="g_day">Geburtsdatum</label>
            <div class="controls">
              <select id="g_day">
                <option value="">Tag</option>
                <?php
for ($i = 1; $i <= 31; $i++) {
    echo "<option>".$i."</option>";
}
?>
              </select>
              <select id="g_month">
                <option value="">Monat</option>
                <?php
                /** TODO add i18n here 
                // prints something like: 2000-07-01T00:00:00+00:00
                echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));                
                */
                date_default_timezone_set('UTC');
for ($i = 1; $i <= 12; $i++) {
    echo "<option>".date("F", mktime(0, 0, 0, $i, 1, 2012))."</option>";
}
?>
              </select>
              <input type="text" class="input-xlarge" id="g_year">
              <p class="help-block">Bitte das Geburtsjahr 4stellig eingeben.</p>
            </div>
			 </div>

          <div class="control-group">
            <label class="control-label" for="grad">Graduierung</label>
            <div class="controls">
              <select id="grad">
                <option>1.Kyu</option>
                <option>1.Dan</option>
              </select>
              <p class="help-block">Bitte die aktuelle Graduierung auswählen.</p>
            </div>
            <label class="control-label" for="gsince_month">Graduiert seit</label>
            <div class="controls">
              <select id="gsince_month">
                <option value="">Monat</option>
                <?php
                /** TODO add i18n here 
                // prints something like: 2000-07-01T00:00:00+00:00
                echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));                
                */
                date_default_timezone_set('UTC');
for ($i = 1; $i <= 12; $i++) {
    echo "<option>".date("F", mktime(0, 0, 0, $i, 1, 2012))."</option>";
}
?>
              </select>
              <input type="text" class="input-xlarge" id="gsince_year">
              <p class="help-block">Bitte angeben, seit wann die aktuelle Graduierung besteht.</p>
            </div>
			 </div>

          <div class="control-group">
            <label class="control-label" for="twano">Mitgliedsnummer (twa)</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="twano">
              <p class="help-block">Bitte die komplette twa-Mitgliedsnummer angeben (z.B. DE-0815) insofern vorhanden.</p>
            </div>
			 </div>
			 </fieldset>
         <fieldset>
          <legend>Daten zur Unterkunft</legend>
<!-- hier Felder ausblenden für Zimertyp/Zusammenlegungswunsch -->
          <div class="control-group">
            <label class="control-label" for="room">Zimmertyp</label>
            <div class="controls">
              <select id="room">
                <option >2-Bett Zimmer Dusche und WC</option>
                <option value="together2" selected>3-Bett Zimmer Dusche und WC</option>
              </select>
              <p class="help-block">Bitte die Zimmerkategorie festlegen.</p>
            </div>
			 </div>


          <div class="control-group">
            <label class="control-label" for="together1">Zusammenlegungswunsch</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="together1">
              <p class="help-block">Mit wem soll das Zimmer geteilt werden - Person 1</p>
            </div>
            <div id="together2" class="controls">
              <input type="text" class="input-xlarge">
              <p class="help-block">Mit wem soll das Zimmer geteilt werden - Person 2.</p>
            </div>
			 </div>

          <div class="control-group">
            <label class="control-label">Essenswunsch</label>
            <div class="controls">
              <label class="radio">
                <input type="radio" name="optionsEssen" id="meat" value="meat" checked>
                normale Kost (mit Fleisch)
              </label>
              <label class="radio">
                <input type="radio" name="optionsEssen" id="veg" value="veg">
                vegetarische Kost (ohne Fleisch)
              </label>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label">Kann ich im Fall einer Überbuchung in die andere Woch ausweichen?</label>
            <div class="controls">
              <label class="radio">
                <input type="radio" name="optionsFlexible" id="no" value="no" checked>
                Ich kann nur in dieser Woche am Lehrgang teilnehmen.
              </label>
              <label class="radio">
                <input type="radio" name="optionsFlexible" id="yes" value="yes">
                Ich bin flexibel, <strong>falls</strong> diese Woche überbucht ist.
              </label>
            </div>
          </div>
          
          <div class="control-group">
            <label class="control-label" for="textarea">Bemerkungen / Wünsche</label>
            <div class="controls">
              <textarea class="input-xlarge" id="textarea" rows="13"></textarea>
            </div>
          </div>
          <div class="form-actions">
           <button type="submit" class="btn btn-primary" title="Anmeldung verbindlich machen" data-content="And here's some amazing content. It's very engaging. right?">Anmeldevorgang einleiten</button>
           <button type="reset" class="btn btn-danger" >Alle Eingaben löschen</button>
          </div>
        </fieldset>
      </form>     

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
