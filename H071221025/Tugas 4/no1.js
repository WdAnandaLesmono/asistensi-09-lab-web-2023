// NO1
function hitungPangkat(angka, pangkat) { //fungsi yang menghitung pangkat dari suatu angka
    let hasil = 1;
    for (let i = 0; i < pangkat; i++) {
      hasil *= angka;
    }
    return hasil;
  }
    const inputAngka = parseFloat(prompt("Masukkan angka:"));
    const inputPangkat = parseInt(prompt("Masukkan pangkat:"));
  
    if (!isNaN(inputAngka) && !isNaN(inputPangkat)) {
      const hasilPangkat = hitungPangkat(inputAngka, inputPangkat);
      console.log(`${inputAngka} pangkat ${inputPangkat} = ${hasilPangkat}`);
    } else {
      console.log("Masukan tidak valid. Mohon masukkan angka yang valid.");
    }