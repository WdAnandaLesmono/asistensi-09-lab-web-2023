// N04 
function sortNumber(numbers) {
    for (let i = 0; i < numbers.length; i++) {
        for (let j = 0; j < numbers.length - i - 1; j++) {
            if (numbers[j] > numbers[j + 1]) {
                let temp = numbers[j];
                numbers[j] = numbers[j + 1];
                numbers[j + 1] = temp;
            }
        }
    }
    return numbers;
}


const inputNumbers = [50, 20, 1, 45, 3, 4,5];

const sortedNumbers = sortNumber(inputNumbers.slice()); 
console.log("Angka sebelum diurutkan : " + inputNumbers.join(', '));
console.log("Angka setelah diurutkan : " + sortedNumbers.join(', '));
