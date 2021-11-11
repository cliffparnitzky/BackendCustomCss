
/* no_focus_on_autocomplete.js */

(function($) {
  window.addEvent('domready', function() {
    var init;

    init = function() {
      var edit = document.id('main').getElement('.tl_formbody_edit');

      if (edit) {
        var inputs = edit.getElements('input, textarea').filter(function(item) {
          return !item.get('autocomplete') && !item.get('disabled') && item.isVisible() && item.get('type') !== 'checkbox' && item.get('type') !== 'radio' && item.get('type') !== 'submit' && item.get('type') !== 'image';
        });

        if (inputs[0]) {
          inputs[0].focus();
        }
      };
    };

    // on document ready
    init();

    // after ajax manipulation
    window.addEvent('ajax_change', init);

  });
})(document.id);
