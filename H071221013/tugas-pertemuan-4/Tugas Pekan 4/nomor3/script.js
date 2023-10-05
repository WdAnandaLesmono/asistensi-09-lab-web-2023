function isPalindrome(str) {
  // Menghapus karakter non-alphanumeric dan mengubah ke huruf kecil
  str = str.replace(/[^0-9a-z]/gi, '').toLowerCase();

  // Mengecek string sama jika dibalik
  return str === str.split('').reverse().join('');  // array karakter
}

const input = prompt('Masukkan sebuah kata: ');

// Mengecek apakah input merupakan palindrom
if (isPalindrome(input)) {
  const hasil = isPalindrome(input)
  alert(`${input} adalah palindrom!: ${hasil}`);
} else {
  alert(`${input} bukan palindrom.`);
}