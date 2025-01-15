// Function to check if a number is prime
function isPrime(number) {
    if (number <= 1) return false;
    for (let i = 2; i <= Math.sqrt(number); i++) {
        if (number % i === 0) return false;
    }
    return true;
}

// Get number from user and check if it's prime
let number = parseInt(prompt("Enter a number to check if it's prime:"));
if (isPrime(number)) {
    alert(number + " is a prime number");
} else {
    alert(number + " is not a prime number");
}

// Get day number from user
let day = parseInt(prompt("Enter a number (1-7) to get the day of the week:"));

// Switch statement to display day of the week
switch (day) {
    case 1:
        alert("Sunday");
        break;
    case 2:
        alert("Monday");
        break;
    case 3:
        alert("Tuesday");
        break;
    case 4:
        alert("Wednesday");
        break;
    case 5:
        alert("Thursday");
        break;
    case 6:
        alert("Friday");
        break;
    case 7:
        alert("Saturday");
        break;
    default:
        alert("Invalid day number! Please enter a number between 1 and 7.");
}