document.cookie = "test1=ja";
document.cookie = "test2=nee";

const cookieValue = document.cookie
  .split('; ')
  .find(row => row.startsWith('test1'))
  .split('=')[1];

function alertCookieValue() {
  alert(cookieValue);
}