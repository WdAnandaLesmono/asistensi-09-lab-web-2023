// NO 1 
function hitungPangkat(angka, pangkat) {
    if (pangkat === 0) {
        return 1;
    }

    let hasil = 1;
    for (let i = 1; i <= pangkat; i++) {
        hasil *= angka;
    }

    return hasil;
}

const angka = parseInt(prompt("masukkan angka : "));
const pangkat = parseInt(prompt("masukkan pangkat : "));
const hasil = hitungPangkat(angka, pangkat);
console.log(angka + "^" + pangkat + "=" + hasil);


















