//crea un custom alert box
function alertBox() {
  alert("hello world");
}
//how to show date today in js?

const date = new Date();
const day = date.getDate();
const month = date.getMonth() + 1;
const year = date.getFullYear();
const today = `${day}/${month}/${year}`;
console.log(today);
