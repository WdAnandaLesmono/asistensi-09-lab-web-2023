

function perpangkat(basis, pangkat) {
  let hasil = 1;

  for (let i = 1; i <= pangkat; i++) {
    hasil = hasil * basis;
  }

  return hasil;
}


let basis = -2;
let pangkat = -3;

console.log(`${basis}^${pangkat}: ${perpangkat(basis, pangkat)}`);
