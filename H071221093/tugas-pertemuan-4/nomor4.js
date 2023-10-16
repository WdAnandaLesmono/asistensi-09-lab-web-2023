let n = 5;
let arr = [5,7,4,-2,1];


for (let i = 0; i < n - 1; i++) {
    let minIndex = i;

    // Temukan indeks elemen terkecil dalam sisa array
    for (let j = i + 1; j < n; j++) {
        if (arr[j] < arr[minIndex]) {
            minIndex = j;
        }
    }

    // Tukar elemen terkecil dengan elemen saat ini (i)
    if (minIndex !== i) {
        const temp = arr[i];
        arr[i] = arr[minIndex];
        arr[minIndex] = temp;
    }
}

console.log(arr)
