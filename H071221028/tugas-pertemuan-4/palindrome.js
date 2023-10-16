function isPalindrome(text) {
  let length = text.length;

  for (let i = 0; i < Math.floor(length / 2); i++) {
    if (text[i] !== text[length - 1 - i]) {
      return false;
    }
  }

  return true;
}

console.log(isPalindrome("text"));
console.log(isPalindrome("kodok"));
console.log(isPalindrome("apa"));
console.log(isPalindrome("malam"));
console.log(isPalindrome("131"));
console.log(isPalindrome("123321"));
console.log(isPalindrome("123421"));
console.log(isPalindrome("kasur ini rusak"));
console.log(isPalindrome("rusak kali kasur"));
