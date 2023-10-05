function cipherTextEncrypt(text, shift) {
    let result = '';
  
    for (let i = 0; i < text.length; i++) {
      let char = text[i];
  
      if (/[a-zA-Z0-9]/.test(char)) {
        let isUpperCase = char == char.toUpperCase();
        let baseCharCode = isUpperCase ? 'A'.charCodeAt(0) : 'a'.charCodeAt(0);
        let charCode = char.charCodeAt(0);
        let encryptedCharCode = ((charCode - baseCharCode + shift) % 26) + baseCharCode;
  
        result += String.fromCharCode(encryptedCharCode);
      } else {
        result += char;
      }
    }
  
    return result;
}
  
  const text = "123apa";
  const shift = 2;
  const encryptedText = cipherTextEncrypt(text, shift);
  
  console.log(`Teks Asli : ${text}`);
  console.log(`Hasil : ${encryptedText}`);