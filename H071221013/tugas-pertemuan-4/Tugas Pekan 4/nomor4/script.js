let list = prompt("Masukkan angka").split(" ").map((str) => parseInt(str))

for (let i in list) {
  for (let j = 0; j < list.length; j++) {
    if (list[j] > list[j + 1]) {
      let temporary = list[j] //pertukaran 
      list[j] = list[j + 1]
      list[j + 1] = temporary
    }
  }
}

alert(list)