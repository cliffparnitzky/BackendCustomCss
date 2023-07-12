
/* template.js */

/* template */
(function($) {
  window.addEvent('domready', function() {
    var init;

    init = function(){
      // your code
    };

    // on document ready
    init();

    // after ajax manipulation
    window.addEvent('ajax_change', init);

  });
})(document.id);
