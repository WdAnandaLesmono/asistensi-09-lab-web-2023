function caesarCipher(text, shift) {
    let result = '';

    for (let i = 0; i < text.length; i++) {
        let char = text[i];
        if (/[a-zA-Z]/.test(char)) {
            const isUpperCase = char === char.toUpperCase();

            const charCode = char.charCodeAt(0);

            const shiftedCharCode = isUpperCase
                ? ((charCode - 65 + shift) % 26) + 65 // Huruf besar
                : ((charCode - 97 + shift) % 26) + 97; // Huruf kecil

            const shiftedChar = String.fromCharCode(shiftedCharCode);

            result += shiftedChar;
        } else {
            result += char;
        }
    }

    return result;
}

// Contoh penggunaan:
const plaintext = "2Halo";
const shiftValue = 2;
const ciphertext = caesarCipher(plaintext, shiftValue);
console.log("hasil:", ciphertext);
