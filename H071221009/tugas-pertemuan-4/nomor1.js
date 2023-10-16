function pangkat(angka, pangkat) {
  let hasil = 1;

  for (let i = 0; i < pangkat; i++) {
    hasil *= angka;
  }

  return hasil;
}

const angka1 = parseInt(prompt("Masukkan angka :"));
const angka2 = parseInt(prompt("Masukkan pangkat :"));

if (!isNaN(angka1) && !isNaN(angka2)) {
  const hasilPangkat = pangkat(angka1, angka2);
  console.log(`Hasil pangkat dari ${angka1} pangkat ${angka2} adalah ${hasilPangkat}`);
} else {
  console.log("Inputan tidak valid. Harap masukkan angka.");
}