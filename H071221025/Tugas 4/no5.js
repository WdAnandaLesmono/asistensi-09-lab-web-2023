// NO5
let decimal = parseInt(prompt("Masukkan angka desimal: "));
let binary = ""; // Membuat sebuah string kosong binary yang akan menyimpan angka biner
while (decimal > 0) { //perulangan yang akan berjalan selama decimal masih lebih besar dari 0.
    binary = (decimal % 2) + binary; // Mengambil sisa hasil bagi decimal dengan 2 (0 atau 1) dan menambahkannya ke awal string binary.
    decimal = Math.floor(decimal / 2); //Mengubah nilai decimal dengan hasil pembagian bulat (tanpa desimal) dari decimal dibagi 2
}
console.log("Angka binary: " + binary);