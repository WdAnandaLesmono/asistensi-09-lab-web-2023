function isPalindrome(word) {
    const cleanedWord = word.toLowerCase().replace(/\s/g, '');
    const reversedWord = cleanedWord.split('').reverse().join('');
    return cleanedWord === reversedWord;
    }
const word = prompt("Masukkan kata : ");
console.log("'" + word + "' adalah palindrom = " + isPalindrome(word));
