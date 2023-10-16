const inputAngka = parseFloat(prompt("Masukkan angka:"));
const inputEksponen = parseInt(prompt("Masukkan eksponen:"));  //pesan

if (!isNaN(inputAngka) && !isNaN(inputEksponen)) {
    const hasilEksponen = hitungEksponen(inputAngka, inputEksponen);  // hasil eksp
    alert(`${inputAngka} ** ${inputEksponen} = ${hasilEksponen}`);
} else {
    // console.log("invalid");
    alert("invalid") 
}

function hitungEksponen(angka, eksponen) {
    let hasil = 1;  //nilai awal
    for (let i = 0; i < eksponen; i++) {       // perulangan trs berjalan
        hasil *= angka;
    }
    return hasil;
}
