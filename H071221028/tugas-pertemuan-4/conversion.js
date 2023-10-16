function biner(angka) {
  let binary = "";

  while (angka > 0) {
    binary = String(angka % 2) + binary;
    angka = Math.floor(angka / 2);
  }

  return binary;
}

console.log(biner(14));
console.log(biner(31));
console.log(biner(32));
console.log(biner(42));

