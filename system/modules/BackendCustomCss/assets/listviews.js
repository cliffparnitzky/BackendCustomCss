
/* listviews.js */

(function($) {
  window.addEvent('domready', function() {

    // format article listview
    var
      init,
      myCssIds,
      oldText,
      arrNewText,
      newText
    ;
    init = function(){
      myCssIds = $$('.article_cssId');
      // Split CssId into an object
      myCssIds.each(function(item){
        oldText = item.get('text');
        if(oldText && oldText.length >= 29){
          newText = '';
          arrNewText = (oldText.slice(0, 2) == 'a:') ? unserialize(oldText) : oldText;
          if(arrNewText[0]){
            newText += '<span class="article_id" title="CSS-ID">'  + arrNewText[0] + ' </span>';
          }
          if(arrNewText[1]){
            newText += '<span class="article_css" title="CSS-Class">' + arrNewText[1] + '</span>';
          }
          item.set('html', newText);
        }
        else{
          item.dispose();
        }
      });
    };

    // on document ready
    init();

    // after ajax manipulation
    window.addEvent('ajax_change', init);



    // format page treeview layout sticker
    styleLayoutPicker = function(){
      var layoutSticker = $$('.page_layout:not(:empty):not([data-l=""])') || false;

      if(layoutSticker){
        var stringToColour = function(str) {
          var hash = 0;
          for (var i = 0; i < str.length; i++) {
            hash = str.charCodeAt(i) + ((hash << 5) - hash);
          }
          var colour = '#';
          for (var i = 0; i < 3; i++) {
            var value = (hash >> (i * 8)) & 0xFF;
            colour += ('00' + value.toString(16)).substr(-2);
          }
          return colour;
        }

        Array.each(layoutSticker, function(item){
          item.addClass('has_layout');
          var bgColor = new Color (stringToColour(item.get('text')));
          var brightness = Math.sqrt((.299 * Math.pow(bgColor[0], 2)) + (.587 * Math.pow(bgColor[1], 2)) + (.114 * Math.pow(bgColor[2], 2)));
          var color = brightness > 190 ? '#000' : '#fff';
          item.setStyles({
            'background-color': bgColor,
            color: color
          });
        });
      }
    }
    styleLayoutPicker();
    window.addEvent('ajax_change', styleLayoutPicker);

  });
})(document.id);



// Class from phpjs.org
function unserialize(data) {
  //  discuss at: http://phpjs.org/functions/unserialize/
  // original by: Arpad Ray (mailto:arpad@php.net)
  // improved by: Pedro Tainha (http://www.pedrotainha.com)
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // improved by: Chris
  // improved by: James
  // improved by: Le Torbi
  // improved by: Eli Skeggs
  // bugfixed by: dptr1988
  // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // bugfixed by: Brett Zamir (http://brett-zamir.me)
  //  revised by: d3x
  //    input by: Brett Zamir (http://brett-zamir.me)
  //    input by: Martin (http://www.erlenwiese.de/)
  //    input by: kilops
  //    input by: Jaroslaw Czarniak
  //        note: We feel the main purpose of this function should be to ease the transport of data between php & js
  //        note: Aiming for PHP-compatibility, we have to translate objects to arrays
  //   example 1: unserialize('a:3:{i:0;s:5:"Kevin";i:1;s:3:"van";i:2;s:9:"Zonneveld";}');
  //   returns 1: ['Kevin', 'van', 'Zonneveld']
  //   example 2: unserialize('a:3:{s:9:"firstName";s:5:"Kevin";s:7:"midName";s:3:"van";s:7:"surName";s:9:"Zonneveld";}');
  //   returns 2: {firstName: 'Kevin', midName: 'van', surName: 'Zonneveld'}

  var that = this,
    utf8Overhead = function (chr) {
      // http://phpjs.org/functions/unserialize:571#comment_95906
      var code = chr.charCodeAt(0);
      if (code < 0x0080) {
        return 0;
      }
      if (code < 0x0800) {
        return 1;
      }
      return 2;
    };
  error = function (type, msg, filename, line) {
    throw new that.window[type](msg, filename, line);
  };
  read_until = function (data, offset, stopchr) {
    var i = 2,
      buf = [],
      chr = data.slice(offset, offset + 1);

    while (chr != stopchr) {
      if ((i + offset) > data.length) {
        error('Error', 'Invalid');
      }
      buf.push(chr);
      chr = data.slice(offset + (i - 1), offset + i);
      i += 1;
    }
    return [buf.length, buf.join('')];
  };
  read_chrs = function (data, offset, length) {
    var i, chr, buf;

    buf = [];
    for (i = 0; i < length; i++) {
      chr = data.slice(offset + (i - 1), offset + i);
      buf.push(chr);
      length -= utf8Overhead(chr);
    }
    return [buf.length, buf.join('')];
  };
  _unserialize = function (data, offset) {
    var dtype, dataoffset, keyandchrs, keys, contig,
      length, array, readdata, readData, ccount,
      stringlength, i, key, kprops, kchrs, vprops,
      vchrs, value, chrs = 0,
      typeconvert = function (x) {
        return x;
      };

    if (!offset) {
      offset = 0;
    }
    dtype = (data.slice(offset, offset + 1))
      .toLowerCase();

    dataoffset = offset + 2;

    switch (dtype) {
    case 'i':
      typeconvert = function (x) {
        return parseInt(x, 10);
      };
      readData = read_until(data, dataoffset, ';');
      chrs = readData[0];
      readdata = readData[1];
      dataoffset += chrs + 1;
      break;
    case 'b':
      typeconvert = function (x) {
        return parseInt(x, 10) !== 0;
      };
      readData = read_until(data, dataoffset, ';');
      chrs = readData[0];
      readdata = readData[1];
      dataoffset += chrs + 1;
      break;
    case 'd':
      typeconvert = function (x) {
        return parseFloat(x);
      };
      readData = read_until(data, dataoffset, ';');
      chrs = readData[0];
      readdata = readData[1];
      dataoffset += chrs + 1;
      break;
    case 'n':
      readdata = null;
      break;
    case 's':
      ccount = read_until(data, dataoffset, ':');
      chrs = ccount[0];
      stringlength = ccount[1];
      dataoffset += chrs + 2;

      readData = read_chrs(data, dataoffset + 1, parseInt(stringlength, 10));
      chrs = readData[0];
      readdata = readData[1];
      dataoffset += chrs + 2;
      if (chrs != parseInt(stringlength, 10) && chrs != readdata.length) {
        error('SyntaxError', 'String length mismatch');
      }
      break;
    case 'a':
      readdata = {};

      keyandchrs = read_until(data, dataoffset, ':');
      chrs = keyandchrs[0];
      keys = keyandchrs[1];
      dataoffset += chrs + 2;

      length = parseInt(keys, 10);
      contig = true;

      for (i = 0; i < length; i++) {
        kprops = _unserialize(data, dataoffset);
        kchrs = kprops[1];
        key = kprops[2];
        dataoffset += kchrs;

        vprops = _unserialize(data, dataoffset);
        vchrs = vprops[1];
        value = vprops[2];
        dataoffset += vchrs;

        if (key !== i)
          contig = false;

        readdata[key] = value;
      }

      if (contig) {
        array = new Array(length);
        for (i = 0; i < length; i++)
          array[i] = readdata[i];
        readdata = array;
      }

      dataoffset += 1;
      break;
    default:
      error('SyntaxError', 'Unknown / Unhandled data type(s): ' + dtype);
      break;
    }
    return [dtype, dataoffset - offset, typeconvert(readdata)];
  };

  return _unserialize((data + ''), 0)[2];
}
