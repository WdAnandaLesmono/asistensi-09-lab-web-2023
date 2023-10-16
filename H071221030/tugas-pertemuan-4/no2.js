let kata = prompt("Masukkan kata : ");
let n = parseInt(prompt("Masukkan n : "));
let haikal = "abcdefghijklmnopqrstuvwxyz";

let isCapital = false;
let awalan = kata[0];
if (awalan == awalan.toUpperCase()) {
  isCapital = true;
}

kata = kata.toLowerCase();
hasil = "";
for (let i = 0; i < kata.length; i++) {
  let index = haikal.indexOf(kata[i]);
  index = (index + n) % haikal.length;
  hasil += haikal[index];
  if (i == 0 && isCapital == true) {
    hasil = hasil.toUpperCase();
  }
}

console.log(hasil);