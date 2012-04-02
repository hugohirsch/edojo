<!-- File: /app/View/Applicants/add.ctp -->
<h1><?php echo __("applicants.add"); ?></h1>
<?php
/*
    see http://book.cakephp.org/2.0/en/core-libraries/helpers/form.html

Database Structure is:

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
          <legend><?php echo __('seminar.choose'); ?></legend>
          <div class="control-group">
            <label class="control-label" for="ApplicantWeek"><?php echo __('seminar.week'); ?></label>
            <div class="controls">
<?php 
        echo $this->Form->input('week', array("label" => false, "class"=>"input-xlarge",
            'options' => array('horn2012w1' => __("seminar.week1"), 'horn2012w2' => __("seminar.week2"))
        ));
?>
<p class="help-block"><?php echo __('seminar.choose.label'); ?></p>
            </div>
            </div>
        </fieldset>

        <fieldset>
          <legend><?php echo __('common.personaldata'); ?></legend>

          <div class="control-group">
            <?php /* via JS username will be printed in the login block */ ?>
            <label class="control-label" for="ApplicantVorname"><?php echo __('firstname'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('vorname', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('firstname.label'); ?></p>
            </div>
           </div>
            

          <div class="control-group">
            <label class="control-label" for="ApplicantNachname"><?php echo __('lastname'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('nachname', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('lastname.label'); ?></p>
            </div>
           </div>
            
          <div class="control-group">
            <label class="control-label" for="ApplicantStreet"><?php echo __('street'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('street', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('street.label'); ?></p>
            </div>
           </div>
            
          <div class="control-group">
            <label class="control-label" for="ApplicantHouseno"><?php echo __('houseno'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('houseno', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('houseno.label'); ?></p>
            </div>
           </div>
            
          <div class="control-group">
            <label class="control-label" for="ApplicantPlz"><?php echo __('plz'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('plz', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('plz.label'); ?></p>
            </div>
           </div>
            
          <div class="control-group">
            <label class="control-label" for="ApplicantLoc"><?php echo __('loc'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('loc', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('loc.label'); ?></p>
            </div>
           </div>

          <div class="control-group">
            <label class="control-label" for="ApplicantDojo"><?php echo __('dojo'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('dojo', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('dojo.label'); ?></p>
            </div>
           </div>

          <div class="control-group">
            <label class="control-label" for="ApplicantEmail"><?php echo __('email'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('email', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('email.label'); ?></p>
            </div>
           </div>
            
          <div class="control-group">
            <label class="control-label" for="ApplicantBirthdateYear"><?php echo __('birthdate'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('birthdate', array(
    "label" => false,
    'dateFormat' => 'YMD', 
    'minYear' => date('Y') - 90, 
    'maxYear' => date('Y')
    )
);
?>
            <p class="help-block"><?php echo __('birthdate.label'); ?></p>
            </div>
           </div>

          <div class="control-group">
            <label class="control-label" for="ApplicantGrad"><?php echo __('grad'); ?></label>
            <div class="controls">
<?php 
        echo $this->Form->input('grad', array("label" => false, "class"=>"input",
            'options' => array(
                '5kyu' => __("kyu5"), 
                '4kyu' => __("kyu4"),
                '3kyu' => __("kyu3"),
                '2kyu' => __("kyu2"),
                '1kyu' => __("kyu1"),
                '1dan' => __("dan1"),
                '2dan' => __("dan2"),
                '3dan' => __("dan3"),
                '4dan' => __("dan4"),
                '5dan' => __("dan5"),
                '6dan' => __("dan6")
            ) // end of options
        ));
?>
<p class="help-block"><?php echo __("grad.label"); ?></p>
            </div>
            </div>

          <div class="control-group">
            <label class="control-label" for="ApplicantGradingdateYear"><?php echo __('gradingdate'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('gradingdate', array(
    "label" => false,
    'dateFormat' => 'YMD', 
    'minYear' => date('Y') - 90, 
    'maxYear' => date('Y')
    )
);
?>
            <p class="help-block"><?php echo __('gradingdate.label'); ?></p>
            </div>
           </div>
            
          <div class="control-group">
            <label class="control-label" for="ApplicantTwano"><?php echo __('twano'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('twano', array(
    "label" => false,
    "class" => "input-xlarge"
));
?>
            <p class="help-block"><?php echo __('twano.label'); ?></p>
            </div>
           </div>
        </fieldset>

        <fieldset>
          <legend><?php echo __('accomodation.data'); ?></legend>
          <div class="control-group">
            <label class="control-label" for="ApplicantRoom"><?php echo __('room'); ?></label>
            <div class="controls ">
<?php
/*
            <select id="room">
                <option >2-Bett Zimmer Dusche und WC</option>
                <option value="together22" selected>3-Bett Zimmer Dusche und WC</option>
              </select>
*/
echo $this->Form->input('room', array(
    "label" => false,
    "class" => false,
    'default' => '',
                'options' => array(
                    'together22' => __("room.3bed"),
                    '' => __("room.2bed"),
                ) 
));
?>
            <p class="help-block"><?php echo __('room.label'); ?></p>
            </div>
           </div>

          <div class="control-group">
            <label class="control-label" for="ApplicantTogether1"><?php echo __('room.together.label'); ?></label>
            <div class="controls ">
<?php
echo $this->Form->input('together1', array(
    "label" => false,
    "class" => "input-xlarge",
));
?>
            <p class="help-block"><?php echo __('room.together.label1'); ?></p>
            </div>
            
            <div class="controls " id="together22">
<?php
echo $this->Form->input('together2', array(
    "label" => false,
    "class" => "input-xlarge",
));
?>
            <p class="help-block"><?php echo __('room.together.label2'); ?></p>
            </div>

		 </div>

          <div class="control-group">
            <label class="control-label"><?php echo __('essen'); ?></label>
            <div class="controls">
<!--
            <label class="radio">
                <input type="radio" name="essen" id="meat" value="meat" checked>
                normale Kost (mit Fleisch)
              </label>
              <label class="radio">
                <input type="radio" name="essen" id="veg" value="veg">
                vegetarische Kost (ohne Fleisch)
              </label>
-->
<?php 
        echo $this->Form->input('essen', array("label" => array("class"=>"radio"),
            'legend' 	=> false,
            'type' => 'radio',
             'default' => 'meat',
            'options' => array(
                'meat' => __("essen.meat"), 
                'veg' => __("essen.veg")
            )
        ));
?>
            </div>
          </div>

          <div class="control-group">
            <label class="control-label"><?php echo __('flexible'); ?></label>
            <div class="controls">
<!--
<label class="radio">
                <input type="radio" name="flexible" id="no" value="no" checked>
                Ich kann nur in dieser Woche am Lehrgang teilnehmen.
              </label>
              <label class="radio">
                <input type="radio" name="flexible" id="yes" value="yes">
                Ich bin flexibel, <strong>falls</strong> diese Woche überbucht ist.
              </label>
-->
<?php 
        echo $this->Form->input('flexible', array("label" => array("class"=>"radio"),
            'type' => 'radio',
            'legend' 	=> false,            
            'default' => 'no',
            'options' => array('no' => __("flexible.no"), 'yes' => __("flexible.yes"))
        ));
?>
        </div>
          </div>

        <div class="control-group">
            <label class="control-label" for="ApplicantAdditionals"><?php echo __('additionals'); ?></label>
            <div class="controls">
<?php
echo $this->Form->input('additionals', array(
    "label" => false,
    "class" => "input-xlarge",
    "rows" => "13"
));
?>
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
