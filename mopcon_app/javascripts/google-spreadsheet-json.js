+(function (window, undef) {

  'use strict';

  function getSpreadsheetData(sheetId, worksheetId) {
    var url = 'https://spreadsheets.google.com/feeds/list/' + sheetId + '/' + (worksheetId || 1) + '/public/values?alt=json';

    return getJSON(url).then(function (data) {
      if (!(data.feed && data.feed.entry)) {
        throw new Error('Invalid Spreadsheet ID')
      }

      return data.feed.entry.map(function (entry) {
        return rowToObject(entry);
      });
    });
  }

  function getJSON(url) {
    var request = new XMLHttpRequest();

    return new window.Promise(function (resolve, reject) {
      request.open('GET', url, true);

      request.onload = function () {
        if (request.status >= 200 && request.status < 400) {
          try {
            var data = JSON.parse(request.responseText);
            resolve(data);
          } catch (e) {
            reject(e);
          }
        } else {
          reject(new Error(request.statusText));
        }
      };

      request.onerror = function () {
        reject(new Error('Connection Error'));
      };

      request.send();
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

}(window));