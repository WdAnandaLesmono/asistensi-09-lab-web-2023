let text = "kodok";
let halfTextLength = Math.floor(text.length / 2);
let reversedTextIndex = text.length-1;
let isPalindrom = true;

for (let i = 0; i < halfTextLength; i++) {
    if (text[i] == text[reversedTextIndex]) {
        reversedTextIndex--;
        isPalindrom = true;
    } else {
        isPalindrom = false
    }
}

if (isPalindrom) {
    console.log("teks merupakan palindrom")
} else {
    console.log("teks bukan palindrom")
}