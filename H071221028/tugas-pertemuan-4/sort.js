function sort(original) {
  const sorted = original;

  for (let i = 0; i < sorted.length; i++) {
    for (let j = 0; j < sorted.length - 1; j++) {
      if (sorted[j] > sorted[j + 1]) {
        let temp = sorted[j];
        sorted[j] = sorted[j + 1];
        sorted[j + 1] = temp;
      }
    }
  }

  return sorted;
}

let numbers = [50, 4, 34, 23, -22, 55, 30, 100, 56, 77];

console.log(sort(numbers));
