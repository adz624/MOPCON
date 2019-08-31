/**
 * 新增 cookie 方法
 *
 * @param  {String} name cookie 索引名稱
 * @param  {String} value cookie 值
 */
export const setCookie = (name, value) => {
  document.cookie = `${name}=${value}`;
};

/**
 * client side 取得 cookie 方法
 *
 * @param  {String} name cookie 索引名稱
 * @return {String} 回傳 cookie value
 */
export const getCookie = name => {
  var value = '; ' + document.cookie;
  var parts = value.split('; ' + name + '=');
  if (parts.length == 2)
    return parts
      .pop()
      .split(';')
      .shift();
};

/**
 * 刪除 cookie 方法
 *
 * @param  {String} name cookie 索引名稱
 */
export const removeCookie = name => {
  console.log('removeCookie', name);
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
};
