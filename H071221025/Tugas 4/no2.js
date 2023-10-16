// No2
// Fungsi ini digunakan untuk mengenkripsi teks dengan menggunakan algoritma Caesar Cipher.
function cipherTextEncrypt(text, shift) {
    let result = "";
    for (let i = 0; i < text.length; i++) { //perulangan yang akan mengiterasi melalui setiap karakter dalam teks yang akan dienkripsi.
        let charCode = text.charCodeAt(i); //Mengambil kode ASCII dari karakter
        if (charCode >= 65 && charCode <= 90) { //Memeriksa apakah karakter saat ini adalah huruf besar (ASCII 65-90). Jika iya, maka karakter ini akan dienkripsi.
            result += String.fromCharCode((charCode - 65 + shift) % 26 + 65);
            // Mengenkripsi karakter huruf besar dengan menggeser kode ASCII sesuai dengan jumlah pergeseran 
            //dan memastikan pergeseran tetap dalam rentang huruf besar (65-90).
        } else if (charCode >= 97 && charCode <= 122) { // Memeriksa apakah karakter saat ini adalah huruf kecil (ASCII 97-122). 
            result += String.fromCharCode((charCode - 97 + shift) % 26 + 97);
        } else {
            result += text.charAt(i);
        }
    }
    return result;
}

let text = prompt("Masukkan teks yang ingin dienkripsi: ");
let shift = parseInt(prompt("Masukkan jumlah pergeseran: "));
let encryptedText = cipherTextEncrypt(text, shift);
console.log("Teks yang telah dienkripsi: " + encryptedText);
