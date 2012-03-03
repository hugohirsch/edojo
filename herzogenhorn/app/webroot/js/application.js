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

