<?php 
/**
    Template to render the flash message if available.
    Valid UI classes are:
    label-success
    label-info
    label-error
    label-warning
    label-important
*/

$flashMessage = $this->Session->flash("flash", array("params" => array("class" => "label label-important"))); 
if(!empty($flashMessage)) {
    //echo "<span class=\"label label-success\">";
    echo $flashMessage;
    //echo "</span>";
}
?>