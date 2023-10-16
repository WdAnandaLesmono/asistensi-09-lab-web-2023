let angka = parseInt(prompt("Masukkan angka : "));
let binary = "";

while (angka > 0) {
    binary = (angka % 2) + binary;
    angka = Math.floor(angka / 2);
}
console.log("Angka biner: " + binary);