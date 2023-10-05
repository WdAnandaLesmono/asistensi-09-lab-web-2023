let myArray = [];
let jumlahAngka = parseInt(prompt("Masukkan jumlah angka: "));

for (let i = 0; i < jumlahAngka; i++) {
    let num = parseInt(prompt("Masukkan angka ke-" + (i+1) + " : "));
    myArray.push(num);
}

for (let i = 0; i < myArray.length; i++) {
    for (let j = 0; j < myArray.length-i-1; j++) {
        if (myArray[j] > myArray[j+1]) {
            let temp = myArray[j];
            myArray[j] = myArray[j+1];
            myArray[j+1] = temp;
        }
    }
}
console.log("Angka yang telah diurutkan : " + myArray.join(" "));