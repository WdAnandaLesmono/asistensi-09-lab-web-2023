function isPalindrome(word) {
    word = word.toLowerCase().replace(/ /g, '');
  
    for (let i = 0; i < Math.floor(word.length / 2); i++) {
      if (word[i] !== word[word.length - 1 - i]) {
        return false;
      }
    }
    return true;
}
  
  const kata = "123";
  if (isPalindrome(kata)) {
    console.log(`"${kata}" adalah kata palindrom.`);
  } else {
    console.log(`"${kata}" bukan kata palindrom.`);
  }