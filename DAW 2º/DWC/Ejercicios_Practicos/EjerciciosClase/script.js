//Ejercicio
set1 = new Set([1,2,3,4,5])
set2 = new Set([3,4,5,6])
const intersection = (set1, set2) => [...set1].filter((el)=>set2.has(el))
console.log(intersection)

