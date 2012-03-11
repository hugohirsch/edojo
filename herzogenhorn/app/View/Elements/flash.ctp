<?php 
/**
    Template to render the flash message if available.
*/

$flashMessage = $this->Session->flash(); 

if(!empty($flashMessage)) {
    echo "<span class=\"label label-success\">";
    echo $flashMessage;
    echo "</span>";
}
?>