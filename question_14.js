// Function to convert string to uppercase
function convertToUpperCase(str) {
    return str.toUpperCase();
}

// Function to find maximum number in array
function findMaxNumber(arr) {
    if (!Array.isArray(arr) || arr.length === 0) {
        return null;
    }
    return Math.max(...arr);
}

// Example usage:
console.log(convertToUpperCase("hello world")); // HELLO WORLD
console.log(findMaxNumber([5, 2, 9, 1, 7])); // 9