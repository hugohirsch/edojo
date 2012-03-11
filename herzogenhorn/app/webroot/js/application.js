    // popover - auslagern in application.js
    $('a[rel=popover]')
      .popover()
      .click(function(e) {
        e.preventDefault()
      })

        // aktiviere Buttons
        $('.tabs').button();

        $(function(){
            var $visible = $([]);
            $('#room').change(function(){
                $visible.hide();
                $visible = $('#' + this.value);
                $visible.show();
            }).change();
        });

// on focusLost change username
function adaptUserNameFromForm() {
 document.getElementById("unameHead").innerHTML = document.getElementById("vorname").innerHTML;
} // end of func

// blur ginge auch
// change current user name if not logged in
var $sourceVorname = $('#vorname');
var $sourceNachname = $('#nachname');
$sourceNachname.focusout(function() {
$("#unameHead").html($sourceVorname.val() + " " + $sourceNachname.val());
});
