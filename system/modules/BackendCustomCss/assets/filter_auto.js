
/* filter_auto.js */

(function($) {
  window.addEvent('domready', function() {
    var init;

    init = function(){
      $$('.tl_filter select, .tl_sorting select, .tl_search select').addEvent('change', function() {
        if(this.get('name') == 'tl_field' && this.getNext('input').get('value').length == 0) {
          return false;
        }
        this.form.submit();
      });
    };

    // on document ready
    init();

    // after ajax manipulation
    window.addEvent('ajax_change', init);

  });
})(document.id);
