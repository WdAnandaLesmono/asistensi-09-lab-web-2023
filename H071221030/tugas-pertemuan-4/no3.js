let haikal = prompt("Masukkan kata : ")

haikal = haikal.toUpperCase()

let hasil = ""
let temp = ""
for (let i = haikal.length - 1; i >= 0; i--) {
  hasil += haikal[i]
}

if (haikal == hasil) {
  console.log("Kata tersebut adalah palindrom");
} else {
  console.log("Kata tersebut bukan palindrom");
}