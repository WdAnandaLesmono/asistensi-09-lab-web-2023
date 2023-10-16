let haikal = parseInt(prompt("Masukkan angka"));

let hasil = ""
while (haikal >= 1) {
    if (haikal % 2 == 1) {
        hasil = "1" + hasil
        haikal = (haikal-1)/2
    } else {
        hasil = "0" + hasil
        haikal /= 2
    }
}

console.log(hasil);