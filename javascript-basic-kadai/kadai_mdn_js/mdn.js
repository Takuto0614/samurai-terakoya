
let today = new Date();

let year = today.getFullYear();
let month = today.getMonth() +1 ;
let date = today.getDate();

console.log('今は'+year+'年'+ month+'月'+ date +'日');

let hour = today.getHours();
let minute=today.getMinutes();
let second=today.getSeconds();

console.log(hour+'時'+ minute+'分'+ second +'秒'+'です');
