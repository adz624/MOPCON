+(function (Token, $, window, undef) {

  'use strict';

  var API_URL = 'https://mopcon.webduino.cc/api';
  var store = window.localStorage;

  function ensureLoggedIn(successCallback) {
    var email = store.getItem('email'),
      password = store.getItem('password');

    if (!Token.isset()) {
      if (email && password) {
        login(successCallback);
      } else {
        getToken(successCallback);
      }
    } else {
      getUser(successCallback);
    }

    function login(success) {
      $.post({
        url: API_URL + '/users/login',
        data: {
          email: email,
          password: password
        },
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization", "Basic " + btoa(Token.getId()));
        },
      }, function (token) {
        Token.set(token);
        getUser(success);
      }).fail(function (err) {
        Token.unset();
        store.removeItem('email');
        store.removeItem('password');
        ensureLoggedIn.call(null, success);
      });
    }

    function getToken(success) {
      $.post({
        url: API_URL + '/token',
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization", "Basic " + btoa(Token.getId()));
        }
      }, function (token) {
        Token.set(token);
        getUser(success);
      }).fail(function (err) {
        Token.unset();
      });
    }

    function getUser(success) {
      var user;

      if (user = store.getItem('user')) {
        user = JSON.parse(user);
        if (user.emailVerified) {
          return success.call(null, user);
        }
      }

      $.get({
        url: API_URL + '/users/' + Token.getUserId(),
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization", "Basic " + btoa(Token.getId()));
        }
      }, function (user) {
        store.setItem('user', JSON.stringify(user));
        success.call(null, user);
      }).fail(function (err) {
        Token.unset();
        store.removeItem('user');
        ensureLoggedIn.call(null, success);
      });
    }
  }

  window.API_URL = API_URL;
  window.ensureLoggedIn = ensureLoggedIn;

}(Token, jQuery, window));