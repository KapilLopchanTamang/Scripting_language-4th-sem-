
let number1 = parseFloat(prompt("Enter the first number:"));
let number2 = parseFloat(prompt("Enter the second number:"));


if (isNaN(number1) || isNaN(number2)) {
    console.log("Invalid input. Please enter valid numbers.");
} else {

    let sum = number1 + number2;
    let difference = number1 - number2;
    let product = number1 * number2;
    

    let quotient = number2 !== 0 ? number1 / number2 : "Cannot divide by zero";

    console.log(`Sum: ${sum}`);
    console.log(`Difference: ${difference}`);
    console.log(`Product: ${product}`);
    console.log(`Quotient: ${quotient}`);
}
