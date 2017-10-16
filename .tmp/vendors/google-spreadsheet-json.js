+(function ($, window, undef) {

  'use strict';

  function getSpreadsheetData(sheetId, callback) {
    var url = 'https://spreadsheets.google.com/feeds/list/' + sheetId + '/od6/public/values?alt=json';

    $.getJSON(url, function (data) {
      if (!(data.feed && data.feed.entry)) {
        return callback('Invalid Spreadsheet ID')
      }

      callback(null, data.feed.entry.map(function (entry) {
        return rowToObject(entry);
      }));
    }).fail(function (err) {
      callback(err);
    });
  }

  function rowToObject(cell) {
    var obj = {};
    var properties = Object.getOwnPropertyNames(cell);

    // sorting is important for catching numbered properties below
    // name sure the un-numbered name is first
    properties.sort();

    properties.forEach(function (key) {
      var val = cell[key].$t;

      // don't bother with empty values
      // which also means properties will not be set for empty values!
      if (val === '') return;

      if (key.substring(0, 4) === 'gsx$') {
        var name = key.substr(4);

        // the only tricky thing is to turn the property value into an array
        // if the property name has variations that end in a number
        // Address, Address1, Address2... etc.
        var num = name.charAt(name.length - 1);
        if (/^\d+$/.test(num)) { // indexed propery
          name = name.substr(0, name.length - 1);
          var arr = obj[name];

          // if arr is not an array, but exists its the unnumbered value: ex. Address
          // replace its position with an array and push it in first
          if (!Array.isArray(arr)) {
            obj[name] = [];
            if (arr) obj[name].push(arr);
          }

          obj[name].push(val);
        } else obj[name] = val; // the basic case for a name/value pair
      }
    });

    return obj;
  }

  window.getSpreadsheetData = getSpreadsheetData;

}(jQuery, window));