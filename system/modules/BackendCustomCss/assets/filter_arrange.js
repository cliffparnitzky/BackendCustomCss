
/* filter_arrange.js */

/* template */
(function($) {
  window.addEvent('domready', function() {
    var
      init,
      filterPanel = $$('.tl_panel.cf'),
      filter1Class = 'cbcss_filter_1 cbcss_filter',
      filter2Class = 'cbcss_filter_2 cbcss_filter'
    ;

    init = function(){
      // add classes
      if(filterPanel.length === 1) {
        filterPanel[0].addClass(filter2Class);
      }
      if(filterPanel.length > 1) {
        filterPanel[0].addClass(filter1Class);
        filterPanel[1].addClass(filter2Class);
      }
    };

    // on document ready
    init();

    // after ajax manipulation
    window.addEvent('ajax_change', init);

  });
})(document.id);
