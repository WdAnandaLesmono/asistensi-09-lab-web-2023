let decimal = parseInt(prompt("Masukkan Angka : "));
let binary = "";

while (decimal > 0) {  //terus berjalan
  binary = (decimal % 2) + binary;
  decimal =Math.floor(decimal / 2);
}

alert(binary) 