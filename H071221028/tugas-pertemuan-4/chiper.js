function chiperEncrypt(text, shift = 0) { //text: untuk simpan text yg mau di input, shift: untuk jumpah pergeseran karakter, 0 untuk default arraynya
  let chiperText = ""; // untuk menyimpan hasil enkripsi

  for (let i = 0; i < text.length; i++) {//i bakal jalan terus kalau i lebih kecil dari panjang text akan berhenti samoe index terakhir
    const char = text[i];// i akan di simpan di char 

    const isUpperCase = char === char.toUpperCase();// untuk periksa apakah char uppercase atau tdk

    const aCharCode = isUpperCase ? 65 : 97;// aCharCode untuk simpan variable A atau a, 65 itu A 97 itu a

    chiperText += String.fromCharCode(
      ((text.charCodeAt(i) - aCharCode + shift) % 26) + aCharCode
    );
  }

  return chiperText;
}

let text = "1Indonesia";

console.log(`${text} is encrypted to ${chiperEncrypt(text, 2)}`);
