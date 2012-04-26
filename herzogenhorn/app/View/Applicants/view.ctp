<!-- File: /app/View/Applicants/view.ctp -->

<h1><?php echo h($applicant['Applicant']['vorname'])?>&nbsp;
<?php echo $applicant['Applicant']['nachname']?></h1>
<p><?php echo $applicant['Applicant']['week']?></p>
<p><?php echo $applicant['Applicant']['essen']?></p>

<p><small>Created: <?php echo $applicant['Applicant']['created']?></small></p>
