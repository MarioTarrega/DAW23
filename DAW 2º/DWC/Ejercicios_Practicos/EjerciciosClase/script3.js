const r = (n) =>  n == 0 ? 1 : r(n-1)*n;
console.log(r(12))

const s =(n) => n == 0 ? 0 : r(n-1)+n;
console.log(s(5));

const f = (arr) =>  arr.length == 0 ? 0 : arr.shift()-2 + f(arr);
console.log(f([1,2,3,4]));