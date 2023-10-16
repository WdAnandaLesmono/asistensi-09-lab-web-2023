// no3
function isPalindrome(kata) {
    //mengubah semua karakter menjadi huruf kecil. Ini dilakukan untuk mengabaikan 
    //perbedaan huruf besar-kecil dan karakter non-alphanumeric dalam pengecekan palindrom.
    kata = kata.toLowerCase().replace(/[^a-zA-Z0-9]/g, "");
    //mengambil kata yang telah diubah menjadi huruf kecil dan tanpa karakter non-alphanumeric, kemudian membalik urutan
    const reversedKata = kata.split("").reverse().join("");
    return kata === reversedKata;
  }

  const inputKata = prompt("Masukkan kata untuk memeriksa apakah itu palindrom:");

  if (inputKata) {
    const hasilPemeriksaan = isPalindrome(inputKata);
    console.log(`"${inputKata}" adalah palindrom: ${hasilPemeriksaan}`);
  } else {
    console.log("Masukan tidak valid. Mohon masukkan kata yang valid.");
  }