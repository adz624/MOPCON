+(function (localStorage, window, undef) {

  'use strict';

  var id;
  var userId;

  if (isset()) {
    update();
  }

  function update() {
    id = localStorage.getItem('access_token');
    userId = localStorage.getItem('userId');
  }

  function get() {
    return isset() ? {
      id: id,
      userId: userId
    } : undef;
  }

  function getId() {
    return id;
  }

  function getUserId() {
    return userId;
  }

  function set(tokObj, expires) {
    localStorage.setItem('access_token', tokObj.id || null);
    localStorage.setItem('userId', tokObj.userId || null);
    update();
  }

  function unset() {
    localStorage.removeItem('access_token');
    localStorage.removeItem('userId');
  }

  function isset() {
    return localStorage.getItem('access_token') && localStorage.getItem('userId');
  }

  window.Token = {
    get: get,
    getId: getId,
    getUserId: getUserId,
    set: set,
    unset: unset,
    isset: isset
  };

}(localStorage, window));