
/* toggle_all_pallets.js */

(function($) {
  window.addEvent('domready', function() {
    var init;

    init = function(){
      /** Toggle all palettes */
      if($$('.tl_formbody_edit > fieldset > legend')[0]) {
        var
          openAllButton   = new Element('a'),
          closeAllButton  = new Element('a'),
          targetElement   = $('tl_buttons'),
          openAll         = function(){},
          openAllText     = $$('html').get('lang') == 'de' ? 'Alle öffnen'    : 'Open all',
          closeAllText    = $$('html').get('lang') == 'de' ? 'Alle schließen' : 'Close all',
          allPalettes     = $$('.tl_formbody_edit > fieldset > legend'),
          openedPalettes  = null,
          closedPalettes  = null;

        openAllButton.set({
          class: 'header_toggle cbcss_open_all',
          text:  openAllText,
          href: '#'
        });

        closeAllButton.set({
          class: 'header_toggle cbcss_close_all',
          text:  closeAllText,
          href: '#'
        });

        closeAllButton.inject(targetElement, 'top');
        openAllButton.inject(targetElement, 'top');

        openAllButton.addEvent('click', function(ev){
          ev.stop();
          openedPalettes = $$('.tl_formbody_edit > .collapsed > legend');
          Array.each(openedPalettes, function(ele){
            ele.onclick();
            openAllButton.addClass('cbcss_inactive');
            closeAllButton.removeClass('cbcss_inactive');
          });
        });

        closeAllButton.addEvent('click', function(ev){
          ev.stop();
          closedPalettes = $$('.tl_formbody_edit > fieldset:not(.collapsed) > legend');
          Array.each(closedPalettes, function(ele){
            ele.onclick();
            closeAllButton.addClass('cbcss_inactive');
            openAllButton.removeClass('cbcss_inactive');
          });
        });

        // Hide the openAllButton if all palettes are open
        if($$('.tl_formbody_edit > .collapsed > legend').length == 0) {
          openAllButton.addClass('cbcss_inactive');
        }
        // Hide the closeAllButton if all palettes are closed
        if($$('.tl_formbody_edit > fieldset:not(.collapsed) > legend').length == 0) {
          closeAllButton.addClass('cbcss_inactive');
        }

        allPalettes.addEvent('click', function(){
          // If at least one palette is closed show openAllButton
          if($$('.tl_formbody_edit > .collapsed > legend').length > 0) {
            openAllButton.removeClass('cbcss_inactive');
          }
          else {
            openAllButton.addClass('cbcss_inactive');
          }
          // If at least one palette is opened show closeAllButton
          if($$('.tl_formbody_edit > fieldset:not(.collapsed) > legend').length > 0) {
            closeAllButton.removeClass('cbcss_inactive');
          }
          else {
            closeAllButton.addClass('cbcss_inactive');
          }
        });
      }
    };

    // on document ready
    init();

    // after ajax manipulation
    window.addEvent('ajax_change', init);

  });
})(document.id);
