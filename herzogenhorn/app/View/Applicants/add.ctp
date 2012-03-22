<!-- File: /app/View/Applicants/add.ctp -->
<h1><?php echo __("applicants.add"); ?></h1>
<?php
/*
week VARCHAR(50), 
vorname VARCHAR(200), 
nachname VARCHAR(200), 
street VARCHAR(250), 
houseno VARCHAR(20),
plz VARCHAR(20), 
loc VARCHAR(250), 
email VARCHAR(250), 
birthdate DATE, 
grad VARCHAR(20),
gradingdate DATE,
twano VARCHAR(20),
room VARCHAR(20),
together1 VARCHAR(100),
together2 VARCHAR(100),
essen VARCHAR(20),
flexible BOOLEAN,
additionals VARCHAR(1024),
*/
echo $this->Form->create('Applicant', array("class" => "form-horizontal"));
?>
        <fieldset>
          <legend><?php __('seminar.choose'); ?></legend>
          <div class="control-group">
            <label class="control-label" for="week"><?php __('seminar.week'); ?></label>
            <div class="controls">
<?php 
        echo $this->Form->input('week', array("label" => false, "class"=>"input-xlarge",
            'options' => array('horn2012w1' => __("seminar.week1"), 'horn2012w2' => __("seminar.week2"))
        ));
?>
<p class="help-block"><?php __("seminar.choose.label"); ?></p>
            </div>
            </div>
        </fieldset>

        <fieldset>
          <legend><?php __("common.personaldata"); ?></legend>

          <div class="control-group">
            <?php /* via JS username will be printed in the login block */ ?>
            <label class="control-label" for="vorname"><?php __("firstname"); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('vorname', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php __("firstname.label"); ?></p>
            </div>
            


<?php 
/*
    see http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html

            <label class="control-label" for="vorname">Vorname</label>
            <div class="controls ">
              <input type="text" class="input-xlarge" id="vorname">
              <p class="help-block">Bitte Vornamen eingeben.</p>
            </div>
			 </div>


echo $this->Form->input('vorname');
echo $this->Form->input('nachname');
echo $this->Form->input('street');
echo $this->Form->input('houseno');
echo $this->Form->input('plz');
echo $this->Form->input('loc');
echo $this->Form->input('email');
echo $this->Form->input('birthdate');
echo $this->Form->input('grad');
echo $this->Form->input('gradingdate');
echo $this->Form->input('twano');
echo $this->Form->input('room');
echo $this->Form->input('together1');
echo $this->Form->input('together2');
echo $this->Form->input('essen');
echo $this->Form->input('flexible');
echo $this->Form->input('additionals');

*/
?>
          <div class="form-actions">
           <button type="submit" class="btn btn-primary" title="Anmeldung verbindlich machen" data-content="And here's some amazing content. It's very engaging. right?">Anmeldevorgang einleiten</button>
           <button type="reset" class="btn btn-danger" >Alle Eingaben löschen</button>
          </div>
        </fieldset>
      </form>   
<?php
/*
echo $this->Form->end(__("applicants.save"), array(
"div" => array(
        "class" => "form-actions"
    ),
"class" => "btn btn-primary",
"title" => "Anmeldung verbindlich machen",
"data-content" => "And here's some amazing content. It's very engaging. right?",
"class" => "btn btn-primary"));
/*
           <button type="submit" class="btn btn-primary" title="" data-content="">Anmeldevorgang einleiten</button>
           <button type="reset" class="btn btn-danger" >Alle Eingaben löschen</button>
*/
echo "\r\n";
/*
$options = array(
    'label' => 'Update',
    'value' => 'Update!',
    'div' => array(
        'class' => 'form-actions',
    )
);
echo $this->Form->end($options);
*/
?>
