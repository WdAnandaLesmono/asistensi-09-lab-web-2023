let decimalNumber = 0;

if (decimalNumber === 0) {
    console.log('0');
}


let binary = '';
while (decimalNumber >= 0) {
    const remainder = decimalNumber % 2;
    binary = remainder + binary;
    decimalNumber = Math.floor(decimalNumber / 2);
}

console.log(binary)